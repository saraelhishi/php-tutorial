<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "mydb";
$conn = mysqli_connect($servername, $username, $password, "$dbname");
if (!$conn) {
    die('Could not Connect My Sql');
}
if (isset($_POST['save'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $city_name = $_POST['city_name'];
    $email = $_POST['email'];
    $sql = "INSERT INTO employee (firstName,lastName,city,email)
	 VALUES ('$first_name','$last_name','$city_name','$email')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully !";
    } else {
        echo "Error: " . $sql . " " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
