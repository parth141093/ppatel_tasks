<?php include "header.php" ?>

<h3>Exercise 3. In-class Task Variable & Operators 07.02.2023 (variable.php)</h3>

<h2>
    Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using
    <h3> tag: Hello …., You are welcome to my site. (Form Tutorial: https://www.youtube.com/watch?v=nLPlDHrsyYA
</h2>

<form action="action.php" method="post">

    <div class="row">
        <div class="col">
            <input type="text" name="fname" required placeholder="First Name" class="form-control">
        </div>
        <div class="col">
            <input type="text" name="lname" required placeholder="Last Name" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col">
            Birth Date: <input type="date" name="bdate" class="form-control"></div>
        <div class="col">
            Select fav color: <input type="color" name="color" class="form-control"></div>
        <input type="submit" value="submit">
    </div>
</form>

<h2>Prepare a simple html table and apply bootstrap style to the table. You may use the same table that you did in 3.5.

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Parth</td>
                <td>Patel</td>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>

            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>

            </tr>
        </tbody>
    </table>

    <h2>Write a PHP script with two string variables. Assign any text to these variables. Join them together. Print the
        length of the string. (Hint: string function)</h2>

    <?php
    $a = 'My name is';

    $b = 'Parth';

    $c = $a . $b;

    echo " $c \n";
    ?>

    <h2>Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to
        output your answer.</h2>

    <?php
    $v = 298;
    $x = 234;
    $y = 46;
    $z = $v + $x + $y;
    echo "Sum: ", $z;
    ?>

    <h2>Write a PHP script to detect the browser being used to view your pages. (Use predefined variables: $_SERVER).
    </h2>
    <?php
    echo $_SERVER['HTTP_USER_AGENT'] . "<br>";

    ?>

    <h2>Write a PHP script in the footer section of your universal footer just below the Copyright information to
        display the last modification time of a file.</h2>

    <?php include "footer.php" ?>