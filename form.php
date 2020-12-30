<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Password Sniffing</title>
    <link rel="stylesheet" href="form-style.css">
</head>
<body>
<h1>Login</h1><br>
<form action="form.php" method="post">
    Name: <input type="text" name="Username"  id="r1">
    <br>
    Password: <input type="password" name="Password" id="r2">
    <br>
    Male: <input type="radio" name="sex" value="Male" ><br>
    Female: <input type="radio" name="sex" value="Female"><br>
    Others: <input type="radio" name="sex" value="Others"><br><br>

    <input type="submit" name="submit" id="s1">
</form>
<br>
Details:
<br>
<?php
echo nl2br("\nUsername: ".$_POST["Username"]);
echo nl2br("\nPassword: ".$_POST["Password"]);
if(isset($_POST['submit'])){
    if(isset($_POST['sex'])){
        echo nl2br("\nSex: ".$_POST['sex']);
    }
}

echo "<br><br><br>Date: ".date("l jS \of F Y h:i:s A") . "<br>";
?>
</body>
</html>
