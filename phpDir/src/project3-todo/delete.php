<?php
include 'db.php';
if(isset($_GET['deleteid'])) {
    $id=$_GET['deleteid'];

    $sql="delete from todos where id=$id";
    $result=mysqli_query($conn, $sql);
    if($result) {
       // echo "deleted successfully";
       header('location:home.php');
    }
    else {
        die(mysqli_error($conn));
    }
}

?>