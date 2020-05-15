<?php
    include "Animals.php";
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
            justify-content: center;
        }
        main{
            width: 90%;
            position: absolute;
            top: 4em;
            padding: 2em;
            background-color: cadetblue;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.2);
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-column-gap: 1em;
        }
        main>div{
            padding: 1em;
        }
        main>div.pic{
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.2);
            background-color: transparent;
            transition: all 0.3s ease;
        }
        main>div.pic:hover{
            background-color: #dddddd;
            transition: all 0.3s ease;
        }

        h1{
            color: white;
        }
        #hh{
            font-size: 2.5em;
            color: black;
        }
    </style>
</head>
<body>
    <h1 id="hh">ZOOpark</h1>
    <main>
        <div class="pic">
            <a href="info.php?animal=0"><img src="eagle.jpg" alt="eagle" style="width:100%" title="eagle"></a>
        </div>
        <div class="pic">
            <a href="info.php?animal=1"><img src="lion.jpg" alt="lion" style="width:100%" title="lion"></a>
        </div>
        <div class="pic">
            <a href="info.php?animal=2"><img src="wolf.jpg" alt="wolf" style="width:100%" title="wolf"></a>
        </div>
        <div class="name">
            <h1><?php echo $eagle->getName(); ?></h1>
        </div>
        <div class="name">
            <h1><?php echo $lion->getName(); ?></h1>
        </div>
        <div class="name">
            <h1><?php echo $wolf->getName(); ?></h1>
        </div>
    </main>

</body>
</html>

