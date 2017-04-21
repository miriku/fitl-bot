<?php
  require "helpers.php";
  require "models/gameState.php";
  require "models/VCBot.php";
  require "models/NVBot.php";
  require "models/USBot.php";
  require "models/ARVNBot.php";

  // grab cards as a whole
  $files = glob( 'models/cards/*.php' );
  foreach ( $files as $file ) require( $file );
