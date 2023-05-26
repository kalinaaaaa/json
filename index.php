<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo "Hello <br>";
    $a=5;
    echo $a;

    $rec="hello";
    $rec2="<br>" . $rec . "asd";
    echo $rec2;

    //integrer
    $ceoBroj=5;
    $rez=5+2;
    echo"<br> moj broj je{$rez}";
    $text="2";
    $noviBroj=(int)$text;

    //float
    $broj=5.2;
    echo is_float($broj);

    //bool
    $boo=true;

    //IF
    $cond=5;
    if($cond>5){
        echo"vece";
    }else if($cond<5){
        echo"manje";
    }else{
        echo"jednako";
    }

    //while
    $i=0;
    while($i<10){
        echo"<br>{$i}";
        $i++;
    }
    
    echo"<br>";
    for($j=0;$j<10;$j++)
    {
    echo"<br>{$j}";
    }

    function asd($a,$b){
    echo "asd";
    }
        $users=array("marko","nikola","petar");
        foreach($users as $user){
            echo"<br>". $user;
        }
    
    echo $users[2];


    ?>
    
</body>
</html>