<?php


namespace Mailvan\Core;

/**
 * QueueInterface::pop() MUST return instance that implement this interface.
 * This interface provides all necessary information to make a request to every mailing list service api.
 *
 * @author Alex Panshin <deadyaga@gmail.com>
 */
interface RequestInterface
{
    /**
     * Returns service name. ClientFactory must know this service and know to build its client.
     *
     * @return string
     */
    public function getServiceName();

    /**
     * Returns connection parameters for ClientFactory.
     *
     * @return array|boolean
     */
    public function getConnectionParams();

    /**
     * Returns command name
     *
     * @return string
     */
    public function getCommand();

    /**
     * Returns array of command arguments
     *
     * @return array|null
     */
    public function getArguments();

    /**
     * Creates Request instance from given $data array
     *
     * @param array $data
     * @return RequestInterface
     */
    public static function fromArray(array $data);
} 