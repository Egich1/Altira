<?php
    session_start();

    $conn= new mysqli("localhost", "root", "root", "altiral");
    $conn -> query("SET NAMES utf8");


    //Обработка формы 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $login = $_POST["login"];
        $pass = md5($_POST["pass"]);

        $sql = "SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$pass'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $_SESSION["login"] = $login;
            header("Location: index-log.php");
            exit();
        } else {
            $error_message = "Неправильный пароль или логин";
        }
    }

    $conn->close();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altiral</title>
    <link rel="stylesheet" href="css/style-log.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <div class="container-head">
        <div class="logo">
            <a href="index.html"><img src="img/logo-reg.png"></a>
        </div>
    </div>
    <div class="container">
        <div class="form form__signin">
            <h3 class="form__title">Вход</h3>
            <ul class="social-icons">
                <li><a class="social-icon-fb" href="404.html" title="..." target="_blank" rel="noopener"></a></li>
                <li><a class="social-icon-vk" href="404.html" title="..." target="_blank" rel="noopener"></a></li>
                <li><a class="social-icon-telegram" href="404.html" title="..." target="_blank" rel="noopener"></a></li>
                <li><a class="social-icon-youtube" href="404.html" title="..." target="_blank" rel="noopener"></a></li>
            </ul>
            <form action="" method="post">
                <label for="login">Логин:</label>
                <input class="form__input" type="text" name="login"><br>
                <label for="pass">Пароль:</label>
                <input class="form__input" type="password" name="pass">
                <?php if (isset($error_message)) {    ?>
                    <div style="color: red;"><?php echo $error_message; ?></div>
                <?php } ?>
                <div class="niz">
                    <a class="sil" href="register.php">Нет аккаунта</a>
                    <input class="form__btn form__btn_signup" type="submit" value="Войти">
                </div>

            </form>
        </div>
    </div>
</body>

</html>