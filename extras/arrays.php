<?php


// $arr = ["name"=>"ali","age"=>22,"Ismarried"=> "false"];

// $arr1 = ["ali",22, "false","khan","abc"];

// foreach ($arr as $key => $value) {
//     echo " ". $key ." : ". $value ."<br> ";
// }

// var_dump($arr);

// foreach ($arr as $value) {
//     echo " ". $value ."<br> ";
// }

// var_dump($arr1);


$arr2d = [
    ["name"=>"ali","age"=>22, "Ismarried"=> "false"],
    ["name"=>"bilal","age"=>21, "Ismarried"=> "true"],
    ["name"=>"ahzam","age"=>25, "Ismarried"=> "false"],
    ["name"=>"shahzad","age"=>29, "Ismarried"=> "false"],
    ["name"=>"yousuf","age"=>26, "Ismarried"=> "true"],
    ["name"=>"rayyan","age"=>34, "Ismarried"=> "false"]
];

// var_dump($arr2d);

//echo $arr2d[3]["name"] .$arr2d[3]["age"] .$arr2d[3]["Ismarried"];

foreach ($arr2d as $row) {
    foreach ($row as $key => $value) {
        echo " ".$key." : ".$value." ";
    }
    echo "<br>";
}

for ($i=0; $i < 11; $i++) { 
    echo $i . "<br>";
}

echo"<br>";
for ($i=11; $i > 0; $i--) { 
    echo $i . "<br>";
}

?>