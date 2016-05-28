
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <title>FitL-Bot
  </title>
  <style>
    .btn-info { border-color: #aC6E00; background: #bC7E10 !important; }
    .btn-info:hover { border-color: #aC6E00; background: #b47608 !important; }
  </style>
</head>
<body>
  <?
    // there's going to be a lot of undefined variables cause of
    // extract($_GET)
    // hide them
    error_reporting(E_ERROR | E_WARNING | E_PARSE);

    // header
    print <<< EOF
      <div class="container">
        <h1>
          <a href='?'>
            Fire In The Lake - Bot
          </a>
        </h1>
EOF;

    // start the state variable
    $vars = "";

    // load everything
    extract($_GET);

    // no faction
    if($faction == "" && $random != "yes")
    {
      print <<< EOF
          <h3>
            Choose faction to move
          </h3>
          <button type="button" class="btn btn-success">US</button>
          <button type="button" class="btn btn-warning">ARVN</button>
          <button type="button" class="btn btn-primary">VC</button>
          <a href='?faction=NVA'>
            <button type="button" class="btn btn-danger">NVA</button>
          </a>
          <h4>
          NOTE: If a faction can execute a pivotal event, they interrupt to do so
          </h4>
          <h4>
            Assistance
          </h4>
          <p>
            A faction can play a pivotal event if
            <ul>
              <li>
                there is no Coup card showing
              </li>
              <li>
                they have not yet played the pivotal event
              </li>
              <li>
                they meet the requirements
              </li>
              <li>
                a player faction is first eligible
              </li>
            </ul>
          </p>

        </div>
EOF;
    }
    // NVA
    elseif ($faction == 'NVA')
    {
      // NVA start
      $vars .= "?faction=NVA";
      if($event=="")
      {
        print <<< EOF
        <h2>
          NVA
        </h2>
        <h3>
          Doing Event?
        </h3>
        <a href="$vars&event=halo">
          <button type="button" class="btn btn-danger">Regular, with halo</button>
        </a>
        <a href="$vars&event=normal">
          <button type="button" class="btn btn-danger">Regular, without halo</button>
        </a>
        <a href="$vars&event=no">
          <button type="button" class="btn btn-danger">Ineffective, no event</button>
        </a>
        <br><br>
        <h4>
          Assistance
        </h4>
        <p>
          In case of capability, click the correct halo button and the bot will determine if it is
          worth executing.
        </p>
        <p>
          A halo is a little cirlce around the factions symbol on the card.
        </p>
        <p>
          An event is ineffective if it does not change the game, such as affecting
          tunnels when no tunnels are on the board.
        </p>
        <p>
          If the upcoming card is a coup, the bot considers this event ineffective if it
          does not directly affect the coup round.
        </p>
EOF;
      }
      elseif($event=="normal" && $nvaevent=="")
      {
        print <<< EOF
        <h2>
          NVA
        </h2>
        <h3>
          Is it a capability?
        </h3>
        <a href="$vars&event=capability">
          <button type="button" class="btn btn-danger">Capability</button>
        </a>
        <a href="$vars&event=normal&nvaevent=yes">
          <button type="button" class="btn btn-danger">Just an Event</button>
        </a>
EOF;
      }
      // NVA capability
      elseif($event=="capability" && $coups=="" && $nvaevent=="")
      {
        $vars .= "&event=capability";
        print <<< EOF
        <h2>
          NVA - Capability
        </h2>
        <h3>
          Automatic Dice Roll
        </h3>
        <h4>
          How many coups are left?
        </h4>
        <a href="$vars&coups=0">
          <button type="button" class="btn btn-danger">0</button>
        </a>
        <a href="$vars&coups=1">
          <button type="button" class="btn btn-danger">1</button>
        </a>
        <a href="$vars&coups=2">
          <button type="button" class="btn btn-danger">2</button>
        </a>
        <a href="$vars&coups=3">
          <button type="button" class="btn btn-danger">3</button>
        </a>
        <a href="$vars&coups=4">
          <button type="button" class="btn btn-danger">4</button>
        </a>
        <a href="$vars&coups=5">
          <button type="button" class="btn btn-danger">5</button>
        </a>
        <a href="$vars&coups=6">
          <button type="button" class="btn btn-danger">6</button>
        </a>
        <h3>
          Manual Dice Roll
        </h3>
        <h4>
          Compare die result to number of coups left
        </h4>
        <a href="$vars&nvaevent=yes">
          <button type="button" class="btn btn-danger">Rolled Under</button>
        </a>
        <a href="$vars&nvaevent=no">
          <button type="button" class="btn btn-danger">Rolled Equal or Over</button>
        </a>
        <br><br>
        <h4>
          Assistance
        </h4>
        <p>
          The roll can be done by the bot or player. Choose the number of coups
          left to have the bot roll its own die, or if you prefer, roll the die
          yourself and select the result.
        </p>
EOF;
      }
      // NVA rolling dice on capability
      elseif($event=="capability" && $coups!="")
      {
        $vars .= "&event=capability";
        $die = rand(1,6);
        if($die<$coups)
        {
          print <<< EOF
          <h2>
            NVA - Capability
          </h2>
          <h3>
            Automatic Dice Roll
          </h3>
          <h4>Yes</h4>
          <p>The bot rolled a $die and will perform the capability.</p>
          <a href="$vars&nvaevent=yes">
            <button type="button" class="btn btn-danger">Ok</button>
          </a>
EOF;
        }
        else
        {
          print <<< EOF
          <h2>
            NVA - Capability
          </h2>
          <h3>
            Automatic Dice Roll
          </h3>
          <h4>No</h4>
          <p>The bot rolled a $die and will instead perform ops.</p>
          <a href="$vars&nvaevent=no">
            <button type="button" class="btn btn-danger">Ok</button>
          </a>
EOF;
        }
      }
      elseif($nvaevent=="yes")
      {
        // NVA performs event. end state
        print <<< EOF
        <h2>
          NVA - Performing Event
        </h2>
        <ul>
          <li>
            Perform events to maximum extent. Place or relocate as many pieces as allowed.
          </li>
          <li>
            Place/remove
            <ul>
              <li>
                Bases first
              </li>
              <li>
                then Guerillas/Special Forces
              </li>
              <li>
                then alternating Troops/Police beginning with whichever has
                less in space (Troops if even)
              </li>
              <li>
                Favor underground over active, US over ARVN, VC over NVA
              </li>
            </ul>
          </li>
          <li>
            When marching aim to get most Undeground Guerillas to destination.
            Active Guerrilas move first though.
          </li>
          <li>
            When there is a chance of free pieces, favor yourself, then friendly
            faction, then non-player enemy, then random.
          </li>
          <li>
            If there is ambiguity about preference of free bonus operations,
            restart the bot and click 'Ineffective' to go through the flowchart.
          </li>
          <li>
            Prefer highest Econ LoC first, then adjacent to cities.
          </li>
        </ul>
        <a href="?">
          <button type="button" class="btn btn-danger">Restart</button>
        </a>
        <h4>Assistance</h4>
        <p>
          If you need to generate a random space click the helper below
        </p>
        <a href="?random=yes">
          <button type="button" class="btn btn-danger">Random</button>
        </a>
EOF;
      }
    }
    elseif($random=="yes")
    {
      // random location generator
      $die_roll = rand(0, 29);
      if($die_roll==9) { $die_roll=8; } // move NE cambodia to Cam Ranh
      if($die_roll==12) { $die_roll=11; } // move Phuoc Long to An Loc
      if($die_roll==19) { $die_roll=18; } // move Sihanouk to Can Tho
      $spaces = array(
        "<button type='button' class='btn btn-warning'>Quang Tin</button>",
        "<button type='button' class='btn btn-general'>Da Nang</button>",
        "<button type='button' class='btn btn-info'>Binh Dinh</button>",
        "<button type='button' class='btn btn-warning'>Phu Bon</button>",
        "<button type='button' class='btn btn-general'>Kontum</button>",
        "<button type='button' class='btn btn-info'>Pleiku</button>",
        "<button type='button' class='btn btn-success'>The Fishhook</button>",
        "<button type='button' class='btn btn-info'>Khanh Hoa</button>",
        "<button type='button' class='btn btn-general'>Cam Ranh</button>",
        "<button type='button' class='btn btn-success'>NE Cambodia</button>",
        "<button type='button' class='btn btn-success'>Tay Ninh</button>",
        "<button type='button' class='btn btn-general'>An Loc</button>",
        "<button type='button' class='btn btn-success'>Phuoc Long</button>",
        "<button type='button' class='btn btn-success'>Quang Duc</button>",
        "<button type='button' class='btn btn-warning'>Kien Phong</button>",
        "<button type='button' class='btn btn-general'>Saigon</button>",
        "<button type='button' class='btn btn-success'>The Parrot's Beak</button>",
        "<button type='button' class='btn btn-warning'>Kien Hoa</button>",
        "<button type='button' class='btn btn-general'>Can Tho</button>",
        "<button type='button' class='btn btn-success'>Sihanoukville</button>",
        "<button type='button' class='btn btn-warning'>Ba Xuyen</button>",
        "<button type='button' class='btn btn-general'>Can Tho</button>",
        "<button type='button' class='btn btn-warning'>Kien Giang</button>",
        "<button type='button' class='btn btn-warning'>Ba Xuyen</button>",
        "<button type='button' class='btn btn-success'>Binh Tuy</button>",
        "<button type='button' class='btn btn-general'>Qui Nhon</button>",
        "<button type='button' class='btn btn-success'>Southern Laos</button>",
        "<button type='button' class='btn btn-info'>Quang Tri</button>",
        "<button type='button' class='btn btn-success'>Central Loas</button>",
        "<button type='button' class='btn btn-danger'>Northern Vietnam</button>",
        "<button type='button' class='btn btn-general'>Hue</button>",
        "<button type='button' class='btn btn-info'>Chuang Nam</button>"
      );
      print <<< EOF
      <h2>
        Generating Random Space
      </h2>
      <h3>
        Attempt random spaces until one is valid in this order
      </h3>
      <ul>
EOF;
      for($i=0; $i<30; $i++)
      {
        print "<li>" . $spaces[$die_roll] . "</li>";
        $die_roll++;
        if($die_roll==30) { $die_roll=0; }
      }
      print <<< EOF
      <br><br>
      <a href="?">
        Restart
      </a>
EOF;
    }
      // footer
      print <<< EOF
</body>
</html>
EOF;

   ?>
