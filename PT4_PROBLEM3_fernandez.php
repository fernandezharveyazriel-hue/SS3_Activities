<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prime Classification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            width: 400px;
            margin: 40px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .prime {
            color: green;
            font-weight: bold;
        }

        .not-prime {
            color: red;
        }

        .summary {
            margin-top: 20px;
            padding-top: 10px;
            border-top: 1px solid #ccc;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Prime Classification (1–20)</h2>

    <?php
    $primeCount = 0;
    $nonPrimeCount = 0;

    for ($num = 1; $num <= 20; $num++) {
        $factorCount = 0;

        for ($i = 1; $i <= $num; $i++) {
            if ($num % $i == 0) {
                $factorCount++;
            }
        }

        if ($factorCount == 2) {
            echo "<div class='prime'>$num - Prime</div>";
            $primeCount++;
        } else {
            echo "<div class='not-prime'>$num - Not Prime ($factorCount factors)</div>";
            $nonPrimeCount++;
        }
    }
    ?>

    <div class="summary">
        <p>Total Prime Numbers: <?php echo $primeCount; ?></p>
        <p>Total Non-Prime Numbers: <?php echo $nonPrimeCount; ?></p>
    </div>
</div>

</body>
</html>
