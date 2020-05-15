<?php
$link = mysqli_connect('localhost', 'runrey', '1234', 'lab4_2') OR DIE('ERROR: Could not connect.');
$id = 0;
session_start();

if(empty($_SESSION['login'])){
    header('location: index.php?login');
}

if(isset($_GET['add'])){
    $id = $_GET['delete'];
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result = mysqli_query($link, "SELECT * FROM items WHERE item_id = ". $id);
    $row = mysqli_fetch_array($result);
}

if(isset($_POST['esubmit'])){
    $iid = $_GET['editid'];
    $name = $_POST['name'];
    $cost = $_POST['cost'];

    $sql = "UPDATE items SET i_name = ?, i_cost = ? WHERE item_id = ?";

    $stmt = $link->prepare($sql);
    $stmt->bind_param("ssi", $name, $cost, $iid);
    $results = $stmt->execute();

    $stmt->close();

    header('location: index.php');
}

if(isset($_POST['asubmit'])){
    $name = $_POST['name'];
    $cost = $_POST['cost'];

    $sql = "INSERT INTO items (i_name, i_cost) VALUES (?, ?);";

    $stmt = $link->prepare($sql);
    $stmt->bind_param("si", $name, $cost);
    $results = $stmt->execute();

    $stmt->close();

    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Editing</title>
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
            padding: 2em 2em 10px;
            background-color: cadetblue;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            min-height: 400px;
            height: auto;
            display: flex;
            flex-direction: column;
        }
        h1{
            text-align: center;
            font-size: 2.5em;
            color: #fff;
        }
        form{
            width: 100%;
            height: auto;
            display: flex;
            flex-direction: column;
        }
        [type="text"], [type="number"]{
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
            color: white;
        }
    </style>
</head>
<body>
<div class="main">
    <?php if(isset($_GET['edit'])){ ?>
    <h1>Item editing</h1>
    <form method="POST" action="changes.php?editid=<?php echo $id; ?>">
        <label for="name">Name of item:</label>
        <input type="text" name="name" id="name" value="<?php echo $row['i_name'] ?>" required>

        <label for="date">Date of post:</label>
        <input type="number" name="cost" id="cost" value="<?php echo $row['i_cost'] ?>" required>

        <input type="submit" name="esubmit" value="Submit">
    </form>
    <?php } if(isset($_GET['add'])){ ?>
    <h1>Add new item</h1>
    <form method="POST" action="changes.php">
        <label for="name">Name of item:</label>
        <input type="text" name="name" id="name" required>

        <label for="date">Date of post:</label>
        <input type="number" name="cost" id="cost" value="<?php echo $row['i_cost'] ?>" required>

        <input type="submit" name="asubmit" value="Submit">
    </form>
    <?php } ?>
</div>
</body>
</html>
