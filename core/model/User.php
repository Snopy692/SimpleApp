<?php

  /**
   * User
   * 
   * 
   * @author     Matt & Oliver 
   * 
   * The User class sets & gets user data from the database and returns it to user. 
   * 
   */

namespace App\Model;

class User
{

    private $id;

    private $name;

    private $password;

    private $data;

    private $status;
    /**
     * Getter for id. @var type int
     */

    public function getId() 
    {
        return $id;
    }

    /**
     * Setter for name. @var type string
     */

    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Getter for name. @var type string
     */

    public function getName() :string
    {
        return $this->name;
    }

    /**
     * Setter for password. @var type string
     */

    public function setPassword(string $password)
    {
        $this->password = $password;
    }
    /**
     * Getter for password. @var type string
     */

    public function getPassword() :string
    {
        return $this->password;
    }
     /**
     * Setter for data. @var type string
     */
    public function setData(string $data)
    {
        $this->data = $data;
    }

    /**
     * Getter for data. @var type string
     */

    public function getData() :string
    {
        return $this->data;
    }
    /**
     * Setter for status. @var type string
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
    }
     /**
     * Getter for status. @var type string
     */
    public function getStatus() :string
    {
        return $this->status;
    }
}
