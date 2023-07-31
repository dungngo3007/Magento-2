<?php

namespace Custom\CaseStudy\Controller\Adminhtml\CaseStudy;

use Custom\CaseStudy\Api\CaseStudyRepositoryInterface;
use Custom\CaseStudy\Model\ResourceModel\CaseStudy\Collection;
use Custom\CaseStudy\Model\ResourceModel\CaseStudy\CollectionFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Ui\Component\MassAction\Filter;

class MassDelete extends Action
{
    private $filter;
    private $collectionFactory;
    private $caseStudyRepository;

    public function __construct(Context $context, Filter $filter, CollectionFactory $collectionFactory, CaseStudyRepositoryInterface $caseStudyRepository)
    {
        $this->filter = $filter;
        $this->collectionFactory = $collectionFactory;
        $this->caseStudyRepository = $caseStudyRepository;
        parent::__construct($context);
    }

    public function execute()
    {
        try {
            $collection = $this->filter->getCollection($this->collectionFactory->create());

            foreach ($collection as $caseStudy) {
                $this->caseStudyRepository->delete($caseStudy);
            }

            $this->messageManager->addSuccessMessage(__('Delete success!!!'));
        } catch (\Throwable $exception) {
            $this->messageManager->addErrorMessage(__('Something wrong'));
        }

        $result = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);

        return $result->setPath('custom_casestudy/casestudy/index');
    }
}
