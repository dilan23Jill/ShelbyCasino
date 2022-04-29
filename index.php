<?php 
session_start(); 
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shelby Casino</title>
    <link rel="icon" type="image/x-icon" href="img/icon/favicon.ico">
    <link rel="stylesheet" href="css/style.css?v=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        @font-face {
            font-family: Leander;
            src: url('/font/Leander.ttf');
        }
    </style>
</head>

<body>

    <div class="contract">
        <form method="POST" action="game.php">
             <h1>CONTRACT FORM</h1><br />
            <input type="text" class="info" id="fname" name="fname" placeholder="First name" required>
            <input type="text" class="info" id="lname" name="lname" placeholder="Last name" required><br />
            <input type="number" class="info" id="nbet" name="nbet" min="5" max="500" required><br />
            <input type="checkbox" id="terms" name="terms" required>
            <label for="terms">By checking the box you agree that you are older than 18 years old and <br />
                that you accept all the terms and conditions of the Peaky FOOKING Blinders. </label> <br />
            <input type="submit" id="submit" value="START" name="submit">
        </form>
    </div>

    <script>
         var credit;
     </script>
    <script src="js/script.js"></script>
</body>

</html>
