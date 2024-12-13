<?php

session_start();
session_unset();
session_destroy();
echo "yor are logged out<br>";
?>