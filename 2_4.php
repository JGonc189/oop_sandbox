<?php
    class User {
        public $name;
        public $age;

        // php constructor function -- runs when an object is created/instatiated
        public function __construct($name, $age) {
            echo 'Class ' . __CLASS__ . ' instantiated<br />';
            $this->name = $name;
            $this->age = $age;
        }

        public function sayHello() {
            return $this->name . ' says hello👋🏻';
        }

        // php destructor function - called when no other references to a certain object
        // used for cleanup, closing connections, etc
        public function __destruct() {
            echo '<br/><br /> Destructor Ran...';
        }
    }

    $user1 = new User('Jason', 29);

    echo $user1->name .' is '. $user1->age . ' years old..';
    echo '<br />';
    echo $user1->sayHello();
    echo '<br /><br />';

    $user2 = new User('Kristen', 31);
    echo $user2->name .' is '.$user2->age . ' years old..';
    echo '<br />';
    echo $user2->sayHello();