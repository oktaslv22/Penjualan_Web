<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" and $password == "admin1") {
    header('Location: index.php');
    exit;
} else {
    echo "Username atau Password Salah !!!";
}

?>