<?php
namespace Mailvan\Core;

use Guzzle\Service\Client as BaseClient;
use Mailvan\Core\Model\SubscriptionList;
use Mailvan\Core\Model\User;


/**
 * Class Client
 * @package Mailvan\Core
 */
abstract class Client extends BaseClient implements ClientInterface
{
    /**
     * Creates instance of SubscriptionListInterface from given data
     * @param int $id
     * @return Model\SubscriptionListInterface
     */
    public function createSubscriptionList($id)
    {
        return new SubscriptionList($id);
    }

    /**
     * Creates instance of UserInterface
     *
     * @param $user_info
     * @return Model\UserInterface
     */
    public function createUser($user_info)
    {
        return User::fromArray($user_info);
    }
}