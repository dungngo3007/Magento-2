<?php

namespace Custom\Bai1\Model;

use Magento\Framework\Model\AbstractModel;

class AlphaMargin extends AbstractModel
{
    public function __construct()
    {
        $this->_init(\Custom\Bai1\Model\ResourceModel\AlphaMargin::class);
    }
}
