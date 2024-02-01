<?php 
include 'header.php';

$firstname = "";
$lastname = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
}

?>

<h1>Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an <h3> tag.</h1>

<div class="container mt-4">
        <form method="post" action="ex3.php" class="form">
            <div class="form-group">
                <label for="firstname">First Name:</label>
                <input type="text" name="firstname" id="firstname" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="lastname">Last Name:</label>
                <input type="text" name="lastname" id="lastname" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

<h3>Hello <?php echo $firstname . ' ' . $lastname;?>, You are welcome to my site.</h3>
<br>
<br>
<br>
<h3>HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. Note, you have already done a table in Exercise 1. If you wish, you can use the same table.</h3>

<div class="container mt-4">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">S.n.</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><?php echo $firstname; ?></td>
                    <td><?php echo $lastname; ?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Alice</td>
                    <td>Smith</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Bob</td>
                    <td>Jones</td>
                </tr>
            </tbody>
        </table>
    </div>

<h3>String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). Join them together and print the length of the string.</h3>    
<?php
    $str1 = "Hello";
    $str2 = "World";
    $str3 = $str1 . ' ' . $str2;
    $length = strlen($str3);
    echo "Hello " . "World is " . $length . " characters long";
?>

<h3>Number Addition: Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and an echo statement to output your answer.</h3>  

<?php 
$n1 = 298;
$n2 = 234;
$n3 = 46;

$sum = $n1 + $n2 + $n3;

echo "The sum of provided numbers is $sum";
?>

<h3>User Browser Detection: Write a PHP script to detect the browser being used to view your pages. Hint: Use predefined variables: $_SERVER</h3>

<?php
$userAgent = isset($_SERVER['HTTP_USER_AGENT']);

if (strpos($userAgent, 'Firefox')) {
    echo 'Firefox';
} elseif (strpos($userAgent, 'Chrome')) {
    echo 'Chrome';
} elseif (strpos($userAgent, 'Edge')) {
    echo 'Edge';
} else {
    echo 'Chrome';
}
?>




<?php include 'footer.php'; ?>