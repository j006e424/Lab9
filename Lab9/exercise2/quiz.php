<?php
$q1 = $_POST["Question1"];
$q2 = $_POST["Question2"];
$q3 = $_POST["Question3"];
$q4 = $_POST["Question4"];
$q5 = $_POST["Question5"];
$count = 0;

echo "Question 1: What does 5+10 equal?<br>";
echo "You answered: " . $q1 . "<br>";
echo "Correct answer: 15<br><br>";

echo "Question 2: What does 10 x 10 equal?<br>";
echo "You answered: " . $q2 . "<br>";
echo "Correct answer: 100<br><br>";

echo "Question 3: What is the square root of 16 equal to?<br>";
echo "You answered: " . $q3 ."<br>";
echo "Correct answer: 4<br><br>";

echo "Question 4: What is 30/5 equal to?<br>";
echo "You answered: " . $q4 ."<br>";
echo "Correct answer: 6<br><br>";

echo "Question 5: What is 20/10 equal to?<br>";
echo "You answered: " . $q5 ."<br>";
echo "Correct answer: 2<br>";

if($q1 == '15')
{
    $count++;
}
if($q2 == '100')
{
    $count++;
}
if($q3 == '4')
{
    $count++;
}
if($q4 == '6')
{
    $count++;
}
if($q5 == '2')
{
    $count++;
}
$percent = $count * 20;
echo "<br>You answered " . $count . " questions correctly<br>";
echo "Total Score: " . $percent . "%";
?>
