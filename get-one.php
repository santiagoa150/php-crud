<?php
    include("pool.php");
    $response = "";
    $id = $_POST['id'];
    $conn = createConnection();
    $query = "SELECT * FROM productos WHERE id={$id}";
    $result = mysqli_query($conn, $query);
    $row_cnt = mysqli_num_rows($result);
    if ($row_cnt > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $response = $response . "
                <h1 id='product-title'>Producto: {$row['nombre']}</h1>
                <div id='product-columns'>
                    <p class='product-column'>Id: {$row['id']}</p>
                    <p class='product-column'>Nombre: {$row['nombre']}</p>
                    <p class='product-column'>Referencia: {$row['referencia']}</p>
                    <p class='product-column'>Precio: {$row['precio']}</p>
                    <p class='product-column'>Peso: {$row['peso']}</p>
                    <p class='product-column'>Categoria: {$row['categoria']}</p>
                    <p class='product-column'>Stock: {$row['stock']}</p>
                </div>";
        }
    }
    mysqli_close($conn);
    echo $response;
?>