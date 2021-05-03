<?php

namespace App/Model

/**
 * Class Car
 *
 * The Car model class sets & gets user data from the database and returns it to user.
 */
class Car
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $fullName;

    /**
     * @var integer
     */
    private $segment;

    /**
     * @var integer
     */
    private $carType;

    /**
     * @var integer
     */
    private $fuelType;

    /**
     * @var integer
     */
    private $transmissionType;

    /**
     * @var integer
     */
    private $seatsNumber;

    /**
     * @var float
     */
    private $fuelConsumption;

    /**
     * @var integer
     */
    private $year;

    /**
     * @var float
     */
    private $acceleration;

    /**
     * @var integer
     */
    private $engineSize;

    /**
     * @var integer
     */
    private $power;

    /**
     * @var integer
     */
    private $trunkCapacity;

    /**
     * @var integer
     */
    private $minDriverAge;

    /**
     * Getter for id.
     * 
     * @var integer
     */
    public function getId() :int
    {
        return $id;
    }

    /**
     * Setter for fullName
     * 
     * @param string $fullName
     */
    public function setFullName(string $fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * Getter for fullName
     */
    public function getFullName() :string
    {
        return $this->fullName;
    }

    /**
     * Setter for segment
     * 
     * @param integer $segment
     */
    public function setSegment(int $segment)
    {
        $this->segment = $segment;
    }

    /**
     * Getter for segment.
     * 
     * @var int
     */
    public function getSegment() :int
    {
        return $this->segment;
    }

    /**
     * Setter for carType
     * 
     * @param int $carType
     */
    public function setCarType(int $carType)
    {
        $this->carType = $carType;
    }

    /**
     * Getter for carType
     * 
     * @var integer
     */
    public function getCarType() :int
    {
        return $this->carType;
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
