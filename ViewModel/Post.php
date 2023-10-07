<?php declare(strict_types=1);

namespace Denal05\MacademyM2CodingKickstartBlog\ViewModel;

use Denal05\MacademyM2CodingKickstartBlog\Model\ResourceModel\Post\Collection;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Post implements ArgumentInterface
{
    public function __construct(
        private Collection $collection,
    ) {}

    public function getList(): array
    {
        return $this->collection->getItems();
    }

    public function getCount(): int
    {
        return $this->collection->count();
    }
}
