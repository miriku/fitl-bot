<?php
  class city extends space
  {
    // population is either 1 2 or 6
    public $pop;

    // support is either "active support", "passive support", "neutral",
    // "passive oppose", or "active oppose"
    public $support;

    function __construct($_name, $_isCoastal, $_pop)
    {
      parent::__construct($_name, $_isCoastal, "South");
      $this->pop = $_pop;
    }

  }
