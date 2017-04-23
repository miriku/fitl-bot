<?php
  // abstract class for holding map defiend objects
  class space
  {
    // 1 for spaces by water, allowing amphibious moves
    public $isCoastal;

    // list of spaces it's adjacent to
    public $adjacents = array();

    // a space is either south, north, laos, or cambodia
    public $country;

    function __construct($_isCoastal, $_country)
    {
      $this->isCoastal = $_isCoastal;
      $this->country = $_country;
    }

    function control()
    {
      // returns COIN or NVA based on who owns the space
    }
  }
