<?php declare(strict_types=1);

namespace Denal05\MacademyM2CodingKickstartBlog\Controller\Adminhtml\Post;

use Denal05\MacademyM2CodingKickstartBlog\Model\ResourceModel\Post\CollectionFactory;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\View\Result\Redirect;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Ui\Component\MassAction\Filter;

class MassDelete extends Action implements HttpPostActionInterface
{
    const ADMIN_RESOURCE = 'Denal05_MacademyM2CodingKickstartBlog::post_delete';

    /** @var CollectionFactory\ */
    protected $collectionFactory;

    /** @var Filter */
    protected $filter;

    public function __construct(
        Context $context,
        CollectionFactory $collectionFactory,
        Filter $filter,
    ) {
        parent::__construct($context);
        $this->collectionFactory = $collectionFactory;
        $this->filter = $filter;
    }

    public function execute(): Redirect
    {
        $postCollection = $this->collectionFactory->create();
        $items = $this->filter->getCollection($postCollection);
        $itemsSize = $items->getSize();

        foreach ($items as $item) {
            $item->delete();
        }

        $message = '';
        if ($itemsSize == 1) {
            $message = 'A total of %1 record was deleted.';
        } elseif ($itemsSize > 1) {
            $message = 'A total of %1 records were deleted.';
        } elseif ($itemsSize == 0) {
            $message = 'No records were deleted.';
        } else {
            $message = 'Something strange happened while attempting to delete records.';
        }
        $this->messageManager->addSuccessMessage(__($message, $itemsSize));

        /** @var Redirect $redirect */
        $redirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        return $redirect->setPath('*/*');
    }
}
