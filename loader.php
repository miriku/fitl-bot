<?php
  require "helpers.php";

  require "models/gameState.php";
  require "models/map.php";
  require "models/VCBot.php";
  require "models/NVBot.php";
  require "models/USBot.php";
  require "models/ARVNBot.php";

  require "models/pieces/piece.php";
  require "models/pieces/base.php";
  require "models/pieces/irregular.php";
  require "models/pieces/troop.php";

  require "models/spaces/space.php";
  require "models/spaces/city.php";
  require "models/spaces/LoC.php";
  require "models/spaces/province.php";

  // grab cards as a whole
  $files = glob( 'models/cards/*.php' );
  foreach ( $files as $file ) require( $file );
