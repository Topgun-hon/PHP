

<html>
<head>
<title>Check</title>
</head>
<body>
    <form method="POST">

    <label for="num">Enter the number</label>
    <input type="number" id="num" name="num" required>
    <input type="submit" value="check">
    
    </form>
    <?php

if(isset($_POST['num'])){

    $num = $_POST['num'];
    if($num>0){
        echo "The number is positive";
    }else{
        echo "The number is negative";
    }
}
?>
</body>
</html>