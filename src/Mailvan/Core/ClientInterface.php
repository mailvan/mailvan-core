<?php

namespace Mailvan\Core;

use Guzzle\Service\ClientInterface as BaseClientInterface;

/**
 * Project-specific guzzle client extension
 *
 * @author Alex Panshin <deadyaga@gmail.com>
 * @package Mailvan\Core
 */
interface ClientInterface extends BaseClientInterface
{
    /**
     * Creates instance of SubscriptionListInterface from given data
     * @param int $id
     * @return Model\SubscriptionListInterface
     */
    public function createSubscriptionList($id);

    /**
     * Creates instance of UserInterface
     *
     * @param $user_info
     * @return Model\UserInterface
     */
    public function createUser($user_info);
} 