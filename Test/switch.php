<html>
    <head>
        <title>Switch</title>
    </head>
<body>
    <form method= "POST"></form>
    <label for="sw">Enter the letter</label><br>
    <input type="text" name="text" id="sw">
    <input type="submit" value="Submit">

<?php
if(isset($_POST['text'])){

    $char = $_POST['text'];

    switch($char){
    case "a":
        echo "The character is vowel";
        break;
    case "i":
        echo "The character is vowel";
        break;
    case "u":
        echo "The character is vowel";
        break;
    case "o":
        echo "The character is vowel";
        break;
    case 'e':
        echo "The character is vowel";
        break;
    default:
        echo "The character is consonant";
        break;

}
};


?>

    
</body>
</html>