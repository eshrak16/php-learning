<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Age Eligibility checker</h2>
    <form method="post">
        <label>Enter your name:</label>
        <input type="text" name="username" required>
        <label>Enter your Age:</label>
        <input type="number" name="age" required>
        <button type="submit">check eligibility</button>
    </form>
    <?php
    if(isset($_POST["age"])){
        $age = (int) $_POST["age"];
        $username = (string) $_POST["username"];
        echo"Welcome ". $username . "!your age is ". $age. "<br>";
        if ($age >= 18){
            echo($username . ", you are eligible.");
        }
        else{
            echo($username . ",unfortunately! you are not eligible");
        }

    }
    ?>

</body>
</html>