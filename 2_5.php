<?php 
    class User {
        private $name;
        private $age;


        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        // allows to return private property
        public function getName() {
            return $this->name;
        }

        // allows to set data in private property
        public function setName($name) {
            $this->name = $name;
        }

        // __get MAGIC method
        public function __get($property) {
            if(property_exists($this, $property)) {
                return $this->$property;
            }
        }

        // __set MAGIC method
        public function __set($property, $value) {
            if(property_exists($this, $property)) {
                $this->$property = $value;
            }
            return $this;
        }
    }

    $user1 = new User('Jason', 29);
    
    // these will cause an error, due to name being a private property...
    // echo $user1->name = 'Jason';
    // echo $user1->name;

    echo $user1->getName(); // will return private name.

    echo $user1->setName('Kristen');
    echo $user1->getName();

    echo $user1->__get('age');

    $user1->__set('age', 31);
    echo $user1->__get('age');



