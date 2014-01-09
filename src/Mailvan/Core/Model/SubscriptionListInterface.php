<?php

namespace Mailvan\Core\Model;

/**
 * Interface SubscriptionListInterface
 *
 * @package Mailvan\Core\Model
 */
interface SubscriptionListInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     * @return void
     */
    public function setId($id);
} 