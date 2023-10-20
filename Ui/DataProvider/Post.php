<?php declare(strict_types=1);

namespace Denal05\MacademyM2CodingKickstartBlog\Ui\DataProvider;

use Denal05\MacademyM2CodingKickstartBlog\Model\ResourceModel\Post\Collection;
use Denal05\MacademyM2CodingKickstartBlog\Model\ResourceModel\Post\CollectionFactory;
use Magento\Ui\DataProvider\AbstractDataProvider;

class Post extends AbstractDataProvider
{
    /** @var Collection */
    protected $collection;

    /** @var array */
    private array $loadedData;

    /**
     * @param $name
     * @param $primaryFieldName
     * @param $requestFieldName
     * @param CollectionFactory $collectionFactory
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        // Usually we only inject dependencies in the constructor, but don't instantiate them here.
        // However, DataProvider expects a collection to be instantiated in the constructor.
        // Credit: Mark Shust,
        //         "Create a UI Component DataProvider class in PHP" lesson from the
        //         "Transform Magento 2 Admin Grids & Forms" course on M.academy
        $this->collection = $collectionFactory->create();

        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        if (!isset($this->loadedData)) {
            $this->loadedData = [];

            foreach ($this->collection->getItems() as $item) {
                $this->loadedData[$item->getData('id')] = $item->getData();
            }
        }

        return $this->loadedData;
    }
}
