<?php
    function getAllProducts(){
        include("pool.php");
        $response = "";
        $conn = createConnection();
        $query = "SELECT * FROM productos";
        $result = mysqli_query($conn, $query);
        $row_cnt = mysqli_num_rows($result);
        if ($row_cnt > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $response = $response . "
                <div class='inventory-row'>
                    <p class='inventory-column'>{$row['nombre']}</p>
                    <p class='inventory-column'>{$row['precio']}</p>
                    <p class='inventory-column'>{$row['referencia']}</p>
                    <form class='inventory-form'>
                        <input type='submit' class='inventory-button' name='detail-{$row['id']}' value='Detalle' />
                        <input type='submit' class='inventory-button' name='delete-{$row['id']}' value='Borrar' />
                        <input type='submit' class='inventory-button' name='update-{$row['id']}' value='Actualizar' />
                    </form>
                </div>";
            }
        }
        mysqli_close($conn);
        return $response;
    }
?>