<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result Calculator</title>
</head>
<body>
    <h2>Mark & Grade Calculator</h2>
    <h3>Enter your marks below:</h3>

    <form method="POST">
        <label>Enter your name:</label>
        <input type="text" name="name" required>
        <br>
        <label>Enter your English marks:</label>
        <input type="number" name="english" min="0" max="100" required>
        <br>
        <label>Enter your Maths marks:</label>
        <input type="number" name="maths" min="0" max="100" required>
        <br>
        <label>Enter your Science marks:</label>
        <input type="number" name="science" min="0" max="100" required>
        <br>
        <button type="submit">Calculate Percentage & Grade</button>
    </form>

    <?php
    if (isset($_POST["name"], $_POST["english"], $_POST["maths"], $_POST["science"])) {
        $name = htmlspecialchars($_POST["name"]);
        $english = (int) $_POST["english"];
        $maths = (int) $_POST["maths"];
        $science = (int) $_POST["science"];

        // Validate marks
        if (
            $english < 0 || $english > 100 ||
            $maths < 0 || $maths > 100 ||
            $science < 0 || $science > 100
        ) {
            echo "Please enter marks between 0 and 100.";
        }
        else {
            $total = $english + $maths + $science;
            $percentage = ($total / 300) * 100;        
            echo "Student Name: " . $name . "<br>";
            echo "English Marks: " . $english . "<br>";
            echo "Maths Marks: " . $maths . "<br>";
            echo "Science Marks: " . $science . "<br>";
            echo "Total Marks: " . $total . "/300<br>";
            echo "Percentage: " . $percentage . "%<br>";           
            if ($english < 40 || $maths < 40 || $science < 40) {
                echo "Final Grade: Fail";
            }
            elseif ($percentage >= 90) {
                echo "Final Grade: A+";
            }
            elseif ($percentage >= 75) {
                echo "Final Grade: A";
            }
            elseif ($percentage >= 60) {
                echo "Final Grade: B";
            }
            elseif ($percentage >= 40) {
                echo "Final Grade: C";
            }
            else {
                echo "Final Grade: Fail";
            }
        }
    }
    ?>
</body>
</html>
