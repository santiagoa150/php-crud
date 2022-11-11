<?php
include("pool.php");
$response = "";
$id = $_POST['id'];
$conn = createConnection();
$query = "DELETE FROM productos WHERE id={$id}";
$result = mysqli_query($conn, $query);
if ($result > 0) {
    $response = $response . "
        <div id='product-delete-modal'>
            <h1>Se ha borrado correctamente el producto.</h1>
            <div id='close-delete-modal-container'>
                <input id='close-delete-modal' type='button' value='cerrar'>
            </div>
        </div>
    ";
}
mysqli_close($conn);
echo $response;
?>