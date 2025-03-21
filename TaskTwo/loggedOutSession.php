<?php

session_start();
session_unset();
session_destroy();
echo "You are SuccessFully Loggout";