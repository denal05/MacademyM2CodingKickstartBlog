<?php declare(strict_types=1);

namespace Denal05\MacademyM2CodingKickstartBlog\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        parent::_construct();
        $this->_init(
            \Denal05\MacademyM2CodingKickstartBlog\Model\Post::class,
            \Denal05\MacademyM2CodingKickstartBlog\Model\ResourceModel\Post::class
        );
    }
}
