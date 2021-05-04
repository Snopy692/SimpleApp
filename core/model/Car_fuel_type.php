<?php

namespace App\Model;

/**
 * Class carFuelType
 *
 * The carFuelType model class sets & gets car fuel type data from the database and returns it to user.
 */

class carFuelType
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
    * Getter for id
    * 
    * @var integer
    */
    public function getId() :int
    {
        return $id;
    }

    /**
    * Setter for name
    * 
    * @param string $name
    */
    public function setName(string $name)
    {
        $this->name =$name;
    }

    /**
     * Getter for name
     * 
     * @var string
     */
    public function getName() :string
    {
        return $this->name;
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