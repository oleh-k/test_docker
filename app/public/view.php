<?php

echo '<table>';
echo '<tr><th>name</th><th>desc</th></tr>';

foreach ($users as $key => $user) {

    $name = $user['name'];
    $desc = $user['desc'];

    echo "<tr><td>$name</td><td>$desc</td></tr>";

}
echo '</tr>';