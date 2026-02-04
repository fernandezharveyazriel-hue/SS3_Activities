<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daily Calorie Recommendation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            background: white;
            padding: 25px 30px;
            border-radius: 10px;
            width: 350px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            text-align: center;
        }

        h2 {
            margin-bottom: 15px;
            color: #333;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #ff758c;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #ff5c7a;
        }

        .result {
            margin-top: 15px;
            font-size: 18px;
            color: #222;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Calorie Calculator</h2>

    <form method="post">
        <input type="number" step="0.01" name="weight" placeholder="Enter your weight" required>

        <select name="lifestyle" required>
            <option value="">Select Lifestyle</option>
            <option value="A">Active</option>
            <option value="S">Sedentary</option>
        </select>

        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $weight = floatval($_POST["weight"]);
        $lifestyle = $_POST["lifestyle"];

        if ($lifestyle == 'A') {
            $activityFactor = 15;
        } else {
            $activityFactor = 13;
        }

        $calories = $weight * $activityFactor;

        echo "<div class='result'>
                Recommended Daily Calories: $calories
              </div>";
    }
    ?>
</div>

</body>
</html>
