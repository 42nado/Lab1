<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
<form method="get">  
    Enter number of rows:  
    <input type="number"  name="numberrow" value="<?php echo $_GET['numberrow'];?>">
    <br>
    Enter number of column: 
    <input type="number"  name ="numbercol"value="<?php echo $_GET['numbercol'];?>" >  
    <br>
    <input type="submit" value="submit" >  
    
    </form> 
    <?php
    if(isset($_GET["numberrow"]) && isset($_GET["numbercol"])){
        $numberrow = intval($_GET["numberrow"]);
        $numbercol = intval($_GET["numbercol"]);
        echo '<br><table border="1" >';
        for ($x = 1; $x <= $numberrow; $x++) {
            echo "<tr>";
            for ($y = 1; $y <= $numbercol; $y++) {
                echo "<td>" . ($x * $y) . "</td>";
            }
            echo "</tr>";
        }
        echo '</table>';
    }
    ?>
</body>
</html>
