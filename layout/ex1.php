<?php include "header.php" ?>

<h1>Write a simple PHP script to print your information (Name and your groupid).</h1>
<?php

echo "Parth Patel<br>";
echo "BBCAP22";

?>
<h1>3.2 rite PHP code to display the following message.</h1>
<?php
echo "Hello World! My name is\"Parth\"";
?>
<h1> Current Date</h1>
<?php echo date("d.m.Y") ?>

<h3>3.4 variable in php </h3>
<?php
$title1 = "PHP is interesting";
echo "<h1>" . $title1 . "</h1>";
?>

<h3>3.5 Table and Variables </h3>
<?php
$g1 = 5;
$g2 = 5;
$g3 = 5;

echo"
<table>
<tr>
<th> S.N </th><th> Name </th><th> Grade </th>
</tr>
<tr>
<td> 1 </td><td> pekka </td><td> $g1 </td>
</tr>
<tr>
<td> 2 </td><td> Johanna </td><td> $g2 </td>
</tr>
<tr>
<td> 3 </td><td> John </td><td> $g3 </td>
</tr>
</table>
";
?>

<h3>4 Screenshot of the devlopment environment</h3>
<img src="1.png" alt="screenshot">
<?php include "footer.php" ?> 
