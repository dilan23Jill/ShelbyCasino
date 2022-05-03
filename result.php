<?php
if (!isset($_POST['submit_bet'])) {
    header('Location: index.php');
    exit;
}
$credit = $_POST['credit'];

$winner = rand(0, 6);
$var1 = 0;
$var2 = 0;
$var3 = 0;
$var4 = 0;
$var5 = 0;
$var6 = 0;
$var7 = 0;
$totalBet = $_POST['totalBet'];
$win_lose_money;

if (!empty($_POST['subject1'])) {
    $var1 = $_POST['subject1'];

}if (!empty($_POST['subject2'])) {
    $var2 = $_POST['subject2'];

}if (!empty($_POST['subject3'])) {
    $var3 = $_POST['subject3'];

}if (!empty($_POST['subject4'])) {
    $var4 = $_POST['subject4'];

}if (!empty($_POST['subject5'])) {
    $var5 = $_POST['subject5'];

}if (!empty($_POST['subject6'])) {
    $var6 = $_POST['subject6'];

}if (!empty($_POST['subject7'])) {
    $var7 = $_POST['subject7'];

}
$bet_horses = array($var1, $var2, $var3, $var4, $var5, $var6, $var7);
$cashBack = 12;
for ($x = 0; $x <= 6; $x++) {
    if ($bet_horses[$x] > 0) {
        $cashBack = $cashBack / 2;
    }
}

if ($bet_horses[$winner] > 0) {
    $credit = $credit + ($totalBet * $cashBack) - $totalBet;
    $win_lose_money=$totalBet * $cashBack; 
} else {
    $credit = $credit - $totalBet;
    $win_lose_money=$totalBet; 
    
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

    <div class="race">
        <button id="start" >START</button>           
         <form method="POST" action="game.php">       
        <p class="info_on_race"> <?php if ($bet_horses[$winner] > 0) {
    echo nl2br("You won: " . $win_lose_money . "\n");
} else {
    echo nl2br("You lost: {$win_lose_money}\n");
}?></p>
       <p class="info_on_race"> <?php echo nl2br("Winner is horse number: {$winner}\n");?></p>
       <p class="info_on_race"> <?php echo nl2br("Total balance is: {$credit} \n");?></p>

        <div class="race_path">
            
             <img src="img/horse/horse1.png" alt="horse1" id="h1" class="horse_race">
            <img src="img/horse/finish-line.png" alt="finishLine1" class="finish_line">
            </div>
             <div class="race_path">
             <img src="img/horse/horse2.png" alt="horse2" id="h2" class="horse_race">
             <img src="img/horse/finish-line.png" alt="finishLine1" class="finish_line">
            </div>
             <div class="race_path">
             <img src="img/horse/horse3.png" alt="horse3" id="h3" class="horse_race">
             <img src="img/horse/finish-line.png" alt="finishLine1" class="finish_line">
                </div>
             <div class="race_path">
             <img src="img/horse/horse4.png" alt="horse4" id="h4" class="horse_race">
             <img src="img/horse/finish-line.png" alt="finishLine1" class="finish_line">
            </div>
             <div class="race_path">
             <img src="img/horse/horse5.png" alt="horse5" id="h5" class="horse_race">
             <img src="img/horse/finish-line.png" alt="finishLine1" class="finish_line">
            </div>
             <div class="race_path">
             <img src="img/horse/horse6.png" alt="horse6" id="h6" class="horse_race">
             <img src="img/horse/finish-line.png" alt="finishLine1" class="finish_line">
            </div>
             <div class="race_path">
             <img src="img/horse/horse7.png" alt="horse7" id="h7" class="horse_race">
             <img src="img/horse/finish-line.png" alt="finishLine1" class="finish_line">
            </div>            
            <button id="submit_rebet" name="submit_rebet">REBET</button>

    </div>
            <input type="hidden" name="credit_2" value="<?php echo $credit; ?>">

        </form>
        <script>
            var credit = '<?=$credit?>';
            var winner = '<?=$winner?>';
            document.getElementById("submit_rebet").addEventListener("click", function () {
  form.submit();
            });
        </script>
    <script src="js/script.js"></script>
</body>

</html>
