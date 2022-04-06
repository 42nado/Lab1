<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    html{
        font-family:"Trebuchet MS";
        background: rgb(240,246,246);
    background: linear-gradient(357deg, rgba(240,246,246,1) 0%, rgba(136,196,237,1) 100%);
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
        background-color: #f9f9f9;
        border-radius: 20px;
        margin-bottom: 30px;
        overflow: hidden;
        text-align: left;
        border: 1px solid #0099dd;
        margin: 3pt;
        box-shadow:0 0 15px #999;
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
    font-size:1rem;
    /* overflow: hidden; */

    }
    form {
    display: inline-block;
    height:100%;
    }
    .sec1 {
        padding-top:20px;
        min-width:100px;
    }
    textarea {
    resize: none;
    }
    .container {
    display: flex;
    justify-content: center;
    align-items: center;
    }
    .button {
    background-color: #67b5eb; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius:20px;
    }
    .legend-class{
    border: 1px black solid; 
    margin-left: 1em; 
    padding: 0.2em 0.8em;
    background-color:black;
    color:white;
    margin:0 auto;
    }
    input[type=text] {
    width: 100%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    }
    input[type="radio"] {
    -ms-transform: scale(1.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Chrome, Safari, Opera */
    transform: scale(1.5);
    border: 5px solid #0DFF92;
    
    }
    input[type="text"],textarea {
    border-radius:5px;
    
    }
    input[type="checkbox"]{
        width: 20px;
        height: 20px;
    }
    #drop{
    border-radius:10px;
    width: 120px;
    height: 50px;
    font-size:1rem;
    line-height: 50px;
    -webkit-appearance: menulist-button;
    -moz-appearance:none;   
    }
    label{
        font-weight:bold
    }
    #multi{
    border-radius:10px;
    width: 150px;
    height: 70px;  
    font-size:1rem;  
    }
    </style>
</head>
<body>
<div class="container">
<form  method="$_POST"  action="personalinfo2.php">
    
    <fieldset>
        <legend class="legend-class">Personal Information</legend>
 
    <section class="sec1"> 
           <label for="studentID"> Student Number :</label>
           <input type="text" id="ID" name="ID" placeholder="STUDENT NUMBER" required><br>
            <label for="fname"><br> First Name : </label>
            <input type="text" id="fname" name="fname" placeholder="FIRSTNAME" required><br>
            <label for="lname"><br>Last Name : </label></td>
            <input type="text" id="lname" name="lname" placeholder="LASTNAME"required><br>
            <label> Gender :</label>
            <input type="radio" id="male" name="gender" value="Male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="Female">
            <label for="female">Female</label><br><br>
    </section>
    <section id="wrapper">
        <div id="left">
            <label> Status : </label>
            <select id="drop" name="status">
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Widow">Widow</option>
            </select>
        </div>
        <div id="right">
            <label> Favorite Food :</label><br>
            <select id="multi"name = "fav_food[]" multiple>
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
            <button class="button button1" name="submit">Submit</button>
            <button class="button button1" type="reset">Reset</button>
            <!-- <input type="submit" value="Submit" name="submit">
            <input type="reset"> -->
        </div>
    </section>       

           
            </fieldset>
            </div>
    </form>

    <?php // nichecheck kung submitted na yung form
    $style = "";
    if(!isset($_POST['submit']))
    {
    $style = "style='display:none;'";
    }
    ?>


</body>
</html>