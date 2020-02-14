<?php

namespace Alevelmod\Learning\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Define model and resource model.
     */
    protected function _construct()
    {
        $this->_init(
            \Alevelmod\Learning\Model\Post::class,
            \Alevelmod\Learning\Model\ResourceModel\Post::class
        );
    }
}