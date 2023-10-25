<?php declare(strict_types=1);

namespace Denal05\MacademyM2CodingKickstartBlog\Controller\Adminhtml\Post;

use Denal05\MacademyM2CodingKickstartBlog\Model\Post;
use Denal05\MacademyM2CodingKickstartBlog\Model\PostFactory;
use Denal05\MacademyM2CodingKickstartBlog\Model\ResourceModel\Post as PostResource;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\View\Result\Redirect;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Exception\NotFoundException;

class Save extends Action implements HttpPostActionInterface
{
    const ADMIN_RESOURCE = 'Denal05_MacademyM2CodingKickstartBlog::post_save';

    /** @var PostFactory */
    private $postFactory;

    /** @var PostResource */
    private $postResource;

    /**
     * @param Context $context
     * @param PostFactory $postFactory
     * @param PostResource $postResource
     */
    public function __construct(
        Context $context,
        PostFactory $postFactory,
        PostResource $postResource
    ) {
        $this->postFactory = $postFactory;
        $this->postResource = $postResource;
        parent::__construct($context);
    }

    /**
     * @return Redirect
     */
    public function execute(): Redirect
    {
        $requestPost = $this->getRequest()->getPost();
        $isExistingPost = $requestPost->id;
        /** @var Post $blogPost */
        $blogPost = $this->postFactory->create();
        $redirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);

        if ($isExistingPost) {
            try {
                $this->postResource->load($blogPost, $requestPost->id);
                if (!$blogPost->getData('id')) {
                    throw new NotFoundException(__('This record doesn\'t exist'));
                }
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
                return $redirect->setPath('*/*/');
            }
        } else {
            // If it's not an existing request post, ensure the ID is not found so that it's forced to be auto-generated:
            unset($requestPost->id);

            // The $blogPost-setData(...) immediately below is redundant because
            // the $blogPost->setData(array_merge(...) further below will accomplish the same thing
            // in case $blogPost->getData() is an empty array due to a newly created object.
            $blogPost->setData($requestPost->toArray());
        }

        $blogPost->setData(array_merge($blogPost->getData(), $requestPost->toArray()));

        try {
            $this->postResource->save($blogPost);
            $this->messageManager->addSuccessMessage(__('The record has been saved.'));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__('There was a problem saving the record: ' . $e->getMessage()));
            return $redirect->setPath('*/*/');
        }

        return $redirect->setPath('*/*/');
    }
}
