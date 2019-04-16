<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_REQUEST['button'])) {
        $x = $_POST["value_1"];
        $y = $_POST["value_2"];
    }
    //関数の定義
    function sum(){
        global $x, $y;
        $z = $x + $y;
        return $z;  
    }
    function minus(){
        global $x, $y;
        $z = $x - $y;
        return $z;  
    }
    function product(){
        global $x, $y;
        $z = $x * $y;
        return $z;  
    }
    function quotient(){
        global $x, $y;
            if ($y == 0) {
                $z = "Zero Divide";
                return $z;
            }else{
            $z = $x / $y;
            return $z;
        }
    }
    ?>

    <?php
    $Arithmetic = $_POST["Arithmetic"];
    switch ($Arithmetic) {
        case "+":
            $result = sum();
            break;
        case "-":
            $result = minus();
            break;
        case "÷":
            $result = quotient();
            break;
        default:
            $result = product();
            break;
    }
    echo "<p>Result : ".$result.".</p>"
    ?>
</form>
</body>
</html>