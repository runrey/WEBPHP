<?php
$uni = [
    'Astana IT University' => ['Nur-Sultan', 'Kazakhstan'],
    'KBTU' => ['Almaty', 'Kazakhstan'],
    'SDU' => ['Almaty', 'Kazakhstan'],
    'KIMEP' => ['Almaty', 'Kazakhstan'],
    'MSU' => ['Moscow', 'Russia'],
    'Harvard' => ['Boston', 'USA'],
    'Stanford' => ['California', 'USA'],
    'Oxford' => ['Oxford', 'UK']
];

asort($uni);
print '<table border="1" cellpadding="10px">';
print '<tr style=\'background-color: black; color: white;\'><th>University name</th><th>City</th><th>Country</th></tr>';
foreach ($uni as $key => $value){
    print "<tr style='background-color: aqua;'><td>$key</td><td>$value[0]</td><td>$value[1]</td></tr>";
}
print '</table>';
?>
