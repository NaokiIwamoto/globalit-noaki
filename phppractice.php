<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>

</head>
<body>
    <h1>My first PHP page</h1>

    <?php
    echo "Hello World!";
    $name = "Naoki Iwamoto";
    echo "My name is $name !";
    $color = "Bule";
    echo "My name is $color.";
    $apple = 10;
    $orange = 15;
    echo $apple + $orange;

    echo "<h2>PHP is Fun! </h2>";
    echo "Hello world!<br>";
    echo "I'm about to learn PHP!<br>";
    echo "this ", "string", "was'", "made", "with multiple parameters.";

    print "<h2>PHP is Fun! </h2>";
    print "Hello world!<br>";
    print "I'm about to learn PHP!<br>";
    
    echo "<br>";
    echo "<h3 text-style='bold'> Personal Details </h3><br>";
    $Name = "Ryan Dupay";
    echo "Name: $Name <br>";
    $age_1 = 28;
    echo "Age:$age_1 <br>";
    $age_2 = $age_1 + 11;
    echo "in 2030, My age will be $age_2 .";

    echo "<br>";
    
    $string1 = "This is a text!";
    $string2 = 'This is a text!';

    echo $string1;
    echo "<br>";
    echo $string2;
    echo "<br>";

    $int = 98543;
    var_dump($int);
    echo "<br>";
    var_dump($string1);
    
    echo "<br>";
    $fl = 10.365;
    var_dump($fl);

    echo "<br>";
    $fl_1 = "99.99.99";
    var_dump($fl_1);

    echo "<br>";
    $kuruma = array("Toyota", "Honda", "Nissan");
    var_dump($kuruma);

    echo "<br>";
    $hi = "Hello Hello!";
    $hi = null;
    $hi = -0;
    $hi = "";    
    var_dump($hi);

    echo "<br>";
    echo strlen("Hello world!");

    echo "<br>";
    echo str_word_count("Hello Cebu Philippines!");

    echo "<br>";
    echo strrev("I want to reverse");

    $bank = 5000;
    $web = 15000;
    $online = 25000;
    echo "<br>";
    $total  = $bank + $web + $online;
    echo $total;
    echo "<br>";    
    $iPod = 20800;
    echo $total - $iPod;

    echo "<br>";
    $regular = 30000;
    echo $regular * 12;
    echo "<br>";
    echo $regular / 2;

    echo "<br>";
    $x = 5;
    $y = 5  ;
    var_dump($x == $y);

    echo "<br>";
    $x = 5;
    $y = 5.0;
    var_dump($x == $y);

    echo "<br>";
    $x = "5";
    $y = 5;
    var_dump($x == $y);

    echo "<br>";
    $x = "5";
    $y = 5;
    var_dump($x ===   $y);

    echo "<br>";
    $x = "Hi";
    $y = "HI";
    var_dump($x ===   $y);

    echo "<br>";
    $x = 5;
    $y = 5;
    var_dump($x != $y);
    
    echo "<br>";
    $x = 5;
    $y = 5;
    var_dump($x !== $y);
    
    echo "<br>";
    $x = 5;
    $y = 5;
    var_dump($x > $y);

    echo "<br>";
    $x = "5";
    $y = 5;
    var_dump($x > $y);

    echo "<br>";
    $x = 55;
    $y = "5";
    var_dump($x > $y);

    echo "<br>";
    $x = 55;
    $y = 555;
    var_dump($x > $y);

    echo "<br>";
    $x = 55;
    $y = 555;
    var_dump($x < $y);

    echo "<br>";
    $x = 55;
    $y = 56;
    var_dump($x >= $y);

    echo "<br>";
    $x = 55;
    $y = 8;
    var_dump($x <= $y);

    echo "<br>";
    $x = 5;
    $y = 8;
    var_dump($x <= $y);

    echo "<br>";
    $x = 8;
    $y = 8;
    var_dump($x <= $y);

    echo "<br>";
    $txt1 = "Hello ";
    $txt2 = "Aubrey!";
    $txt1 .= $txt2; 
    echo $txt1;

    echo "<br>";
    $my_name = "naokis";
    if ($my_name == "naoki") {
        echo "Your name is Ryan! <br>";
    }
    echo "Welcome to PHP Basics!";

    echo "<br>";
    $input1 = 5;
    $input2 = 5;
    if ($input1 == $input2){
        echo "IT IS THE SAME";
    }

    echo "<br>";
    $number = "53";
    if ($number == 3){
        echo "The number is 3";
    }else{
        echo "The numver is $number it is not 3";
    }

    echo "<br>";
    $age = 30;
    if ($age > 30){
        echo "YOU ARE OLD !!!";
    }else{
        echo "YOU ARE NOT YET OLD !";
    }

    echo "<br>";
    if ($number == 3){
        echo "The number is 3";
    } elseif ( $number == 123 ){
        echo "The number is 123";
    } else {
        echo "The numver is $number it is not 3 or 123";
    }
    echo "<br>";

    $score = "ioooo";
    if (is_string($score)){
        echo "What's that.";
    }elseif ($score >= 80 && $score <= 100){
        echo "Your grade is $score. it is Excellent!";
    }elseif  ($score >= 70 && $score < 80){
        echo "Your grade is $score. it is Very Good!";
    }elseif ($score >= 60 && $score < 70){
        echo "Your grade is $score. it is Good.";
    }elseif ($score >= 0 && $score < 60){
        echo "Your grade is $score. it is Failure";
    }

    $favcolor = "pink";
    switch ($favcolor){
        case "red":
        echo "Your favorite color is red!";
        break;
        case "blue":
        echo "Your favorite color is blue!";
        break;
        case "green":
        echo "Your favorite color is green!";
        break;
        default:
        echo "your favorite color is neither red, blue, nor green!";
    }
    
    echo "<br>";

    $favfood = 123;
    switch ($favfood){
        case "sushi":
        echo "Healthy and GOOD";
        break;
        case "french fries":
        echo "Oily but Yummy!";
        break;
        case "salad":
        echo "No comment :D";
        break;
        case "nori":
        echo "Is it food";
        break;
        default:
        echo "Your food is $favfood!";
    }
    echo "<br>";
    $input_1 = 5.1;
    $input_2 = -5;
    $operator = "add";
    if(is_numeric($input_1) && is_numeric($input_2)){
        switch($operator){
            case "add":
            $add = $input_1 + $input_2;
            echo "Result is  $add";
            break;
            case "minus":
            $minus = $input_1 - $input_2;
            echo "Result is  $minus";
            break;
            case "multiply":
            $multiply = $input_1 * $input_2;
            echo "Result is  $multiply";
            break;
            case "divide":
            $divide = $input_1 / $input_2;
            echo "Result is  $divide";
            default:
            echo "This is not operator.";
    }
    }else{
        echo "This is not number.";
        }

    echo "<br>";
    $x = 1;

    echo "<br>";
    while($x <= 7){
        echo "The number is: $x <br>";
        $x++;
    }
    echo "<br>";
    $y = 1;

    do{
        echo "The number is: $y <br>";
        $y++;
    }while ($y <= 7);


    echo "<br>";
    for ($z = 0; $z <= 7; $z++){
        echo "The number is: $z <br>";
    }

    echo "<br>";
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value) {
        echo "$value <br>";
    }

    for ($a = 1; $a <= 10; $a++){
        if($a <= 9){
            echo "$a-";
        }else{
            echo "$a";
        }
    }
    ?>


