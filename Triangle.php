<?php
$result=1;
for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo $result."\n";
        $result++;
    }
    echo "<br>"; 
}
?>