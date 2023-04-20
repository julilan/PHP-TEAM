<?php
include 'db.php'; ?>

<?php include '../header.php' ?>
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