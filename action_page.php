<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    $dailyD = sprintf('%02d', $daily[1]);
?>
<?php 
    function isEmptyAll($alpha, $bravo, $carrot, $demi, $ellen, $date, $yeet) {
      if (empty($alpha.$bravo.$carrot.$demi)) {
        echo ("<font face='arial'></font>");
    }
     else {
       // https://stackoverflow.com/questions/1699958/formatting-a-number-with-leading-zeros-in-php
      echo ("<font face='arial'>".$ellen.' '.$yeet.'-'.sprintf('%02d', $date).':'."</font>");
    }
      }

    function isClear($alpha, $bravo){
      if (empty($alpha)){
      }else {
        echo "<font face='arial'><b>".'☐ '.$bravo."</b></font>"."<font face='arial'>".$alpha."</font>".'<br />';
      }
    }

?>

      <p style="color:black;font-family:arial;font-size:25px;font-weight:bold">Weekly Lesson Plans for Week <?php echo $weekOf ?></p>
      <p style="color:black;font-family:arial;font-size:20px;font-weight:bold"><?php isEmptyAll($lineE[8], $lineE[14], $lineE[20], $lineE[26], 'Monday', $daily1, $dailyD)?></p>
<?php

    echo isClear($lineE[8], 'English: ');
    echo isClear($lineE[14], 'Math: ');
    echo isClear($lineE[20], 'History: ');
    echo isClear($lineE[26], 'Science: ');
?>

<p style="color:black;font-family:arial;font-size:20px;font-weight:bold"><?php isEmptyAll($lineE[9], $lineE[15], $lineE[21], $lineE[27], 'Tuesday', $daily2, $dailyD)?></p>

  <?php
    echo isClear($lineE[9], 'English: ');
    echo isClear($lineE[15], 'Math: ');
    echo isClear($lineE[21], 'History: ');
    echo isClear($lineE[27], 'Science: ');
?>

<p style="color:black;font-family:arial;font-size:20px;font-weight:bold"><?php isEmptyAll($lineE[10], $lineE[16], $lineE[22], $lineE[28], 'Thursday', $daily3, $dailyD)?></p>
  
    <?php
    echo isClear($lineE[10], 'English: ');
    echo isClear($lineE[16], 'Math: ');
    echo isClear($lineE[22], 'History: ');
    echo isClear($lineE[28], 'Science: ');
?>

<p style="color:black;font-family:arial;font-size:20px;font-weight:bold"><?php isEmptyAll($lineE[11], $lineE[17], $lineE[23], $lineE[29], 'Wednesday', $daily4, $dailyD)?></p>
    
      <?php
    echo isClear($lineE[11], 'English: ');
    echo isClear($lineE[17], 'Math: ');
    echo isClear($lineE[23], 'History: ');
    echo isClear($lineE[29], 'Science: ');
?>

<p style="color:black;font-family:arial;font-size:20px;font-weight:bold"><?php isEmptyAll($lineE[12], $lineE[18], $lineE[24], $lineE[30], 'Friday:', $daily5, $dailyD) ?></p>
      
        <?php
    echo isClear($lineE[12], 'English: ');
    echo isClear($lineE[18], 'Math: ');
    echo isClear($lineE[24], 'History: ');
    echo isClear($lineE[30], 'Science: ');
}
fclose($fh);
?>


<style>
.btn {
  background-color: DodgerBlue;
  border-radius: 8px;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}




/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
@media print {
  #printPage {
    display: none;
  }
}
</style>
<style type="text/css" media="print">
@page {
    size: auto;   /* auto is the initial value */
    margin: 0.75in  /* this affects the margin in the printer settings */
}
</style>
  <button onclick="window.print();return false;" id="printPage" class="btn"><i class="fa fa-print"></i></button>