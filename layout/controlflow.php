<?php include "header.php" ?>
<h2>Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:</h2>
<?php
$d = date("F");
$a = "August";
if ($d == "August"){
    echo"It's $d, so it's still holiday.";
}
else{
    echo "Not August, this is $d so I don't have any holidays.";
}
?>

<h2>Assign colour red to a variable name $color and check to print one the following responses (if else statement)</h2>

<?php

$color = "red";
if ($color == "red"){
    echo"The color is red.";
}
else{
    echo "The color is not red";
}

?>

<h2>Write a program to grade students based on their total score for a subject. Use variable to hold the total score. The grading scheme is:</h2>

<?php

$grade = 100;

if($grade > 80){
    echo "Excellent";
}
elseif($grade >70 && $grade<80){
    echo"Grate";
}
elseif($grade >60 && $grade<70){
    echo"Good";
}
elseif($grade >50 && $grade<60){
    echo"Pass";
}
else{
    echo "Fail";
}

?>

<h2>Task 4, Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting,)
</h2>
<form action="action2.php" method="post">

    <div class="row">
        <div class="col">
            <input type="text" name="name" required placeholder="Name" class="form-control">
        </div>
        <div class="col">
            <input type="number" name="age" required placeholder="Age" class="form-control">
        </div>
    </div>
    <div class="row">
        <input type="submit" value="submit">
    </div>
</form>


<h2>In task 5, you used $_SERVER['HTTP_USER_AGENT']; to get the browser name. 
Use Switch statement with strops function to print the name of the browser as below: 
If someone is using Chrome it should print, you are using Goolge Chrome….
</h2>

<?php
$user_agent =$_SERVER['HTTP_USER_AGENT'] ;
echo $user_agent;

switch (true){
    case strpos($user_agent, 'Edge');
        echo "<br> You are using Microsoft Edge.";
        break;
    case strpos($user_agent, 'Chrome');
        echo "<br> You are using Google Chrome.";
        break;
    case strpos($user_agent, 'Mozilla');
        echo "<br> You are using Firefox.";
        break;

    default;
        echo "<br> Browser cannot be defined.";
}


?>

<?php include "footer.php" ?>