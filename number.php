<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Generator</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" //
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

        <!-- font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">

</head>

<body>

    <form method=POST>
    <div>
       <p class = "instruction">
          Please enter 2-digit random number (00 ~ 99)
       </p>
       <div class = "text"><input type = text id = "numb"/></div>
        <div class = "submit"><a href = "spchar.php"><button type= "button" onclick = myFunction()>Submit</button></a></div>     
        <p id = "demo"></p>
     </div>
     </form>
</body>

<script>
  function myFunction() {
      let x = document.getElementById("numb").value;
      let text;
      if (isNaN(x) || x >= 100) {
         text = "Input not valid";
      }else {
         text = "Input OK";
  }
  document.getElementById("demo").innerHTML = text;
}

</script>

</html>