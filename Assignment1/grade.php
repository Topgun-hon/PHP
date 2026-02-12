<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grade Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            font-size: 18px;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #e8f5e9;
            border-radius: 4px;
            border-left: 4px solid #4CAF50;
        }
        .result p {
            margin: 5px 0;
            font-size: 18px;
        }
        .grade {
            font-weight: bold;
            color: #2e7d32;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class= "container ">
        <h2>Enter Student Marks</h2>
        <form method= "POST">
            <label for="percentace">Percentage:</label>
            <input type="number" id="percentage" name="percentage" min="0" max="100" step="any" required>
            <button type="submit">Display Grade</button>
        </form>

        <?php

        if($_SERVER["REQUEST_METHOD"] == "POST" ){
            $percentage = $_POST["percentage"];

            $gradeRange = 0;

            if($percentage >= 90 && $percentage <= 100){
                $gradeRange = 1;
            }
            elseif($percentage >= 80 && $percentage <= 89){
                $gradeRange = 2;
            }
            elseif($percentage >= 70 && $percentage <= 79){
                $gradeRange = 3;
            }
            elseif($percentage >= 60 && $percentage <= 69){
                $gradeRange = 4;
            }
            elseif($percentage >= 50 && $percentage <= 59){
                $gradeRange = 5;
            }
            elseif($percentage >= 40 && $percentage <= 49){
                $gradeRange = 6;
            }
            elseif($percentage >= 30 && $percentage <= 39){
                $gradeRange = 7;
            }
            else{
                $gradeRange = 8;
            }

            switch($gradeRange){

                case 1:
                    $grade = 'A';
                    break;
                case 2:
                    $grade = 'B';
                    break;
                case 3:
                    $grade = 'C';
                    break;
                case 4:
                    $grade = 'D';
                    break;
                case 5:
                    $grade = 'E';
                    break;
                case 6:
                    $grade = 'F';
                    break;
                case 7:
                    $grade = 'S';
                    break;
                case 8:
                    $grade = 'U';
                    break;
                default:
                    $grade = "Invalid";
            }

            echo '<div class="result">';
            echo '<p><strong>Percentage:</strong> ' . $percentage . '%</p>';
            echo '<p><strong>Grade:</strong> <span class="grade">'. $grade .'</span></p>';
            echo '</div>';

        }
        
        ?>
    </div>
</body>
</html>