<?php
    function getAllProducts(){
        include("../pool.php");
        $response = "";
        $conn = createConnection();
        $query = "SELECT * FROM productos";
        $result = mysqli_query($conn, $query);
        $row_cnt = mysqli_num_rows($result);
        if ($row_cnt > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $response = $response . "
                <div>
                    <p>{$row['nombre']}</p>
                    <p>{$row['precio']}</p>
                    <p>{$row['referencia']}</p>
                    <form>
                        <input type='submit' class='inventory-button' name='{$row['id']}' value='Detalle' />
                        <input type='submit' class='inventory-button' name='{$row['id']}' value='Borrar' />
                        <input type='submit' class='inventory-button' name='{$row['id']}' value='Actualizar' />
                    </form>
                </div>";
            }
        }
        mysqli_close($conn);
        return $response;
    }
?>