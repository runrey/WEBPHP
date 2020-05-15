<?php
session_start();
$names = array('Ali', 'Aya', 'Dina');
$str = "";
if (isset($_POST)) {
    if(isset($_POST['submit'])){
        $_SESSION['name'] = $names[$_POST['sel']];
    }

    if(isset($_POST['reset'])){
        session_destroy();
        unset($_SESSION['name']);
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Lab3 ex2</title>
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
        form {
            position: absolute;
            top: 20px;
            min-width: 300px;
            width: auto;
            min-height: 200px;
            padding: 20px;
            background-color: cadetblue;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            height: auto;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }
        input{
            padding: 5px;
            border-radius: 4px;
            width: 160px;
            height: 40px;
            outline: none;
            border: none;
            color: #000;
        }
        input[type="submit"]{
            background-color: white;
            color: black;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        select{
            font-size: 1.5em;
            width: 160px;
            height: 40px;
        }
        input[type="submit"]:hover{
            background-color: grey;
            color: white;
            transition: all 0.3s ease;
        }

        h1{
            color: white;
        }
        span{
            color: red;
        }
    </style>
</head>
<body>
<?php if(empty($_SESSION['name'])){ ?>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <select name="sel">
            <?php
                for($i = 0; $i<count($names); $i++){
                    echo '<option value="' . $i . '">' . $names[$i] . '</option>';
                }
            ?>
            <input type="submit" id="submit" name="submit" value="Submit">
        </select>
        <?php if(isset($_SESSION['name'])){ ?>

        <?php } ?>
    </form>
<?php } if(isset($_SESSION['name'])){ ?>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h1>Welcome to our website, dear <span><?php echo $_SESSION['name']; ?></span>!!! To return to the dropdown, click to the return button below.</h1>
        <input type="submit" id="reset" name="reset" value="Return">
    </form>
<?php } ?>
</body>
</html>

