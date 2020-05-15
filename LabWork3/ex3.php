<?php
session_start();

if (isset($_POST)) {
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $username = $_POST['username'];
        $email = $_POST['email'];

        if(date("Y") - $age >= 1920){
            echo "<script>alert('All values are correct!');</script>";
        }
        else{
            echo "<script>alert('Invalid age! Try again!');</script>";
        }
    }

    if(isset($_POST['reset'])){
        session_destroy();
        unset($_SESSION['username']);
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Lab3 ex3</title>
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
        form>div{
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }
        label{
            color: #fff;
            font-weight: 700;
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
        input[type="submit"]:hover{
            background-color: grey;
            color: white;
            transition: all 0.3s ease;
        }
        input[type="text"], input[type="password"]{
            width: auto;
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
<?php if(empty($_SESSION['username'])){ ?>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Example, Ivan" required>
        </div>

        <div>
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" placeholder="Example, 18" required>
        </div>

        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" placeholder="" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>

        <input type="submit" id="submit" name="submit" value="Submit">
    </form>
<?php } if(isset($_SESSION['username'])){ ?>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h1>Welcome to our website, dear <span><?php echo $_SESSION['username']; ?></span>!!! To logout click to the reset button below.</h1>
        <input type="submit" id="reset" name="reset" value="Reset">
    </form>
<?php } ?>
</body>
</html>

