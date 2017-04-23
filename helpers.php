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
    $answer = "";
    if($typeRequired == "yn")
    {
      while($answer != "y"  &&
            $answer != "n")
      {
        $answer = readLine("> (y/n) : ");
      }
      return $answer;
    }
    if($typeRequired == "123")
    {
      while($answer != "1" &&
            $answer != "2" &&
            $answer != "3")
      {
        $answer = readLine("> (1/2/3) : ");
      }
      return $answer;
    }
  }
