<?php

//what is session
// use to manage the information across the different pages

session_start();
$_SESSION['username'] = "Shrey";
$_SESSION['category'] = "Books";
echo "we have saved your session<br>";

?>