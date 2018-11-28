<?php
    require_once("validation.php");

    $user_given = $_POST["user"];
    $password_given = $_POST["password"];

    $validation_result = userValidation($user_given, $password_given);

        if($validation_result){
            echo "Access allowed";
        } else {
            echo "Access denied";
        }


?>