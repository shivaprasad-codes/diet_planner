<?php

$weight=$_POST["weight"];
$cm=$_POST["height"];
$m=$cm/100;
$height=$m*$m;
$bmi=$weight/$height;

echo " ".$bmi;

if($bmi<=18.5)
{
    header("location:bmi_under.html");
}

elseif($bmi>=18.5 && $bmi<=24.9)
{
    header("location:bmi_healthy.html");
}

elseif($bmi>=25.0 && $bmi<=29.9)
{
    header("location:bmi_over.html");
}

else
{
    header("location:bmi_obese.html");
}

?>