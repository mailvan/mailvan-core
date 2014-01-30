<?php

namespace Mailvan\Core;

use Guzzle\Service\Builder\ServiceBuilder;

/**
 * This class builds ClientInterface instance.
 *
 * @author Alex Panshin <deadyaga@gmail.com>
 * @package Mailvan\Core
 */
class ClientFactory
{
    private $config_path;

    /**
     * @param null|string $config_path
     */
    public function __construct($config_path = null)
    {
        $this->setConfigPath($config_path ?: __DIR__.'/services.json');
    }

    /**
     * @param $path
     * @throws \InvalidArgumentException
     */
    public function setConfigPath($path)
    {
        if (!is_readable($path)) {
            throw new \InvalidArgumentException(sprintf("Config file '%s' is not readable or doesn't exist.", $path));
        }

        $this->config_path = $path;
    }

    /**
     * Returns path to services configuration file
     *
     * @return string
     */
    protected function getConfigPath()
    {
        return $this->config_path;
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