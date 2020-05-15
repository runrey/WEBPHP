<?php
$drinks = array('coffee','tea with lemon','water','Coca-Cola','Pepsi');

print '<table border="1">';

for ($i = 0; $i < count($drinks); $i++){
    if($i%2==0){
        print "<tr style='background-color: aqua;'><td>Drinks</td><td>$drinks[$i]</td></tr>";
    }
    else{
        print "<tr><td>Drinks</td><td>$drinks[$i]</td></tr>";
    }
}
print '</table>';
?>
