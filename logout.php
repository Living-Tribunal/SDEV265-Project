<?php
/*
 * This processing page handles the logout process for the application.
 * It destroys the user's session and then redirects the user to the home page.
 */
require_once 'requires/config.php';
require_once 'requires/login_session.php';

logout();
header("Location: login_page.php");
exit();

