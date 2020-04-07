<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Use Method</title>

</head>
<body>
<h2>Use Method</h2>
<form action="" method="get" name="inputLength">
    Enter length of array:
    <input type="number" name="length">
    <button type="submit">Enter</button>
</form>
<form action="" method="post" name="inputValue">
    Enter value of array:<br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $length = (int)$_REQUEST["length"];

        echo '<tr><td>Value: </td>';
        for ($i = 0; $i < $length; $i++) {
            echo '<td><input type="text" name="array1[]"> </td>';
        }
        echo '</tr>';
    }
    ?>
    <br>
    <button type="submit">Enter</button>
    <br>
    <?php
        include "function.php";
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            $array = $_REQUEST['array1'];
            echo "Your Array is: ";
            foreach ($array as $value){
                echo $value." ";
            }
            echo "<br> Your Minimum is: ".findMinArr($array);
            echo "<br> Your Minimum at position: ";
            foreach (findMinArrIndex($array) as $value){
                echo $value." ";
            }
            echo "<br> Your Minimum display ".findMinArrTimes($array)." times";


        }
    ?>
</form>


</body>
</html>


