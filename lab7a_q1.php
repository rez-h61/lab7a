<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Lab 7a Q1</title> 
</head> 
<body> 
    <?php
        $name = "MUHAMMAD FARES BIN MOHAMAD HAFIDZI";
        $matricNumber = "AI250163";
        $course = "BACHELOR IN SOFTWARE ENGINEERING WITH HONOURS";
        $yearOfStudy = "Second Year";
        $address = "NO 16 TAMAN LIMBONG MEWAHJALAN TEMENGGONG AHMADPARIT JAWA 84150 MUAR";
    ?> 
 
    <table border="1">
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric number</td>
            <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of study</td>
            <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table> 
     
</body> 
</html> 