<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        font-family:"Trebuchet MS";
        background: rgb(240,246,246);
        background-repeat:no-repeat;
    background: linear-gradient(357deg, rgba(240,246,246,1) 0%, rgba(136,196,237,1) 100%);
    }
    table, th, td{
        border: 1px solid black;
        border-collapse:collapse;
        background-color:#f1f1f1;
        cellspacing:1;
        width:50%;
        padding-left:20px;
    }
    th,td{
        height:50px;
    }
    .container {
        margin-top:20px;
        display:flex;
        align-items: center;
        justify-content: center;
    }
    .title{
     text-align: center;
     font-size:16pt;
     font-weight:bold;
    }
    .fcc-btn {
    
    color: white;
    padding: 15px 25px;
    text-decoration: none;
    background-color: #67b5eb; 
    border: none;
    color: white;
    cursor: pointer;
    border-radius:20px;
    }
    .button1 {
        display:flex;
        align-items: center;
        justify-content: center;
        margin-top:50px;
        cursor: pointer;
        border-radius:20px;
        
    }

</style>
<body>
<section > <!-- nakahide hanggat di pa submitted -->
        <div class="container">
        <table> <!-- Printed na yung Info -->
            <tr>
                <td class="title"colspan="2" >Personal Information</td>
            </tr>
            <tr>
                <td> Student Number: </td>
                <td><?php echo $_GET["ID"]?>
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
                    $counter = 0;
                    foreach($_GET['course'] as $selected) 
                    {
                        $counter++;
                        echo "<p>" . $counter .".".  $selected . "<p>";
                    } 
                }?>
                    </td> 
            </tr>
            <tr>
                <td> Foods: </td>
                <td><?php
                if(!empty($_GET['fav_food'])) 
                {   //print ng bawat checked box
                    $counter2 = 0;
                    foreach($_GET['fav_food'] as $select) 
                    {
                        $counter2++;
                        echo "<p>" . $counter2 .".".$select . "<p>";
                    } 
                }?> </td>
            </tr>
            <tr>
                <td> Favorite quote: </td>
                <td> <?php echo $_GET['quote']?></td>
            </tr>
        </table>

    </section>
    
    </div>

    <div class="button1"><a class="fcc-btn" href="personalinfo.php">Back</a>  </div>
    
    
</body>
</html>