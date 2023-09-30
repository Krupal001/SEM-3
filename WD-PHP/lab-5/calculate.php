<?php
if($_POST)
{
$num1=$_POST['num1'];
$num2=$_POST['num2'];
if($_POST['calc']=='Add')
{
$num3=$num1+$num2;
echo "<h3>"."Addition = ".$num3."</h3>";
}
if($_POST['calc']=='Difference')
{
$num3=$num1-$num2;
echo "<h3>"."Difference = ".$num3."</h3>";
}
if($_POST['calc']=='Product')
{
$num3=$num1*$num2;
echo "<h3>"."Product = ".$num3."</h3>";
}
if($_POST['calc']=='Division')
{
$num3=$num1 / $num2;
echo "<h3>"."Division = ".$num3."</h3>";
}
}
?>
