<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    ?>  
    

</body>
</html>