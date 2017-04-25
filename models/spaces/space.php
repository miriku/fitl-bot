<?php
  // abstract class for holding map defiend objects
  class space
  {
    public $name;

    // 1 for spaces by water, allowing amphibious moves
    public $isCoastal;

    // list of spaces it's adjacent to
    public $adjacents = array();

    // a space is either south, north, laos, or cambodia
    public $country;

    function __construct($_name, $_isCoastal, $_country)
    {
      $this->name = $_name;
      if($_isCoastal=="coastal") $this->isCoastal = 1;
      else $this->isCoastal = 0;
      $this->country = $_country;
    }

    function control()
    {
      // returns COIN or NVA based on who owns the space
    }
  }
