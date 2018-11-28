<?php 

    //setters and getters
    class Person{
       var $name;
        
        function setName($personName){
            $this->name = $personName;
            
        }
        
        function getName(){
            return $this->name;
        }
    }

    $person = new Person();
    $person->setName("Gabriel");
    echo $person->getName();

?>