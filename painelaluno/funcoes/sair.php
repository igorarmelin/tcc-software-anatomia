<?php
session_start();
unset($_SESSION['idAluno']);
header("location: ../login.php");

?>