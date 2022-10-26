<?php include 'header_with_links.php'?>


<body>

    <a href="show_data.php">show data</a>

    <?php

include 'connection.php';

$ids = $_GET['id'];

$select = " select * from table_one where id=$ids ";
$selected = mysqli_query($connect, $select);
$datas = mysqli_fetch_array($selected);

?>


    <div class="card bg-light">
        <article class="card-body mx-auto" style="width: 500px;">

            <form method="post"  >
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="fname" class="form-control" placeholder="Full name" type="text" value="<?php echo $datas['name'] ?>">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>
                    <input name="phone" class="form-control" placeholder="Phone number" type="text" value="<?php echo $datas['phone'] ?>">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                    </div>
                    <select name="job" class="form-control">
                        <option selected="" ><?php echo $datas['job'] ?> </option>
                        <option value="designer">Designer</option>
                        <option value="manager">Manager</option>
                        <option value="accauntiong">Accaunting</option>
                    </select>
                </div> <!-- form-group end.// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="oldPass" class="form-control"  type="text" value="" placeholder="old pass">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="newPass" class="form-control"  type="text" value="" placeholder="new pass">
                </div> <!-- form-group// -->

                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-block"> Update </button>
                </div> <!-- form-group// -->
            </form>
        </article>
    </div> <!-- card.// -->

    <!--container end.//-->
    <br><br>



<?php
include 'footer.php';

if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $phone = $_POST['phone'];
    $job = $_POST['job'];
    $oldPass = $_POST['oldPass'];
    $newPass = $_POST['newPass'];

    $checkPass = password_verify($oldPass, $datas['pass']);
    $newPassIncript = password_hash($newPass, PASSWORD_BCRYPT);

    if ($checkPass) {

        $update = " update table_one set id=$ids, name='$fname', phone='$phone', job='$job', pass='$newPassIncript' where id=$ids  ";

        $updated = mysqli_query($connect, $update);
        if ($updated) {
            header("location:show_data.php?val=suc");
        } else {
            ?>
                    <script>
                        alert("somthing went wrong");
                    </script>
                <?php
        }
    }
    else{
        ?>
            <script>
                alert('pass is not match');
            </script>
        <?php
    }
} //isset if end

?>