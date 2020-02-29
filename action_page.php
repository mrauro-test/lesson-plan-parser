<?php

    $file = $_POST['filename'];

    $fh = fopen($file ,'r');
    while ($line = fgets($fh)) {
    $lineE = explode(",", $line);

    ?>

      <p style="color:black;font-family:arial;font-size:25px;font-weight:bold">Weekly Lesson Plans for Week [DATA]</p>
      <p style="color:black;font-family:arial;font-size:20px;font-weight:bold">Monday:</p>

    <?php

    echo "<font face='arial'><b>"."English:"."</b></font>","<font face='arial'>"." ".$lineE[8]."</font>".'<br />';
    echo "<font face='arial'><b>"."Math:"."</b></font>","<font face='arial'>"." ".$lineE[14]."</font>".'<br />';
    echo "<font face='arial'><b>"."History:"."</b></font>","<font face='arial'>"." ".$lineE[20]."</font>".'<br />';
    echo "<font face='arial'><b>"."Science  :"."</b></font>","<font face='arial'>"." ".$lineE[26]."</font>".'<br />';

    ?>

    <p style="color:black;font-family:arial;font-size:20px;font-weight:bold">Tuesday:</p>

  <?php
      echo "<font face='arial'><b>"."English:"."</b></font>","<font face='arial'>"." ".$lineE[9]."</font>".'<br />';
      echo "<font face='arial'><b>"."Math:"."</b></font>","<font face='arial'>"." ".$lineE[15]."</font>".'<br />';
      echo "<font face='arial'><b>"."History:"."</b></font>","<font face='arial'>"." ".$lineE[21]."</font>".'<br />';
      echo "<font face='arial'><b>"."Science  :"."</b></font>","<font face='arial'>"." ".$lineE[27]."</font>".'<br />';
      
      ?>

      <p style="color:black;font-family:arial;font-size:20px;font-weight:bold">Wednesday:</p>
  
    <?php
        echo "<font face='arial'><b>"."English:"."</b></font>","<font face='arial'>"." ".$lineE[10]."</font>".'<br />';
        echo "<font face='arial'><b>"."Math:"."</b></font>","<font face='arial'>"." ".$lineE[16]."</font>".'<br />';
        echo "<font face='arial'><b>"."History:"."</b></font>","<font face='arial'>"." ".$lineE[22]."</font>".'<br />';
        echo "<font face='arial'><b>"."Science  :"."</b></font>","<font face='arial'>"." ".$lineE[28]."</font>".'<br />';

        ?>

        <p style="color:black;font-family:arial;font-size:20px;font-weight:bold">Thursday:</p>
    
      <?php
          echo "<font face='arial'><b>"."English:"."</b></font>","<font face='arial'>"." ".$lineE[11]."</font>".'<br />';
          echo "<font face='arial'><b>"."Math:"."</b></font>","<font face='arial'>"." ".$lineE[17]."</font>".'<br />';
          echo "<font face='arial'><b>"."History:"."</b></font>","<font face='arial'>"." ".$lineE[23]."</font>".'<br />';
          echo "<font face='arial'><b>"."Science  :"."</b></font>","<font face='arial'>"." ".$lineE[29]."</font>".'<br />';

          ?>

          <p style="color:black;font-family:arial;font-size:20px;font-weight:bold">Friday:</p>
      
        <?php
            echo "<font face='arial'><b>"."English:"."</b></font>","<font face='arial'>"." ".$lineE[12]."</font>".'<br />';
            echo "<font face='arial'><b>"."Math:"."</b></font>","<font face='arial'>"." ".$lineE[18]."</font>".'<br />';
            echo "<font face='arial'><b>"."History:"."</b></font>","<font face='arial'>"." ".$lineE[24]."</font>".'<br />';
            echo "<font face='arial'><b>"."Science  :"."</b></font>","<font face='arial'>"." ".$lineE[30]."</font>".'<br />';
            
    }
    fclose($fh);

?>