<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'predlozak/head.php';?>
</head>
<body>
<?php require_once 'predlozak/izbornik.php' ?>
  <p class="lead">
    Zadatak: Kreirati program koji unosi 24 broja, ispisuje njihov zbroj, najmanji i najveći uneseni broj. <hr/>
  </p>
  <p>
  <?php 
    $polje = [];
    $polje[0] = isset($_GET['a']) ? $_GET['a'] : 0;
    $polje[1] = isset($_GET['b']) ? $_GET['b'] : 0;
    $polje[2] = isset($_GET['c']) ? $_GET['c'] : 0;
    $polje[3] = isset($_GET['d']) ? $_GET['d'] : 0;
    $polje[4] = isset($_GET['e']) ? $_GET['e'] : 0;
    $polje[5] = isset($_GET['f']) ? $_GET['f'] : 0;
    $polje[6] = isset($_GET['g']) ? $_GET['g'] : 0;
    $polje[7] = isset($_GET['h']) ? $_GET['h'] : 0;
    $polje[9] = isset($_GET['j']) ? $_GET['j'] : 0;
    $polje[10] = isset($_GET['k']) ? $_GET['k'] : 0;
    $polje[11] = isset($_GET['l']) ? $_GET['l'] : 0;
    $polje[12] = isset($_GET['m']) ? $_GET['m'] : 0;
    $polje[13] = isset($_GET['n']) ? $_GET['n'] : 0;
    $polje[14] = isset($_GET['o']) ? $_GET['o'] : 0;
    $polje[15] = isset($_GET['p']) ? $_GET['p'] : 0;
    $polje[16] = isset($_GET['q']) ? $_GET['q'] : 0;
    $polje[17] = isset($_GET['r']) ? $_GET['r'] : 0;
    $polje[18] = isset($_GET['s']) ? $_GET['s'] : 0;
    $polje[19] = isset($_GET['t']) ? $_GET['t'] : 0;
    $polje[20] = isset($_GET['u']) ? $_GET['u'] : 0;
    $polje[21] = isset($_GET['v']) ? $_GET['v'] : 0;
    $polje[22] = isset($_GET['w']) ? $_GET['w'] : 0;
    $polje[23] = isset($_GET['x']) ? $_GET['x'] : 0;
    $polje[8] = isset($_GET['z']) ? $_GET['z'] : 0;
    
    $suma = 0;
    $min = $polje[0];
    $max = $polje[0];
    for ($i = 0; $i < count($polje); ++$i)
    {
      $suma += $polje[$i];
      if ($polje[$i] > $max)
        $max = $polje[$i];
      if ($polje[$i] < $min)
        $min = $polje[$i];
    }
    if (count($polje) != 0) 
      echo 'Suma brojeva je: ' . $suma . '. <br/> Najmanji uneseni broj je: ' . $min . '. <br/> Najveći uneseni broj je: ' . $max . '.';   
  ?>
  </p>
<?php require_once 'predlozak/podnozje.php' ?>
<?php require_once 'predlozak/skripte.php' ?>
</body>
</html>