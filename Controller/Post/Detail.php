<?php declare(strict_types=1);

namespace Denal05\MacademyM2CodingKickstartBlog\Controller\Post;

use Magento\Framework\App\Action\HttpGetActionInterface;

class Detail implements HttpGetActionInterface
{
    public function execute()
    {
        die('/blog/post/detail');
    }
}
