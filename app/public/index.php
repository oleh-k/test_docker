<?php

require_once './DB.php';

echo 'Hello World';

$database = new DatabaseConnection();
$database->connect();
$users = $database->getUsers();


echo '<br><a href="/set_cache.php">set_cache >> </a>';
echo '<br><a href="/clear_cache.php">clear_cache >> </a>';
echo '<br><a href="/view_cache.php">view_cache >> </a>';
echo '<hr>';

include_once './view.php';