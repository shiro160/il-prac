<table>
<?php
for($i = 0; $i < 194 ; ){
    echo "<tr>";
    echo "<td>";
    echo $i;
    $i++;
    echo "</td>";
    echo "<td>";
    echo $i;
    $i++;
    echo "</td>";
    echo "<td>";
    echo $i;
    $i++;
    echo "</td>";
    echo "</tr>\n";
}
?>
</table>


<table>
<?php
for($i = 0; $i < 194 ; ){
    echo "<tr>";
    for($j = 0 ; $j < 3; $j++){
        echo "<td>";
        echo $i;
        $i++;
        echo "</td>";
    }
    echo "<tr>";
}
?>
</table>