<?php
  // bring in all code
  require "loader.php";

  // board and pieces
  $gs = new gameState();

  $usBot = 0;
  $vcBot = 0;
  $arvnBot = 0;
  $nvBot = 0;
  // figure out which bots are running
  $usBot = yesNoToInt(readline(prompt("yn")));

  print "usbot is $usBot";
