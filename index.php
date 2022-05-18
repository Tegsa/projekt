<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="d1">
    <?php if(empty($_SESSION['user'])) : ?>
    <form action="login.php" method="post">
        <input type="text" name="login" />
        <br/>
        <input type="password" name="password" />
        <br/>
       
</a> 

        <button class="btn btn-primary" type="subbmit">Zaloguj się</button>
    </form>
    <?php else : ?>
        <p>Zalogowano poprawnie, <?=$_SESSION['user']?></p>
    </div>
       <div>   
  <div class="topnav">
  <img class="logo" src ="https://st2.depositphotos.com/3487615/6239/v/450/depositphotos_62392483-stock-illustration-orange-fruit-logo.jpg">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
 <a href="logout.php">Wyloguj</a>
 
        <?php endif; ?>
    </div>
</a>
    </form>
</div>

</body>
</html>
