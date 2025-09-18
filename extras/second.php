<?php

$arr2 = array(32,33,55,66,77);

foreach ($arr2 as  $item){  // ye he hmara simple array
    echo "<br>". $item. "<br>";
}




$arr3 = array(1=>"khan", 2=>"ali",3=>"hussain"); //ye hame index ke zarie select kr sakte hai
foreach ($arr3 as $item) {
    echo "<br>". $item . "<br>";
}


$arr4 = array("name"=>"khan", "f-name"=>"ali","c-name"=>"hussain"); //ye bhe wahe hai bs index ke jga hamne name ka use kiya hai
foreach ($arr4 as $item) {
    echo "<br>". $item . "<br>";
}

echo $arr4["c-name"]; //ye hame arry ko target kr ke dekh rhe the .







?>