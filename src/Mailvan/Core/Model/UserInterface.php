<?php
/**
 * 
 * @author Alex Panshin <deadyaga@gmail.com>
 * @package
 * @subpackage 
 */

namespace Mailvan\Core\Model;


interface UserInterface
{
    public function getId();

    public function setId($id);

    public function getName();

    public function setName($name);

    public function getEmail();

    public function setEmail($email);

    public function getFirstName();

    public function setFirstName($firstName);

    public function getLastName();

    public function setLastName($lastName);

    public function toArray();

    public static function fromArray(array $data);
}