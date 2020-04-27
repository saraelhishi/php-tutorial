<?php
$url = '127.0.0.1:3306';
$username = 'root';
$password = '';
$conn = mysqli_connect($url, $username, $password, "mydb");

$result = mysqli_query($conn, "SELECT * FROM employee");
?>

<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <table>
        <tr>
            <td>Employee Id</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>City</td>
            <td>Email id</td>
            <td>Action</td>
        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            if ($i % 2 == 0)
                $classname = "even";
            else
                $classname = "odd";
        ?>
            <tr class="<?php if (isset($classname)) echo $classname; ?>">
                <td><?php echo $row["employeeID"]; ?></td>
                <td><?php echo $row["firstName"]; ?></td>
                <td><?php echo $row["lastName"]; ?></td>
                <td><?php echo $row["city"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td>
                    <a href="update-process.php?employeeID=
                <?php echo $row["employeeID"]; ?>">Update</a>
                </td>
            </tr>
        <?php
            $i++;
        }
        ?>
    </table>
</body>

</html>