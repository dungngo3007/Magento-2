<?php

namespace Custom\CaseStudy\Controller\Adminhtml\CaseStudy;

use Magento\Backend\App\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;

class NewAction extends Action
{
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_REDIRECT)
            ->forward('create');
    }
}
