<?php
session_start();

$credit = $_SESSION['nbet'];
$winner = rand(0, 6);
echo nl2br("Winner is horse number: {$winner}\n");
$var1 = 0;
$var2 = 0;
$var3 = 0;
$var4 = 0;
$var5 = 0;
$var6 = 0;
$var7 = 0;
$totalBet = $_POST['totalBet'];

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
    $credit= $credit + ($totalBet * $cashBack) - $totalBet;
    echo nl2br("You won: " . $totalBet * $cashBack . "\n");
} else {
    $credit = $credit - $totalBet;
    echo nl2br("You lost: {$totalBet}\n");
}
    echo nl2br("Total balance is: " . $credit. "\n");


/* 
if ($credit <= 5) {

echo
"<script> 
    alert('You dont have enough money for minimal bet');
    window.setTimeout(function(){
    window.location.href = 'index.php';
    }, 3000);
</script>";

} */
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
           
            <input type="submit" id="submit_rebet" value="START" name="submit_rebet">
        </form>
    </div>

    <script src="js/script.js"></script>
</body>

</html>

