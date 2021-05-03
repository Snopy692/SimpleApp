<?php

namespace App\Model;

/**
 * Class Client
 *
 * The Client model class sets & gets clients data from the database and returns it to user.
 */
class Client
{
     /**
      * @var integer
      */
     private $id;

     /**
      * @var integer
      */
     private $uid;

     /**
      * @var string
      */
     private $email;

     /**
      * @var string
      */
     private $firstName;

     /**
      * @var string
      */
     private $lastName;

     /**
      * @var string
      */
     private $company;

     /**
      * @var string
      */
     private $street;

     /**
      * @var string
      */
     private $houseNumber;

     /**
      * @var string
      */
     private $flatNumber;

     /**
      * @var string
      */
     private $zipCode;

     /**
      * @var string
      */
     private $city;

     /**
      * @var integer
      */
     private $vatNumber;

     /**
      * Getter for id.
      * 
      * @return int
      */
    public function getId() :int
    {
          return $id;
    }
        
     /**
      * Setter for uid.
      * 
      * @param integer $uid
      */
    public function setUid(int $uid)
    {
           $this->uid = $uid;
    }

          /**
           * Getter for uid.
           * 
           * @var integer
           */
    public function getUid() :int
    {
        return $this->uid;
    }

          /**
           * Setter for email.
           * 
           * @param string $email
           */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

          /**
           * Getter for email.
           * 
           * @var string
           */
    public function getEmail() :string
    {
        return $this->email;
    }        

          /**
           * Setter for firstName.
           * 
           * @param string $firstName
           */
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

          /**
           * Getter for firstName.
           * 
           * @var string
           */
    public function getFirstName() :string
    {
        return $this->firstName;
    }   

          /**
           * Setter for lastName.
           * 
           * @param string $lastName
           */
    public function setLastName(string $lastName)
    {
        $this->firstName = $lastName;
    }

          /**
           * Getter for lastName.
           * 
           * @var string
           */
    public function getLastName() :string
    {
        return $this->lastName;
    }
        
          /**
           * Setter foor company.
           * 
           * @param string $company
           */
    public function setCompany(string $company)
    {
        $this->company = $company;
    }
        
          /**
           * Getter for company
           * 
           * @var string
           */
    public function getCompany() :string
    {
        return $this->company;
    }

          /**
           * Setter for street.
           * 
           * @param string $street
           */
    public function setStreet(string $street)
    {
        $this->street = $street;
    }

          /**
           * Getter for street.
           * 
           * @var string
           */
    public function getStreet() :string
    {
        return $this->street;
    }

          /**
           * Setter for houseNumber.
           * 
           * @param string $houseNumber
           */
    public function setHouseNumber(string $houseNumber)
    {
        $this->houseNumber = $houseNumber;
    }

          /**
           * Getter for houseNumber
           * 
           * @var string
           */
    public function getHouseNumber() :string
    {
        return $this->houseNumber;
    }

          /**
           * Setter for flatNumber
           * 
           * @param string $flatNumber
           */
    public function setFlatNumber(string $flatNumber)
    {
        $this->flatNumber = $flatNumber;
    }

          /**
           * Getter for flatNumber
           * 
           * @var string
           */
    public function getFlatNumber() :string
    {
        return $this->flatNumber;
    }
        
          /**
           * Setter for zipCode
           * 
           * @param string $zipCode
           */
    public function setZipCode(string $zipCode)
    {
        $this->zipCode = $zipCode;
    }

          /**
           * Getter for zipCode.
           * 
           * @var string
           */
    public function getZipCode() :string
    {
        return $this->zipCode;
    }

          /**
           * Setter for city.
           * 
           * @param string $city
           */
    public function setCity(string $city)
    {
        $this->city = $city;
    }

          /**
           * Getter for city
           * 
           * @var string
           */
    public function getCity() :string
    {
        return $this->city;
    }

          /**
           * Setter for vatNumber.
           * 
           * @param string $vatNumber
           */
    public function setVatNumber(int $vatNumber)
    {
        $this->vatNumber = $vatNumber;
    }

    public function getVatNumber() :int
    {
        return $this->vatNumber;
    }

}
