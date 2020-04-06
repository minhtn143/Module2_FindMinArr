<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Use Method</title>
</head>
<body>
<h2>Use Method</h2>
<?php
$intNumber = [4, 3, 5, 7, -21, 45, 23, 10, -2, 9];
function findMinArr($array)
{
    $min = [0];
    $index = 0;
    $length = count($array);
    for ($i = 1; $i < $length; $i++) {
        if ($array[$i] < $min) {
            $min = $array[$i];
            $index = $i;
        }
    }
    return $index;
}

echo "Result: ".findMinArr($intNumber);

?>

</body>
</html>


