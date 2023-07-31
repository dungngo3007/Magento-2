<?php

namespace Custom\CaseStudy\Service;

use Custom\CaseStudy\Api\CaseStudyRepositoryInterface;
use Custom\CaseStudy\Api\Data\CaseStudyInterface;
use Custom\CaseStudy\Model\ResourceModel\CaseStudy;
use Custom\CaseStudy\Model\CaseStudyFactory;
use Magento\Framework\Exception\NoSuchEntityException;

class CaseStudyRepository implements CaseStudyRepositoryInterface
{
    private $caseStudyResource;
    private $factory;

    public function __construct(CaseStudy $caseStudyResource, CaseStudyFactory $factory)
    {
        $this->caseStudyResource = $caseStudyResource;
        $this->factory = $factory;
    }

    public function save(CaseStudyInterface $caseStudy)
    {
        $this->caseStudyResource->save($caseStudy);
    }

    public function getById(int $caseStudyId)
    {
        $caseStudy = $this->factory->create();
        $this->caseStudyResource->load($caseStudy, $caseStudyId);

        if (!$caseStudy->getId()) {
            throw new NoSuchEntityException(__('No result'));
        }

        return $caseStudy;
    }

    public function delete(CaseStudyInterface $caseStudy)
    {
        $this->caseStudyResource->delete($caseStudy);
    }
}
