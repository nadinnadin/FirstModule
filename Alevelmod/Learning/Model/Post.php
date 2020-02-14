<?php

namespace Alevelmod\Learning\Model;

use Magento\Framework\Model\AbstractModel;
use Alevelmod\Learning\Api\Data\PostInterface;
use Alevelmod\Learning\Model\ResourceModel\Post as ResourceModel;

/**
 * Class Post.
 * @package Alevelmod\Learning\Model
 */
class Post extends AbstractModel implements PostInterface
{

    /**
     *  Init resource model.
     */
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }

    /**
     * @return mixed|string
     */
    public function getName()
    {
        return $this->getData(PostInterface::NAME);
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->getData(PostInterface::SURNAME);
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->getData(PostInterface::EMAIL);
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->getData(PostInterface::CONTENT);
    }

    /**
     * @return mixed
     */
    public function getEnabled()
    {
        return $this->getData(PostInterface::ENABLED);
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->getData(PostInterface::AGE);
    }

}