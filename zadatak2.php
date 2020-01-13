<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'predlozak/head.php';?>
</head>
<body>
<?php require_once 'predlozak/izbornik.php' ?>
  <p class="lead">
    Zadatak: Kreirati program koji ispisuje tablicu množenja 15x15 <hr/>
  </p>

  <p>
  <?php 
  echo '<table class="table table-striped">';
  echo '<tbody>';
      for($i = 0; $i < 15; ++$i)  
      {
        echo '<tr>';
        for($j = 0; $j < 15; ++$j)
            echo '<td>' . ($i + 1) * ($j + 1) . '</td>';
      echo '</tr>';
      }
      echo '</tbody>';
      echo '</table>';
?>
</p>
  
<?php require_once 'predlozak/podnozje.php' ?>
<?php require_once 'predlozak/skripte.php' ?>
</body>
</html>