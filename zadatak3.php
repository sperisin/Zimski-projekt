<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'predlozak/head.php';?>
</head>
<body>
<?php require_once 'predlozak/izbornik.php' ?>
  <p class="lead">
  Zadatak: Kreirati program koji za dva unesena broja ispisuje sve prim brojeve između njih. <hr/>
  </p>
  <?php 
    function is_prime($broj)
    {
        if ($broj === 1) 
            return false;
        if ($broj === 2) 
            return true;
        for ($i = 2; $i <= floor(sqrt($broj)); ++$i) 
        {
            if ($broj % $i === 0) 
                return true; 
        }
        if (floor(sqrt($broj)) === $i - 1) 
            return true;
        else 
            return false;
    } 
  ?>
  <?php 
    $x = isset($_GET['x']) ? $_GET['x'] : 0;
    $y = isset($_GET['y']) ? $_GET['y'] : 0;

    echo 'Prosti brojevi između ' . $x . ' i ' . $y . ' su: <br/>';
    
    for($j = $x; $j <= $y; ++$j)
    {
      if (!is_prime($j)) 
        echo $j . '<br/>';
    }
    
  ?>
  
<?php require_once 'predlozak/podnozje.php' ?>
<?php require_once 'predlozak/skripte.php' ?>
</body>
</html>