<?php

namespace Custom\Bai1\Model\ResourceModel\AlphaMargin;

use Custom\Bai1\Model\AlphaMargin;
use Custom\Bai1\Model\ResourceModel\AlphaMargin as AlphaMarginResource;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    public function __construct()
    {
        $this->_init(AlphaMargin::class, AlphaMarginResource::class);
    }
}
