<?php

    // Used to define a class
    class User {
        // properties (attributes)
        public $name;

        // methods (functions)
        public function sayHello() {
            return $this->name .' says hi! 👋🏻';
        }
    }

    // Instatiate a User Object from the User Class
    $user1 = new User();
    $user1->name = 'Jason';
    echo $user1->name;
    echo '<br />';
    echo $user1->sayHello();

    echo '<br />';

    // create new user
    $user2 = new User();
    $user2->name = 'Kristen';
    echo $user2->name;
    echo '<br />';
    echo $user2->sayHello();