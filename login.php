<?php

require_once 'requires/config.php';
require_once 'requires/login_session.php';

$user = $_POST['user'] ?? null;
$password = $_POST['password'] ?? null;
$_SESSION["login_error"] = null;


if ($user === BACKDOOR_USER && $password === BACKDOOR_PASSWORD){
    login();
    header("Location: game_edit_copy.php");
    exit();

} else {
    $_SESSION["login_error"] = "Invalid username or password.";
    header("Location: login_page.php");
    exit();
}
