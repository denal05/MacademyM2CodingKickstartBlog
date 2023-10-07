<?php declare(strict_types=1);

namespace Denal05\MacademyM2CodingKickstartBlog\Controller\Post;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Event\ManagerInterface as EventManager;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class Detail implements HttpGetActionInterface
{
    public function __construct(
        private PageFactory $pageFactory,
        private RequestInterface $request,
        private EventManager $eventManager,
    ) {}

    public function execute(): Page
    {
        $this->eventManager->dispatch(
            'denal05_macademym2codingkickstartblog_controller_post_detail_view', [
                'request' => $this->request,
        ]);

        return $this->pageFactory->create();
    }
}
