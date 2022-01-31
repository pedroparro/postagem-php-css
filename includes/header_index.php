<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG - POSTAGENS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <!--header-->
    <header>
        <!--menu-->
            <nav class="navbar">
                <!--logo-->
                <div class="logo"><a href="./index.php" title="Home">Blog</a></div>
                    <ul>
                        <li><a href="./register.php">Cadastrar Postagens</a></li>    
                        <li><a href="./index.php">Exibir Notícias</a></li>
                    </ul>
                <div class="search">
                    <form action="./research.php?id=<?php echo $_GET['titulo']; ?>" method="GET">
                        <input type="text" name="titulo" maxlength="20" required>
                            <button type="submit" id="bt-search"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </nav>
    </header>
       