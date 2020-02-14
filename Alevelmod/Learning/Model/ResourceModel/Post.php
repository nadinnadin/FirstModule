<?php

namespace Alevelmod\Learning\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Post.
 *
 * @package Alevelmod\Learning\Model\ResourceModel
 */
class Post extends AbstractDb
{

    /**
     * _construct for init.
     *
     * Initialize table and id field name.
     */
    protected function _construct()
    {
        $this->_init('alevelmod_learning_model', 'entity_id');
    }
}