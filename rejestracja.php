<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Michał</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    
   

    
    if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'register') {
        $db = new mysqli("localhost", "root", "", "auth");
        $email = $_REQUEST['Email'];
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $name = $_REQUEST['Name'];
        $surname = $_REQUEST['Surname'];

        $password = $_REQUEST['Password'];
        $passwordRepeat = $_REQUEST['PasswordRepeat'];
        if ($password == $passwordRepeat) {
            $q = $db->prepare("INSERT INTO dane VALUES (NULL, ?, ?, ?, ?)");
            $passwordHash = password_hash($password, PASSWORD_ARGON2I);
            $q->bind_param("ssss", $email, $passwordHash, $name, $surname);
            $result = $q->execute();
            if ($result) {
                echo "Konto zostało utworzone pomyślnie";
            } else {
                echo "Odmowa";
            }
        } else {
            echo "Hasła nie są identyczne";
        }
    }
    ?>

   
</div>
    </form>
<br>

<div class="d5">
    <h1>Zrejestruj Się</h1>
    <form action="login.php" method="post">
        <br>
         <div class="float-left" label for="emailInput">Email:</label> </div>
         <input type="email" name="Email" id="emailInput"> <br>
         <div class="float-left" label for="PasswordInput">Hasło:</label> </div>
         <input type="password" name="Password" id="passwordInput">  <br>
         <div class="float-left" label for="passwordInput">Ponownie hasło:</label> </div>
         <input type="password" name="PasswordRepeat" id="PasswordRepeatInput"> <br> <br> 
         <div class="float-left" label  for="NameInput">Imię:</label> </div>
         <input type="text" name="Name" id="NameInput"> <br>  
         <div class="float-left" label for="ForenameInput">Nazwisko:</label> </div>
         <input type="text" name="Surname" id="SurnameInput">
         <input type="hidden" name="action" value="register">
         <button type="submit" class="btn btn-primary"> Zarejestruj </button>
    </form>
</div>
</body>

</html>