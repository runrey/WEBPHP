<?php
    $book = "";
    if(isset($_GET["book"])){

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Library main</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        a{
            text-decoration: none;
        }
        body{
            background-color: #ddd;
        }
        .main{
            width: 80vw;
            height: auto;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: flex-start;
            position: absolute;
            top: 2em;
            left: 10vw;
            background-color: coral;
            padding: 50px;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.2);
            margin-bottom: 2em;
        }
        .item{
            padding: 40px;
            margin-bottom: 20px;
            width: 100%;
            height: 30%;
            border-radius: 5px;
            border: 1px solid white;
            display: flex;
            flex-direction: row;
            background-color: cadetblue;
        }
    </style>
</head>
<body>
<div class="main">
    <div class="item">
        <a href="info?book=1"><img src="book1.jpg" height="200" alt="book1"></a>
        <a href="info?book=1"><span>Book of fire</span></a>
    </div>
    <div class="item">
        <a href="info?book=2"><img src="book2.jpg" height="200" alt="book2"></a>
        <a href="info?book=2"><span>Snow fields of salamanders</span></a>
    </div>
    <div class="item">
        <a href="info?book=3"><img src="book3.jpg" height="200" alt="book3"></a>
        <a href="info?book=3"><span>Queen's heart</span></a>
    </div>
</div>
</body>
</html>
