<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$host = "localhost";
$dbname = "tigris_valley";
$username = "root";
$password = "";

$mysqli = new mysqli(hostname: $host, username: $username, password: $password, database: $dbname);

$name = $_POST['name'];
$last_name = $_POST['last_name'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$money = $_POST['money'];

$sql = "Insert form_data (name, last_name, start_date, end_date, money) VALUES ('$name', '$last_name', '$start_date', '$end_date', '$money')";

if ($mysqli->query($sql) === TRUE) {
    echo "Record added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
$mysqli->close();
?>

    <p><a href="view_data.php"> Show the List </a></p>
</body>
</html>