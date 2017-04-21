<?php
  // little helper to flip user input into ints
  function yesNoToInt($in)
  {
    if($in == 'y') return 1;
    else return 0;
  }

  //
  function prompt($typeRequired)
  {
    if($typeRequired == "yn") return "> (y/n) : ";
    if($typeRequired == "123") return "> (1/2/3) : ";
  }
