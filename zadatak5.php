<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'predlozak/head.php';?>
</head>
<body>
<?php require_once 'predlozak/izbornik.php' ?>
  <p class="lead">
  Zadatak: Kreirati program koji ispisuje cikličnu matricu <hr/>
  </p>

  <p>
  <?php 
  function rotateMatrix($matrica, $m, $n)
  {
  $p = 0;
  $q = 0;
  $tempA = [];

  for ($i = 0; $i < $m; ++$i)
    {
      for ($j = 0; $j < $n; ++$j)
      {
        $p = $m - $i - 1;
        $q = $n - $j - 1;
        $tempA[$p][$q] = $matrica[$i][$j];
      }
    }
  return $tempA;
}

  function getSpiralArray($m, $n)
  {
      $pos = 1;
      $count = $m;
      $value = -$n;
      $sum = -1;

      if ($m === 0 || $n === 0)
      {
        echo 'Nije unesen broj stupaca ili redaka.';
      }
      else
      {
      do
      {
          $value = -1 * $value / $n;
          for ($i = 0; $i < $count; ++$i)
          {
              $sum += $value;
              $result[$sum / $n][$sum % $n] = $pos++;
          }
          $value *= $n;
          $count--;
          for ($i = 0; $i < $count; ++$i)
          {
              $sum += $value;
              $result[$sum / $n][$sum % $n] = $pos++;
          }
      } while ($count > 0);

      return $result;
    }
  }

  function PrintArray($array, $m, $n)
  {
      for ($i = 0; $i < $m; ++$i) {
          for ($j = 0; $j < $n; ++$j ) {
              echo $array[$i][$j] . ' ';
              if ($j === $n - 1)
                echo '<br/>';
          }
          echo '<br/>';
      }
  }


  

  $brred = isset($_GET['brred']) ? $_GET['brred'] : 0;
  $brstup = isset($_GET['brstup']) ? $_GET['brstup'] : 0;
  $arr1 = getSpiralArray($brred, $brstup);
  echo '<pre>';
  if ($brred === $brstup)
  {
    $arr = rotateMatrix($arr1, $brred, $brstup);
    PrintArray($arr, $brred, $brstup);
  }
  else
    PrintArray($arr1, $brred, $brstup);
  echo '</pre>';
?>
  </p>
<?php require_once 'predlozak/podnozje.php' ?>
<?php require_once 'predlozak/skripte.php' ?>
</body>
</html>