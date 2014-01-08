<?php

namespace Mailvan\Core;

use Guzzle\Service\Builder\ServiceBuilder;

/**
 * This class builds ClientInterface instance.
 *
 * @author Alex Panshin <deadyaga@gmail.com>
 * @package Mailvan
 * @subpackage Core
 */
class ClientFactory
{
    /**
     * Returns path to services configuration file
     *
     * @return string
     */
    protected function getConfigPath()
    {
        return __DIR__.'/services.json';
    }

    /**
     * Returns ClientInterface. This client can execute different api queries to one given service
     *
     * If $params array is not given built instance will be saved in clients cache.
     * Next time when this method will be called with the same name AND again without $params cached client will be returned
     *
     * @param string $name Service name
     * @param bool|array $params
     * @return ClientInterface|mixed
     */
    public function getClient($name, $params = false)
    {
        return ServiceBuilder::factory($this->getConfigPath())->get($name, $params);
    }
} 