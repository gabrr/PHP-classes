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
       
           
            <h1>Come on, don't you know how to read?</h1>
            <h2>&alefsym;</h2>
            
        
        </div>
        
    <script type="text/javascript">
        var exitButton = document.querySelector("h2");
        exitButton.addEventListener("click", function(){
            var container = document.querySelector(".container");
            
            container.style.display = "none";
        })
    </script>    
	</body>
    <style>
        body, html{
            margin: 0;
            border: 0;
            padding: 0;
        }
        h1{
            position: absolute;
            left: 50%;
            top: 50%;
            color: #666;
            transform: translate(-50%, -50%);
        }
        h2{
            color: #888;
            position: absolute;
            top: 50px;
            right: 80px;
            padding: 50px;
            cursor: pointer;
        }
        .container{
            transition: 1s;
            transition-duration: .5s;
            background-color: #000;
            height: 100vh;
            width: 100%;
            position: absolute;
            z-index: 999999;
            top: 0;
            left: 0;
        }
    
        }
    </style>
</html>