<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
        <link rel="icon" href="img/king.jpg">
		<title>Mensagens divertidas</title>
	</head>

	<body>
        <br />
        <br />
        
        <form role="form" action="validated.php" method="post">
            <h1>Login</h1>
            <label for="user">Username</label>
            <input name="user" type="text">
            <label for="password">Password</label>
            <input type="password" name="password">
            <button type="submit" value="login">login</button>
        </form>
        
        
        <form role="form" action="login.php"  method="post">
        <h1>Signup</h1>
            <input type="text" name="username_up" placeholder="tell us your name">
            <input type="text" name="cpf_up" placeholder="tell us your CPF">
            <button type="submit" value="send">Send it</button>
        
        </form>
        <br />
        <br />
        <br />
        <?php
            
            if( isset($_POST["username_up"]) && empty($_POST["username_up"])){
                echo "Fill out the form complete please";
            } else if(isset($_POST["cpf_up"]) && empty($_POST["cpf_up"])){
                echo "Fill the form man please";
            } else if(isset($_POST["cpf_up"]) &&  !is_numeric($_POST["cpf_up"])){
                echo  "Only numbers on CPF";
            }
        
        
        ?>
	</body>
    <style>
        body{
            font-family: sans-serif;
            color: #999;
            background-color: #000;
        }
        label{
            font-size: 14px;
        }
        input{
            border-radius: 40px;
            border: none;
            margin-bottom: 20px;
            margin-top: 5px;
            height: 30px;
            background-color: #333;
        }
        input:focus{
            outline: none;
        }
        input:read-write {
           padding-left: 10px;
            color: #888;
        }
        button{
            width: 100px;
            height: 30px;
            border: none;
            color: #999;
            background-color: #333;
            border-radius: 50px;
            font-size: 16px;
            margin-left: 50%;
            transform: translateX(-50%);
            cursor: pointer;
        }
        
        form{
            width: min-content;
            margin: auto;
        }
        h1{
            margin-top: 100px;
            text-align: left;
        }
    </style>
</html>