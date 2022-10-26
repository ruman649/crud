<?php

$host = "localhost";
$userName = "root";
$passWord = "";
$dataBase = "mydatabaseone";

$connect = mysqli_connect($host, $userName, $passWord, $dataBase);

if ($connect) {
    // echo "YEs";
?>
    <script>
        // alert('connect')
    </script>
<?php

} else {
    // echo "no";
    die(mysqli_connect_error());
}
?>