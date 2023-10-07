<?php declare(strict_types=1);

namespace Denal05\MacademyM2CodingKickstartBlog\ViewModel;

use Denal05\MacademyM2CodingKickstartBlog\Api\Data\PostInterface;
use Denal05\MacademyM2CodingKickstartBlog\Api\PostRepositoryInterface;
use Denal05\MacademyM2CodingKickstartBlog\Model\ResourceModel\Post\Collection;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Post implements ArgumentInterface
{
    public function __construct(
        private Collection $collection,
        private PostRepositoryInterface $postRepository,
        private RequestInterface $request,
    ) {}

    public function getList(): array
    {
        return $this->collection->getItems();
    }

    public function getCount(): int
    {
        return $this->collection->count();
    }

    /**
     * @throws LocalizedException
     */
    public function getDetail(): PostInterface
    {
        $id = (int) $this->request->getParam('id');
        return $this->postRepository->getById($id);
    }
}
