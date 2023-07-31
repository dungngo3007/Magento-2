<?php

namespace Custom\CaseStudy\Model\ResourceModel\CaseStudy;

use Custom\CaseStudy\Model\CaseStudy;
use Custom\CaseStudy\Model\ResourceModel\CaseStudy as CaseStudyResource;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init(CaseStudy::class, CaseStudyResource::class);
    }
}
