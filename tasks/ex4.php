<?php include 'header.php'; ?>

<h3>If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting, use form to get user input).</h3>


<div class="container mt-4">
        <form method="post" action="ex4.php" class="form">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="name">Age:</label>
                <input type="text" name="age" id="age" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"] ?? '';
    $age = $_POST["age"] ?? '';

    if ($age >= 18) {
        $message = "$name, you are eligible for voting. Your age is $age.";
        echo $message;
    } else {
        $message = "$name,you are not eligible for voting. Your age is $age.";
        echo $message;
    }
}



?>

<h3>Switch Case: Write a PHP script that gets the current month and prints one of the following responses, depending on whether it's August or not:</h3>

<?php
$month = date("F");

switch ($month) {
    case 'August':
        $message = "It's August, so it's still holiday.";
        echo $message;
    
    default:
        $message = "Not August, this is $month, so I don't have any holidays.";
        echo $message;
}
?>

<h3>For Loop: Write a PHP script that will print the multiplication table of a number (n, use form to get user input).</h3>

<div class="container mt-4">
        <form method="post" action="ex4.php" class="form">
            <div class="form-group">
                <label for="number">Number:</label>
                <input type="text" name="number" id="number" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"] ?? 0;

    for ($i = 1; $i <= 10; $i++) 
    {
        $result = $number * $i;
    }

    echo $result;
}


?>


<h3>While Loop: Write a PHP script that will print all the numbers from 1 to n. (use form to get user input)</h3>

<div class="container mt-4">
        <form method="post" action="ex4.php" class="form">
            <div class="form-group">
                <label for="number">Number to resolve:</label>
                <input type="text" name="number2" id="number2" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

<?php

$number2 = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number2 = $_POST["number2"] ?? 0;

    for ($i = 1; $i <= $number2; $i++) 
    {
        echo $i . ' ';
    }
}   


?>

<h3>Foreach Loop: Write a PHP script that will print all the elements of an array.</h3>


<?php 

$myarray = ["HTML", "CSS", "PHP", "JavaScript"];
$length = count($myarray);

for ($i = 0; $i < $length; $i++)
{
    echo $myarray[$i] . ' ';
}

?>




<?php include 'footer.php'; ?>