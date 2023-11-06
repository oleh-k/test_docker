<?php

require_once './DB.php';

echo 'Hello World';

$database = new DatabaseConnection();
$database->connect();
$users = $database->getUsers();

