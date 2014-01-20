<?php


namespace Mailvan\Core\Request;

/**
 * Interface RequestFactoryInterface
 *
 * Implementation of this interface must be injected in your QueueInterface implementation due to
 * make Queue be able to build Requests from data retrieved from storage.
 *
 * @package Mailvan\Core\Request
 */
interface RequestFactoryInterface
{
    /**
     * @param array $data
     * @return RequestInterface
     */
    public function createRequest(array $data);
} 