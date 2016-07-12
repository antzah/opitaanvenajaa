$(document).ready(function(){

  /*
  * Start by generating a question and
  * setting the score to zero + initializing
  * other variables
  */
  generateQuestion();
  var score = 0;
  var right = new Audio("ding.mp3");
  var wrong = new Audio("error.mp3");
  var soundOn = true;

  /* 
  * Grabs an object from sanat.js
  * randomly and prints the corresponding
  * values to the document
  */
  function generateQuestion(){
    // Fade in effect to start
    $('#sanadiv, #vaihtoehdotdiv').animate({opacity: 100}, 100);

    var sanaArray = sanat[Math.floor(Math.random()*sanat.length)];
    
    $("#sana").text(sanaArray["sana"]);
    $("#lausunta").text(sanaArray["lausunta"]);
    $("#choice1").text(sanaArray["vaihtoehdot"][0]);
    $("#choice2").text(sanaArray["vaihtoehdot"][1]);
    $("#choice3").text(sanaArray["vaihtoehdot"][2]);
    $("#choice4").text(sanaArray["vaihtoehdot"][3]);
    $("#vastaus").text(sanaArray["oikea"]);

    $("#kuuntele").attr("onclick", "responsiveVoice.speak('" + sanaArray['sana'] + "', 'Russian Female');");
  }

  /*
  * Clicking a choice triggers a check
  * where the correct string, which is 
  * "there" but hidden is compared to
  * the choice of the player. 
  *
  * Correct answer adds a point, wrong answer
  * cuts the streak short and displays
  * the correct answer
  */
  $(".choicediv").click(function(){
    var selection = $("p", this).text();
    var oikea = $("#vastaus").text();

    if (selection == oikea){
      if (soundOn){
        var sound = new Howl({urls: ['ding.mp3']}).play();
      }
      score++;

      $("#score").text("Pisteputki: " + score);
      $('#sanadiv, #vaihtoehdotdiv').animate({opacity: 0}, 100);
      generateQuestion();
    }

    else {
      if (soundOn){
        var sound = new Howl({urls: ['error.mp3']}).play();
      }

      $(".choicediv:contains('"+oikea+"')").css({"background" : "#62e04d", "color" : "#fff", "border" : "2px solid rgba(0,0,0,0.4)"});

      setTimeout(function(){
        $(".choicediv:contains('"+oikea+"')").css({"background" : "#d0ffc8", "color" : "rgb(99, 99, 99)", "border" : "1px solid rgba(0,0,0,0.05)"});
      }, 1500);

      setTimeout(function(){
        $("#score").text("Pisteputki: " + score);
        $('#sanadiv, #vaihtoehdotdiv').animate({opacity: 0}, 100);
        generateQuestion();
      }, 1600);

      score = 0;
    }

    
  })



  /*
  * Mute option because the sounds might
  * annoy some people :^(
  */
  $("#sound").click(function(){
    if (soundOn){
      soundOn = false;
      $("#sound").css("background", "rgba(0,0,0,0.1");
    }

    else {
      soundOn = true;
      $("#sound").css("background", "#fff");
    }
  })

})