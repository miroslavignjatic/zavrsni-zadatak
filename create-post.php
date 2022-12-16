<?php

include ('database.php');

$title = $_POST['title'];
$body = $_POST['body'];
$author = $_POST['author'];


$sql = "INSERT INTO `posts` (`title`, `body`, `author`) VALUES ('$title', '$body', '$author')";

$result = fetchData($connection, $sql);

if($result);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-patible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Napravi post</title>
</head>
<body>
    <h1>Napravi Post</h1>

    <form action = "create-post.php" method = "post">
  <label for="title">Title:</label><br>
  <input type="text" id="title" name="title"><br>
  <label for="body">Body:</label><br>
  <textarea id="body" name="body"></textarea><br>
  <label for="author">Author:</label><br>
  <input type="text" id="author" name="author"><br><br>
  <input type="submit" value="Submit">
</form>


</body>
</html>

