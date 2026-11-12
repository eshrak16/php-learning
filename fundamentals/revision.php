<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="revision.php" method="post">
        <h2>login form</h2><br>
        <label>Name:</label>
        <input type="text" name="username">
        <label>password</label>
        <input type="password" name="password">
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>

<?php
if(isset($_POST["username"]) && $_POST["username"]){
    $username=$_POST["username"];
    $password=$_POST["password"];
    echo"your login is sucessful";
    echo"username", $username,"password", $password;
}


?>