<?php
$link = mysqli_connect('localhost', 'runrey', '1234', 'lab4_2') OR DIE('ERROR: Could not connect.');
session_start();

if (isset($_POST['login'])){
    if($_POST['login']=="admin" && $_POST['pass']=="admin"){
        $_SESSION['login'] = $_POST['login'];
    }
    else{
        echo "<script>alert('Incorrect data was entered! Try again.');</script>";
    }
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['login']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab work 4 ex 2</title>
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
            flex-direction: column-reverse;
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
            width: fit-content;
            outline: none;
            padding: 8px 16px;
            background-color: khaki;
            font-weight: bold;
            color: black;
            border-radius: 4px;
            margin-right: 1em;
            transition: all 0.3s ease;
        }
        .edit:hover{
            background-color: darkkhaki;
            transition: all 0.3s ease;
        }

        form{
            width: 100%;
            height: auto;
            display: flex;
            flex-direction: column;
        }
        [type="text"], [type="password"]{
            font-size: 1em;
            margin-bottom: 1em;
            padding: 5px;
            overflow: auto;
            width: fit-content;
        }
        [type="submit"]{
            outline: none;
            border: none;
            padding: 8px 16px;
            width: fit-content;
            background-color: khaki;
            font-weight: bold;
            font-size: 1.3em;
            color: black;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        [type="submit"]:hover{
            background-color: darkkhaki;
            transition: all 0.3s ease;
        }
        label{
            font-size: 1.3em;

    </style>
</head>
<body>
<div class="main">

    <?php if(isset($_GET['login'])){ ?>
    <form method="post" action="index.php">
        <label>Login:</label>
        <input type="text" name="login" required>

        <label>Password:</label>
        <input type="password" name="pass" required>

        <input type="submit" name="submit" value="Login">
        <pre style="color: white; font-size: 1.2em">Hint: login: admin, password: admin</pre>
    </form>
    <?php } else{ ?>

    <h1>Our Items</h1>
    <?php if(empty($_SESSION['login'])){ ?>
    <a href="index.php?login" class="edit">Admin login</a>
    <?php } else{ ?>
        <div class="buttons">
            <a href="index.php?logout" class="edit">Logout</a>
            <a href="changes.php?add" class="edit">Add item</a>
        </div>
    <?php } ?>
    <div class="posts">
        <?php
        $result = mysqli_query($link, "SELECT * FROM items");
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="post">
                    <h2 class="headings"><?php echo $row['i_name']; ?></h2>
                    <hr class="line">
                    <p class="content"><?php print $row['i_cost']; ?> $</p>
                <?php if(!empty($_SESSION['login'])){ ?>
                    <a href="changes.php?edit=<?php echo $row['item_id']; ?>" class="edit">EDIT</a>
                <?php } ?>
                </div>
                <?php
            }
        } else {
            echo "<h1>There are no items yet!</h1>";
        }
    }
        ?>
    </div>
</div>

</body>
</html>
