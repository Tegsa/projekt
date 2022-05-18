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

<h1 class="h1"> Masz juz konto? Zaloguj się! </h1>
<div class="d1">
    <?php if(empty($_SESSION['user'])) : ?>
    <form action="login.php" method="post">
        <input type="text" name="login" />
        <br/>
        <input type="password" name="password" />
        <br/>
        <button class="btn btn-primary" type="subbmit">Zaloguj się</button>
    </form>
    
    <?php else : ?>
        <p>Zalogowano poprawnie, <?=$_SESSION['user']?></p>
    </div>
       <div>   
  
        <?php endif; ?>
    </div>
    
<h2 class="nres"> Nie masz jeszcze konta? </h2>
<div class="rejestracja">
    
          <a class="btn btn-primary" href="http://localhost/logowanie/rejestracja.php">
  Zarejestruj
</a>
    </form>
</div>
</body>
</html>
