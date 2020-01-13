<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'predlozak/head.php';?>
</head>
<body>
<?php require_once 'predlozak/izbornik.php' ?>
  <p class="lead">
  Zadatak: Kreirati program koji unosi dvije matrice 4x4 te ispisuje njihov zbroj <hr/>
  </p>
  <p>
  <?php 
  
    $A = [];
    $B = [];
    $A[0][0] = isset($_GET['a11']) ? $_GET['a11'] : 0;
    $A[0][1] = isset($_GET['a12']) ? $_GET['a12'] : 0;
    $A[0][2] = isset($_GET['a13']) ? $_GET['a13'] : 0;
    $A[0][3] = isset($_GET['a14']) ? $_GET['a14'] : 0;
    $A[1][0] = isset($_GET['a21']) ? $_GET['a21'] : 0;
    $A[1][1] = isset($_GET['a22']) ? $_GET['a22'] : 0;
    $A[1][2] = isset($_GET['a23']) ? $_GET['a23'] : 0;
    $A[1][3] = isset($_GET['a24']) ? $_GET['a24'] : 0;
    $A[2][0] = isset($_GET['a31']) ? $_GET['a31'] : 0;
    $A[2][1] = isset($_GET['a32']) ? $_GET['a32'] : 0;
    $A[2][2] = isset($_GET['a33']) ? $_GET['a33'] : 0;
    $A[2][3] = isset($_GET['a34']) ? $_GET['a34'] : 0;
    $A[3][0] = isset($_GET['a41']) ? $_GET['a41'] : 0;
    $A[3][1] = isset($_GET['a42']) ? $_GET['a42'] : 0;
    $A[3][2] = isset($_GET['a43']) ? $_GET['a43'] : 0;
    $A[3][3] = isset($_GET['a44']) ? $_GET['a44'] : 0;
    $B[0][0] = isset($_GET['b11']) ? $_GET['b11'] : 0;
    $B[0][1] = isset($_GET['b12']) ? $_GET['b12'] : 0;
    $B[0][2] = isset($_GET['b13']) ? $_GET['b13'] : 0;
    $B[0][3] = isset($_GET['b14']) ? $_GET['b14'] : 0;
    $B[1][0] = isset($_GET['b21']) ? $_GET['b21'] : 0;
    $B[1][1] = isset($_GET['b22']) ? $_GET['b22'] : 0;
    $B[1][2] = isset($_GET['b23']) ? $_GET['b23'] : 0;
    $B[1][3] = isset($_GET['b24']) ? $_GET['b24'] : 0;
    $B[2][0] = isset($_GET['b31']) ? $_GET['b31'] : 0;
    $B[2][1] = isset($_GET['b32']) ? $_GET['b32'] : 0;
    $B[2][2] = isset($_GET['b33']) ? $_GET['b33'] : 0;
    $B[2][3] = isset($_GET['b34']) ? $_GET['b34'] : 0;
    $B[3][0] = isset($_GET['b41']) ? $_GET['b41'] : 0;
    $B[3][1] = isset($_GET['b42']) ? $_GET['b42'] : 0;
    $B[3][2] = isset($_GET['b43']) ? $_GET['b43'] : 0;
    $B[3][3] = isset($_GET['b44']) ? $_GET['b44'] : 0;

    for ($i = 0; $i < 4; ++$i)
    {
      for ($j = 0; $j < 4; ++$j)
      {
        echo $A[$i][$j] + $B[$i][$j] . ' ';
        if ($j === 3)
          echo '<br/>';
      }
    }
    
  ?>
  </p>
<?php require_once 'predlozak/podnozje.php' ?>
<?php require_once 'predlozak/skripte.php' ?>
</body>
</html>