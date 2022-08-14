<?php  
$sum=0;
$a = ["YayaPengPos",12,Null];
print_r($a[1]);
echo "<br>";
foreach($a as $v){
    echo $v."<br>";
}


echo "<hr>";
$user = [
    [
        "Heng Layhak",
        20,
        'M',
        "MIS",
    ],
    [
        "Bro Mich",
        21,
        'M',
        "CS"

    ]

    ];
foreach($user as $u){
    foreach($u as $n)
        echo ("\tUserData:".$n);
    
    echo("<br>");
}
    

echo("<hr>");
$user = [
    [
        "name"=>"Heng Layhak",
        "age"=>20,
        "sex"=>'M',
        "major"=>"MIS",
    ],
    [
        "name"=>"Bro Mich",
        "age"=>21,
        "sex"=>'M',
        "major"=>"CS",

    ]

    ];
foreach($user as $u){
    foreach($u as $key=> $n)
        echo (" ".$key.":".$n);
    
    echo("<br>");
}

$computer = [
    [
        "name"=>"layhak",
        "brand"=>"MSI",
        "color"=>"black",
        "price"=>1000.00,
    ],
    [
        "name"=>"brown",
        "brand"=>"Asus",
        "color"=>"brown",
        "price"=>1200.00,
    ],
    [
        "name"=>"Tony",
        "brand"=>"Asus Vivo Book",
        "color"=>"black",
        "price"=>2000.00,
    ],
    [
        "name"=>"BoB",
        "brand"=>"Asus Bob Limited Edition",
        "color"=>"black",
        "price"=>8000.00,
    ],


];
foreach($computer as $c){
    foreach($c as $key=>$v){
        echo(" ".$key.":".$v);
        
    }
    
}
echo("<hr>");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
    p{
        margin:0;
        padding:0;
    }
</style>
</head>
<body>
    <?php foreach($computer as $k=>$c) {?>
    <pre>
    <p>Name: <b><?= $computer[$k]["name"]  ?></b></p>   
    <p>Brand: <b><?= $computer[$k]["brand"] ?></b></p>   
    <p>Color: <b style='color:<?= $computer[$k]["color"]?>'><?= $computer[$k]["color"]?></b></p>   
    <p>Price: <b>price</b><?=number_format( $computer[$k]["price"],3)?></p>   
    </pre>
    <hr>
    <?php 
    $sum+=$computer[$k]["price"]; 
    ?>
    <?php } ?>
    <h1>Total Price=<?= $sum ?></h1>
</body>
</html>
