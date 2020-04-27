<html>

<body>

    <?php
    echo "Hello World, php !";
    $a = 5;
    $b = 10;
    $c = $a + $b;
    echo "<br> result = $c <br>";

    $data = array("30", "50", "55");
    echo $data[0] . "<br>";
    echo $data[1] . "<br>";
    echo $data[2];

    function getSum($num1, $num2)
    {
        $sum = $num1 + $num2;
        return $sum;
    }
    $z = getSum(20, 30);
    echo $z;

    ?>

</body>

</html>