<?php
  require "helpers.php";

  require "models/gameState.php";
  require "models/VCBot.php";
  require "models/NVBot.php";
  require "models/USBot.php";
  require "models/ARVNBot.php";

  require "pieces/base.php";
  require "pieces/irregular.php";
  require "pieces/piece.php";
  require "pieces/troop.php";

  require "spaces/city.php";
  require "spaces/LoC.php";
  require "spaces/province.php";
  require "spaces/space.php";

  // grab cards as a whole
  $files = glob( 'models/cards/*.php' );
  foreach ( $files as $file ) require( $file );
