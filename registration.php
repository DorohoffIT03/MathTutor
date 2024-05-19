<?php
require_once __DIR__ . '/src/functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MathTutor</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <meta name="description" content="Сайт репетора з математики">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d84085bef3.js" crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const userTypeSelect = document.getElementById('usertype');
            const teacherPasswordDiv = document.getElementById('teacherPasswordDiv');
            
            userTypeSelect.addEventListener('change', function () {
                if (userTypeSelect.value === 'tutor') {
                    teacherPasswordDiv.style.display = 'block';
                } else {
                    teacherPasswordDiv.style.display = 'none';
                }
            });
        });
    </script>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header_top">
                <div class="block">
                    <nav class="nav">
                        <div class="nav_logo">
                            <a href="index.php">MathTutor</a>
                        </div>

                        <div class="nav_tutors">
                            <a href="tutors.php">Вчителі</a>
                        </div>

                        <div class="nav_reg_auto">
                            <a class="button" href="login.php">Увійти</a>
                        </div>
                    </nav>
                </div>
            </div>    
        </div>

        <div class="container_login">
            <div class="login">
                <h1>Реєстрація</h1>
                <form action="src/actions/register.php" method="post" enctype="multipart/form-data">
                    <label for="firstname">Ім'я</label>
                    <input type="text" name="name" id="name" placeholder="Введіть Ім'я" <?php mEroor('name'); ?>>
                    <?php if(validationError('name')):?>
                        <small><?php getErrorMsg('name')?></small>
                    <?php endif;?>

                    <label for="lastaname">Прізвище</label>
                    <input type="text" name="surname" id="surname" placeholder="Введіть Прізвище" <?php mEroor('surname'); ?>>
                    <?php if(validationError('surname')):?>
                        <small><?php getErrorMsg('surname')?></small>
                    <?php endif;?>
                    
                    <label for="password">Пароль</label>
                    <input type="password" name="password" id="password" placeholder="Введіть Пароль" <?php mEroor('password'); ?>>
                    <?php if(validationError('password')):?>
                        <small><?php getErrorMsg('password')?></small>
                    <?php endif;?>

                    <label for="usertype">Тип Користувача</label>
                    <select name="usertype" id="usertype" <?php mEroor('usertype'); ?>>
                        <option value="" disabled selected>Оберіть тип Користувача</option>
                        <option value="student">Учень</option>
                        <option value="tutor">Вчитель</option>
                    </select>
                    <?php if(validationError('usertype')):?>
                        <small><?php getErrorMsg('usertype')?></small>
                    <?php endif;?>

                    <div id="teacherPasswordDiv" style="display: none;">
                    <label for="teacher_password">Пароль для вчителя</label>
                    <input type="password" name="teacher_password" id="teacher_password" placeholder="Введіть пароль для вчителя">
                    <?php if(validationError('teacher_password')):?>
                        <small><?php getErrorMsg('teacher_password')?></small>
                    <?php endif;?>
                    </div>

                    <label for="image">Фото профілю</label>
                    <input type="file" name="avatar" id="avatar" <?php mEroor('password'); ?>>
                    <?php if(validationError('avatar')):?>
                        <small><?php getErrorMsg('avatar')?></small>
                    <?php endif;?>

                    <button class="login_button" type="submit">Зареєструватись</button>
                    <a href="login.php">Вже маєте акаунт?</a>
                </form>

                <?php dieValidation() ?>
            </div>
        </div>
    </header>
    
    
    <footer class="footer" id="contacts">
        <div class="footer_container">
            <div class="footer_col">
                <div class="footer_logo">
                    <a class="logo" href="index.php">MathTutor</a>
                </div>
            </div>
            
            <div class="footer_col">
                <h1>Час роботи</h1>
                <p><i class="fa-regular fa-clock"></i>Пн - Пт з 12:00 до 18:00</p>
                <p><i class="fa-regular fa-clock"></i>Сб - Нд з 10:00 до 16:00</p>
            </div>

            <div class="footer_col">
                <h1>Контакти</h1>
                <p><i class="fa-solid fa-phone-volume"></i>+38 (xx) xxx-xx-xx</p>
                <p><i class="fa-solid fa-phone-volume"></i>+38 (xx) xxx-xx-xx</p>
                <p><i class="fa-solid fa-phone-volume"></i>+38 (xx) xxx-xx-xx</p>
            </div>

            <div class="footer_col">
                <h1>Соціальні мережі</h1>
                <div class="social_links">
                    <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://uk-ua.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://web.telegram.org/"><i class="fa-brands fa-telegram"></i></a>
                </div>
            </div>
        </div>
    </footer>    
</body>
</html>