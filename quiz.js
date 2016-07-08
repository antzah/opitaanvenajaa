$(document).ready(function(){

  /*
  * Start by generating a question and
  * setting the score to zero
  */

  generateQuestion();
  var score = 0;


  /* 
  * Grabs an object from sanat.js
  * randomly and prints the corresponding
  * values to the document
  */
  function generateQuestion(){

    // Fade in effect to start
    $("#sanadiv, #vaihtoehdotdiv").fadeIn(100);

    var sanaArray = sanat[Math.floor(Math.random()*sanat.length)];
    
    $("#sana").text(sanaArray["sana"]);
    $("#lausunta").text(sanaArray["lausunta"]);
    $("#choice1").text(sanaArray["vaihtoehdot"][0]);
    $("#choice2").text(sanaArray["vaihtoehdot"][1]);
    $("#choice3").text(sanaArray["vaihtoehdot"][2]);
    $("#choice4").text(sanaArray["vaihtoehdot"][3]);
    $("#vastaus").text(sanaArray["oikea"]);

  }

  $(".choicediv").click(function(){

    var selection = $("p", this).text();
    var oikea = $("#vastaus").text();

    if (selection == oikea){
      score++;
    }

    else {
      score = 0;
    }

    $("#score").text("Pisteputki: " + score);

    $("#sanadiv, #vaihtoehdotdiv").fadeOut(100);
    setTimeout(function(){
      generateQuestion();
    }, 200);

  })

})