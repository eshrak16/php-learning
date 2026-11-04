<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <label>enter your name:</label><input type="text" name="username" required><br>
        <label>enter your password:</label><input type="password" name="password"><br>
        <Button type="submit">submit</Button>
    </form>
    <?php
    if(isset($_GET["username"], $_GET["password"])){
        $username = $_GET["username"];
        $password = $_GET["password"];
        echo"welcome". $username . " " . $password;

    }
    
    ?>
    
</body>
</html>
