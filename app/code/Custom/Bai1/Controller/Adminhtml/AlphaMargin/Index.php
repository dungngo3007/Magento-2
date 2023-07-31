<?php

namespace Custom\Bai1\Controller\Adminhtml\AlphaMargin;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action implements HttpGetActionInterface
{

    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->setActiveMenu('Custom_Bai1::AlphaMargin');
//        $resultPage->getConfig()->getTitle()->prepend();

        return $resultPage;
    }
}
