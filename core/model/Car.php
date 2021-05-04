<?php

namespace App\Model;

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
     * Setter for fuelType
     * 
     * @param int $fuelType
     */
    public function setfuelType(int $fuelType)
    {
        $this->fuelType = $fuelType;
    }

    /**
     * Getter for fuelType
     * 
     * @var integer
     */
    public function getfuelType() :int
    {
        return $this->fuelType;
    }

     /**
     * Setter for transmissionType
     * 
     * @param int $transmissionType
     */
    public function setTransmissionType(int $transmissionType)
    {
        $this->transmissionType = $transmissionType;
    }

    /**
     * Getter for transmissionType
     * 
     * @var integer
     */
    public function getTransmissionType() :int
    {
        return $this->transmissionType;
    }

    /**
     * Setter for seatsNumber
     * 
     * @param int $seatsNumbere
     */
    public function setSeatsNumber(int $seatsNumber)
    {
        $this->seatsNumber = $seatsNumber;
    }

    /**
     * Getter for seatsNumber
     * 
     * @var integer
     */
    public function getSeatsNumber() :int
    {
        return $this->seatsNumber;
    }

    /**
     * Setter for fuelConsumption
     * 
     * @param float $fuelConsumption
     */
    public function setFuelConsumption(float $fuelConsumption)
    {
        $this->fuelConsumption = $fuelConsumption;
    }

    /**
     * Getter for fuelConsumption
     * 
     * @var float
     */
    public function getFuelConsumption() :float
    {
        return $this->fuelConsumption;
    }

    /**
     * Setter for year
     * 
     * @param int $year
     */
    public function setYear(int $year)
    {
        $this->year = $year;
    }

    /**
     * Getter for year
     * 
     * @var integer
     */
    public function getYear() :int
    {
        return $this->year;
    }

    /**
     * Setter for acceleration 
     * 
     * @param float $acceleration
     */
    public function setAcceleration (float $acceleration)
    {
        $this->acceleration = $acceleration;
    }

    /**
     * Getter for acceleration 
     * 
     * @var float
     */
    public function getAcceleration() :float
    {
        return $this->acceleration;
    }
    
    /**
     * Setter for engineSize
     * 
     * @param int $engineSize
     */
    public function setEngineSize(int $engineSize)
    {
        $this->engineSize = $engineSize;
    }

    /**
     * Getter for engineSize
     * 
     * @var integer
     */
    public function getEngineSize() :int
    {
        return $this->engineSize;
    }
    
    /**
     * Setter for power
     * 
     * @param int $power
     */
    public function setPower(int $power)
    {
        $this->power = $power;
    }

    /**
     * Getter for power
     * 
     * @var integer
     */
    public function getPower() :int
    {
        return $this->power;
    }
    
    /**
     * Setter for trunkCapacity
     * 
     * @param int $trunkCapacity
     */
    public function setTrunkCapacity(int $trunkCapacity)
    {
        $this->trunkCapacity = $trunkCapacity;
    }

    /**
     * Getter for trunkCapacity
     * 
     * @var integer
     */
    public function getTrunkCapacity() :int
    {
        return $this->trunkCapacity;
    }
    
    /**
     * Setter for minDriverAge
     * 
     * @param int $minDriverAge
     */
    public function setMinDriverAge(int $minDriverAge)
    {
        $this->minDriverAge = $minDriverAge;
    }

    /**
     * Getter for minDriverAge
     * 
     * @var integer
     */
    public function getMinDriverAge() :int
    {
        return $this->minDriverAge;
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
