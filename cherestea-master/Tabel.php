<?php


$rows = 10;
$cols = 10;
function drawTable($rows, $cols){
    echo "<table border='1'>";

    for($tr=1;$tr<=$rows;$tr++){

        echo "<tr>";
        for($td=1;$td<=$cols;$td++){
            echo "<td align='center'>".$tr*$td."</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}
