<?php

$fruits = array("Apple", "Banana","Orange","Cherry","Grape");

foreach($fruits as $value){
 echo "name of fruit is ".$value."<br>";
 }




 $student = [
       "ram" => 24,
       "roshni" => 22,
       "subham" => 25,
       "sushant" => 30,
       ];
       echo "<br>";
       foreach($student as $key => $value){

       echo "$key is $value years old <br>";

       }


  $employee =array(
        "ram" => array("English" => 56, "Maths" => 89, "Hindi" => 98),
        "roshni" => array("English" => 74, "Maths" => 75, "Hindi" => 45),
        "subham" => array("English" => 97, "Maths" => 54, "Hindi" => 67),
        "sushant" => array("English" => 34, "Maths" => 98, "Hindi" => 76),
      );


      $sum =0;
      foreach( $employee as $name){
      $sum++;
      echo "<br><b> #$sum </b><br>";
      foreach($name as $key => $value){
       echo "$key : $value <br>";
      }
      }