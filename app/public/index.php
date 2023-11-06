<?php

require_once './DB.php';

echo 'Hello World';

$database = new DatabaseConnection();
$database->connect();
$users = $database->getUsers();

echo '<table>';
echo '<tr><th>name</th><th>desc</th></tr>';

foreach ($users as $key => $user) {

    $name = $user['name'];
    $desc = $user['desc'];

    echo "<tr><td>$name</td><td>$desc</td></tr>";

}
echo '</tr>';
