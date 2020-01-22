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
                    
                        $brred  = $_GET['brred'];
                        $brstup = $_GET['brstup'];
                        $maxStupac = $brstup - 1;
                        $maxred = $brred - 1;
                        $minred = 0;
                        $minstup = 0;
                        $matrica = [];
                        $output = 1;


                        while ($output <= $*$brstup) 
                        {

                            for($j = $maxStupac; $j >= $minstup; --$j)
                                {
                                    $matrica[$maxred][$j] = $output++;
                                }

                            $maxred--;

                                if ($output > $*$brstup) 
                                    break;
                                
                            for ($i = $maxred; $i >= $minred; --$i) 
                                { 
                                    $matrica[$i][$minstup] = $output++;
                                }

                            $minstup++;

                            if ($output > $*$brstup) 
                                break;
                            
                            for ($j = $minstup; $j <= $maxStupac; ++$j) 
                                { 
                                    $matrica[$minred][$j] = $output++;
                                }

                            $minred++;

                            if ($output > $*$brstup) 
                                break;
                            
                            for ($i = $minred; $i <= $maxred; ++$i) 
                                { 
                                    $matrica[$i][$maxStupac] = $output++;
                                }

                            $maxStupac--;    
                        }
                    ?>
  </p>
<?php require_once 'predlozak/podnozje.php' ?>
<?php require_once 'predlozak/skripte.php' ?>
</body>
</html>