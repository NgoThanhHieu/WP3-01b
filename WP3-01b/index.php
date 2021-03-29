<?php
require_once('functions.php');
$cars[0]['year'] = 2001 ;
$cars[0]['SPZ'] = "1A5 4806" ;
$cars[1]['year'] = 1945 ;
$cars[1]['SPZ'] = "NO SPZ" ;
$cars[2]['year'] = 2020 ;
$cars[2]['SPZ'] = "1YS 1288" ;
$cars[3]['year'] = 1985 ;
$cars[3]['SPZ'] = "3SY 2689" ;
?>

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
    for ($i=0; $i < count($cars); $i++) { 
    echo $cars[$i]['SPZ'] . " : ";
    getCarInfo($cars[$i]['year']); 
    getTax($cars[$i]['engine']); ?>
<br> <?php
}

?>
</body>
</html>