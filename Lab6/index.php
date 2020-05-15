<?php
require_once "Figure.php";
require_once "Rectangle.php";
require_once "Triangle.php";
require_once "Square.php";

$r1 = new Rectangle(2, 4);
$r2 = new Rectangle(3, 2);
$s1 = new Square(3);
$s2 = new Square(2);
$t1 = new Triangle(3, 5, 4);
$t2 = new Triangle(6, 10, 8);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Lab6 Yernur</title>
    <style>
        .initial{
            margin-bottom: 2em;
            font-size: 1.3rem;
        }
        .main{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
        form{
            width: 20vw;
            margin-bottom: 2em;
            display: flex;
            flex-direction: column;
            padding: 2em;
            border: 1px solid black;
        }
        input{
            padding: 5px;
            margin-bottom: 1em;

        }
    </style>
</head>
<body>
    <div class="initial">
        <?php
        echo $r1->infoAbout() . "<br>";
        echo $r1->getArea() . " rectangles " . $r2->getArea() . "<br>";
        echo $s1->getArea() . " squares " . $s2->getArea() . "<br>";
        echo $t1->getArea() . " triangles " . $t2->getArea() . "<br>";
        ?>
    </div>

<div class="main">
    <form method="get" action="index.php">
        <h1>Rectangle</h1>
        <input type="number" name="a" placeholder="width length" required>
        <input type="number" name="b" placeholder="height length" required>
        <input type="text" name="color" placeholder="color" required>
        <input type="submit" name="rectangle">
    </form>

    <form method="get" action="index.php">
        <h1>Triangle</h1>
        <input type="number" name="a" placeholder="left side length" required>
        <input type="number" name="b" placeholder="right side length" required>
        <input type="number" name="c" placeholder="base length" required>
        <input type="text" name="color" placeholder="color" required>
        <input type="submit" name="triangle">
    </form>

    <form method="get" action="index.php">
        <h1>Square</h1>
        <input type="number" name="a" placeholder="side length" required>
        <input type="text" name="color" placeholder="color" required>
        <input type="submit" name="square">
    </form>
</div>
    <?php
    if(isset($_GET['rectangle'])){
        $a = $_GET['a'];
        $b = $_GET['b'];
        $color = $_GET['color'];
        echo "<div style='width: " .$a. "px; height: " .$b. "px; background-color: ".$color.";'></div>";
    }

    if(isset($_GET['triangle'])){
        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];
        $color = $_GET['color'];
        echo "<div style='width: 0; height: 0; 
        border-left: " .$a. "px solid transparent; 
        border-right: " .$b. "px solid transparent; 
        border-bottom: " .$c. "px solid ".$color.";'></div>";
    }

    if(isset($_GET['square'])){
        $a = $_GET['a'];
        $color = $_GET['color'];
        echo "<div style='width: " .$a. "px; height: " .$a. "px; background-color: ".$color.";'></div>";
    }
    ?>

</body>
</html>
