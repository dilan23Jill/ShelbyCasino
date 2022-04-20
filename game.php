 <?php
    $_SESSION['info'] = $_POST;

    if (!isset($_POST['submit'])) {
        header('Location: index.php');
        exit;
    } else {
        echo "Your name is: " . $_SESSION['info']['fname'] . "<br>" .
            "Your surname is: " . $_SESSION['info']['lname'] . "<br>" .
            "Your bet is: " . $_SESSION['info']['nbet'];
    }
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


     <script src="js/script.js"></script>
 </body>

 </html>