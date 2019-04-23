<?php
session_start();
unset($_SESSION['idProfessor']);
header("location: ../login.php");

?>