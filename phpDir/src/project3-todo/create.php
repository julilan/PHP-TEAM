<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD']=='POST'){

  
  if(isset($_POST['submit'])) {
    $title=$_POST['title'];
    $description=$_POST['description'];

    $title = htmlspecialchars($title);
    $description = htmlspecialchars($description);
    
    $stmt=$conn->prepare("insert into todos(todoTitle, todoDescription) values(?,?)");
    $stmt->bind_param("ss", $title, $description);
   
    $stmt->execute();

    //echo "New Todo created successfully";

    $stmt->close();
    $conn->close();

    header("Location: home.php");
    exit();
  
   
  }
}
?>


<?php include '../header.php' ?>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="mb-3">
    <label>ToDo title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter toDo title">
  </div>

  <div class="mb-3">
    <label>ToDo Description</label>
    <input type="text" class="form-control" name="description" placeholder="Enter toDo description">
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Add</button>
</form>
    </div>

  </body>
</html>
