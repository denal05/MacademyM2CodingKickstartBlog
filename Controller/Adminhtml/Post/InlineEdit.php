<?php declare(strict_types=1);

namespace Denal05\MacademyM2CodingKickstartBlog\Controller\Adminhtml\Post;

use Denal05\MacademyM2CodingKickstartBlog\Model\Post;
use Denal05\MacademyM2CodingKickstartBlog\Model\PostFactory;
use Denal05\MacademyM2CodingKickstartBlog\Model\ResourceModel\Post as PostResource;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;

class InlineEdit extends Action implements HttpPostActionInterface
{
    const ADMIN_RESOURCE = 'Denal05_MacademyM2CodingKickstartBlog::post_save';

    /** @var JsonFactory */
    protected $jsonFactory;

    /** @var PostFactory */
    protected $postFactory;

    /** @var PostResource */
    protected $postResource;

    /**
     * @param Context $context
     * @param JsonFactory $jsonFactory
     * @param PostFactory $postFactory
     * @param PostResource $postResource
     */
    public function __construct(
        Context $context,
        JsonFactory $jsonFactory,
        PostFactory $postFactory,
        PostResource $postResource,
    ) {
        parent::__construct($context);
        $this->jsonFactory = $jsonFactory;
        $this->postFactory = $postFactory;
        $this->postResource = $postResource;
    }

    public function execute()
    {
        $json = $this->jsonFactory->create();
        $messages = [];
        $error = false;
        $isAjax = $this->getRequest()->getParam('isAjax', false);
        $items = $this->getRequest()->getParam('items', []);

        if (!$isAjax || !count($items)) {
            $messages[] = __('This request was either not via AJAX, or no items were passed to it. Please correct the sent data.');
            $error = true;
        }

        if (!$error) {
            foreach ($items as $item) {
                $id = $item['id'];

                try {
                    /** @var Post $post */
                    $post = $this->postFactory->create();

                    $this->postResource->load($post, $id);

                    $post->setData(
                        array_merge(
                            $post->getData(),
                            $item
                        )
                    );

                    $this->postResource->save($post);
                } catch (\Exception $e) {
                    $messages = __("Something went wrong while saving item $id: ") .
                                $e->getMessage();
                    $error = true;
                }
            }
        }

        return $json->setData([
            'messages' => $messages,
            'error' => $error,
        ]);
    }
}
