<?php
include("pool.php");
$response = "";
$id = $_POST['id'];
$conn = createConnection();
$query = "DELETE FROM productos WHERE id={$id}";
$result = mysqli_query($conn, $query);
$row_cnt = mysqli_num_rows($result);
echo $row_cnt;

if ($row_cnt > 0) {
    while ($row = mysqli_fetch_assoc($result)) {;
    }
}
mysqli_close($conn);
echo $response;
?>