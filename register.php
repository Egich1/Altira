<?php

    $conn= new mysqli("localhost", "root", "root", "altiral");
    $conn -> query("SET NAMES utf8");

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $login = $_POST["login"];
        $pass = md5($_POST["pass"]);
        $email = $_POST["email"];
        $number = $_POST["number"];
        $country = $_POST["country"];
        $birthday = $_POST["birthday"];
        $sex = $_POST["sex"];

        $sql = "SELECT * FROM `users` WHERE `login`='$login' OR `email`='$email' OR `number` = '$number'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            echo "Пользователь с таким же логином или почтой или телефоном уже существет";
        }   else {
            $sql = "INSERT INTO `users` (`name`, `surname`, `login`, `pass`, `email`, `number`, `country`, `birthday`, `sex`) VALUES ('$name', '$surname', '$login', '$pass', '$email', '$number', '$country', '$birthday', '$sex')";
            if ($conn->query($sql) === TRUE){
                echo "Поздравляем, вы успешно зарегестрировались!";
                header("Location: login.php");
                exit();
            }   else {
                echo "Ошибка регистрации: " . $conn->error;
            }
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
        <div class="form form__signin" method="post">
            <h3 class="form__title">Регистрация</h3>
            <ul class="social-icons">
                <li><a class="social-icon-fb" href="404.html" title="..." target="_blank" rel="noopener"></a></li>
                <li><a class="social-icon-vk" href="404.html" title="..." target="_blank" rel="noopener"></a></li>
                <li><a class="social-icon-telegram" href="404.html" title="..." target="_blank" rel="noopener"></a></li>
                <li><a class="social-icon-youtube" href="404.html" title="..." target="_blank" rel="noopener"></a></li>
            </ul>
            <p style="color: #777; font-size: 14px;">или ты можешь использовать свою почту для регистрации</p>
            <form action="" method="post">
                <label for="name">Имя:</label>
                <input class="form__input" type="text" id="name" name="name" ><br><br>
                <label for="surname">Фамилия:</label>
                <input class="form__input" type="text" id="surname" name="surname"><br><br>
                <label for="login">Логин:</label>
                <input class="form__input" type="text" id="login" name="login" required><br><br>
                <label for="pass">Пароль:</label>
                <input class="form__input" type="password" id="pass" name="pass" required><br><br>
                <label for="email">Почта:</label>
                <input class="form__input" type="email" id="email" name="email" required><br><br>
                <label for="number">Телефон:</label>
                <input class="form__input" type="tel" id="number" name="number" required><br><br>
                <label for="country">Город:</label>
                <input class="form__input" type="text" id="country" name="country"><br><br>
                <label for="birthday">Дата рождения:</label>
                <input class="form__input" type="date" id="birthday" name="birthday"><br><br>
                <div class="sexx">
                    <label for="sex">Пол:</label>
                    <input type="radio" id="male" name="sex" value="male">
                    <label for="male">Мужской</label>
                    <input type="radio" id="female" name="sex" value="female">
                    <label for="female">Женский</label><br>
                </div>
                <div class="niz">
                    <a class="sil" href="login.php">Уже есть аккаунт</a>
                    <button class="form__btn form__btn_signup" type="submit">Зарегестрироваться</button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>