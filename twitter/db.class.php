<?php

    echo $_POST['username_up'];
    echo '<br/>';
    echo $_POST['password'];

    class Db{

        //host
        private $host = 'localhost';
        
        //name
        private $name = 'root';
        
        //password
        private $password = ''; //By default it's empty
        
        // database
        private $database = '';
    }

?>