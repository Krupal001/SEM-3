<?php
$file="demo.txt";
$f=fopen($file,'w');

$s="hello";

fwrite($f,$s);