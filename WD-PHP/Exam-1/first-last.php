<?php

    $string = "Hello World!";


    function getFirst($string){
        $sp=strpos($string,' ');
        if($sp!=false)
           $first=substr($string,0,$sp);
        else
            $string=$first;
        return $first;


    }
    function getLast($string)
    {
        $last=strrpos($string, ' ');
        if($last!=false)
            $lastword=substr($string,$last);
        else
            $lastword=$last;
            
        return $lastword;
    }

    $f=getFirst($string);
    $m= getLast($string);
    
    echo "Last Word :".$m."<br>";
    echo "first word :".$f;

    
    ?>



