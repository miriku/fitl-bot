<?php
  // bring in all code
  require "loader.php";

  // board and pieces
  $gs;

  $arvnBot = 0;
  $nvBot = 0;
  $usBot = 0;
  $vcBot = 0;
  // figure out which bots are running
  print "ARVN bot?\n";
  $arvnBot = yesNoToInt(prompt("yn"));
  print "NV bot?\n";
  $nvBot = yesNoToInt(prompt("yn"));
  print "US bot?\n";
  $usBot = yesNoToInt(prompt("yn"));
  print "VC bot?\n";
  $vcBot = yesNoToInt(prompt("yn"));

  print "Choose scenario:\n";
  print "1 - Short, Westy's War, 1965-1967\n";
  print "2 - Medium, Westy's War, 1968-1972\n";
  print "3 - Long, Nam, 1965-1972 (Default)\n";

  $gs = new gameState(prompt("123"));
