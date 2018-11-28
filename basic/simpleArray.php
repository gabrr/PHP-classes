<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
        <link rel="icon" href="img/king.jpg">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Mensagens divertidas</title>
	</head>

	<body>
        <?php
            $test = array('a' => 'am I doing right?');
        print_r($test['a']);
        //This is a simple array;
        
        
        //its possible to do multi indexes as well.
         $test2 = array('a' => 'what do you think?', 'b' => 'yes I\'m doing' );
       
        echo "<br />";
        echo "<br />";
        print_r($test2['a']);
        echo "<br />";
        echo "<br />";
        print_r($test2['b']);
        
        echo "<br />";
        echo "<br />";
        
        require_once("func_for_discounts.php");
        
        echo "The price now is R$: ".fuc_discount(900, 15).",00";
        
        
        
        ?>
	</body>
</html>