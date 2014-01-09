<?php
/**
 * 
 * @author Alex Panshin <deadyaga@gmail.com>
 * @package
 * @subpackage 
 */

namespace Mailvan\Core\Model;

/**
 * Class User
 * @package Mailvan\Core\Model
 */
class User implements UserInterface
{

    protected $id,
              $email,
              $first_name,
              $last_name;


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getFirstName().' '.$this->getLastName();
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $parts = explode(' ', $name);

        $this->setFirstName($parts[0]);
        if (!empty($parts[1])) {
            $this->setLastName($parts[1]);
        }
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'email' => $this->getEmail(),
            'first_name' => $this->getFirstName(),
            'last_name' => $this->getLastName(),
            'name' => $this->getName()
        ];
    }

    /**
     * @param array $data
     * @return User|UserInterface
     */
    public static function fromArray(array $data)
    {
        $user = new self();

        foreach (['id' => 'setId', 'email' => 'setEmail', 'first_name' => 'setFirstName', 'last_name' => 'setLastName', 'name' => 'setName'] as $field => $method) {
            if (!empty($data[$field])) {
                $user->$method($data[$field]);
            }
        }

        return $user;
    }
}