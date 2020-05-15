<?php
$drinks = array('hot' => 'coffee', 'very hot' => 'tea with lemon', 'cold' => 'water', 'cold1' => 'Coca-Cola', 'cold2' => 'Pepsi');

print '<table border="1">';

foreach ($drinks as $key => $value){
    if($key == 'cold'){
        print "<tr style='background-color: aqua;'><td>$key</td><td>$value</td></tr>";
    }
    else{
        print "<tr><td>$key</td><td>$value</td></tr>";
    }
}
print '</table>';
?>
