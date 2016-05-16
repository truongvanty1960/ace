<html>
<body>
<?php
include('connection.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query1 = mysqli_query($conn ,"delete from user where id='$id'");
    if ($query1) {
        header('location:tables.php');
    }
}
?>
</body>
</html>