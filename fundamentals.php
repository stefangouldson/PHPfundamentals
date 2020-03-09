<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundamentals</title>
</head>
<body>

<h1>Fundamentals page</h1>

<a href="./forms.php">Forms Page</a>
<br><br>

<?php 

    //comment
    /*comment
        over
        mulitple
        lines
    */

    //*Decalring and printing variables

    $name = "Stefan";
    $age = 22;
    echo $name . " " . $age;
    $htmltag = "<h1>Hello</h1>" ;
    echo $htmltag ;
    echo $age+45 . "<br>";

    //*arrays
    $numbersList = [2,34,21,'Hi','<h2>Hello There</h2>'];
    echo $numbersList[4];
    print_r($numbersList);

    //*arrays or potentially objects
    $nameList = ["forename" => "Stefan" , "Surname" => "Gouldson"];
    print_r($nameList);
    echo "<br>" . $nameList["forename"] . "<br>";

    //*If statements
    if ($age>30){
        echo "Old af";
    } elseif ($age==30){
        echo "so it begins";
    } else {
        echo "Theres still time";
    };

    //*switch cases
    switch($age) {
    case 20: 
        echo " yes to 20";
    break;
    default:
        echo " we could not find anything" . "<br>";
    };

    //*loops (while & for)
    $counter = 1;
    while ($counter<5){
        $counter=$counter+1;
        echo "hey" . "<br>";
    };
    
    for ($i=0;$i<10;$i++){
        echo $i;
    };

    $numbers = [1,2,3];
    foreach ($numbers as $number){
        echo "<br>";
        echo $number + 1;
    }

    //*functions
    function saySomething($msg){
        echo "<br>" . $msg;
    };
    saySomething("Said Something");

    function addTogether($num1,$num2){
        $sum = $num1 + $num2;
        echo "<br>";
        return $sum;
    };
    $result = addTogether(20,36);
    echo $result;

    echo "<br>";

    //*scope
    $x = "outside";
    echo $x;
    function convert(){
        global $x;
        $x = "Inside";
    };
    convert();
    echo "<br>";
    echo $x;
    echo "<br>";

    //*constants
    const NAME = "Stef";
    echo NAME;
    echo "<br>";

    //*math functions
    echo "<br>";
    echo pow(2,3);
    echo "<br>";
    echo rand(0,10);
    echo "<br>";
    echo sqrt(81);
    echo "<br>";
    echo ceil(4.6); //round up
    echo "<br>";
    echo floor(4.6); //round down
    echo "<br>";
    echo round(10.6);
    echo "<br>";

    //*string functions
    echo "<br>";
    $str = "General Kenobi";
    echo strlen($str);
    echo "<br>";
    echo strtoupper($str);
    echo "<br>";
    echo strtolower($str);
    echo "<br>";

    //*array functions
    $list = [2,1,5,3,4];
    echo "<br>";

    echo min($list);
    echo "<br>";
    echo max($list);
    echo "<br>";
    print_r($list);
    sort($list);
    print_r($list);


?>
    
</body>
</html>