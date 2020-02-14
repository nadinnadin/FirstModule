<?php

namespace Alevelmod\Learning\Api;

use Alevelmod\Learning\Api\Data\PostInterface;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Api\SearchCriteriaInterface;
use Alevelmod\Learning\Api\Data\PostSearchResultsInterface;

/**
 * Interface PostRepositoryInterface
 * @package Alevelmod\Learning\Api
 */
interface PostRepositoryInterface
{
    /**
     *
     * @param int $id
     *
     * @return PostInterface
     *
     * @throws NoSuchEntityException
     */
    public function getById(int $id);

    /**
     *
     * @param int $id
     *
     * @return PostInterface
     *
     */
    public function deleteById(int $id);

    /**
     *
     * @param PostInterface $post
     *
     * @throws CouldNotSaveException
     */
    public function save(PostInterface $post): void ;

    /**
     *
     * @param SearchCriteriaInterface $searchCriteria
     *
     * @return PostSearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria);

    /**
     *
     * @param PostInterface $post
     *
     * @throws CouldNotSaveException
     */
    public function delete(PostInterface $post);
}