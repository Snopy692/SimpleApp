<?php

namespace App\Model;

/**
 * Class User
 *
 * The User model class sets & gets user data from the database and returns it to user.
 */
class User implements ModelInterface
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $data;

    /**
     * @var bool
     */
    private $status;

    /**
     * Getter for id.
     *
     * @return int
     */
    public function getId()
    {
        return $id;
    }

    /**
     * Setter for name.
     * 
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Getter for name.
     * 
     * @return string
     */  
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Setter for password.
     * 
     * @param  string $password
     * @return string
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }
    
    /**
     * Getter for password.
     * 
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
  
    /**
     * Setter for data.
     * 
     * @param string $data
     */
    public function setData(string $data)
    {
        $this->data = $data;
    }

    /**
     * Getter for data.
     * 
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }
    
    /**
     * Setter for status.
     * 
     * @param bool
     */
    public function setStatus(bool $status)
    {
        $this->status = $status;
    }

    /**
     * Getter for status.
     * 
     * @return bool
     */
    public function getStatus(): bool
    {
        return $this->status;
    }

    /**
     * From array
     * 
     * @var array
     */
    public function fromArray($values)
    {
    }
}
