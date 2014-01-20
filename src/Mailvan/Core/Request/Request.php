<?php

namespace Mailvan\Core\Request;

/**
 * Basic implementation of RequestInterface
 *
 * @package Mailvan\Core
 */
class Request implements RequestInterface
{
    /** @var string */
    protected $service;

    /** @var array|boolean */
    protected $params;

    /** @var string */
    protected $command_name;

    /** @var array|null */
    protected $command_arguments;

    /**
     * Returns service name. ClientFactory must know this service and know to build its client.
     *
     * @return string
     */
    public function getServiceName()
    {
        return $this->service;
    }

    /**
     * Returns connection parameters for ClientFactory.
     *
     * @return array|boolean
     */
    public function getConnectionParams()
    {
        return $this->params;
    }

    /**
     * Returns command name
     *
     * @return string
     */
    public function getCommand()
    {
        return $this->command_name;
    }

    /**
     * Returns array of command arguments
     *
     * @return array|null
     */
    public function getArguments()
    {
        return $this->command_arguments;
    }

    /**
     * @param string $service
     * @param array|boolean $params
     * @param string $command
     * @param array $arguments
     */
    public function __construct($service, $params, $command, $arguments = [])
    {
        $this->service = $service;
        $this->params = $params;
        $this->command_name = $command;
        $this->command_arguments = $arguments;
    }
}