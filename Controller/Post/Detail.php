<?php declare(strict_types=1);

namespace Denal05\MacademyM2CodingKickstartBlog\Controller\Post;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class Detail implements HttpGetActionInterface
{
    public function __construct(
        private PageFactory $pageFactory,
        private RequestInterface $request,
    ) {}

    public function execute(): Page
    {
//        echo "<pre>";
//        var_dump($this->request->getParams());
//        echo "</pre>";
        return $this->pageFactory->create();
    }
}
