<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $array = ["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"];
?>


<p> <?php print_r($array); ?></p>
<p> Array ascending sort by value: </p>
<p> <?php 
    asort($array);
    print_r( $array);?> </p>

<p> Array ascending sort by Key: </p>
<p> <?php 
    ksort($array);
    print_r( $array); ?> </p>

<p> Array descending sort by value: </p>
<p> <?php 
    arsort($array);
    print_r( $array);?> </p>

<p> Array descending sort by Key: </p>
<p> <?php 
    krsort($array);
    print_r( $array);?> </p>
</body>
</html>