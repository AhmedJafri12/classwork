<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
    <?php
include("./php/header.php");
    ?>
</header>



    <h1>PHP</h1>
</body>
</html>

<style>

h1 {
color: green;
background-color: black;

}

</style>

<?php

$name = "Ahmed";
$age = 19;

echo "<h3> hello whata gotu tailet</h3>";

$arr = [1,2,3,4,5,6,7,8];

echo $arr[0];
  
var_dump(value: $arr);

echo "<br> <br> <br>";

$arr2 = [1,23,35,4,53,"6",7,8];
var_dump(value: $arr2);

foreach ($arr2 as $key => $item) {
    echo "<br>". $item ."<br>";
}

echo "<br> <br> <br>";


$arr3 = array("name"=>"ahmed", "age"=>"19");
foreach ($arr3 as $key => $item) {
    echo "<br>". $item ."<br>";
}
echo $arr3["age"];
echo "<br>";
echo $arr3["name"];

echo "<br> <br> <br>";


for($i=1;$i<=10;$i++) {
 if($i == 5) {
// break;
// continue;
exit();
 }
echo "$i" . "<br>";
}

echo "loop ended";
echo "<br>";
echo $i;
echo "<br/>";
$a=1;

while ($a <= 10) {
echo $a . " <br>";
$a++;
}




?>


<?php

include("./php/footer.php");
?>