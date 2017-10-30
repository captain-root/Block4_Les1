<?php


    $pdo = new PDO ("mysql:host=localhost;dbname=global", 'saltanov', 'neto1341');


    $sql_get = "SELECT * FROM books";

foreach ($pdo->query($sql_get) as $row) {
    echo $row['name'] . "<br />";
}


?>
