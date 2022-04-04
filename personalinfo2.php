<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

    table, th, td{
        border: 1px solid black;
        border-collapse:collapse;
        background-color:#f1f1f1;
        cellspacing:1;
    }
</style>
<body>
<section > <!-- nakahide hanggat di pa submitted -->
        
        <table> <!-- Printed na yung Info -->
            <tr>
                <td colspan="2">Personal Information</td>
            </tr>
            <tr>
                <th> Student Number: </th>
                <th><?php echo $_GET["ID"]?>
            </tr>
            <tr>
                <td> Name: </td>
                <td><?php echo $_GET['fname'] . " " . $_GET['lname'] ?></td>
            </tr>
            <tr>
                <td> Gender: </td>
                <td> <?php echo $_GET['gender'] ?></td>
            </tr>
            <tr>
                <td> Status: </td>
                <td> <?php echo $_GET['status'] ?></td>
            </tr>
            <tr>
                <td> Courses:</td>
                <td><?php
                if(!empty($_GET['course'])) 
                {// Binibilang kung ilan yung nacheck na box
                    $checked_count = count($_GET['course']);
                    //print ng bawat checked box
                    foreach($_GET['course'] as $selected) 
                    {
                        echo "<p>" . $selected . "<p>";
                    } 
                }?>
                    </td> 
            </tr>
            <tr>
                <td> Foods: </td>
                <td><?php
                if(!empty($_GET['fav_food'])) 
                {   //print ng bawat checked box
                    foreach($_GET['fav_food'] as $select) 
                    {
                        echo "<p>" . $select . "<p>";
                    } 
                }?> </td>
            </tr>
            <tr>
                <td> Favorite quote: </td>
                <td> <?php echo $_GET['quote']?></td>
            </tr>
        </table>
    </section>
</body>
</html>