<?php

require_once './DB.php';

$database = new DatabaseConnection();
$database->connect();
$users = $database->getUsers();

$redis = new Redis();
$redis->connect('cache', 6379);



$serializedUsers = serialize($users);

$redis->set('users_set', true);
$redis->rpush('users', $serializedUsers);


echo 'done';