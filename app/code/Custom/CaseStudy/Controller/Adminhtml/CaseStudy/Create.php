<?php

namespace Custom\CaseStudy\Controller\Adminhtml\CaseStudy;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;

class Create extends Action implements HttpGetActionInterface
{
    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        $resultPage->setActiveMenu('Custom_CaseStudy::CaseStudy');
        $resultPage->getConfig()->getTitle()->prepend('New Case Study');

        return $resultPage;
    }
}
