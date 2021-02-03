<?php
$sex="female";

 if($sex=="male")
 {
	 $weight = 55; // kilo (kg)
     $height = 170; // boy (cm)
     $age = 25;
     echo 10 * $weight + 6.25 * $height - 5 * $age+ 5;
 }
 elseif($sex=="female"){
	 $weight = 60;
     $height = 170;
     $age = 30;
	 echo 10 *$weight + 6.25 * $height - 5 * $age - 161;
 }

	 ?>
