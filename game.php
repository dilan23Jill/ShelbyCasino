 <?php
session_start();

$_SESSION['nbet'] = $_POST['nbet'];
$credit = $_SESSION['nbet'];


/* if (!isset($_POST['submit'])) {
    header('Location: index.php');
    exit;
}  else {
echo "Your name is: " . $_SESSION['info']['fname'] . "<br>" .
"Your surname is: " . $_SESSION['info']['lname'];
} */

?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Shelby Casino</title>
     <link rel="icon" type="image/x-icon" href="/img/icon/favicon.ico">
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
         <p id="credit"></p>
            <h1 id="header2">PLACE YOUR BETS</h1>

         <div class="stable">
             <div class="horse_opt">
             <img src="img/horse/horse1.png" alt="horse1" id="h1" class="horses">
            <p id="num_bet1" class="m_bet"></p></div>
             <div class="horse_opt">
             <img src="img/horse/horse2.png" alt="horse2" id="h2" class="horses">
             <p id="num_bet2" class="m_bet"></p></div>
             <div class="horse_opt">
             <img src="img/horse/horse3.png" alt="horse3" id="h3" class="horses">
             <p id="num_bet3" class="m_bet"></p></div>
             <div class="horse_opt">
             <img src="img/horse/horse4.png" alt="horse4" id="h4" class="horses">
             <p id="num_bet4" class="m_bet"></p></div>
             <div class="horse_opt">
             <img src="img/horse/horse5.png" alt="horse5" id="h5" class="horses">
             <p id="num_bet5" class="m_bet"></p></div>
             <div class="horse_opt">
             <img src="img/horse/horse6.png" alt="horse6" id="h6" class="horses">
             <p id="num_bet6" class="m_bet"></p></div>
             <div class="horse_opt">
             <img src="img/horse/horse7.png" alt="horse7" id="h7" class="horses">
             <p id="num_bet7" class="m_bet"></p></div>
         </div>
        <form action="result.php" method="POST">
         <div class="betting_opt">
         <div class="bet_opt">5</div>
         <div class="bet_opt">10</div>
         <div class="bet_opt">20</div>
         <div class="bet_opt">50</div>
         <div class="bet_opt">100</div>
         <div class="bet_opt">500</div>
        </div>
        <p id="current_bet">CURRENT BET: <mark id="current_bet_num">0</mark></p>
        <button type="button" id="rebet">REBET</button>
        <input type="number" name="subject1" id="subject1" >
        <input type="number" name="subject2" id="subject2">
        <input type="number" name="subject3" id="subject3" >
        <input type="number" name="subject4" id="subject4" >
        <input type="number" name="subject5" id="subject5" >
        <input type="number" name="subject6" id="subject6" >
        <input type="number" name="subject7" id="subject7" >
        <input type="number" name="totalBet" id="totalBet" >



        <input type="submit" id="submit_bet" value="bet" name="submit_bet">

        </form>

     <script>
            credit = '<?=$credit?>';
     </script>

     <script src="js/script.js"></script>
 </body>

 </html>