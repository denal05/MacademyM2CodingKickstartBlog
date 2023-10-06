<?php declare(strict_types=1);

namespace Denal05\MacademyM2CodingKickstartBlog\Model;

use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel
{
    protected function _construct()
    {
        parent::_construct();
        $this->_init(ResourceModel\Post::class);
    }

}
