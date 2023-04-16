<?php
include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="create.php" class="text-light">Add task</a></button>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
    $sql="select * from todos";
    $result=mysqli_query($conn, $sql);
    if($result) {
        while($row=mysqli_fetch_assoc($result)) {
            $id=$row['id'];
            $title=$row['todoTitle'];
            $description=$row['todoDescription'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$title.'</td>
            <td>'.$description.'</td>
            <td>
            <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
           </td>
          </tr>';
        }
    }
  ?>
  
  </tbody>
</table>

    </div>
    
</body>
</html>