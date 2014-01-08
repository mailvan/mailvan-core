<?php
/**
 * 
 * @author Alex Panshin <deadyaga@gmail.com>
 * @package
 * @subpackage 
 */

namespace Mailvan\Core;


/**
 * Class QueueInterface
 * @package Mailvan\Core
 */
interface QueueInterface
{
    public function getName();

    public function pop();

    public function push($data);

    public function getLength();
} 