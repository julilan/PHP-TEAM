<?php include 'db.php';?>

<?php

  if (isset($_POST['addtodo'])) {
    $todo = $_POST['todo'];
    echo $todo;
    // $created_at = date("Y/m/d");

    $query = "INSERT INTO todos(todo_action) VALUES ('$todo')";

    $result = mysqli_query($conn, $query);

    if (!$result) {
      die('Query insertion failed');
    }

    
  }elseif (isset($_POST['mytodo'])){
    
  

    $query = "SELECT * FROM todos";
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_row($result)) {
      print_r($row);
    }

    if (!$result) {
      die('Query insertion failed');
    }
  }




?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo App</title>
</head>
<body>
  <form action="create.php" method="post">
    <label for="todo">Todo</label>
    <input type="text" id="todo" name="todo">
    <input type="submit" name="addtodo" value="Add todo">
    <input type="submit" name="mytodo" value="My Todos">
  </form>
</body>
</html>