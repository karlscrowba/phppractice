<?php

require_once __DIR__ . "/../../libraries/MysqliDb.php";

echo "<pre>";

$db = new MysqliDb("localhost", "root", "", "karl");

/*$data = [
    "name" => "Karl Martin Schkrioba",
    "dob" => "1998-05-24",
    "email" => 'karlschkrioba@gmail.com'
];
$id = $db->insert('users', $data);
if($id)
    echo 'user was created. ID=' . $id;*/


$db->where('id', empty($_GET['user']) ? 2 : intval($_GET['user']));
$user = $db->getOne('users');

$lname = function($name) {
    $e = explode(' ', $name);
    unset($e[0]);
    return $e;
};

$user = array(
    'id' => intval($user['id']),
    'name' => [
        'first' => explode(' ', $user['name'])[0],
        'last' => implode(" ", $lname($user['name'])),
        'full' => $user['name']
    ],
    "dob" => new \DateTime($user['dob'])
);

print_r($user);

echo "</pre>";