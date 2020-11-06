<?php
    class User
    {
        public $name;
        public $username;
        public $email;

        function addFriend($name)
        {
            echo $name . " Added a friend</br>";
        }
        function postStatus($name)
        {
            echo $name . " Posted a status</br>";
        }
    }

    $name = "Pauline Jane Llagas";
    $username = "paulinellagas";
    $email = "paulinellagas@gmail.com";
    
    echo "Name: " . $name . "</br>";
    echo "Username: " . $username . "</br>";
    echo "Email: " . $email . "</br></br>";

    $user = new User();
    $user->addFriend($name);
    $user->postStatus($name);

?>
