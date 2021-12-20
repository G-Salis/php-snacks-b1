<?php 

function getRandomArray($min, $max, $nItems){

$newArray = [];

if(($max - $min) < $nItems){
  $nItems = $max - $min;
};

while(count($newArray) <  $nItems){
  $number = rand($min,$max);
  if(!in_array($number,$newArray)){
    $newArray[] = $number;
  }

};

return $newArray;
}

var_dump(getRandomArray(0, 15, 15));

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 4</title>
</head>
<body>
  
</body>
</html>