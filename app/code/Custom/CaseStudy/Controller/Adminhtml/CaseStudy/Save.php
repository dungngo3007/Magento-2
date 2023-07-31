<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Custom\CaseStudy\Controller\Adminhtml\CaseStudy;

use Custom\CaseStudy\Api\CaseStudyRepositoryInterface;
use Custom\CaseStudy\Api\Data\CaseStudyInterfaceFactory;
use Custom\CaseStudy\Api\Data\CaseStudyInterface;
use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Exception\LocalizedException;

class Save extends Action implements HttpPostActionInterface
{
    protected $context;

    /**
     * @var DataPersistorInterface
     */
    protected $dataPersistor;

    /**
     * @var CaseStudyRepositoryInterface
     */
    private $caseStudyRepository;

    /**
     * @var CaseStudyInterfaceFactory
     */
    private $caseStudyFactory;

    /**
     * @param Context $context
     * @param DataPersistorInterface $dataPersistor
     * @param CaseStudyInterfaceFactory|null $caseStudyFactory
     * @param CaseStudyRepositoryInterface|null $caseStudyRepository
     */
    public function __construct(
        Context $context,
        DataPersistorInterface $dataPersistor,
        CaseStudyInterfaceFactory $caseStudyFactory,
        CaseStudyRepositoryInterface $caseStudyRepository
    ) {
        $this->context = $context;
        $this->dataPersistor = $dataPersistor;
        $this->caseStudyFactory = $caseStudyFactory;
        $this->caseStudyRepository = $caseStudyRepository;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $data = $this->getRequest()->getPostValue();
        if ($data) {
            if (empty($data['case_study_id'])) {
                $data['case_study_id'] = null;
            }

            $model = $this->caseStudyFactory->create();
            $id = $this->getRequest()->getParam('case_study_id');

            if ($id) {
                try {
                    $model = $this->caseStudyRepository->getById($id);
                } catch (LocalizedException $e) {
                    $this->messageManager->addErrorMessage(__('This case study no longer exists.'));
                    return $resultRedirect->setPath('*/*/');
                }
            }

            $model->setData($data);

            try {
                $this->caseStudyRepository->save($model);
                $this->messageManager->addSuccessMessage(__('You saved the case study.'));
                $this->dataPersistor->clear('custom_caseStudy');
                return $resultRedirect->setPath('*/*/');
            } catch (LocalizedException $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addExceptionMessage($e, __('Something went wrong while saving the case study.'));
            }

            $this->dataPersistor->set('custom_caseStudy', $data);
            return $resultRedirect->setPath('*/*/create', ['case_study_id' => $id]);
        }
        return $resultRedirect->setPath('*/*/');
    }
}
