<?php

namespace Visionet\Stock\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Stock extends AbstractDb
{
    const MAIN_TABLE = 'visionet_stock';
    const ID_FIELD_NAME = 'id';
    protected function _construct()
    {
        $this->_init(self::MAIN_TABLE, self::ID_FIELD_NAME);
    }
}
