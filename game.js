$(document).ready(function(){
var turns = ["#","#","#","#","#","#","+","#"];
var computerTurn = "";
var turn = "";
var gameOn = false;
var count = 0;

//var startTurn = prompt("Choose Your Move", "Type X or O").toUpperCase();

switch (startTurn) {
    case "X":
        computerTurn = "O";
        turn = "X";
        //$("#message").html("Player" + turn + " gets to start!");
        $("#message").html("Player " + userName + " gets to start!");
        break;
    case "O":
        computerTurn = "X";
        turn = "O";
        $("#message").html("Player " + turn + " gets to start!");
        break;
    case null:
        alert("Sorry. Please type X or O");
        window.location.reload(true);
    break;
    default:
        alert("Sorry. Please type X or O");
        window.location.reload(true);
        break;
}

function computersTurn() {
    var taken = false;
    while (taken === false && count !== 5) {
        var computerMove = (Math.random() * 10).toFixed();
        var move = $("#" + computerMove).text();
        if (move === "#") {
            $("#" + computerMove).text(computerTurn);
            taken = true;
            turns[computerMove] = computerTurn;
        }
    }
}

function playerTurn (turn, id){
  var spotTaken = $("#"+id).text();
  if (spotTaken ==="#"){
    count++;
    turns[id] = turn;
    $("#"+id).text(turn);
    winCondition(turns,turn);
    if (gameOn === false){
      computersTurn();
      $("#message").html("It's " + userName +"'s turn.");
      winCondition(turns, computerTurn);
    }
  }
}

function winCondition(trackMoves, currentMove) {
    if (trackMoves[0] === currentMove && trackMoves[1] === currentMove && trackMoves[2] === currentMove) {
        gameOn = true;
        reset();
        //alert("Player " + currentMove + " wins!");
        if(currentMove == 'X'){
          $("#show_message").html("<span style='color:#15ff15;'>You Won the Game!!</span>");
          popUp('green');
          sendUpdate(userID,'win');
        }
        else{
          $("#show_message").html("<span style='color:red'>You Lost the Game!!</span>");
          popUp('red');
          sendUpdate(userID,'lost');
        }


    } else if (trackMoves[2] === currentMove && trackMoves[4] === currentMove && trackMoves[6] === currentMove) {
        gameOn = true;
        reset();
        //alert("Player " + currentMove + " wins!");
        if(currentMove == 'X'){
          $("#show_message").html("<span style='color:#15ff15;'>You Won the Game!!</span>");
          popUp('green');
          sendUpdate(userID,'win');
        }
        else{
          $("#show_message").html("<span style='color:red'>You Lost the Game!!</span>");
          popUp('red');
          sendUpdate(userID,'lost');
        }

    } else if (trackMoves[0] === currentMove && trackMoves[3] === currentMove && trackMoves[6] === currentMove) {
        gameOn = true;
        reset();
        //alert("Player " + currentMove + " wins!");
        if(currentMove == 'X'){
          $("#show_message").html("<span style='color:#15ff15;'>You Won the Game!!</span>");
          popUp('green');
          sendUpdate(userID,'win');
        }
        else{
          $("#show_message").html("<span style='color:red'>You Lost the Game!!</span>");
          popUp('red');
          sendUpdate(userID,'lost');
        }

    } else if (trackMoves[0] === currentMove && trackMoves[4] === currentMove && trackMoves[8] === currentMove) {
        gameOn = true;
        reset();
        //alert("Player " + currentMove + " wins!");
        if(currentMove == 'X'){
          $("#show_message").html("<span style='color:#15ff15;'>You Won the Game!!</span>");
          popUp('green');
          sendUpdate(userID,'win');
        }
        else{
          $("#show_message").html("<span style='color:red'>You Lost the Game!!</span>");
          popUp('red');
          sendUpdate(userID,'lost');
        }

    } else if (trackMoves[1] === currentMove && trackMoves[4] === currentMove && trackMoves[7] === currentMove) {
        gameOn = true;
        reset();
      //  alert("Player " + currentMove + " wins!");
      if(currentMove == 'X'){
        $("#show_message").html("<span style='color:#15ff15;'>You Won the Game!!</span>");
        popUp('green');
        sendUpdate(userID,'win');
      }
      else{
        $("#show_message").html("<span style='color:red'>You Lost the Game!!</span>");
        popUp('red');
        sendUpdate(userID,'lost');
      }

    } else if (trackMoves[2] === currentMove && trackMoves[5] === currentMove && trackMoves[8] === currentMove) {
        gameOn = true;
        reset();
      //  alert("Player " + currentMove + " wins!");
      if(currentMove == 'X'){
        $("#show_message").html("<span style='color:#15ff15;'>You Won the Game!!</span>");
        popUp('green');
        sendUpdate(userID,'win');
      }
      else{
        $("#show_message").html("<span style='color:red'>You Lost the Game!!</span>");
        popUp('red');
        sendUpdate(userID,'lost');
      }

    } else if (trackMoves[2] === currentMove && trackMoves[5] === currentMove && trackMoves[8] === currentMove) {
        gameOn = true;
        reset();
        //alert("Player " + currentMove + " wins!");
        if(currentMove == 'X'){
          $("#show_message").html("<span style='color:#15ff15;'>You Won the Game!!</span>");
          popUp('green');
          sendUpdate(userID,'win');

        }
        else{
          $("#show_message").html("<span style='color:red'>You Lost the Game!!</span>");
          popUp('red');
          sendUpdate(userID,'lost');
        }
    } else if (trackMoves[3] === currentMove && trackMoves[4] === currentMove && trackMoves[5] === currentMove) {
        gameOn = true;
        reset();
        //alert("Player " + currentMove + " wins!");
        if(currentMove == 'X'){
          $("#show_message").html("<span style='color:#15ff15;'>You Won the Game!!</span>");
          popUp('green');
          sendUpdate(userID,'win');
        }
        else{
          $("#show_message").html("<span style='color:red'>You Lost the Game!!</span>");
          popUp('red');
          sendUpdate(userID,'lost');
        }
    } else if (trackMoves[6] === currentMove && trackMoves[7] === currentMove && trackMoves[8] === currentMove) {
        gameOn = true;
        reset();
        //alert("Player " + currentMove + " wins!");
        if(currentMove == 'X'){
          $("#show_message").html("<span style='color:#15ff15;'>You Won the Game!!</span>");
          popUp('green');
          sendUpdate(userID,'win');
        }
        else{
          $("#show_message").html("<span style='color:#15ff15'>You Lost the Game!!</span>");
          popUp('red');
          sendUpdate(userID,'lost');
        }
    } else if(!(trackMoves.includes("#"))){
       gameOn = true;
      reset();
      //alert("It is a Draw!");
      //if(currentMove == 'X'){
        $("#show_message").html("<span style='color:blue'>It's a Draw!!</span>");
        popUp('blue');
        sendUpdate(userID,'draw');
      //}
      //else{
      //  $("#show_message").html("You Lost the Game!!");
      //}
    }﻿ else {
        gameOn = false;
    }
}

$(".tic").click(function(){
  var slot = $(this).attr('id');
  playerTurn(turn,slot);
  $("#show_message").html("");
});

function reset(){
  turns = ["#","#","#","#","#","#","+","#"];
  count = 0;
  $("#show_message").html("");
  $(".tic").text("#");
  gameOn = true;

}

$("#reset").click(function(){
  reset();


});

});
//popUp();

function popUp($type){
  var $title = '';
  var $content = '';
  if($type == 'red'){
    $title = "Oops!!!";
    $content = 'You Lost The game';
  }
  else if($type == 'blue'){
    $title = "Oops!!!";
    $content = 'Game Is Draw';
  }
  else if($type == 'green'){
     $title = 'Congratulations!';
     $content = 'You Own The game';
  }

  $.confirm({
    title: $title,
    content: $content,
    type: $type,
    typeAnimated: true,
    buttons: {
        close: function () {
        }
    }
});


}



function sendUpdate(ID,Status){
  $.post("insert_game_status.php",
  {
    ID: ID,
    Status: Status
  });
}
