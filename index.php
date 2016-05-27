
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <title>FitL-Bot
  </title>
</head>
<body>
  <?
    // header
    print <<< EOF
      <div class="container">
        <h1>
          <a href='?'>
            Fire In The Lake - Bot
          </a>
        </h1>
EOF;

    // load everything
    $faction = $_GET['faction'];

    // is there a faction? if not, this is the starting point
    if ($faction == "")
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
        </div>
EOF;
    }
    elseif ($faction == 'NVA')
    {
      $vars .= "?faction=NVA";
      print <<< EOF
      <h2>
        NVA
      </h2>
      <h3>
        Is this an event?
      </h3>
      <a href="$vars&event=easter">
        <button type="button" class="btn btn-danger">Yes, Easter Offensive</button>
      </a>
      <a href="$vars&event=halo">
        <button type="button" class="btn btn-danger">Yes, with halo</button>
      </a>
      <a href="$vars&event=normal">
        <button type="button" class="btn btn-danger">Yes, without halo</button>
      </a>
      <a href="$vars&event=no">
        <button type="button" class="btn btn-danger">No</button>
      </a>
      <br><br>
      <h4>
        Assistance
      </h4>
      <p>
        If NVA qualifies for <u>Easter Offensive</u>, it runs it immediately.
      </p>
      <p>
        A halo is a little cirlce around the factions symbol on the card.
      </p>
      <p>
        In the cases of events, click 'Yes' and let the bot figure out if it will
        be converted into ops.
      </p>
EOF;
    }
      // footer
      print <<< EOF
</body>
</html>
EOF;

   ?>
