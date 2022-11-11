<?php
include("pool.php");
$response = "";
$id = $_POST['id'];
$conn = createConnection();
$query = "DELETE FROM productos WHERE id={$id}";
$result = mysqli_query($conn, $query);
if ($result > 0) {
    $response = $response . "
        <h1>Se ha borrado correctamente el producto.</h1>
    ";
}
mysqli_close($conn);
echo $response;
?>