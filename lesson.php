<?php 

    require_once __DIR__. '/src/functions.php';
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

                        <?php 
                        if($_COOKIE['user'] == ''):
                        ?>
                            <div class="nav_reg_auto">
                                <a class="button" href="login.php">Увійти</a>
                            </div>
                        <?php else:?>

                            <div class="nav_account">
                                <a id="accountAvatar" class="accountAvatar" href="account.php">
                                    <img class="account_avatar" src="<?php echo $_SESSION['avatarPath']?>" alt="">   
                                </a>
                                <ul>
                                        <li><a href="/account.php">Особистий кабінет</a></li>
                                        <li><a href="/lesson.php">Урок</a></li>
                                        <li><a href="/shedule.php">Розклад</a></li>
                                        <li><a href="/training.php">Навчальні матеріали</a></li>
                                        <li><a href="/src/actions/exit.php">Вихід</a></li>
                                </ul>
                            </div>                         

                        <?php endif;?>  

                    </nav>
                </div>
            </div>  
        </div>
        
        <div class="lesson_content">
        <video id="screenVideo" autoplay playsinline></video>
    <button id="startButton">Почати демонстрацію екрана</button>

    <script src="/src/app.js"></script>
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