<table>
    <tr>
        <th>Number</th>
        <th>Discription</th>
    </tr>
    <?php 
        for ($b = 1; $b <= 4; $b++){
            echo "<tr>";
            echo "<th>$b</th>";
            echo "<td>This is Data $b</td>";
            echo "</tr>";
        }


    ?>
</table>

<?php
    for ($ast_1 = 1; $ast_1 <= 5; $ast_1++){
        for ($ast_2 = 1; $ast_2 <= $ast_1 ; $ast_2++){
            echo "*";
        }
        echo "<br>";
    }

    function helloMsg(){
        echo "Hello world!";
    }

    helloMsg();

    echo "<br>";
    function famname($firstname, $year){
        echo "$firstname Iwamoto. Born in $year. <br>";
    }

    famname("Naoki", "1994");
    famname("Kazushi", "1992");

    function sum($x,$y){
        $z = $x + $y;
        return $z;
    }

    echo "5 + 10 = " . sum(5,10). "<br>";
    echo "6 + 12 = " . sum(6,12). "<br>";
    echo "3 + 2 = " . sum(3,2). "<br>";



    function myCheck(){
        $x_1 = 10;
        echo "Variable x inside function is : $x_1";
    }
    myCheck();

    echo "Variable x outside function is : $x_1";
    echo "<br>";
    $x_2 = 10;

    function my_Check(){
        global $x_2;
        echo "Variable x inside function is : $x_2";
    }
    my_Check();
    echo "<br>";
    echo "Variable x outside function is : $x_2";

    echo "<br>";    
    $cars = array("Toyota","Nissan","Honda");
    sort($cars);
    echo count($cars);

    
    echo "<br>";  
    $arrlength = count($cars);
    for ($x = 0; $x < $arrlength; $x++ ){
        echo $cars[$x];
        echo "<br>";
    }

    $_num = array("10","17","22","2","7","1","11");
    echo "<br>";  
    $arrlength = count($_num);
    sort($_num);
    for ($x = 0; $x < $arrlength; $x++ ){
        echo $_num[$x];
        echo "<br>";
    }
    echo "<br>"; 
    rsort($_num);
    for ($x = 0; $x < $arrlength; $x++ ){
        echo $_num[$x];
        echo "<br>";
    }


?>

</body>
</html>