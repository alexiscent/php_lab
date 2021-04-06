<?php

$style = 'none';
if (isset($_POST['logout'])) {
    unset($_SESSION['login']);
} else {
    if (!isset($_SESSION['login'])) {
        $login = $_POST['login'];
        $pswd = $_POST['pswd'];
        $login = strip_tags($login);
        $pswd = strip_tags($pswd);
        $login = htmlspecialchars($login);
        $pswd = htmlspecialchars($pswd);
        if (trim($login) != '' && trim($pswd) != '') {
            $_SESSION['login'] = $login;
        }
    }
    if (isset($_SESSION['login'])) {
        $style2 = 'none';
        $style = 'flex';
    }
}


?>

<head>
    <title>Аутентифікація</title>
</head>
<main>
    <div class="container" id="mainA">
        <div id="logged" style="display: <?php echo $style?>">
            Ви авторизовані як <?php echo $_SESSION['login'] ?>
            <p></p>
            <form method="post">
                <input type="submit" name="logout" value="Вийти">
            </form>
        </div>
        <form method="post" style="display: <?php echo $style2??'flex'?>;">
            <label for="login">Логін:</label>
            <input type="text" id="login" name="login">
            <p></p>
            <label for="pswd">Пароль:</label>
            <input type="password" id="pswd" name="pswd">
            <p></p>
            <input type="submit" value="Увійти">
        </form>
    </div>
</main>