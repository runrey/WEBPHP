<?php
$uni = [
    'Astana IT University' => ['Nur-Sultan', 'Kazakhstan', '0'],
    'KBTU' => ['Almaty', 'Kazakhstan', '6'],
    'SDU' => ['Almaty', 'Kazakhstan', '7'],
    'KIMEP' => ['Almaty', 'Kazakhstan', '5'],
    'MSU' => ['Moscow', 'Russia', '4'],
    'Harvard' => ['Boston', 'USA', '3'],
    'Stanford' => ['California', 'USA', '1'],
    'Oxford' => ['Oxford', 'UK', '2']
];

ksort($uni);
print '<table border="1" cellpadding="10px">';
print '<tr style=\'background-color: black; color: white;\'><th>University name</th><th>City</th><th>Country</th><th>Ranking</th></tr>';
foreach ($uni as $key => $value){
    print "<tr style='background-color: aqua;'><td>$key</td><td>$value[0]</td><td>$value[1]</td><td>$value[2]</td></tr>";
}
print '</table>';
?>
