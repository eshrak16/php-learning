<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="postmethod.php">
        <label>username:</label><input type="text" name="username" required><br>
        <label>password:</label><input type="password" name="password" required><br>
        <button action="submit">submit</button>
    </form>
    <?php
    if(isset($_POST["username"]) && isset($_POST["password"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        echo"$username","$password";
    }
    ?>  
</body>
</html>