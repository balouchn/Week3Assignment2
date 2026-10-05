<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 1 - Square Root Calculator</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            font-family: Arial, sans-serif;
            color: #333333;
        }

        .container {
            width: 500px;
            margin: 60px auto;
            background-color: #ffffff;
            border: 2px solid #5a0f1b;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            overflow: hidden;
        }

        .header {
            background-color: #5a0f1b;
            color: white;
            text-align: center;
            padding: 25px;
        }

        .header h1 {
            margin: 0 0 10px 0;
            font-size: 26px;
        }

        .header h2 {
            margin: 0 0 12px 0;
            font-size: 20px;
        }

        .header p {
            margin: 5px 0;
            font-size: 14px;
        }

        .form-area {
            padding: 30px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #5a0f1b;
        }

        input[type="text"] {
            width: 100%;
            padding: 11px;
            box-sizing: border-box;
            border: 1px solid #999999;
            border-radius: 6px;
            font-size: 16px;
        }

        input[type="text"]:focus {
            border: 2px solid #5a0f1b;
            outline: none;
        }

        input[type="submit"] {
            margin-top: 22px;
            width: 100%;
            padding: 12px;
            background-color: #5a0f1b;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #7a1b2a;
        }

        .result {
            margin-top: 25px;
            padding: 18px;
            background-color: #f8f8f8;
            border-left: 5px solid #5a0f1b;
            border-radius: 5px;
        }

        .result h2 {
            color: #5a0f1b;
            margin-top: 0;
        }

        .footer {
            text-align: center;
            padding: 15px;
            font-size: 12px;
            color: #777777;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header">

        <h1>Lab #1 Software Installation</h1>

        <h2>Square Root Calculator</h2>

        <p>Custom Formula: √x</p>

        <p>Author: Noorulain Balouch</p>

        <p>October 5, 2026</p>

    </div>

    <div class="form-area">

        <form method="POST" action="">

            <label for="number">
                Enter a non-negative number:
            </label>

            <input
                type="text"
                id="number"
                name="number"
                required
            >

            <input
                type="submit"
                name="submit"
                value="Calculate Square Root"
            >

        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $number = $_POST["number"];

            // Prepare the command to run the Python script
            $command = escapeshellcmd("python3 sqrt.py $number");

            // Execute the Python script and capture the output
            $output = shell_exec($command);

            // Display the result
            echo '<div class="result">';
            echo "<h2>Result from Python Script</h2>";
            echo "<p>$output</p>";
            echo '</div>';
        }

        ?>

    </div>

    <div class="footer">
        CPS 3500 — Lab 1
    </div>

</div>

</body>
</html>
       
