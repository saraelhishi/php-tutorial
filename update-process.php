<?php
$url = '127.0.0.1:3306';
$username = 'root';
$password = '';
$conn = mysqli_connect($url, $username, $password, "mydb");

if (count($_POST) > 0) {

    mysqli_query($conn, "UPDATE employee set employeeID='" . $_POST['employeeID'] . "', 
    firstName='" . $_POST['firstName'] . "', lastName='" . $_POST['lastName'] . "', 
    city='" . $_POST['city'] . "' ,email='" . $_POST['email'] . "' 
    WHERE employeeID='" . $_POST['employeeID'] . "'");

    $message = "Record Modified Successfully";
}
$result = mysqli_query($conn, "SELECT * FROM employee WHERE employeeID='" . $_GET['employeeID'] . "'");
$row = mysqli_fetch_array($result);
?>
<html>

<head>
    <title>Update Employee Data</title>
</head>

<body>
    <form name="frmUser" method="post" action="">

        Username: <br>

        <input type="text" name="employeeID" value="<?php echo $row['employeeID']; ?>">
        <br>
        First Name: <br>
        <input type="text" name="firstName" class="txtField" value="<?php echo $row['firstName']; ?>">
        <br>
        Last Name :<br>
        <input type="text" name="lastName" class="txtField" value="<?php echo $row['lastName']; ?>">
        <br>
        City:<br>
        <input type="text" name="city" class="txtField" value="<?php echo $row['city']; ?>">
        <br>
        Email:<br>
        <input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
        <br>
        <input type="submit" name="submit" value="Submit" class="buttom">

    </form>
    <a href="displayinfo.php">
        <h4>Employee List</h4>
    </a>
</body>

</html>