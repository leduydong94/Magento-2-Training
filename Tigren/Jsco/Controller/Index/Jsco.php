<?php
namespace Tigren\Jsco\Controller\Index;

use Magento\Framework\Controller\ResultFactory;
use Tigren\Jsco\Controller\Test;

class Jsco extends Test
{
    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->getConfig()->getTitle()->set(__('Playground'));
        return $resultPage;
    }
}
