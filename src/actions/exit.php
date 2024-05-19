<?php

setcookie('user', $user['name'], time() - 3600 * 24 * 30, "/");
setcookie('user_type', $user['user_type'], time() - 3600 * 24 * 30, "/");
header('Location: /');
