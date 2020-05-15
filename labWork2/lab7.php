<?php
    $numbers = array(5, 3, 2, 8, 1, 4);
    $drinks = array('hot' => 'coffee', 'very hot' => 'tea with lemon', 'cold' => 'water', 'cold1' => 'coca-cola', 'cold2' => 'pepsi');
    print "
    <h3>Initial array is: 5, 3, 2, 8, 1, 4</h3>
    <p><b>sort():</b> - sort arrays in ascending order<br>
    <b>rsort():</b> - sort arrays in descending order<br>    
    <b>asort():</b> - sort associative arrays in ascending order, according to the value<br>
    <b>ksort():</b> - sort associative arrays in ascending order, according to the key<br>
    <b>arsort():</b> - sort associative arrays in descending order, according to the value<br>
    <b>krsort():</b> - sort associative arrays in descending order, according to the key</p>
    ";

    //sort()
    echo "<br><b>sort():</b> ";
    sort($numbers);
    for($i = 0; $i<count($numbers); $i++){
        if($i==(count($numbers)-1)){
            echo $numbers[$i] . ".";
        }
        else{
            echo $numbers[$i] . ", ";
        }
    }

    //rsort();
    echo "<br><b>rsort():</b> ";
    rsort($numbers);
    for($i = 0; $i<count($numbers); $i++){
        if($i==(count($numbers)-1)){
            echo $numbers[$i] . ".";
        }
        else{
            echo $numbers[$i] . ", ";
        }
    }

    //asort();
    echo "<br><b>asort():</b> <br>";
    asort($drinks);
    foreach ($drinks as $key => $value){
            print "Key: " . $key . "; Value: " . $value. "<br>";
    }

    //ksort();
    echo "<br><b>ksort():</b> <br> ";
    ksort($drinks);
    foreach ($drinks as $key => $value){
        print "Key: " . $key . "; Value: " . $value. "<br>";
    }

    //arsort();
    echo "<br><b>arsort():</b> <br> ";
    arsort($drinks);
    foreach ($drinks as $key => $value){
        print "Key: " . $key . "; Value: " . $value. "<br>";
    }

    //krsort();
    echo "<br><b>krsort():</b> <br> ";
    krsort($drinks);
    foreach ($drinks as $key => $value){
        print "Key: " . $key . "; Value: " . $value. "<br>";
    }
?>