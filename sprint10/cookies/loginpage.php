<?php
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css%22%3E <!-- hier koppel je de style sheet--!>
</head>
<body>
<div class="login">
    <h1>Login</h1>
    <form method="post">
        <label for="username"><!--creeër het label username-->
            <i class="fas fa-user"></i>
        </label>
        <input type="text" name="username" placeholder="LeerlingNummer" value="" required value="0123456789"> <!-- een input box waar mensen hun -->
        <label for="password"><!--gebruikers naam in kunnen voeren-->
            <i class="fas fa-lock"></i>
        </label>
        <input type="password" name="password" placeholder="Wachtwoord" required value="Welkom12345!"><!-- de input box voor het wachtwoord-->
        <input type="submit" value="Login">
        <br>Remind Me <input type="checkbox" name="txtCheck" value="your value" <?php if(isset($_POST['txtCheck'])) echo "checked='checked'" ?>  /><br />
    </form><!-- hierboven wordt de onthoud me knop gemaakt-->
    </div>
    </body>
    <?php
$username = $_POST['username'];
$password = $_POST['password'];
if(isset($_POST['txtCheck'])){
    setcookie($username,$username);
}
if($username == isset($_COOKIE[$username]) && $password == "Welkom12345!"){

    header("Location: https://i9ao9.zyrosite.com/");
}
ob_end_flush();
?>
</html>