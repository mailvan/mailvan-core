<?php


namespace Mailvan\Core\Model;

/**
 * Base implementation of SubscriptionList interface. Feel free to extend it.
 *
 * @author Alex Panshin <deadyaga@gmail.com>
 * @package Mailvan\Core\Model
 */
class SubscriptionList implements SubscriptionListInterface
{
    protected $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}