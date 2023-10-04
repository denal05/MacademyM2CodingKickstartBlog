<?php declare(strict_types=1);

namespace Denal05\MacademyM2CodingKickstartBlog\Controller\Post;

use Magento\Framework\App\Action\HttpGetActionInterface;

class ListAction implements HttpGetActionInterface
{
    public function execute()
    {
        die('/blog/post/list');
    }
}
