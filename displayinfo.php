<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "mydb";
$conn = mysqli_connect($servername, $username, $password, "$dbname");
if (!$conn) {
    die('Could not Connect My Sql');
}

$result = mysqli_query($conn, "SELECT * FROM employee");
?>

<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    if (mysqli_num_rows($result) > 0) {
    ?>
        <table>

            <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td>City</td>
                <td>Email id</td>
            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $row["firstName"]; ?></td>
                    <td><?php echo $row["lastName"]; ?></td>
                    <td><?php echo $row["city"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                </tr>
            <?php
                $i++;
            }
            ?>
        </table>
    <?php
    } else {
        echo "No result found";
    }

    ?>