<?php
header('Content-Type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'en_US.UTF-8');

if (!isset($argv) && $_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Error: Not a POST request nor run from command line.");
}

system('cd ' . DEPLOY_PATH. '; php program.php');

?>
