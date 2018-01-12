<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Game results!</title>
  <meta name="description" content="Paper Rock Scissors">
  <meta name="keywords" content="Paper Rock Scissors">
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- P = 1  -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">

</head>

<body>
  <div id="wrapper">
  <h1>Game Results</h1>
  <div id="php">
    <?php
      $player = substr(filter_input(INPUT_GET, 'player', FILTER_SANITIZE_STRING),0,1);
      $computer = rand(1,3); # 1 = Rock, 2 = Paper, 3 = Scissors

      # display player's choice

      if ($player == "r")
        echo "<p><img src=\"rock1.png\" alt=\"image of rock\">";
      elseif ($player == "p")
            echo "<p><img src=\"paper1.png\" alt=\"image of paper\">";
      elseif ($player == "s")
            echo "<p><img src=\"scissors1.png\" alt=\"image of scissors\">";

      # display computers's choice

      if ($computer == "1")
        echo "<img src=\"rock2.png\" alt=\"image of rock\"></p>";
      elseif ($computer == "2")
        echo "<img src=\"paper2.png\" alt=\"image of paper\"></p>";
      elseif ($computer == "3")
        echo "<img src=\"scissors2.png\" alt=\"image of scissors\"></p>";
      # who won?

      if($player == "r" and $computer == 1)
        echo "<p>It's a tie! Well played.</p>";
      elseif($player == "r" and $computer == 2)
        echo "<p>You loose! Paper covers rock!</p>";
      elseif($player == "r" and $computer == 3)
        echo "<p>You win! Rock breaks scissors.</p>";
      elseif($player == "p" and $computer == 1)
        echo "<p>You win! paper covers rock</p>";
      elseif($player == "p" and $computer == 2)
        echo "<p>It's a tie! Well played.</p>";
      elseif($player == "p" and $computer == 3)
        echo "<p>You loose! Scissors cut paper!</p>";
      elseif($player == "s" and $computer == 1)
        echo "<p>You loose! rock breaks scissors!</p>";
      elseif($player == "s" and $computer == 2)
        echo "<p>You win! scissors cut paper.</p>";
      elseif($player == "s" and $computer == 3)
        echo "<p>It's a tie! Well played.</p>";
      elseif($player == "")
        echo "<p>Error. Please go back and choose rock, paper, or scissors</p>"
    ?>
  </div>
  <div id="again">
    <a href="prs.html">Go back?</a>
  </div>
</div>
</body>
</html>