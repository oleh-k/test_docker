<?php

$redis = new Redis();
$redis->connect('cache', 6379);

$redis->del('users_set');
$redis->del('users');