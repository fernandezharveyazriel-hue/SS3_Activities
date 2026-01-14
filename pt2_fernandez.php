<!DOCTYPE html>
<html>
<head>
    <title>Personal Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
        }
        .card {
            width: 350px;
            margin: 50px auto;
            padding: 20px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .info {
            margin: 10px 0;
        }
        .label {
            font-weight: bold;
            color: #555;
        }
    </style>
</head>
<body>

<?php
    $firstname = "Harvey";
    $lastname = "Fernandez";
    $contact = "09654266422";

    $num1 = 50;
    $num2 = 100;
    $sum = $num1 + $num2;
    $sum += 5;
?>

<div class="card">
    <h2>Student Profile</h2>

    <div class="info">
        <span class="label">Full Name:</span>
        <?php echo $firstname . " " . $lastname; ?>
    </div>

    <div class="info">
        <span class="label">Contact Number:</span>
        <?php echo $contact; ?>
    </div>

    <div class="info">
        <span class="label">Computed Value:</span>
        <?php echo $sum; ?>
    </div>
</div>

</body>
</html>