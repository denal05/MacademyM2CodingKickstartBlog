<?php declare(strict_types=1);

namespace Denal05\MacademyM2CodingKickstartBlog\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class LogPostDetailView implements ObserverInterface
{
    public function __construct(
        private LoggerInterface $logger,
    ) {}

    public function execute(Observer $observer)
    {
        $request = $observer->getData('request');
        $this->logger->info(__METHOD__ . ': The URL /blog/post/detail/:id was viewed.', [
            'params' => $request->getParams()
        ]);
    }
}
