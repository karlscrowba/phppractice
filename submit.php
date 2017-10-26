<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . "commons.php";

if(!empty($_POST["email"]) && !empty($_POST["id"]) && !empty($_POST["name"]) && !empty($_POST["last"]) ) {
    extract($_POST);
    $str = $name . "," . $last . "," . $email . "," . $id. "\n";
    $content = file_put_contents("data.csv", $str, FILE_APPEND | LOCK_EX);

    if(!$content)
        echo "Could not write data to file.";
    else
        header("Location: /index.php");
} else {
    echo "You are missing one or more fields.";
}