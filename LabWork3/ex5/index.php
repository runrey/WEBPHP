<?php
session_start();

if (isset($_POST)) {
    if(isset($_POST['submit'])){
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['surname'] = $_POST['surname'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['phone'] = $_POST['phone'];
    }

    if(isset($_POST['reset'])){
        session_destroy();
        unset($_SESSION['name']);
        unset($_SESSION['surname']);
        unset($_SESSION['email']);
        unset($_SESSION['phone']);
    }

    if(isset($_POST['reset'])){
        session_destroy();
        unset($_SESSION['name']);
        unset($_SESSION['surname']);
        unset($_SESSION['email']);
        unset($_SESSION['phone']);
    }
    if(isset($_POST['reset'])){
        session_destroy();
        unset($_SESSION['name']);
        unset($_SESSION['surname']);
        unset($_SESSION['email']);
        unset($_SESSION['phone']);
    }
    if(isset($_POST['reset'])){
        session_destroy();
        unset($_SESSION['name']);
        unset($_SESSION['surname']);
        unset($_SESSION['email']);
        unset($_SESSION['phone']);
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Lab3 ex5</title>
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
            flex-direction: column;
            align-items: center;
        }
        h1{
            color: white;
        }
        p{
            color: black;
        }
        .main{
            margin-top: 2em;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-gap: 2em;
            max-width: 840px;
        }
        .type{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: cadetblue;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.2);
            min-height: 400px;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <pre>*Click to the picture*</pre>
    <div class="main">
        <div class="type">
            <a href="choose.php"><img src="net.png"  title="30" alt="inet 30"></a>
            <div align="center">
                <h1>Lite 30</h1>
                <p>
                    <b>Privileges:</b> access to the Internet with maximum speed 30 Mb/s
                </p>
            </div>
        </div>
        <div class="type">
            <a href="choose.php"><img src="nettv.png"  title="60" alt="inet 60 tv"></a>
            <div align="center">
                <h1>Optimal 60</h1>
                <p>
                    <b>Privileges:</b> access to the Internet with maximum speed 60 Mb/s and TV
                </p>
                </div>
            </div>
        <div class="type">
            <a href="choose.php"><img src="nettvsmart.png"  title="100" alt="inet 100 tv smartbox"></a>
            <div align="center">
                <h1>Ultra 100</h1>
                <p>
                    <b>Privileges:</b> access to the Internet with maximum speed 100 Mb/s, TV and smartbox
                </p>
            </div>
        </div>
    </div>
</body>
</html>

