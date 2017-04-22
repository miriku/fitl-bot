<?php

// this class is responsible for remembering board state,
// anything that has a physical representation
class gameState
{
  public $scenario;

  // long set of values
  public resourceMarkers = array('ARVN', 'NV', 'VC'); // 0 to 75, no US
  public $aid;
  public $totalEcon;
  public $patronage;
  public $theTrail;
  public $USPolicy;

  function __construct($scenario=3)
  {
    if($scenario == 1)
    {
      $this->scenario = "short";
    }
    elseif($scenario == 2)
    {
      $this->scenario = "medium";
    }
    else
    {
      $this->$scenario = "long";
    }
  }

  // virtual values (markers in game, but not direct ones)
  function score($faction)
  {
    return -1;
  }
}
