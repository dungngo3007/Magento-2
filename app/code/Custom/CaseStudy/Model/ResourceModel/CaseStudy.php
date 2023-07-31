<?php

namespace Custom\CaseStudy\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class CaseStudy extends AbstractDb
{
    const TABLE = 'case_study';
    const PRIMARY_KEY = 'case_study_id';

    protected function _construct()
    {
        $this->_init(self::TABLE, self::PRIMARY_KEY);
    }
}
