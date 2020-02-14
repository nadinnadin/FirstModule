<?php

namespace Alevelmod\Learning\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Interface PostSearchResultsInterface
 * @package Alevelmod\Learning\Api\Data
 */
interface PostSearchResultsInterface extends SearchResultsInterface
{
    /**
     *
     *
     * @return PostInterface[]
     */
    public function getItems();

    /**
     *
     * @param PostInterface[] $items
     *
     * @return $this
     */
    public function setItems(array $items);
}