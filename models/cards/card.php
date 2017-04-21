<?php
  // abstract class that defines behaviors for all other card classes
  class Card
  {
    $cardNumber;
    $title;
    $year;
    $eventText;
    $shadedText;
    $lastingEffect;

    // returns some permutation of ['ARVN', 'NV', 'US', 'VC']
    function returnPlayOrder()
    {
      // fail case:
      return -1;
    }

    // affects game state then returns it
    function performEvent($gameState)
    {

    }

    // same as above but for shaded events
    function performShadedEvent($gameState)
    {
      
    }
  }
