<?php
$file = $_POST['filename'];
$weekOf = $_POST['weekOf'];
$fh = fopen($file, 'r');
while ($line = fgets($fh)) {
    $lineE = explode(",", $line);
    $daily = explode("-", $weekOf);
    $daily1 = $daily[2] + 1;
    $daily2 = $daily[2] + 2;
    $daily3 = $daily[2] + 3;
    $daily4 = $daily[2] + 4;
    $daily5 = $daily[2] + 5;
?>

      <p style="color:black;font-family:arial;font-size:25px;font-weight:bold">Weekly Lesson Plans for Week <?php echo $weekOf ?></p>
      <p style="color:black;font-family:arial;font-size:20px;font-weight:bold"><?php isEmptyAll($lineE[8], $lineE[14], $lineE[20], $lineE[26], 'Monday:')?></p>

    <?php

    function isEmptyAll($alpha, $bravo, $carrot, $demi, $ellen){
      if (empty($alpha.$bravo.$carrot.$demi)) {
        echo ("<font face='arial'></font>");
      }
      else
      {
        echo ("<font face='arial'>".$ellen."</font>");
      }
    }


    echo "<font face='arial'><b>" . "English:" . "</b></font>", "<font face='arial'>" . " " . $lineE[8] . "</font>" . '<br />';
    echo "<font face='arial'><b>" . "Math:" . "</b></font>", "<font face='arial'>" . " " . $lineE[14] . "</font>" . '<br />';
    echo "<font face='arial'><b>" . "History:" . "</b></font>", "<font face='arial'>" . " " . $lineE[20] . "</font>" . '<br />';
    echo "<font face='arial'><b>" . "Science  :" . "</b></font>", "<font face='arial'>" . " " . $lineE[26] . "</font>" . '<br />';
?>

<p style="color:black;font-family:arial;font-size:20px;font-weight:bold"><?php isEmptyAll($lineE[9], $lineE[15], $lineE[21], $lineE[27], 'Tuesday:')?></p>

  <?php
    echo "<font face='arial'><b>" . "English:" . "</b></font>", "<font face='arial'>" . " " . $lineE[9] . "</font>" . '<br />';
    echo "<font face='arial'><b>" . "Math:" . "</b></font>", "<font face='arial'>" . " " . $lineE[15] . "</font>" . '<br />';
    echo "<font face='arial'><b>" . "History:" . "</b></font>", "<font face='arial'>" . " " . $lineE[21] . "</font>" . '<br />';
    echo "<font face='arial'><b>" . "Science  :" . "</b></font>", "<font face='arial'>" . " " . $lineE[27] . "</font>" . '<br />';
?>

<p style="color:black;font-family:arial;font-size:20px;font-weight:bold"><?php isEmptyAll($lineE[10], $lineE[16], $lineE[22], $lineE[28], 'Thursday:')?></p>
  
    <?php
    echo "<font face='arial'><b>" . "English:" . "</b></font>", "<font face='arial'>" . " " . $lineE[10] . "</font>" . '<br />';
    echo "<font face='arial'><b>" . "Math:" . "</b></font>", "<font face='arial'>" . " " . $lineE[16] . "</font>" . '<br />';
    echo "<font face='arial'><b>" . "History:" . "</b></font>", "<font face='arial'>" . " " . $lineE[22] . "</font>" . '<br />';
    echo "<font face='arial'><b>" . "Science  :" . "</b></font>", "<font face='arial'>" . " " . $lineE[28] . "</font>" . '<br />';
?>

<p style="color:black;font-family:arial;font-size:20px;font-weight:bold"><?php isEmptyAll($englishW, $mathW, $historyW, $scienceW, 'Wednesday:')?></p>
    
      <?php
    echo "<font face='arial'><b>" . "English:" . "</b></font>", "<font face='arial'>" . " " . $lineE[11] . "</font>" . '<br />';
    echo "<font face='arial'><b>" . "Math:" . "</b></font>", "<font face='arial'>" . " " . $lineE[17] . "</font>" . '<br />';
    echo "<font face='arial'><b>" . "History:" . "</b></font>", "<font face='arial'>" . " " . $lineE[23] . "</font>" . '<br />';
    echo "<font face='arial'><b>" . "Science  :" . "</b></font>", "<font face='arial'>" . " " . $lineE[29] . "</font>" . '<br />';
?>

<p style="color:black;font-family:arial;font-size:20px;font-weight:bold"><?php isEmptyAll($lineE[12], $lineE[18], $lineE[24], $lineE[30], 'Friday:')?></p>
      
        <?php
    echo "<font face='arial'><b>" . "English:" . "</b></font>", "<font face='arial'>" . " " . $lineE[12] . "</font>" . '<br />';
    echo "<font face='arial'><b>" . "Math:" . "</b></font>", "<font face='arial'>" . " " . $lineE[18] . "</font>" . '<br />';
    echo "<font face='arial'><b>" . "History:" . "</b></font>", "<font face='arial'>" . " " . $lineE[24] . "</font>" . '<br />';
    echo "<font face='arial'><b>" . "Science  :" . "</b></font>", "<font face='arial'>" . " " . $lineE[30] . "</font>" . '<br />';
}
fclose($fh);
?>
