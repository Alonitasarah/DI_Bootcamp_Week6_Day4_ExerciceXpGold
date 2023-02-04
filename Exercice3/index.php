<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  $my_array = array("bmw","jeep","dastun","ferrari","Honda");
  $new_array = array_map('strlen', $my_array);
 
  echo "La longueur de tableau la plus courte est ". min($new_array)."<br>". // min() function 
  " La plus grande longueur de tableau est " . max($new_array).'.'; //max() function
?> 
</body>
</html>