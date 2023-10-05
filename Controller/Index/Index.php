<?php declare(strict_types=1);

namespace Denal05\MacademyM2CodingKickstartBlog\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\Forward;
use Magento\Framework\Controller\Result\ForwardFactory;

class Index implements HttpGetActionInterface
{
    public function __construct(
        private ForwardFactory $forwardFactory,
    ) {}

    public function execute(): Forward
    {
        /** @var Forward $forwarder */
        $forwarder = $this->forwardFactory->create();
        return $forwarder->setController('post')->forward('list');
    }
}
