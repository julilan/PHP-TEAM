<?php
include 'db.php';

if(isset($_POST['submit'])) {
  $title=$_POST['title'];
  $description=$_POST['description'];

  $sql="insert into todos(todoTitle, todoDescription) values('$title','$description')";
  $result=mysqli_query($conn, $sql);
  if($result) {
    // echo "Data inserted successfully";
    header('location:home.php');
  }
  else {
    die(mysqli_error($conn));
  }
}
?>


<?php include '../header.php' ?>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="mb-3">
    <label>ToDo Title</label>
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
