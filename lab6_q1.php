<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>
    <?php
        $name = "Nur Sarah Hanis Binti Azlan";
        $matricid = "AI220031";
        $course = "BIT";
        $year = "2";
        $address = "Kuala Lumpur";
    ?>

    <table>
       <tr>
            <td>Name:</td>
            <td><?php echo "$name"; ?></td>
       </tr>
       <tr>
            <td>Matric Number:</td>
            <td><?php echo "$matricid"; ?></td>
       </tr>
       <tr>
            <td>Course:</td>
            <td><?php echo "$course"; ?></td>
       </tr> 
       <tr> 
            <td>Year of Study:</td>
            <td><?php echo "$year"; ?></td>
       </tr>
       <tr>
            <td>Address:</td>
            <td><?php echo "$address"; ?></td>
       </tr> 
    </table>

</body>
</html>