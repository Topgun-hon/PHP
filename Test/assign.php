<html>
    <head>
        <title>Assignment</title>
    </head>
    <body>
        <h3><b>A program that display the sum of two numbers if they are even <br> and their product if they are odd</b></h3>
        <form method="POST">
            <label for="num1">Enter the first number</label>
            <input type="number" name="num1" id="num1"><br><br>
            <label for="num2">Enter the second number</label>
            <input type="number" name="num2" id="num2"><br><br>
            <input type="submit" value="Calculate" name="calculate">
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"]=== "POST"){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            if($num1 % 2 == 0 && $num2 % 2 == 0){
                $sum = $num1 + $num2;
                echo "The sum of $num1 and $num2 is $sum";
            }else if($num1 % 2 != 0 && $num2 % 2 != 0){
                $prod = $num1 * $num2;
                echo "The product of $num1 and $num2 is $prod";
            }
        }
        ?>
    </body>
</html>