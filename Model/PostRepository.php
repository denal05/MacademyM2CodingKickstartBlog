<?php declare(strict_types=1);

namespace Denal05\MacademyM2CodingKickstartBlog\Model;

use Denal05\MacademyM2CodingKickstartBlog\Api\Data\PostInterface;
use Denal05\MacademyM2CodingKickstartBlog\Api\PostRepositoryInterface;
use Denal05\MacademyM2CodingKickstartBlog\Model\PostFactory;
use Denal05\MacademyM2CodingKickstartBlog\Model\ResourceModel\Post as PostResourceModel;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

class PostRepository implements PostRepositoryInterface
{

    public function __construct(
        private PostFactory $postFactory, // Since we're in the Model dir, we don't have to import Model\Post
        private PostResourceModel $postResourceModel,
    ) {}

    public function getById(int $id): PostInterface
    {
        $post = $this->postFactory->create();       // Fetch a Blank Post object.
        $this->postResourceModel->load($post, $id); // Load the blank Post object with DB data.

        if (!$post->getId()) {
            throw new NoSuchEntityException(
                __('The blog post with id %1 doesn\'t exist.', $id)
            );
        }

        return $post;
    }

    public function save(PostInterface $post): PostInterface
    {
        try {
            $this->postResourceModel->save($post);
        } catch (\Exception $e) {
            throw new CouldNotSaveException(
                __($e->getMessage())
            );
        }

        return $post;
    }

    public function deleteById(int $id): bool
    {
        $post = $this->getById($id);

        try {
            $this->postResourceModel->delete($post);
        } catch (\Exception $e) {
            throw new CouldNotDeleteException(
                __($e->getMessage())
            )
        }

        return true;
    }
}
