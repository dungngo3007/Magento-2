<?php

namespace Custom\Bai1\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class AlphaMargin extends AbstractDb
{
    const TABLE = 'alpha_margin';
    const PRIMARY_KEY = 'index';

    protected function _construct()
    {
        $this->_init(self::TABLE, self::PRIMARY_KEY);
    }
}
