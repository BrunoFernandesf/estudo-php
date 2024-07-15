<?php 

session_start();

echo $_SESSION['nome'];

session_unset($_SESSION['nome']);
echo $_SESSION;

?>