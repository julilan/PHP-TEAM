<?php include 'db.php'; ?>
<?php
$id=$_GET['updateid'];
$sql="select * from todos where id=$id";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
$title=$row['todoTitle'];
$description=$row['todoDescription'];


if($_SERVER['REQUEST_METHOD']=='POST'){
 
  if(isset($_POST['submit'])) {

  $title=$_POST['title'];
  $description=$_POST['description'];
  
  $title = htmlspecialchars($title);
  $description = htmlspecialchars($description);
  
  $stmt=$conn->prepare("update todos set id=?, todoTitle=?, todoDescription=? where id=?");
  $stmt->bind_param('issi', $id, $title, $description, $id);
  $stmt->execute();
  
  //echo "Todo updated successfully";
  
  $stmt->close();
  $conn->close();
  header("Location:home.php"); exit;
  
    }
  }
    ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ToDo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container my-5">
      <form method="post">
        <div class="mb-3">
    <label>ToDo title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter toDo title"
    value="<?php echo $title;?>" maxlength='50'>
  </div>
  
  <div class="mb-3">
    <label>ToDo Description</label>
    <input type="text" class="form-control" name="description" placeholder="Enter toDo description"
    value="<?php echo $description;?>" maxlength='250'>
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
</div>

</body>
</html>
<?php include '../header.php' ?>
