$(document).ready(function () {
  horse = false;
  horse_bet1 = 0;
  horse_bet2 = 0;
  horse_bet3 = 0;
  horse_bet4 = 0;
  horse_bet5 = 0;
  horse_bet6 = 0;
  horse_bet7 = 0;

  horse1 = $('.horses:nth-of-type(1)');
  horse2 = $('.horses:nth-of-type(2)');
  horse3 = $('.horses:nth-of-type(3)');
  horse4 = $('.horses:nth-of-type(4)');
  horse5 = $('.horses:nth-of-type(5)');
  horse6 = $('.horses:nth-of-type(6)');
  horse7 = $('.horses:nth-of-type(7)');

  $('#nbet').attr('placeholder', 'Bet (min: 5£):');

  $('.horses').click(function () {
    $('.horses').css({ transform: 'scale(1)', border: '0px solid black' });
    $(this).css({ transform: 'scale(1.4)' });
    choosed_horse = this.id;
    horse = true;
  });
  
  bra = true;
  total_bet = 0;
  bet_value = 0;
  current_credit = credit;
  horse_arr = [];

  $('#credit').text(credit);

  function checkBet() {
    console.log(horse_arr);
    if (horse == true) {
      if (total_bet + bet_value > credit) {
        alert('no money');
      } else {
        sum_bet();
        if (bra) {
          total_bet = total_bet + bet_value;
          $('#current_bet_num').text(total_bet);
          $('#totalBet').val(total_bet);
          current_credit = current_credit - bet_value;
          $('#credit').text(current_credit);
        }
      }
    } else alert('choose horse');
  }
  function sum_bet() {
    if (choosed_horse == 'h1') {
      if (horse_arr.length < 3 || jQuery.inArray('h1', horse_arr) !== -1) {
        if (jQuery.inArray('h1', horse_arr) == -1) horse_arr.push('h1');
        horse_bet1 = horse_bet1 + bet_value;
        $('#num_bet1').html(horse_bet1);
        $('#subject1').val(horse_bet1);
        bra = true;
      } else {
        alert('bet max on 3 horses');
        bra = false;
      }
    } else if (choosed_horse == 'h2') {
      if (horse_arr.length < 3 || jQuery.inArray('h2', horse_arr) !== -1) {
        if (jQuery.inArray('h2', horse_arr) == -1) horse_arr.push('h2');
        horse_bet2 = horse_bet2 + bet_value;
        $('#num_bet2').html(horse_bet2);
        $('#subject2').val(horse_bet2);
        bra = true;
      } else {
        alert('bet max on 3 horses');
        bra = false;
      }
    } else if (choosed_horse == 'h3') {
      if (horse_arr.length < 3 || jQuery.inArray('h3', horse_arr) !== -1) {
        if (jQuery.inArray('h3', horse_arr) == -1) horse_arr.push('h3');
        horse_bet3 = horse_bet3 + bet_value;
        $('#num_bet3').html(horse_bet3);
        $('#subject3').val(horse_bet3);
        bra = true;
      } else {
        alert('bet max on 3 horses');
        bra = false;
      }
    } else if (choosed_horse == 'h4') {
      if (horse_arr.length < 3 || jQuery.inArray('h4', horse_arr) !== -1) {
        if (jQuery.inArray('h4', horse_arr) == -1) horse_arr.push('h4');
        horse_bet4 = horse_bet4 + bet_value;
        $('#num_bet4').html(horse_bet4);
        $('#subject4').val(horse_bet4);
        bra = true;
      } else {
        alert('bet max on 3 horses');
        bra = false;
      }
    } else if (choosed_horse == 'h5') {
      if (horse_arr.length < 3 || jQuery.inArray('h5', horse_arr) !== -1) {
        if (jQuery.inArray('h5', horse_arr) == -1) horse_arr.push('h5');
        horse_bet5 = horse_bet5 + bet_value;
        $('#num_bet5').html(horse_bet5);
        $('#subject5').val(horse_bet5);
        bra = true;
      } else {
        alert('bet max on 3 horses');
        bra = false;
      }
    } else if (choosed_horse == 'h6') {
      if (horse_arr.length < 3 || jQuery.inArray('h6', horse_arr) !== -1) {
        if (jQuery.inArray('h6', horse_arr) == -1) horse_arr.push('h6');
        horse_bet6 = horse_bet6 + bet_value;
        $('#num_bet6').html(horse_bet6);
        $('#subject6').val(horse_bet6);
        bra = true;
      } else {
        alert('bet max on 3 horses');
        bra = false;
      }
    } else if (choosed_horse == 'h7') {
      if (horse_arr.length < 3 || jQuery.inArray('h7', horse_arr) !== -1) {
        if (jQuery.inArray('h7', horse_arr) == -1) horse_arr.push('h7');
        horse_bet7 = horse_bet7 + bet_value;
        $('#num_bet7').html(horse_bet7);
        $('#subject7').val(horse_bet7);
        bra = true;
      } else {
        alert('bet max on 3 horses');
        bra = false;
      }
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
    location.reload();
  });
  $('#start').click(function() {
    for(i=0; i<=6; i++){
      if(i==winner) time=2000
      else time = Math.floor(Math.random() * (3000)) + 2500;
    $(".horse_race:eq(" + i + ")").animate({ 
    left: '90%',
  }, time);
  setTimeout(function(){
    $('.race_path:eq('+winner+')').css({'background-color' : 'yellow'});
    $('.info_on_race').css({"display":"block"});

  }, 2000);
}

  });

  $('#start').click(function(){
    $('#start').css({"visibility":"hidden"});

  });
  

});
