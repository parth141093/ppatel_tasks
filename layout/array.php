<?php include "header.php" ?>

<form action="" method="get">

<input type="number" placeholder="Enter your first number" name="num1" required>
<input type="number" placeholder="Enter your second number" name="num2" required>

<select name="operator">

<option value="add">Add</option>
<option value="sub">Subtract</option>
<option value="mul">Multiply</option>
<option value="div">Divid</option>
</select>
<input type="submit" name="cal" value="Calculate">

</form>

<?php
if (isset($_GET["cal"])){
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operator = $_GET["operator"];

    switch($operator){
        case "add":
            $result = $num1 + $num2;
            break;
        case "sub":
            $result = $num1 - $num2;
            break;
        case "mul":
            $result = $num1 * $num2;
            break;
        case "div":
            $result = $num1 / $num2;
            break;

        default:
            $result = "Error: you have not selected the correct operator";
    }
}

if (isset($result)){
    echo "<h2> Result: $result </h2>";
}

?>
<h2>1. Write a php script to display courses as list</h2>
<?php

$courses = array("PHP","HTML","JavaScript","CMS","Project");

foreach ($courses as $c){
    echo "$c,";
}
sort($courses);
echo "<ul>";
foreach($courses as $y)
{
    echo "<li> $y </li>";
}
    echo "</ul>"
?>

<h2>2. The unset() function is used to remove element from the array. The var_dump() function is used to dump information about a variable.  array_values() is an inbuilt function that returns all the values of an array and not the keys.</h2>

<?php

$courses1 = array("PHP","HTML","JavaScript","CMS","Project");

foreach ($courses1 as $c){
    echo "$c,";
}
unset($courses1[2]);
sort($courses1);
echo "<ul>";
foreach($courses1 as $y)
{
    echo "<li> $y </li>";
}
    echo "</ul>"


?>

<h2>3.Sort the following array</h2>

<?php

$courses3 = array("PHP","HTML","JavaScript","CMS","Project");

echo "a) ascending order sort by value <br>";
asort($courses3);
foreach($courses3 as $x=>$x_value)
{
    echo $x_value;
    echo "<br>";
}

echo "b) ascending order sort by Key <br>";
ksort($courses3);
foreach($courses3 as $x=>$x_value)
{
    echo $x_value;
    echo "<br>";
}

echo "c) descending order sort by Value <br>";
arsort($courses3);
foreach($courses3 as $x=>$x_value)
{
    echo $x_value;
    echo "<br>";
}

echo "d) descending order sort by Key <br>";
krsort($courses3);
foreach($courses3 as $x=>$x_value)
{
    echo $x_value;
    echo "<br>";
}
    
?>

<?php include "footer.php" ?>