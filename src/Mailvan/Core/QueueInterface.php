<?php


namespace Mailvan\Core;


/**
 * QueueInterface.
 *
 * This interface is used to create any Queue storage you want.
 *
 *
 * @author Alex Panshin <deadyaga@gmail.com>
 * @package Mailvan\Core
 */
interface QueueInterface
{
    /**
     * Pops first element from queue, creates Request instance from it and returns it.
     * Method must try to unserialize popped element before creating Request instance
     *
     * @return Request
     */
    public function pop();

    /**
     * Pushes given $data as a serialized string
     *
     * @param $data
     * @return void
     */
    public function push($data);

    /**
     * Returns current queue length
     *
     * @return int
     */
    public function getLength();
} 