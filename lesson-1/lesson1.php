<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lesson One PHP</title>
    <!--<link rel="stylesheet" type="text/css" href="/dependencies/normalize.css" />-->
    <link rel="stylesheet" type="text/css" href="/dependencies/skeleton.css" />

</head>
<body><div class="container"><div class="row"><div class="twelve columns">

<h1>Variables</h1>
<?php

$friday = "Friday"; //assigned value of string friday

$todaysDate = date("Y.m.d."); //assigned value of a function

$friday = "Monday" //same variable given a different value

?>

<h1>Strings</h1>

<?php

$stringTest = "I am assigning \"this\" string to a variable named $stringTest";
//this sentence is a string
$stringTest2 = "string"; //a string an just be a word, doesn't need to be a series of objects

$stringTest3 = "a 1 ewj... 1/2 frotsaflds;a sdfasfa"; //also a stringTest

echo "this is also a string - no variable needed";

?>

<h1>Arrays</h1>

<?php
$dogs = array("shetland", "golden");
$animals = array( $dogs, "frog", "elephant", "cat". "wolf");
/*
key: 0
value: dog,

key: 1
value: frog

key: 2
value: elephant

key: 3
value: cat
*/
?>

<h1>Superglobals</h1>


<h1>Booleans</h1>

<?php

$areWeHavingFun = true; //boolean
$seriously = "false"; //string

?>

<h1>NULL</h1>

<?php
$var1 = $var2; //var1 is null because the value of var2 has not been set

$var1 = "null"; //var1 is NOT equal to null because it has teh value of a string name of null

$var1 = NULL; //var1 is again equal to null;
?>

<h1>Constants</h1>

<?php
define("FAVORITE_ANIMAL", "Dogs");

?>

<h1>Numbers</h1>

<?php

$int1 = 56;

$float1 = 4.5;
?>

<h1>Conditional Statements</h1>

<?php

if ($var1 = $var2) {
    echo "these variables are the same";
}

if ($sky = "blue") {
    echo "Sunny";
} else {
    echo "Cloudy";
}
?>

<?php
$number = 1; //base value of variable

while ($number <= 10) { //boolean comparison to see if number is less than or equal to ten
    echo $number; //echo value of variable number
    $number++; //increment the variable number by 1
}

?>


<h1>Functions</h1>

<?php
// Single Line Comment

/* Multiline
Still a comment
Yup... still a comment */

?>
<!-- OUTSIDE OF PHP TAGS -->


</div></div></div></body>
</html>
