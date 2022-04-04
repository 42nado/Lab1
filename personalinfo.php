<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    html{
        background-color:#f1f1f1;
    }
    #fav{
        text-align:center;
    }
    legend{
        /* margin:0 auto; */
        font-size:14pt;
        color:red;
        text-align:center;
    }
    table, th, td{
        border: 1px solid black;
    }
    fieldset{
        padding: 1em;
        background-color: #f1f1f1;
        border-radius: 2px;
        margin-bottom: 12px;
        overflow: hidden;
        padding: 0 .625em;
    }
    table{
        border-collapse:collapse;
    }
    #wrapper{
    display: flex;
    
    }
    #left {
    grid-column:1;
    overflow: hidden;
    display: flex;
    align-items: center;
    }
    #left1 {
    grid-column:1;
    margin-left:10px
    /* overflow: hidden; */
    }

    #right {
    margin-left:40px;
    grid-column:2;
    /* overflow: hidden; */

    }
    form {
    display: inline-block;
    }
    .sec1 {
        min-width:100px;
    }
    textarea {
    resize: none;
    }
 
    </style>
</head>
<body>

    <form action="perSonalinfo2.php" method="GET" target="_blank" action=" ">
    <fieldset>
        <legend>Personal Information</legend>
 
    <section class="sec1"> 
           <label for="studentID"> Student Number :</label>
           <input type="text" id="ID" name="ID" required><br>
            <label for="fname"><br> First Name : </label>
            <input type="text" id="fname" name="fname" required><br>
            <label for="lname"><br>Last Name : </label></td>
            <input type="text" id="lname" name="lname" required><br>
            <label> Gender :</label>
            <input type="radio" id="male" name="gender" value="Male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="Female">
            <label for="female">Female</label><br><br>
    </section>
    <section id="wrapper">
        <div id="left">
            <label> Status : </label>
            <select name="status">
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Widow">Widow</option>
            </select>
        </div>
        <div id="right">
            <label> Favorite Food :</label><br>
            <select name = "fav_food[]" multiple>
                <option value = "Barbeque">Barbeque</option>
                <option value = "Hotdog">Hotdog</option>
                <option value = "Menudo">Menudo</option>
                <option value = "Adobo">Adobo</option>
                <option value = "Nilaga">Nilagang Baka</option>
                <option value = "Sinigang">Sinigang na Hipon</option>
            </select>
        </div>
    </section>
    
    <h4> Courses : </h4>
    <section id="wrapper">
            <div id="left1">
                <input type="checkbox" id="c1" name="course[]" value="Object-Oriented Programming">
                <label for="c1"> Object-Oriented Programing</label><br>
                <input type="checkbox" id="c2" name="course[]" value="Data Structures">
                <label for="c2"> Data Structures</label><br>
                <input type="checkbox" id="c3" name="course[]" value="Operating Systems">
                <label for="c3"> Operating Systems</label><br>
                <input type="checkbox" id="c4" name="course[]" value="PE">
                <label for="c4"> PE </label><br>
            </div>
            <div id="right">
                <input type="checkbox" id="c5" name="course[]" value="Oracle 1">
                <label for="c5"> Oracle 1 </label><br>
                <input type="checkbox" id="c6" name="course[]" value="Oracle 2">
                <label for="c6"> Oracle 2 </label><br>
                <input type="checkbox" id="c7" name="course[]" value="Oracle 3">
                <label for="c7"> Oracle 3 </label><br>
                <input type="checkbox" id="c8" name="course[]" value="Oracle 4">
                <label for="c8"> Oracle 4 </label><br>
            </div>
    </section>
    <section>
    <div id="fav">
        <h4> Enter your Favorite quote : </h4>
            <!-- <input  type="text" id="quote" name="quote" required ><br><br> -->
            <textarea rows="4" cols="30" type="text" id="quote" name="quote" required >
            </textarea><br><br>
            <input type="submit" value="Submit" name="submit">
            <input type="reset">
        </div>
    </section>       

           
            </fieldset>
    </form>

    <?php // nichecheck kung submitted na yung form
    $style = "";
    if(!isset($_POST['submit']))
    {
    $style = "style='display:none;'";
    }
    ?>
     
    <section id = 'FULL' <?php echo $style;?>> <!-- nakahide hanggat di pa submitted -->
        
        <table> <!-- Printed na yung Info -->
            <tr>
                <td colspan="2">Personal Information</td>
            </tr>
            <tr>
                <th> Student Number: </th>
                <th><?php echo $_POST["ID"]?>
            </tr>
            <tr>
                <td> Name: </td>
                <td><?php echo $_POST['fname'] . " " . $_POST['lname'] ?></td>
            </tr>
            <tr>
                <td> Gender: </td>
                <td> <?php echo $_POST['gender'] ?></td>
            </tr>
            <tr>
                <td> Status: </td>
                <td> <?php echo $_POST['status'] ?></td>
            </tr>
            <tr>
                <td> Courses:</td>
                <td><?php
                if(!empty($_POST['course'])) 
                {// Binibilang kung ilan yung nacheck na box
                    $checked_count = count($_POST['course']);
                    //print ng bawat checked box
                    foreach($_POST['course'] as $selected) 
                    {
                        echo "<p>" . $selected . "<p>";
                    } 
                }?>
                    </td> 
            </tr>
            <tr>
                <td> Foods: </td>
                <td><?php
                if(!empty($_POST['fav_food'])) 
                {   //print ng bawat checked box
                    foreach($_POST['fav_food'] as $select) 
                    {
                        echo "<p>" . $select . "<p>";
                    } 
                }?> </td>
            </tr>
            <tr>
                <td> Favorite quote: </td>
                <td> <?php echo $_POST['quote']?></td>
            </tr>
        </table>
    </section>

</body>
</html>