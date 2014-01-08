<?php
/**
 * 
 * @author Alex Panshin <deadyaga@gmail.com>
 * @package
 * @subpackage 
 */

namespace Mailvan\Core\Model;


interface SubscriptionListInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     * @return void
     */
    public function setId($id);
} 