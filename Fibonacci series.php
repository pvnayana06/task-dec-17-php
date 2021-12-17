<!DOCTYPE html>
<html>
<body>
<h2>Enter the Number</h2><br>
<form action="" method="POST">
    <input type="text" name="number"/>
    <input type="submit">
</form>

<?php

if($_POST)

$first =-1;
$second =1;
$n = $_POST['number'];

for($i=1; $i<=$n; $i++) 
{
    $temp = $first + $second;
    $first = $second;
    $second = $temp;
    echo $temp. "  ";
}
?>

</body>
</html>

