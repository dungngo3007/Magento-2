<?php

namespace Custom\CaseStudy\Controller\Adminhtml\CaseStudy;

use Custom\CaseStudy\Api\CaseStudyRepositoryInterface;
use Custom\CaseStudy\Model\ResourceModel\CaseStudy\CollectionFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Ui\Component\MassAction\Filter;

class InlineEdit extends Action
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
        $result = $this->resultFactory->create(ResultFactory::TYPE_JSON);
        $items = $this->getRequest()->getParam('items');
        $message = [];
        $error = false;

        if (!count($items)) {
            $message[] = __('Wrong data');
            $error = true;
        } else {
            foreach (array_keys($items) as $caseStudyId) {
                $caseStudy = $this->caseStudyRepository->getById($caseStudyId);
                try {
                    $caseStudy->setData(array_merge($caseStudy->getData(), $items[$caseStudyId]));
                    $this->caseStudyRepository->save($caseStudy);
                } catch (\Throwable $e) {
                    $messages[] = $e->getMessage();
                    $error = true;
                }

            }
        }

        $this->messageManager->addSuccessMessage(__('Update data success!!!'));

        return $result->setData([
            'data' => $caseStudy->getData(),
            'message' => $message,
            'error' => $error
        ]);
    }
}
