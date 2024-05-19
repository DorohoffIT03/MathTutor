<?php 

require_once __DIR__ . '/../functions.php';

// отримуємо дані з $_POST
$name = $_POST['name'];
$surname = $_POST['surname'];
$password = $_POST['password'];
$usertype = $_POST['usertype'];
$avatar = $_FILES['avatar'];
$teacherpassword = $_POST['teacher_password'];
// валідація

if(empty($name)) {
    addValidationError('name', 'Невірне введення');
}

if(empty($surname)) {
    addValidationError('surname', 'Невірне введення');
}

if(empty($password)) {
    addValidationError('password', 'Невірне введення');
}

if(empty($usertype)) {
    addValidationError('usertype', 'Оберіть тип користувача');
}

if($usertype == 'tutor') {
    if ($teacherpassword != '5555') {
        addValidationError('teacher_password', 'Невірне введення');
    }
}


if(!empty($_SESSION['validation'])) {
    redirect('/registration.php');
}


if(!empty($avatar)) {
    $types = ['image/jpeg', 'image/png'];
    
    if(!in_array($avatar['type'], $types)) {
        addValidationError('avatar', "Файл не вірного типу");
        
    }

    if($avatar['size'] / 1000000 >= 5) {
        addValidationError('avatar', "Фото повинно бути менше 5МБ");
    }
}



if(!empty($avatar)) {
    $ext = pathinfo($avatar['name'], PATHINFO_EXTENSION);
    $filename = 'avatar_' . time() . ".$ext";

    if(!move_uploaded_file($avatar['tmp_name'], "../../img/upload/$filename")) {
        die("Помилка при завантаженні файла");
    }
}

$imagepath = 'img/upload/' . $filename;
$password = md5($password . "12dasdgtw4");

//$mysql = new mysqli('MySQL-5.5', 'root', '', 'MathTutor'); // локальна бд
$mysql = new mysqli('localhost', 'mathtutortest', 'Mathtutortest1', 'dorohoff2003'); // хостингова бд
$mysql->query("INSERT INTO `Users`( `name`, `surname`, `password`, `user_type`, `avatar`) 
                VALUES ('$name', '$surname', '$password', '$usertype', '$imagepath')");

$mysql->close();

header('Location: /login.php');

