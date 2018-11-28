<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
        <link rel="icon" href="img/king.jpg">
		<!--<link rel="stylesheet" type="text/css" href="estilo.css">-->
		<title>Funny Messages</title>
	</head>

	<body>
        <div class="container">
            <h1>List of products</h1>
            <div class="row-divisor"></div>
            <form role="form" action="formTest2.php" method="post">
                <label for="id_produto">Choose your product</label>
                <select name="id_produto">
                    <option value="1">desk</option>
                    <option value="2">table</option>
                    <option value="3">chair</option>
                    <option value="4">computer</option>
                </select>
                <button type="submit">See details</button>
            </form>
            <br />
            <br />
            
           
        
        
        
        </div>
        
        
	</body>
    <style>
        body, html{
            margin: 0;
            border: 0;
            padding: 0;
        }
        .container{
            margin-left: 5%;
            font-family:sans-serif;
            color: #777;
            font-weight: lighter;
        }
        .row-divisor{
            width: auto;
            margin: 30px 0;
            margin-right: 8%;
            border-bottom: 1px solid #f4f4f4;
        }
        label{
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }
        select{
            width: auto;
            padding: 5px 15px;
            border-radius: 5px;
            background-color: #555;
            color: #f3f3f3;
        }
        select:focus-within{
            outline: none;
            box-shadow:  0px 0px 10px -1px midnightblue;
        }
        button:hover{
            background-color: #888;
        }
        button{
            padding: 6px 15px;
            width: auto;
            border-radius: 5px;
            background-color: #555;
            color: #f3f3f3;
            box-shadow: none;
            border: 1px solid #999;
            outline: none;
            cursor: pointer;
        }
        button:active{
            background-color: #777;
            transform: scale(.9);
        }
    </style>
</html>