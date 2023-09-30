<?php
    function demo($a)
    {
        // $sum=0;
        // foreach($a as $b)
        // {
        //     $sum+=$b;
        // }
        // return $sum;
        // return $a+$b;
        return func_get_args();
    }
    $ans=demo(2,54,4,4);
    $sum=0;
    foreach($ans as $b){
            $sum+=$b;
    }
    echo $sum;
    function Demo2(...$a)
    {
         $sum=0;
         foreach($a as $b)
         {
             $sum+=$b;
         }
        return $sum;
        // return $a+$b;
    }  
  //  $s=Demo2(1,2,3,4);
   // echo count($a);

    function swap(&$a,&$b)
    {
        $a=$a+$b;
        $b=$a-$b;
        $a=$a-$b;
    }
   $a=5;
   $b=10;
    swap($a,$b);
    echo $a.$b;

     
    // 
?>