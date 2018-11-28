<html>
    <?php
        $lowerCase = "Some words in PHP";
        echo strtolower($lowerCase); //every letter lowercase
        echo '<br />';
        echo '<br />';
        echo strtoupper($lowerCase); //every letter uppercase
        echo '<br />';
        echo '<br />';
        echo ucfirst($lowerCase); //Only the first uppercase if isn't, the others will display as it was wrote.
        echo '<br />';
        echo '<br />';

    ?>
    
    
    
    
    <form role="form" action="stringsTypes.php" method="post">
        <label>CPF: <input name="cpf" type="text" placeholder=" Ex: 123456789-11"></label>
        <button type="submit" value="submit">Send</button>
    </form>
    
    
    <?php
        
        $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '' ;  
        //is going to check rather the input is filled, if it's not or if it's empty.
        $cpf_length = strlen($cpf);
        // it's going to count how many strings characteres it has.
        
        if($cpf_length != 11 && $cpf != ''){
        
            require("warning.php");
            echo "Digit 11 numbers, please";
            
        }
    ?>
    
    
    <!--is_numeric(value) it will check true or false.
    
    A Database doesnt store values with ',' so its used str_replace("replaced", "replaced to", "variable");

    $whatever = "21.5431.545";
    str_replace(",", ".", $whatever);

    But its better to store without points.
    
    $whatever = "21.5431-545";
    $whatever = str_replace(".", "", $whatever);
    $whatever = str_replace("-", "", $whatever);--->
    
    <?php
        
            //0123458....
    $texto = "This is just for test porpuse, I'm gonna print out just a few lines of these text.";
    echo substr($texto, 0, 41)."...";
    ?>
    
    <!------------------- DATE  -------------------->
    <?php
        echo "<br/>";
        echo "<br/>";
        echo date("d.m.Y H:i");
    
        //strtotime  turn a string into time.
        echo "<br/>";
        echo "<br/>";
        $dateOne = "05.05.2018";
        $dateTwo = "10.05.2018";
        
        $timeOne = strtotime($dateOne);
        $timeTwo = strtotime($dateTwo);
        $timeInterval = $timeTwo - $timeOne;
        $timeDay = 24*60*60;
        echo $timeInterval / $timeDay." days of difference";
    ?>
    
    
    
    
    
    <style>
        html{
            padding-top: 200px;
            padding-left: 350px;
        }
    </style>
</html>