<?php declare(strict_types=1);

namespace Denal05\MacademyM2CodingKickstartBlog\Controller\Adminhtml\Post;

use Denal05\MacademyM2CodingKickstartBlog\Model\Post;
use Denal05\MacademyM2CodingKickstartBlog\Model\PostFactory;
use Denal05\MacademyM2CodingKickstartBlog\Model\ResourceModel\Post as PostResource;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\View\Result\Redirect;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;

class Delete extends Action implements HttpGetActionInterface
{
    const ADMIN_RESOURCE = 'Denal05_MacademyM2CodingKickstartBlog::post_delete';

    /** @var PostFactory */
    protected $postFactory;

    /** @var PostResource */
    protected $postResource;

    /**
     * @param Context $context
     * @param PostFactory $postFactory
     * @param PostResource $postResource
     */
    public function __construct(
        Context $context,
        PostFactory $postFactory,
        PostResource $postResource,
    )
    {
        $this->postFactory = $postFactory;
        $this->postResource = $postResource;
        parent::__construct($context);
    }

    public function execute(): Redirect
    {
        try {
            $id = $this->getRequest()->getParam('id');

            /** @var Post $post */
            $post = $this->postFactory->create();

            $this->postResource->load($post, $id);

            if ($post->getId()) {
                $this->postResource->delete($post);
                $this->messageManager->addSuccessMessage(__('The post with id %1 has been deleted.', $id));
            } else {
                $this->messageManager->addErrorMessage(__('A post with id %1 does not exist.', $id));
            }
        } catch(\Exception $e) {
            $this->messageManager->addErrorMessage(__($e->getMessage()));
        }

        /** @var Redirect $redirect */
        $redirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);

        // The path is: 'macademym2codingkickstartblog/post'
        return $redirect->setPath('*/*');
    }
}
