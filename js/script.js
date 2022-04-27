$(document).ready(function() {
 
horse=false;
horse_num=3;
horse_bet1=0;
horse_bet2=0;
horse_bet3=0;

horse1=$('.horses:nth-of-type(1)');
horse2=$('.horses:nth-of-type(2)');
horse3=$('.horses:nth-of-type(3)');
horse4=$('.horses:nth-of-type(4)');
horse5=$('.horses:nth-of-type(5)');
horse6=$('.horses:nth-of-type(6)');
horse7=$('.horses:nth-of-type(7)');


  $('#nbet').attr('placeholder', 'Bet (min: 5£):');
    
$('.horses').click(function () {
  $('.horses').css({ transform: 'scale(1)', border: '0px solid black' });
  $(this).css({ transform: 'scale(1.4)', border: '3px solid black'});
  choosed_horse=this.id;
  horse=true;
  console.log(choosed_horse);
});

  total_bet = 0;
  bet_value = 0;
  current_credit = credit;
  $('#credit').text('CREDIT: ' + credit);

  function checkBet() {
    if(horse==true){
    if (total_bet + bet_value > credit) {
      alert('no money');
    } else {
      total_bet = total_bet + bet_value;
      $('#current_bet_num').text(total_bet);
      current_credit = current_credit - bet_value;
      $('#credit').text('CREDIT: ' + current_credit);
      sum_bet();
    }
  }else alert("choose horse");
}
function sum_bet(){
  if(choosed_horse=='h1') {
    horse_bet1=horse_bet1+bet_value;
    console.log(horse_bet1);
  }else if(choosed_horse=='h2'){

}}


  $('.bet_opt:nth-of-type(1)').click(function () {
    bet_value = 5;
    checkBet();
  });
  $('.bet_opt:nth-of-type(2)').click(function () {
    bet_value = 10;
    checkBet();
  });
  $('.bet_opt:nth-of-type(3)').click(function () {
    bet_value = 20;
    checkBet();
  });
  $('.bet_opt:nth-of-type(4)').click(function () {
    bet_value = 50;
    checkBet();
  });
  $('.bet_opt:nth-of-type(5)').click(function () {
    bet_value = 100;
    checkBet();
  });
  $('.bet_opt:nth-of-type(6)').click(function () {
    bet_value = 500;
    checkBet();
  });

  $('#rebet').click(function () {
    current_credit = credit;
    total_bet = 0;
    bet_value = 0;
    checkBet();
  });
});

$("#bet5").click(function() {
  $.post("game.php", {change: $(this).val()},
      function (data)
      {
         $("#mainContent").html(data);
      }); 
});


function bodyonload() {
  $('body').css('background-image', 'url()');
}
