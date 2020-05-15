<?php
    include "Animals.php";
    $animal = "";
    if(isset($_GET['animal'])) $animal = $_GET['animal'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Lab3 ex4</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #ddd;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        nav{
            width: 90%;
            margin-top: 4em;
            padding: 2em;
            background-color: cadetblue;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }
        main{
            width: 90%;
            margin-top: 4em;
            padding: 2em;
            background-color: cadetblue;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.2);
            display: grid;
            grid-template-columns: 1fr 1fr;
        }
        main>div{
            padding: 2em;
        }
        h1{
            color: white;
        }
        #hh{
            font-size: 2.5em;
            color: white;
        }
        #link{
            padding: 5px;
            border-radius: 4px;
            width: 100px;
            font-size: 1.7em;
            height: auto;
            outline: none;
            border: none;
            color: #000;
            text-decoration: none;
            text-align: center;
            background-color: white;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        #link:hover{
            background-color: grey;
            color: white;
            transition: all 0.3s ease;
        }
        p{
            font-size: 2em;
            margin-bottom: 2em;
        }
    </style>
</head>
<body>
    <nav>
        <a href="index.php" id="link">Home</a>
        <h1 id="hh"><?php echo $animals[$animal]->getName(); ?></h1>
    </nav>
    <main>
        <img src="<?php echo $animals[$animal]->getName(); ?>.jpg" alt="<?php echo $animals[$animal]->getName(); ?>" title="<?php echo $animals[$animal]->getName(); ?>" width="100%">
        <div>
            <p><?php $animals[$animal]->toString(); ?></p>
            <p><?php $animals[$animal]->addition(); ?></p>
        </div>
    </main>
</body>
</html>
