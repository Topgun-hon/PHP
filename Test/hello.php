<html>

<title>PHP first page</title>

<body bgcolor='lightgreen'>

<p>Welcome to PHP programming language</p>
    <?php

$text1='WELCOME to ';
$text2='Rwanda Coding Academy';
$text3=5;
$text4=10;

// Arthmetic Operators

echo $text1 . $text2 . '<br>';

echo $text3 + $text4 . '<br>';

echo $text3 * $text4 . '<br>';

echo $text3 / $text4 . '<br>';

echo $text3 % $text4 . '<br>';

echo $text3 - $text4 . '<br>';

echo $text3 ** $text4 . '<br>';

echo "The increment of two variables=" . ++$text3 + $text4++ . '<br>'; // for text 3 one will be added but T4 will not change it will be printed and then add one later

echo "The increment of two variables=" . ++$text3 + $text4++;// Here the initial value of T3 will be 6 and then will increase by 1 and become 7 then Now Text4 will increase and become 11


// print 'This is Year 1C first PHP program' . '<br>'; 

// print "Welcome to Rwanda COding Academy";

?>

</body>

</html>
