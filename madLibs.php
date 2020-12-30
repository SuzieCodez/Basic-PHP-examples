<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mad Libs</title>
</head>
<body>
<form action="madLibs.php" method="get">
    Name: <input type="text" name="name"><br>
    Age: <input type="number" name="age"><br>
    Dream: <input type="text" name="dream"><br>
    Deadline: <input type="date" name="date"><br><br>
     <input type="submit">
</form>
<br><br>
<?php
$name=$_GET["name"];
$age=$_GET["age"];
$dream=$_GET["dream"];
$deadline=$_GET["date"];
echo "Greetings from $name<br>";
echo "I've been stuck in this planet for $age years <br>";
echo "My dream is to $dream <br>";
echo "And I'd like to accomplish my dream by $deadline<br>";
echo "Thanks for reading. Have a wonderful day!";
?>
</body>
</html>

