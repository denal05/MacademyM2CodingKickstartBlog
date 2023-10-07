<?php declare(strict_types=1);

namespace Denal05\MacademyM2CodingKickstartBlog\Setup\Patch\Data;

use Denal05\MacademyM2CodingKickstartBlog\Api\PostRepositoryInterface;
use Denal05\MacademyM2CodingKickstartBlog\Model\PostFactory;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class PopulateBlogPosts implements DataPatchInterface
{

    public function __construct(
        private ModuleDataSetupInterface $moduleDataSetup,
        private PostFactory $postFactory,
        private PostRepositoryInterface $postRepository,
    ) {}

    public static function getDependencies(): array
    {
        return [];
    }

    public function getAliases(): array
    {
        return [];
    }

    /**
     * @throws LocalizedException
     */
    public function apply()
    {
        $this->moduleDataSetup->startSetup();

        $post = $this->postFactory->create();
        // TODO: Fetch data from some Lorem Ipsum API
        $timestamp = time();
        $post->setData([
            'title' => 'Dummy blog post title ' . $timestamp,
            'content' => 'This is a dummy blog post content with timestamp ' . $timestamp,
        ]);
        $this->postRepository->save($post);

        $this->moduleDataSetup->endSetup();
    }
}
