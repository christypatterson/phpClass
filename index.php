<?php

  $myArray=array("pizza", "chocolate", "juice");

  print_r($myArray);

  echo $myArray[5];

  echo "<br /><br />";

  $anotherArray[0]="pretzel";
  $anotherArray[1]="bagel";

  print_r($anotherArray);

  echo "<br /><br/>";

  $thirdArray=array(

       "France" => "French",
       "USA" => "English",
       "Germany" => "German"

  );

  print_r($thirdArray);

  $anotherArray[]="salad";

  echo "<br /><br />";

  print_r($anotherArray);
       
  echo "<br /><br />";

  unset($thirdArray["Germany"]);

  print_r($thirdArray);

  echo "<br /><br />";

  $name="Shem";

  unset($name);

  echo $name;

?>
