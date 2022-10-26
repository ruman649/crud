<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/89726b4d6a.js" crossorigin="anonymous"></script>


    <style>
        table.table tbody tr td,
        table.table thead tr th,
        table.table thead {
            border-left: 1px solid gray;
            border-right: 1px solid gray;
        }
    </style>
</head>

<body>

<?php


include 'connection.php';
// $select = " select * from table_one ";
// $selected = mysqli_query($connect, $select);

// $rows = mysqli_num_rows($selected);
// // echo $rows;

$select = " select * from table_one ";
$selected = mysqli_query($connect, $select);
//  $row = mysqli_num_rows($selected);
?>
    <table class="table table-primary table-hover ">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Job</th>
                <th scope="col">Password</th>
                <th colspan='2'>Operation</th>
            </tr>
        </thead>

        <?php
// $res = mysqli_fetch_array($selected);
while ($res = mysqli_fetch_array($selected)) {
    ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $res['name'] ?></th>
                    <td><?php echo $res['phone'] ?> </td>
                    <td><?php echo $res['job'] ?></td>
                    <td><?php echo $res['pass'] ?></td>

                    <th><a href="update.php?id=<?php echo $res['id']; ?>"> <i style="cursor: pointer;" class="fa-solid fa-pen-to-square " data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a> </th>

                    <th> <a href="delete.php?id=<?php echo $res['id']; ?>"><i style="cursor: pointer;" class="fa-solid fa-trash " data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" style="margin-left:16px;"></i></a>  </th>
                </tr>
            </tbody>
        <?php
}
?>
    </table>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>