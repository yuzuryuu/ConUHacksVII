<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Generator</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" //
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form method=POST>
        <div>
            <div class = "color">
             <?php
              $key2 = rand(0, 7);
               switch($key2){
                 case 0:
                   echo "<img src = \"img/color/0.png\" width =\"400\" height = \"400\"\">";
                   break;
                 case 1:
                   echo "<img src = \"img/color/1.png\" width =\"400\" height = \"400\"\">";
                   break;
                 case 2:
                   echo "<img src = \"img/color/2.png\" width =\"400\" height = \"400\"\">";
                   break;
                 case 3:
                   echo "<img src = \"img/color/3.png\" width =\"400\" height = \"400\"\">";
                   break;
                 case 4:
                   echo "<img src = \"img/color/4.png\" width =\"400\" height = \"400\"\">";
                   break;
                 case 5:
                   echo "<img src = \"img/color/5.png\" width =\"400\" height = \"400\"\">";
                   break;
                 case 6:
                   // echo "<img src = \"img/color/6.jpg\" width =\"400\" height = \"400\"\">";
                   // break;
               }
               echo "<br/>"
             ?>
             </div>
            <br/>
            <div class = "instruction">Please enter the name of the color in the above image.</div>
            <div class="button"><button type="button" class="btn btn-outline-success" onclick="myFunction()">Generate</button></div>
            <div class ="text"><input type = text /></div>            
          </div>

</body>

</html>