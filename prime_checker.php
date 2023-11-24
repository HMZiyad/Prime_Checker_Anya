<?php
$x = $_POST["num"];

function isPrime($num)
{
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

$image1 = "no.gif";
$image2 = "anya6.gif";
$image3 = "anya8.gif";
$imageshow;

if ($x < 0) {
    $imageshow = $image2;
} else if (isPrime($x)) {
    $imageshow = $image3;
} else {
    $imageshow = $image1;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Anya_Forger</title>
</head>

<body>


    <div class="content">
        <img src="<?php echo $imageshow; ?>">

    </div>

    <div class="Result">
        <?php

        if ($x < 0) {
            echo "Invalid, Anya is unable to check this number!";
        } else if (isPrime($x)) {
            echo $x . " is a prime number.";
        } else {
            echo $x . " is not a prime number.";
        }

        ?>
    </div>

    <div class="Back">

        <form action="index.html">
            <input type="submit" value="go back">
        </form>

    </div>

</body>

</html>