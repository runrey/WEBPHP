<?php
session_start();
include "Users.php";
$user = "0";
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
        unset($_SESSION['checked']);
    }

    if(isset($_POST['sub1'])){
        $_SESSION['checked'] = 0;
        $user = new Lite($_SESSION['name'], $_SESSION['surname'], $_SESSION['email'], $_SESSION['phone']);
    }
    if(isset($_POST['sub2'])){
        $_SESSION['checked'] = 0;
        $user = new Optimal($_SESSION['name'], $_SESSION['surname'], $_SESSION['email'], $_SESSION['phone']);
    }
    if(isset($_POST['sub3'])){
        $_SESSION['checked'] = 0;
        $user = new Ultra($_SESSION['name'], $_SESSION['surname'], $_SESSION['email'], $_SESSION['phone']);
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
            form {
                margin-top: 20px;
                min-width: 300px;
                max-width: 840px;
                width: auto;
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
            }
            .sign{
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
            input[type="text"], input[type="password"], input[type="tel"], input[type="email"]{
                width: auto;
            }
            h1{
                color: white;
            }
            span{
                color: red;
            }
            .hi{
                width: 800px;
                display: flex;
                flex-direction: row;
                justify-content: space-between;
            }
            p{
                color: black;
            }
            .main{
                margin-top: 2em;
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
                grid-gap: 2em;
            }
            .user{
                margin-top: 20px;
                min-width: 300px;
                max-width: 840px;
                width: auto;
                padding: 20px;
                background-color: cadetblue;
                box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.2);
                border-radius: 5px;
                height: auto;
                display: flex;
                flex-direction: column;
                justify-content: space-around;
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
            table {
                border-collapse: collapse;
                width: 100%;
                color: black;
                font-size: 1.4em;
            }

            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
        </style>
    </head>
    <body>
    <?php if(empty($_SESSION['name'])){ ?>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="sign">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" placeholder="Example, Ivan" required>
            </div>

            <div class="sign">
                <label for="surname">Surname:</label>
                <input type="text" name="surname" id="surname" placeholder="Example, Volkov" required>
            </div>

            <div class="sign">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="example@mail.ru" required>
            </div>

            <div class="sign">
                <label for="phone">Phone number:</label>
                <input type="tel" name="phone" id="phone" placeholder="8-777-123-1212" pattern="[8][0-9]{10}" required>
            </div>

            <input type="submit" id="submit" name="submit" value="Submit">
        </form>
    <?php } if(isset($_SESSION['name']) && !isset($_SESSION['checked'])){ ?>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="hi">
                <h1>Welcome to our website, dear <span><?php echo $_SESSION['name']; ?></span>!!!</h1>
                <input type="submit" id="reset" name="reset" value="Logout">
            </div>
        </form>

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="hi">
                <h1>Please choose the type:</h1>
            </div>
            <div class="main">
                <div class="type">
                    <img src="net.png"  title="30" alt="inet 30">
                    <div align="center">
                        <h1>Lite 30</h1>
                        <p>
                            <b>Privileges:</b> access to the Internet with maximum speed 30 Mb/s
                        </p>
                    </div>
                    <input type="submit" id="submit" name="sub1" value="Submit">
                </div>
                <div class="type">
                    <img src="nettv.png"  title="60" alt="inet 60 tv">
                    <div align="center">
                        <h1>Optimal 60</h1>
                        <p>
                            <b>Privileges:</b> access to the Internet with maximum speed 60 Mb/s and TV
                        </p>
                    </div>
                    <input type="submit" id="submit" name="sub2" value="Submit">
                </div>
                <div class="type">
                    <img src="nettvsmart.png"  title="100" alt="inet 100 tv smartbox">
                    <div align="center">
                        <h1>Ultra 100</h1>
                        <p>
                            <b>Privileges:</b> access to the Internet with maximum speed 100 Mb/s, TV and smartbox
                        </p>
                    </div>
                    <input type="submit" id="submit" name="sub3" value="Submit">
                </div>
            </div>
        </form>
    <?php } if(isset($_SESSION['name']) && isset($_SESSION['checked'])){?>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="hi">
                <h1>Welcome to our website, dear <span><?php echo $_SESSION['name']; ?></span>!!!</h1>
                <input type="submit" id="reset" name="reset" value="Logout">
            </div>
        </form>
        <div class="user">
            <table>
                <tr>
                    <th>Name:</th>
                    <td><?php echo $user->getName(); ?></td>
                </tr>
                <tr>
                    <th>Surname:</th>
                    <td><?php echo $user->getSurname(); ?></td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><?php echo $user->getEmail(); ?></td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td><?php echo $user->getPhone(); ?></td>
                </tr>
                <tr>
                    <th>Type:</th>
                    <td><?php echo $user->getType(); ?></td>
                </tr>
                <tr>
                    <th>Privileges:</th>
                    <td><?php echo $user->getProps(); ?></td>
                </tr>
            </table>
            <h1><?php echo $user->desc(); ?></h1>
        </div>
    <?php } ?>
    </body>
    </html>

<?php
