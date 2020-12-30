<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grades</title>
</head>
<body>
<form action="Grades.php" method="post">
    <input type="text" name="subject"><br>
    <input type="submit" name="submit"><br>
</form>
<br>Your grade of
<?php
$sub=$_POST['subject'];
/*//Associative Array: KEY-VALUE pairs*/
$grades=array("Maths"=>"A", "English"=>"A", "ECE-DLD"=>"S", "CSE"=>"A", "STS"=>"B", "CHEM"=>"A", "EVS"=>"Pass");
echo nl2br("$sub: ".$grades[$_POST["subject"]]);
?>
</body>
</html>


