<?php

$redis = new Redis();
$redis->connect('cache', 6379);

if (!empty($redis->get('users_set'))) {
    $serializedUsers = $redis->lpop('users');

    $users = unserialize($serializedUsers);

    if (is_array($users)) include_once './view.php';

} else {
    echo 'cache is empty';
}