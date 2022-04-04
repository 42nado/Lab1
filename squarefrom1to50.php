<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
  <title>Document</title>
  <style>
        html{
          background-color:#e7e9eb;
        }
        div {
          box-shadow: 10px 10px lightblue;
        }
        .box{
          display:flex;
          align-items:center;
          justify-content:center;
          font-size:18pt;
          border-radius: 10px 10px;
          font-family: 'Work Sans', sans-serif;
          color:white;
          margin: 20px 30% 20px 30%;
          padding:10px 10px;
          background: rgb(67,109,222);
          background: linear-gradient(49deg, rgba(67,109,222,1) 0%, rgba(7,189,204,1) 100%);
        }
  </style>
</head>
<body>
  <div class="box">
  <?php
        for ($x = 0; $x <= 50; $x++) {
            $square=$x*$x;
            echo "The square of $x is $square<br>";
          }

    ?>
  </div>

</body>
</html>
