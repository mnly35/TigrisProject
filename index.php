<?php

session_start();

if(isset($_SESSION["area_id"]))
{
  $mysqli = require __DIR__ . "/database.php";
  $sql = "SELECT * FROM user WHERE id = {$_SESSION["area_id"]}";
  $result = $mysqli->query($sql);
  $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <title>Form</title>
</head>
<body>
    <form action="process_form.php" method="post">
       <br><br> <label for="name">Name:</label>
        <input type="text" name="name" required>

      <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required>

        <br><br> <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" required>

        <label for="end_date">End Date:</label>
        <input type="date" name="end_date" required>

    <label for="money">Money:</label>
        <input type="text" name="money" required>

        <br><br><input class="submit"type="submit" value="Submit">
    </form>
</body>
</html>