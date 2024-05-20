<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 6 Q3</title>
</head>
<body>
    <?php
    // Function to calculate the area of a rectangle
    function calculateArea($width, $length) {
        return $width * $length;
    }

    // Values for width and height
    $width = 3;
    $length = 5;

    // Calculate the area
    $area = calculateArea($width, $length);
    ?>
    <p><?php echo "The area of a rectangle with a width of $width and a length of $length is $area."; ?></p>
</body>
</html>