<?php

//start the session
session_start();
$_SESSION['username'] = 'shrey';
$_SESSION['password'] = 'Shrey@007';
echo "Session ID: " . session_id() . "<br>"; // Session ID is store by the HTTPS Protocol
echo "Session ID from Cookie: " . $_COOKIE['PHPSESSID'] . "<br>";
$session_path = session_save_path();
echo $session_path . "<br>";
echo "Your session was saved";