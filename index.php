<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $temperature = $_POST['temperature'];
    $unit = $_POST['unit'];
    $converted = '';

    if (is_numeric($temperature)) {
        switch ($unit) {
            case 'celsius':
                $fahrenheit = ($temperature * 9/5) + 32;
                $converted = "$temperature °C = $fahrenheit °F";
                break;
            case 'fahrenheit':
                $celsius = ($temperature - 32) * 5/9;
                $converted = "$temperature °F = $celsius °C";
                break;
            default:
                $converted = 'Invalid unit selected.';
        }
    } else {
        $converted = 'Please enter a valid numeric temperature.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>
<body>
<div class="container">

<h2>Temperature Converter</h2>

    <form method="post">
        <label for="temperature">Enter Temperature:</label>
        <input type="text" name="temperature" id="temperature" required>
<br><br>
        <label for="unit">Select Unit:</label>
        <select name="unit" id="unit">
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
        </select>

        <button type="submit">Convert</button>
    </form>

    <?php if (isset($converted)) echo "<p style='font-size: 48px; font-weight: bold; color: #56021F; text-align: center;'>$converted</p>"; ?>

</body>
<style>

body {
                background-color: #FADA7A;
            }

 .container {
                background: #C7D9DD;
                width: 500px;
                padding: 30px;
                border-radius: 20px;
                box-shadow: 0px 0px 10px 10px #F0A04B;
                margin: auto;
                margin-top: 190px;
            }

            h2 {
                text-align: center;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-size: 40px;
                font-style: italic;
            }

            form {
                justify-content: center;
                display: block;
            }

            label {
                font-family: 'Gill Sans', 'Gill Sans MT',Calibri, 'Trebuchet MS', sans-serif;
                 font-size: 23px;
            }

            input[type=text]{
            background-color: #FCE7C8;
            font-size: 20px;
            border-radius: 12px;
            padding: 10px;
            border: 3px solid #F0A04B;
            
           }

           button[type=submit] {
            background-color: #FCE7C8;
            font-size: 20px;
            border-radius: 12px;
            padding: 10px;
            border: 3px solid #F0A04B;
           
           }

           option {
            font-size: 20px;
            background-color: #FCE7C8;
            border-radius: 12px;
            padding: 10px;
            border: 3px solid #F0A04B;
           }

           select {
            background-color: #FCE7C8;
            font-size: 20px;
            border-radius: 12px;
            padding: 10px;
            border: 3px solid #F0A04B;
           }

           p {
                font-family: 'Gill Sans', 'Gill Sans MT',Calibri, 'Trebuchet MS', sans-serif;
                 font-size: 23px;
            }

</style>
</html>
