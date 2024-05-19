<?php

require_once __DIR__ . '/../functions.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$password = $_POST['password'];
$_SESSION['avatarPath'] = "";
$_SESSION['name'] = "";
$_SESSION['surname'] = "";


if(empty($name)) {
    addValidationError('name', 'Невірне введення');
}

if(empty($surname)) {
    addValidationError('surname', 'Невірне введення');
}

if(empty($password)) {
    addValidationError('password', 'Невірне введення');
}

if(!empty($_SESSION['validation'])) {
    redirect('/login.php');
}

$password = md5($password . "12dasdgtw4");

//$mysql = new mysqli('MySQL-5.5', 'root', '', 'MathTutor'); // локальна бд
$mysql = new mysqli('localhost', 'mathtutortest', 'Mathtutortest1', 'dorohoff2003'); // хостингова бд
$result = $mysql->query("SELECT * FROM `Users` WHERE `name` = '$name' AND `surname` = '$surname' AND `password` = '$password'");
$user = $result->fetch_assoc();
if(empty($user)) {

    addValidationError('password', 'Невірні дані або пароль');
    redirect('/login.php');
}

setcookie('user', $user['name'], time() + 3600 * 24 * 30, "/");
setcookie('user_type', $user['user_type'], time() + 3600 * 24 * 30, "/");
$_SESSION['avatarPath'] = $user['avatar'];
$_SESSION['name'] = $user['name'];
$_SESSION['surname'] = $user['surname'];

$mysql->close();
header('Location: /');

