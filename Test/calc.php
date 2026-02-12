<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sphere & Celsius Converter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
              background-image: url('pexels-pixabay-531756.jpg');
              background-size: cover;
              background-repeat: no-repeat;
              background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .calculator {
            background: transparent;
            padding: 50px 60px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(84, 8, 236, 0.94);
            width: 350px;
        }
        .calculator:hover{
            border: 2px solid blue;
            transition: 0.3s ease-in-out;
            transform: scale(1.1)translateY(-3px);
            box-shadow: 0 0 25px lightblue;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #0f89ecff;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #04bff3ff;
            border-radius: 6px;
            font-size: 16px;
            outline: none;
            
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #00ff6aff;
            border: none;
            border-radius: 6px;
            color: black;
            font-size: 16px;
            cursor: pointer;
            outline:none;
        }

        input[type="submit"]:hover {
            background-color: #0a88feff;
        }

        .results {
            margin-top: 20px;
            padding: 15px;
            background-color: #e3f2fd;
            border-left: 4px solid #19e252ff;
            border-radius: 6px;
        }

        .results strong {
            color: #f98f1dff;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Sphere & Temperature Calculator</h2>
        <form method="post">
            <label>Sphere Radius:</label>
            <input type="number" name="radius" step="any" placeholder="Enter radius" required>

            <label>Temperature in Celsius:</label>
            <input type="number" name="celsius" step="any" placeholder="Enter Celsius" required>

            <input type="submit" name="submit" value="Calculate">
        </form>

        <?php
        if(isset($_POST['submit'])) {
            $radius = $_POST['radius'];
            $celsius = $_POST['celsius'];

            // Calculate sphere volume
            $volume = (4/3) * pi() * pow($radius, 3);

            // Convert Celsius to Fahrenheit
            $fahrenheit = ($celsius * 9/5) + 32;

            echo "<div class='results'>";
            echo "<p>Sphere Volume: <strong>" . round($volume, 2) . "</strong> cubic units</p>";
            echo "<p>Temperature: <strong>" . round($fahrenheit, 2) . "</strong> °F</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
