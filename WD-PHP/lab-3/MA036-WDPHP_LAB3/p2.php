<?php
    $num=array();
    for($i=50;$i<=200;$i+=2){
        $num[]=$i;
    }

    $avg=array_sum($num)/count($num);
    $sum=array_sum($num);
    $min=min($num);
    $max=max($num);

    echo "average:-".$avg."<br>";
    echo "sum:-".$sum."<br>";
    echo "Min:-".$min."<br>";
    echo "Max:-".$max."<br>";
?>