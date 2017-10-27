<?php
    require_once __DIR__ . "/testclass.php";

    $user_info = array(
        "first" => $_GET["first"],
        "last" => $_GET["last"],
        "email" => $_GET["email"],
        ""
    );
    $new_user = User::create($user_info);

    if($new_user) {
        echo "user created!";
    } else {
        echo "something went wrong!";
    }