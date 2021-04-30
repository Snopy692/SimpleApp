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


        public function getId() :int
        {
            return $id;
        }

        public function setUid(int $uid)
        {
            $this->uid = $uid;
        }

        public function getUid() :int
        {
            return $this->uid;
        }

        public function setEmail(string $email)
        {
            $this->email = $email;
        }

        public function getEmail() :string
        {
            return $this->email;
        }        

        
        public function setFirstName(string $firstName)
        {
            $this->firstName = $firstName;
        }

        public function getFirstName() :string
        {
            return $this->firstName;
        }   

        public function setLastName(string $lastName)
        {
            $this->firstName = $lastName;
        }

        public function getLirstName() :string
        {
            return $this->lastName;
        } 

   }
?>