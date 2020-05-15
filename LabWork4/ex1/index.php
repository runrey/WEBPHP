<?php
$link = mysqli_connect('localhost', 'runrey', '1234', 'lab4_1') OR DIE('ERROR: Could not connect.');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab work 4 ex 1</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        a{
            text-decoration: none;
        }
        body{
            background-color: #ddd;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }
        .main{
            margin-top: 20px;
            width: 50vw;
            padding: 10px;
            background-color: cadetblue;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            min-height: 300px;
            height: auto;
            display: flex;
            flex-direction: column;
        }
        h1{
            text-align: center;
            font-size: 2.5em;
            color: #fff;
        }
        .posts{
            display: flex;
            flex-direction: column;
            width: 100%;
            height: auto;
            padding: 40px;
        }
        .post{
            width: 100%;
            height: auto;
            padding: 2em 2em 0px;
            background-color: rgba(255,255,255,0.5);
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            margin-bottom: 2em;
            transition: background 0.3s ease;
        }
        .post:hover{
            background-color: rgba(255,255,255,0.7);
            transition: background 0.3s ease;
        }
        .headings{
            font-size: 2.2em;
        }
        .line{
            border: 1px solid black;
        }
        .content{
            font-size: 1.2em;
            margin-top: 1em;
            margin-bottom: 1em;
        }
        .buttons{
            margin-top: 1em;
            margin-bottom: 1em;
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
        }
        .edit{
            outline: none;
            padding: 8px 16px;
            background-color: khaki;
            font-weight: bold;
            color: black;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        .edit:hover{
            background-color: darkkhaki;
            transition: all 0.3s ease;
        }
        .delete{
            outline: none;
            padding: 8px 16px;
            background-color: firebrick;
            font-weight: bold;
            color: black;
            border-radius: 4px;
            margin-left: 1em;
            transition: all 0.3s ease;
        }
        .delete:hover{
            color: firebrick;
            background-color: black;
            transition: all 0.3s ease;
        }
    </style>
</head>
<body>
    <div class="main">
        <h1>Our posts</h1>
        <div class="posts">
<?php
    $result = mysqli_query($link, "SELECT * FROM posts");
    if (mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_array($result)){
?>
            <div class="post">
                <h2 class="headings"><?php echo $row['p_heading']; ?></h2>
                <hr class="line">
                <p class="content"><?php print $row['p_content']; ?></p>
                <pre><?php echo $row['p_date']; ?></pre>
                <div class="buttons">
                    <a href="edit_post.php?edit=<?php echo $row['post_id']; ?>" class="edit">EDIT</a>
                    <a href="edit_post.php?delete=<?php echo $row['post_id']; ?>" class="delete">DELETE</a>
                </div>
            </div>
<?php
        }
    } else{
        echo "<h1>There are no posts yet!</h1>";
    }
?>
        </div>
    </div>

</body>
</html>
