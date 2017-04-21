<?php

// this class is responsible for remembering board state,
// anything that has a physical representation
class gameState
{
  public $scenario;

  function __construct($scenario)
  {
    if($scenario == 1)
    {
      $this->scenario = "short";
    }
    elseif($scenario == 2)
    {
      $this->scenario = "medium";
    }
    elseif($scenario == 3)
    {
      $this->scenario = "long";
    }
    else // default case
    {
      $this->$scenario = "long";
      print "Unknown scenario, defaulting to 'Nam'.\n";
    }
  }
}
