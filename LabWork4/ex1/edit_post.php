<?php
$link = mysqli_connect('localhost', 'runrey', '1234', 'lab4_1') OR DIE('ERROR: Could not connect.');
$id = 0;
session_start();

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $result = mysqli_query($link, "DELETE FROM posts WHERE post_id=" .$id);
    header('location: index.php');
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result = mysqli_query($link, "SELECT * FROM posts WHERE post_id = ". $id);
    $row = mysqli_fetch_array($result);
}

if(isset($_POST['submit'])){
    $iid = $_GET['id'];
    $heading = $_POST['heading'];
    $content = $_POST['content'];
    $date = $_POST['date'];

    $sql = "UPDATE posts SET p_heading = ?, p_content = ?, p_date = ? WHERE post_id = ?";

    $stmt = $link->prepare($sql);
    $stmt->bind_param("sssi", $heading, $content, $date, $iid);
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
        #id{
            font-size: 1em;
            margin-bottom: 1em;
            padding: 5px;
            overflow: auto;
        }
        #heading{
            font-size: 1em;
            margin-bottom: 1em;
            padding: 5px;
            overflow: auto;
        }
        #content{
            font-size: 1em;
            margin-bottom: 1em;
            padding: 5px;
            height: 200px;
            overflow: auto;
        }
        #date{
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
        <h1>Post editing</h1>
        <form method="POST" action="edit_post.php?id=<?php echo $id; ?>">
            <label for="heading">Heading of post:</label>
            <input type="text" name="heading" id="heading" value="<?php echo $row['p_heading'] ?>" required>

            <label for="content">Content of post:</label>
            <textarea type="text" name="content" id="content" rows="10" cols="20" required><?php echo $row['p_content'] ?></textarea>

            <label for="date">Date of post:</label>
            <input type="date" name="date" id="date" value="<?php echo $row['p_date'] ?>" required>

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>
