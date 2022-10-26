<?php

include 'connection.php';

if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $phone = $_POST['phone'];
    $job = $_POST['job'];
    $pass = $_POST['pass'];
    $rpass = $_POST['rpass'];

    // this is for especial character insert into database
    // $name = mysqli_real_escape_string($connect, $_POST['fname']);

    if (!empty($fname) && !empty($phone) && !empty($job) && !empty($pass) && !empty($rpass)) {

        if ($pass != $rpass) {
            echo "pass is not matched";
        } else {

            // ******=======password incription++++++++==========*****
            $pass_incripted = password_hash($pass, PASSWORD_BCRYPT);

            $insert = " insert into table_one (name, phone, job, pass) values ('$fname', '$phone', '$job', '$pass_incripted')";

            $con_in_table = mysqli_query($connect, $insert);

            // if ($con_in_table) {
            //     echo "data insert successfully";
            // } else {
            //     echo "some problems occurse";
            // }
            header('location:show_data.php');
        }
    } else {
        ?>
        <script>
            alert('empty');
        </script>
<?php
// header("location: index.php");
    }
} else {
    echo "no";
}

?>