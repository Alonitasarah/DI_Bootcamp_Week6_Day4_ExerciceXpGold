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

$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

$tempArray = explode(',', $month_temp);
$totTemp = 0;
$tempArrayLength = count($tempArray);

foreach ($tempArray as $temp)
{
 $totTemp += $temp;
}
 $avgHighTemp = $totTemp/$tempArrayLength;
 echo "La température moyenne est : ".$avgHighTemp.""; 
 sort($tempArray);
 echo " Liste des cinq températures les plus basses :";
for ($i=0; $i< 5; $i++)
{ 
 echo $tempArray[$i].", ";
}
 echo "Liste des cinq températures les plus élevées :";
for ($i=($tempArrayLength-5); $i< ($tempArrayLength); $i++)
{
 echo $tempArray[$i].", ";
}
?>

</body>
</html>