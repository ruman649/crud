<?php
    include 'connection.php';
    $id = $_GET['id'];
    // echo $id;
    $delete = " delete from table_one where id=$id ";
    $deleted = mysqli_query($connect, $delete);
    if ($deleted) {
        header("location:show_data.php");
    }
    else{
        header("location:show_data.php");
    }
    
?>