<?PHP
$x=10;
$y=2;
$sum=null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>Click on the button:<span id="hello"></span></h1>
    <button onclick="increase()">Increase</button>
    <button onclick="decrease()">Decrease</button>
    <br>
    <?php
    echo "<h1>Hello World</h1>";
    echo "<h1>".$x+$y."</h1>";
    echo $sum;
    ?>
    <?php include 'car.php';?>
    <script src="./js/app.js"></script>
</body>
</html>