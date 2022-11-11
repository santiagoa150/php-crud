<?php
include("pool.php");
$response = "";
$id = $_POST['id'];
$conn = createConnection();
$query = "DELETE FROM productos WHERE id={$id}";
$result = mysqli_query($conn, $query);
echo $result;

mysqli_close($conn);
echo $response;
?>