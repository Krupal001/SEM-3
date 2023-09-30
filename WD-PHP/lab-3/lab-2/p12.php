<?php
    $num=123;
    $i=$num;
    $rev=0;
    for(;floor($i)>0;$i/=10)
    {
        $rem=$i%10;
        $rev=$rev*10+$rem;
    }
     echo $rev;

?>