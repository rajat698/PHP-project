<!DOCTYPE html>
<html>
<head>
  <title>Utah City Data</title>
  <style>
    form {
      width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 2px solid #ccc;
      border-radius: 10px;
    }
    label {
      display: block;
      margin-bottom: 10px;
    }
    input[type="text"] {
      width: 90%;
      padding: 10px;
      border: 2px solid #ccc;
      border-radius: 5px;
    }
    input[type="submit"] {
      display: block;
      margin-top: 20px;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <form method="post" action="query.php">
    <label for="text">City</label>
    <input type="text" id="city" name="city" required>
    <input type="submit" value="Submit">
  </form>
</body>
</html>


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