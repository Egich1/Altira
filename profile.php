<?php
    session_start();
	$message = '';
	$username = $_SESSION['login'];
	$conn= new mysqli("localhost", "root", "root", "altiral");
    $conn -> query("SET NAMES utf8");
	$sql = "SELECT * FROM `users` WHERE `login` = '$username'";
	$dataArray = [];

	if ($result = $conn->query($sql)) {
		$rowsCount = $result->num_rows;
		foreach ($result as $row) {
		  $dataArray = $row;
		}
	  } else {
		echo $conn->error;
	}

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $country = $_POST["country"];
        $birthday = $_POST["birthday"];

		$sql = "UPDATE `users` SET `name`='$name', `surname`='$surname', `country`='$country', `birthday`='$birthday' WHERE `login`='$username' ";
		if ($conn->query($sql) === TRUE){
			$message = "Вы успешно изменили профиль!";
		}   else {
			$message =  "Ошибка регистрации: " . $conn->error;
		}
	}


    $conn->close();

    if (!isset($_SESSION["login"])) {
        header("Locattion: login.php");
        exit;
    }

?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Altiral</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="css/style-prof.css">
</head>

<body>
	<div class="kontainer">
		<div class="container-pre-head flex-column flex-sm-row">
			<div class="number">
				<p>7(999)999 99-99</p>
			</div>
			<div class="polit text-center text-lg-start">
				<p>
					ПОЛИТИКА СОГЛАШЕНИЯ | <a href="img/polzovatel.pdf" download>ЧИТАТЬ БОЛЬШЕ</a>
				</p>
			</div>
		</div>

		<header class="header">
			<nav class="navbar navbar-dark navbar-expand-lg">
				<div class="container">
					<a class="navbar-brand me-5 me-0" href="index-log.php"><img src="./img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse py-2" id="navbarNav">
						<ol class="navbar-nav w-100 me-5 me-0">
							<ul class="ps-0 pe-0 pe-xl-5 d-flex align-items-center flex-column flex-lg-row text-center text-lg-start d-flex d-lg-none d-xxl-flex">
								<li class="nav-item">
									<a class="nav-link active" href="#profil">Личная информация</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#adres">Адрес</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#pay">Оплата</a>
								</li>
							</ul>

							<ul class="ps-0 d-flex align-items-center flex-column flex-lg-row text-center text-lg-start">
								<li class="nav-item">
									<a class="nav-link" href="index-log.php">Главная</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="about.php">О нас</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="service.php">Услуги</a>
								</li>
								<div class="dlina"></div>
								<li class="nav-item">
									<a class="nav-link">Добро пожаловать, <?php echo $_SESSION["login"]; ?>!</a>
								</li>
								<li class="nav-item">
									<a class="btn btn-white py-2 px-4" href="logout.php">Выйти</a>
								</li>
							</ul>
						</ol>
					</div>
				</div>
			</nav>
		</header>

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-9 col-xl-8 col-xxl-7">
					<div class="prew">
						<div class="hr">
							<hr style="width: 55px; height: 10px; color: #FF5E0E; margin-right: 15px; opacity: 1;">
							<h2 class="text-center">ПОЧТИ ГОТОВО</h2>
							<hr style="width: 55px; height: 10px; color: #FF5E0E; margin-left: 15px; opacity: 1;">
						</div>
						<div class="txt">
							<h1>Введите cвою личную информацию</h1>
						</div>
					</div>

					<div class="container-profil" id="profil">
						<div class="log">
							<h3>Личная информация</h3>
						</div>
						<form method="post">
							<label for="name">Имя:</label>
							<input class="form__input" type="text" id="name"  value="<?= $dataArray['name'] ?>" name="name"><br><br>
							<label for="surname">Фамилия:</label>
							<input class="form__input" type="text" id="surname"  name="surname" value="<?= $dataArray['surname'] ?>"><br><br>
							<label for="country">Город:</label>
							<input class="form__input" type="text" id="country"  name="country" value="<?= $dataArray['country'] ?>"><br><br>
							<label for="birthday">Дата рождения:</label>
							<input class="form__input" type="date" id="birthday"  name="birthday" value="<?= $dataArray['birthday'] ?>"><br><br>
							<div class="niz">
								<button class="form__btn form__btn_signup" type="submit">Подтвердить изменения</button>
								<a><?php echo $message?></a>	
							</div>
						</form>

						<hr style="width: 100%; height: 15px; color: gray; opacity: 1;">
					</div>

					<div class="container-pay" id="pay">
						<div class="log">
							<h3>Срок оплаты — Информация об оплате</h3>
						</div>
						<form action="pay.php" method="post" name="form">
							<p>НОМЕР БАНКОВСКОЙ КАРТЫ</p>
							<input name="number" type="number" placeholder="1111 11111 1111 1111" />
							<!-- <div class="pays">
								<div class="srok">
									<p>СРОК ОКОНЧАНИЯ</p>
									<div class="input">
										<input name="number" type="number" placeholder="11" />
										<span>/</span>
										<input name="number" type="number" placeholder="1111" style="width: 75px;" />
									</div>
								</div>
								<div class="cvc">
									<p>CVC</p>
									<input name="number" type="number" placeholder="111" />
								</div>
							</div> -->
							<div class="pays mt-3 row">
								<div class="col-12 col-sm-5">
									<p>СРОК ОКОНЧАНИЯ</p>
									<input type="number" class="pays-date" name="mon" placeholder="11">
									<span>/</span>
									<input type="number" class="pays-date" name="year" placeholder="11">
								</div>
								<div class="col-12 col-sm-6">
									<p>CVC</p>
									<input type="number" name="cvc" placeholder="123">
								</div>
							</div>
							<p>ИМЯ НА КАРТОЧКЕ</p>
							<input name="name" type="text" placeholder="IVAN IVANOV" />
							<div class="info">
							<p>Для завершения вашего членства нам требуются две формы авторизованного платежа: кредитная карта для оплаты, подлежащей оплате сегодня, и банковский счет (чековый или сберегательный) для ваших регулярных и ежегодных взносов.</p>
							<p>Мы снимем деньги с этой карты Сегодня и будем использовать Ваш банковский счет для периодических платежей.</p>
							<p>Мы также сохраним эту кредитную карту в файле в качестве резервной копии вашей учетной записи. Мы будем использовать его, если мы не сможем обработать ваши ежемесячные периодические взносы или ежегодные взносы на ваш банковский счет в файле.</p>
						</div>
						<input type="submit" value="Оплатить" style="background-color: #1F1F1F; color: white;" />
						</form>

					</div>
				</div>
			</div>
		</div>


		<div class="container-foot">
			<div class="blok1">
				<div class="soc">
					<a href="404.php"><img src="img/Facebook2.png"></a>
					<a href="404.php"><img src="img/Instagram.png"></a>
					<a href="404.php"><img src="img/vk2.png"></a>
					<a href="404.php"><img src="img/YouTube2.png"></a>
				</div>
				<div class="copyright text-center text-md-start">
					<p class="odin">© 2023 Сделано Егором</p>
					<p class="dwa">Все права защищены</p>
				</div>
			</div>
			<div class="blok2">
				<div class="reg">
					<a>Вы зашли под, <?php echo $_SESSION["login"]; ?></a>
					<span class="palka">/</span>
					<a href="logout.php">Выйти</a>
				</div>
				<div class="reg">
					<a href="#">Вернуться в начало</a>
				</div>
				<div class="document">
					<p><a href="img/polzovatel.pdf" download>УСЛОВИЯ ИСПОЛЬЗОВАНИЯ * ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ * НАСТРОЙКИ ФАЙЛОВ COOKIE</a></p>
				</div>
			</div>
		</div>
	</div>
	<script src="js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
</body>

</html>