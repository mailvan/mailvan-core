<?php

namespace Mailvan\Core;

use Guzzle\Service\ClientInterface as BaseClientInterface;
use Mailvan\Core\Model\SubscriptionListInterface;
use Mailvan\Core\Model\UserInterface;

/**
 * Project-specific guzzle client extension
 *
 * @author Alex Panshin <deadyaga@gmail.com>
 * @package Mailvan\Core
 */
interface ClientInterface extends BaseClientInterface
{
    /**
     * Subscribes given user to given SubscriptionList. Returns true if operation is successful
     *
     * @param UserInterface $user
     * @param SubscriptionListInterface $list
     * @return boolean
     */
    public function subscribe(UserInterface $user, SubscriptionListInterface $list);

    /**
     * Unsubscribes given user from given SubscriptionList.
     *
     * @param UserInterface $user
     * @param SubscriptionListInterface $list
     * @return boolean
     */
    public function unsubscribe(UserInterface $user, SubscriptionListInterface $list);

    /**
     * Moves user from one list to another. In some implementation can create several http queries.
     *
     * @param UserInterface $user
     * @param SubscriptionListInterface $from
     * @param SubscriptionListInterface $to
     * @return boolean
     */
    public function move(UserInterface $user, SubscriptionListInterface $from, SubscriptionListInterface $to);

    /**
     * Returns list of subscription lists created by owner.
     *
     * @return array
     */
    public function getLists();

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