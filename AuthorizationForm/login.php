<?php
//$login = !empty($_GET['login']) ? $_GET['login'] : '';
//$password = !empty($_GET['password']) ? $_GET['password'] : '';
$login = $_POST['login'];
$password = $_POST['password'];

if($login ==='admin' && $password ==='Pa$$w0rd')
{
    $isAuthorized = true;
}
else
{
    $isAuthorized = false;
}

?>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Результат авторизации</title>
</head>
<body>
<p>
	<?php
		if ($isAuthorized === true)
		{
        	echo 'Добро пожаловать на сайт!';
		}
		else {
        if ($login !== 'admin' && $password === 'Pa$$w0rd')
            echo 'Неверный логин';
        else if ($login === 'admin' && $password !== 'Pa$$w0rd')
            echo 'Неверный пароль';
		else echo 'Неверный логин и пароль';
		}
	?>
	<br>
	Переданный логин: <?= $login ?>
	<br>
	Переданный пароль: <?= $password ?>
</p>
</body>
</html>
