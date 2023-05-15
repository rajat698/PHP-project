<form action = "query.php" method = "post">
   City: <input type = "text" name = "city", value = "city">
   <input type = "submit">
    </form>

<?php

$city = $_POST["city"];

$connect = mysqli_connect(
    'db',
    'php_docker',
    'password',
    'php_docker'
);

$table_name = "UTAH";

$query = "SELECT * FROM $table_name WHERE CityName = '$city' ";

$response = mysqli_query($connect, $query);

echo "<strong>$table_name: </strong>";
while($i = mysqli_fetch_assoc($response))
{
    echo "<p>CITY ID: ".$i['CId']."</p>";
    echo "<p>CITY NAME: ".$i['CityName']."</p>";
    echo "<p>POPULATION: ".$i['Population']."</p>";
    echo "<p>Number of homes: ".$i['Homes']."</p>";
    echo "<hr>";
}