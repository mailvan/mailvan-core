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

    /**
     * @param $command
     * @param $params
     * @param callable $responseParser
     *
     * @throws MailvanException
     * @return mixed
     */
    protected function doExecuteCommand($command, $params, \Closure $responseParser)
    {
        $params = $this->mergeApiKey($params);

        $response = $this->getCommand($command, $params)->getResult();
        if ($this->hasError($response)) {
            throw $this->raiseError($response);
        }

        return $responseParser($response);
    }

    /**
     * Merge API key into params array. Some implementations require to do this.
     *
     * @param $params
     * @return mixed
     */
    abstract protected function mergeApiKey($params);

    /**
     * Check if server returned response containing error message.
     * This method must return true if servers does return error.
     *
     * @param $response
     * @return mixed
     */
    abstract protected function hasError($response);

    /**
     * Raises Exception from response data
     *
     * @param $response
     * @return MailvanException
     */
    abstract protected function raiseError($response);
}