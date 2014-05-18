<?php

include_once('config.php');

function endswith($string, $test) {
    $strlen = strlen($string);
    $testlen = strlen($test);
    if ($testlen > $strlen) return false;
    return substr_compare($string, $test, -$testlen) === 0;
}

if (!endswith($_FILES['file']['name'], '.png')) {
    $_FILES['file']['name'] = $_FILES['file']['name'] . '.png';
}

mkdir(UPLOADED_PATH, 0777, true);
move_uploaded_file($_FILES['file']['tmp_name'], UPLOADED_PATH.$_FILES['file']['name']);

?>
