<?php
require_once("../lib/smartypants.php");
$loc = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];


foreach ($_GET as $key => $value) {
    $$key = stripslashes(trim($value));
    $_GET[$key] = $value;
}
foreach ($_POST as $key => $value) {
    $$key = stripslashes(trim($value));
    $_POST[$key] = $value;
}