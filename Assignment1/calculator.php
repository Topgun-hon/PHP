<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 20px;
        }
        .calculator {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.3);
            max-width: 400px;
            width: 100%;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
        }
        .input-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #555;
            font-size: 16px;
        }
        input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 18px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }
        input[type="number"]:focus {
            outline: none;
            border-color: #667eea;
        }
        .result-display {
            background-color: #f0f0f0;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
        }
        .result-display label {
            margin-bottom: 5px;
        }
        .result-value {
            font-size: 24px;
            font-weight: bold;
            color: #667eea;
            padding: 10px;
            background-color: white;
            border-radius: 5px;
            margin-top: 10px;
        }
        .button-group {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            margin-top: 20px;
        }
        button {
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s;
            background-color: #667eea;
            color: white;
        }
        button:hover {
            background-color: #5568d3;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }
        button:active {
            transform: translateY(0);
        }
        .error {
            color: #e74c3c;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h1>Simple Calculator Operations</h1>
        
        <form method="POST">
            <div class="input-group">
                <label for="num1">First Number:</label>
                <input type="number" id="num1" name="num1" step="any" 
                       required>
            </div>
            
            <div class="input-group">
                <label for="num2">Second Number:</label>
                <input type="number" id="num2" name="num2" step="any" 
                       required>
            </div>
            
            <div class="result-display">
                <label>Result:</label>
                <div class="result-value">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $num1 = $_POST['num1'];
                        $num2 = $_POST['num2'];
                        $operation = $_POST['operation'];
                        $result = 0;
                        
                        
                        switch ($operation) {
                            case 'add':
                                $result = $num1 + $num2;
                                echo $result;
                                break;
                                
                            case 'subtract':
                                $result = $num1 - $num2;
                                echo $result;
                                break;
                                
                            case 'multiply':
                                $result = $num1 * $num2;
                                echo $result;
                                break;
                                
                            case 'divide':
                                if ($num2 != 0) {
                                    $result = $num1 / $num2;
                                    echo $result;
                                } else {
                                    echo '<span class="error">Error: Division by zero!</span>';
                                }
                                break;
                                
                            default:
                                echo '<span class="error">Invalid Operation</span>';
                                break;
                        }
                    } else {
                        echo "0";
                    }
                    ?>
                </div>
            </div>
            
            <div class="button-group">
                <button type="submit" name="operation" value="add">+</button>
                <button type="submit" name="operation" value="subtract">-</button>
                <button type="submit" name="operation" value="multiply">*</button>
                <button type="submit" name="operation" value="divide">/</button>
            </div>
        </form>
    </div>
</body>
</html>