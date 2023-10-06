<?php declare(strict_types=1);

namespace Denal05\MacademyM2CodingKickstartBlog\Model;

use Denal05\MacademyM2CodingKickstartBlog\Api\Data\PostInterface;
use Denal05\MacademyM2CodingKickstartBlog\Api\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{

    public function getById(int $id): PostInterface
    {
        // TODO: Implement getById() method.
    }

    public function save(PostInterface $post): PostInterface
    {
        // TODO: Implement save() method.
    }

    public function deleteById(int $id): bool
    {
        // TODO: Implement deleteById() method.
    }
}
