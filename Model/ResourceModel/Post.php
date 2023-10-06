<?php declare(strict_types=1);

namespace Denal05\MacademyM2CodingKickstartBlog\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
    const MAIN_TABLE = "denal05_macademy_m2_coding_kickstart_blog";
    const ID_FIELD_NAME = "id";

    protected function _construct()
    {
        $this->_init(self::MAIN_TABLE, self::ID_FIELD_NAME);
    }
}
