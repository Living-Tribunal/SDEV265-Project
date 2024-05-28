<?php

require_once 'requires/config.php';
require_once 'requires/login_session.php';

$login_error = $_SESSION["login_error"] ?? null;

?>

<!DOCTYPE html>
<html>
<head>
<!-- <link rel="stylesheet" href="../css/style.css"> -->
<link rel="stylesheet" href="../Jeopardy/css/style.css">
<head><meta charset="UTF-8"></head>
<head>
</head>
<body class="login">
    <div class="pass">
    <div class="error">
        <?php if($login_error): ?>
            <p class="error"><?= $login_error ?></p>
        <?php endif; ?>
    </div>
    <label id="login_label">Speak friend, then enter.</label><br><br>
        <form method="POST" action="login.php" id="login">
            <label>Username:</label>
            <input class="password"  type="text" size="50" name="user" placeholder="Enter Your Username">
            <label>Password:</label>
            <input class="password" type="password" size="50" name="password" placeholder="Enter Your Password">
            <input type="hidden" placeholder="Enter Your Username" name="login_token" value="<?= htmlspecialchars($login_token)?>">
            <button onclick="" id="login_button" type="submit" value="Login">Login</button>
        </form>
    </div>
</body>
</html>
