<?php

namespace Alevelmod\Learning\Api\Data;

/**
 * Interface PostInterface
 * @package Alevelmod\Learning\Api\Data
 */
interface PostInterface
{
    const ENTITY_ID = 'entity_id';
    const NAME = 'name';
    const SURNAME = 'surname';
    const EMAIL = 'email';
    const CONTENT = 'content';
    const ENABLED = 'enabled';
    const AGE = 'age';

    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getSurname();

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @return string
     */
    public function getContent();

    /**
     * @return string
     */
    public function getEnabled();

    /**
     * @return mixed
     */
    public function getAge();
}