$(function () {
  $('#nbet').attr('placeholder', 'Bet (min: 5£):');
  /*  $("#header2").on('click', function() {
    $("#header2").animate({"left":"0", "color":"blue", "transform": "translateX(50%)", "top":"3em"
  }); 
});*/
  total_bet = 0;
  bet_value = 0;
  current_credit = credit;
  $('#credit').text('CREDIT: ' + credit);

  function checkBet() {
    if (total_bet + bet_value > credit) {
      alert('no money');
    } else {
      total_bet = total_bet + bet_value;
      $('#current_bet_num').text(total_bet);
      current_credit = current_credit - bet_value;
      $('#credit').text('CREDIT: ' + current_credit);
    }
  }

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

  $('.horses').click(function () {
    $('.horses').css({ transform: 'scale(1)' });
    $(this).css({ transform: 'scale(1.4)' });
  });
});
function bodyonload() {
  $('body').css('background-image', 'url()');
}
