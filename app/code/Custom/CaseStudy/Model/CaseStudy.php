<?php

namespace Custom\CaseStudy\Model;

use Custom\CaseStudy\Api\Data\CaseStudyInterface;
use Magento\Framework\Api\CustomAttributesDataInterface;
use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class CaseStudy extends AbstractModel implements CaseStudyInterface, CustomAttributesDataInterface
{
    const CASE_STUDY_ID = 'case_study_id';
    const TITLE = 'title';
    const DESCRIPTION = 'description';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function _construct()
    {
        $this->_eventPrefix = 'case_study';
        $this->_eventObject = 'case_study';
        $this->_idFieldName = 'case_study_id';
        $this->_init(\Custom\CaseStudy\Model\ResourceModel\CaseStudy::class);
    }

    public function getCaseStudyId()
    {
        return $this->getData(self::CASE_STUDY_ID);
    }

    public function setCaseStudyId(int $caseStudyId)
    {
        $this->setData(self::CASE_STUDY_ID, $caseStudyId);
    }

    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    public function setTitle(string $title)
    {
        $this->setData(self::TITLE, $title);
    }

    public function getDescription()
    {
        return $this->getData(self::DESCRIPTION);
    }

    public function setDescription(string $description)
    {
        $this->setData(self::DESCRIPTION, $description);
    }

    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    public function setCreatedAt(string $createdAt)
    {
        $this->setData(self::CREATED_AT, $createdAt);
    }

    public function getUpdatedAt()
    {
        return $this->getData(self::UPDATED_AT);
    }

    public function setUpdatedAt(string $updatedAt)
    {
        $this->setData(self::UPDATED_AT, $updatedAt);
    }

    public function getCustomAttribute($attributeCode)
    {
        return null;
    }

    public function setCustomAttribute($attributeCode, $attributeValue)
    {
        // TODO: Implement setCustomAttribute() method.
    }

    public function getCustomAttributes()
    {
        return [];
    }

    public function setCustomAttributes(array $attributes)
    {
        // TODO: Implement setCustomAttributes() method.
    }
}
