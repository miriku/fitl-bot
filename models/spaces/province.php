<?php
  class province extends space
  {
    // pop is either 1 2 or 3
    public $pop;

    // type is highland, lowland, or jungle
    public $type;

    // support is either "active support", "passive support", "neutral",
    // "passive oppose", or "active oppose"
    public $support;
  }