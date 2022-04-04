<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Odd or Even?
    </h1>
    <form method="post">  
    Enter a number:  
    <input type="number" name="number">  
    <input type="submit" value="Compute" >  
    
    </form>  
    </body>  
    </html>  
    <?php   
        if($_POST){  
            $number = $_POST['number'];   
            //divide entered number by 2   
            //if the reminder is 0 then the number is even otherwise the number is odd  
            if(($number % 2) == 0){  
                echo "<br>Number $number is even";  
            }else{  
                echo "<br>Number $number is odd";  
            }  
        }  
    ?>  
</body>
</html>