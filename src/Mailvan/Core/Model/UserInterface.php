<?php
/**
 * 
 * @author Alex Panshin <deadyaga@gmail.com>
 * @package
 * @subpackage 
 */

namespace Mailvan\Core\Model;

/**
 * Interface UserInterface
 * @package Mailvan\Core\Model
 */
interface UserInterface
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

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     * @return void
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @param string $email
     * @return void
     */
    public function setEmail($email);

    /**
     * @return string
     */
    public function getFirstName();

    /**
     * @param string $firstName
     * @return void
     */
    public function setFirstName($firstName);

    /**
     * @return string
     */
    public function getLastName();

    /**
     * @param string $lastName
     * @return void
     */
    public function setLastName($lastName);

    /**
     * @return array
     */
    public function toArray();

    /**
     * @param array $data
     * @return UserInterface
     */
    public static function fromArray(array $data);
}