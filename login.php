<?php
require_once("db.php");

session_start();
$db = new mysqli("localhost", "root", "", "auth");
if (!empty($_POST['login']) && !empty($_POST['password'])) 
{
    if ($_POST['login'] == USERNAME)

    { 
      if (password_verify($_POST['password'], PASSWORD))
      {
         $_SESSION['user'] = htmlspecialchars($_POST['login']);
      }
    }
}
header('Location: https://localhost/logowanie/index.php');
