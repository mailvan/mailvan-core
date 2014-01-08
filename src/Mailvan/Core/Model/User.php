<?php
/**
 * 
 * @author Alex Panshin <deadyaga@gmail.com>
 * @package
 * @subpackage 
 */

namespace Mailvan\Core\Model;


class User implements UserInterface
{

    protected $id,
              $email,
              $first_name,
              $last_name;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->getFirstName().' '.$this->getLastName();
    }

    public function setName($name)
    {
        $parts = explode(' ', $name);

        $this->setFirstName($parts[0]);
        if (!empty($parts[1])) {
            $this->setLastName($parts[1]);
        }
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function setLastName($lastName)
    {
        $this->last_name = $lastName;
    }

    public function toArray()
    {
        return array(
            'id' => $this->getId(),
            'email' => $this->getEmail(),
            'first_name' => $this->getFirstName(),
            'last_name' => $this->getLastName(),
            'name' => $this->getName()
        );
    }

    public static function fromArray(array $data)
    {
        $user = new self();

        foreach (array('id' => 'setId', 'email' => 'setEmail', 'first_name' => 'setFirstName', 'last_name' => 'setLastName', 'name' => 'setName') as $field => $method) {
            if (!empty($data[$field])) {
                $user->$method($data[$field]);
            }
        }

        return $user;
    }
}