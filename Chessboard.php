<?php
echo "<table border=1>";
for($row=1;$row<=8;$row++){
    echo "<tr>";
    for($col=1;$col<=8;$col++){
        $total=$row+$col;
        if($total%2==0){
            echo "<td width=50px height=50px bgcolor=black></td>";
        }else {
            echo "<td width=50px height=50px bgcolor=white></td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>