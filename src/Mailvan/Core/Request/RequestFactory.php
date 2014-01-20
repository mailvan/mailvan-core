<?php


namespace Mailvan\Core\Request;

/**
 * Class RequestFactory
 * Basic implementation of RequestFactory
 *
 * @package Mailvan\Core\Request
 * @author Alex Panshin <deadyaga@gmail.com>
 */
class RequestFactory implements RequestFactoryInterface
{

    public function createRequest(array $data)
    {
        if (empty($data['service'])) {
            throw new \InvalidArgumentException("You must provide service name to create request.");
        }

        if (empty($data['command'])) {
            throw new \InvalidArgumentException("You must provide command name to create request.");
        }

        $service = $data['service'];
        $params = empty($data['params']) ? false : $data['params'];
        $command = $data['command'];
        $arguments = empty($data['arguments']) ? [] : $data['arguments'];

        return new Request($service, $params, $command, $arguments);
    }
}