<?php
require_once("../lib/smartypants.php");
$loc = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
if (preg_match('/leadsaber\.com\/mailstripe/', $loc)) {
    header("Location: http://mailstripe.net/build/");
    exit;
}

foreach ($_GET as $key => $value) {
    $$key = stripslashes(trim($value));
}
foreach ($_POST as $key => $value) {
    $$key = stripslashes(trim($value));
}