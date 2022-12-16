<?php
 
 include ('database.php');



 $statement = $connection->prepare("SELECT * FROM posts WHERE id=:id");

 $id = 155; 
 $statement->execute(['id' => $id]); 

 $posts = $statement->fetch();
//  $statement->execute();
   var_dump($posts);
 





//  $statement->bindValue(':id', $id);
//  $statement->execute();
//  $row = $statement->fetch();
//  var_dump($row)
//  echo "Title: " . $row['title'] . "<br>";
//  echo "Body: " . $row['body'] . "<br>";
//  echo "Author: " . $row['author'] . "<br>";

?>
 

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single post stranica</title>
</head>
<body>
<h2 class="blog-post-title"><a href = "posts.php">Post Page</a></h2>

</body>
</html>