<?php declare(strict_types=1);

namespace Denal05\MacademyM2CodingKickstartBlog\Controller\Adminhtml\Post;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpPostActionInterface;

class Save extends Action implements HttpPostActionInterface
{
    const ADMIN_RESOURCE = 'Denal05_MacademyM2CodingKickstartBlog::post_save';

    public function execute()
    {
        // Get the POST data
        $post = $this->getRequest()->getPost();
        echo '<pre>';
        var_dump($post);
        die();

        // Determine if new or existing record

        // If new, create a new obj with the posted data to save it

        // If existing, load data from db and merge with posted data
        // If not found, throw an exception, display msg to user and redir back

        // Save data and tell user it's saved
        // If problem saving data, display error msg

        // On success, redir back to admin grid
    }
}
