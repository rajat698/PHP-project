<?php

$connect = mysqli_connect(
    'db',
    'php_docker',
    'password',
    'php_docker'
);

$table_name = "CITIES";

$query = "SELECT * FROM $table_name";

$response = mysqli_query($connect, $query);

echo "<strong>$table_name: </strong>";
while($i = mysqli_fetch_assoc($response))
{
    echo "<p>".$i['title']."</p>";
    echo "<p>".$i['body']."</p>";
    echo "<p>".$i['date_created']."</p>";
    echo "<hr>";
}