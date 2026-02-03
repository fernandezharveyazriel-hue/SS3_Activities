<!DOCTYPE html>
<html>
<head>
   <title>Grade Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            width: 400px;
            margin: 50px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
        }
        h1 {
            text-align: center;
        }
        label {
            display: inline-block;
            width: 150px;
            margin-bottom: 8px;
        }
        input[type="number"] {
            width: 80px;
            padding: 5px;
        }
        button {
            margin-top: 10px;
            padding: 6px 12px;
        }
        .result {
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Grade Calculator</h1>

    <form method="POST">
        <label>1st Quarter Grade:</label>
        <input type="number" name="q1" required><br>

        <label>2nd Quarter Grade:</label>
        <input type="number" name="q2" required><br>

        <label>3rd Quarter Grade:</label>
        <input type="number" name="q3" required><br>

        <label>4th Quarter Grade:</label>
        <input type="number" name="q4" required><br>

        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $q3 = $_POST['q3'];
        $q4 = $_POST['q4'];

        $average = ($q1 + $q2 + $q3 + $q4) / 4;

        if ($average >= 90) {
            $description = "Outstanding";
            $remarks = "Passed";
        } elseif ($average >= 85) {
            $description = "Very Satisfactory";
            $remarks = "Passed";
        } elseif ($average >= 80) {
            $description = "Satisfactory";
            $remarks = "Passed";
        } elseif ($average >= 75) {
            $description = "Fairly Satisfactory";
            $remarks = "Passed";
        } else {
            $description = "Did Not Meet Expectations";
            $remarks = "Failed";
        }

        echo "<div class='result'>";
        echo "Average Grade: " . number_format($average, 2) . "<br><br>";
        echo "Description: $description <br><br>";
        echo "Remarks: $remarks";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
