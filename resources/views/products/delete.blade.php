<?php

include('db_connection.php');

$id = $_GET['id'];
$query = "DELETE FROM products WHERE id =" . $id;
$delete = mysqli_query($connection, $query);

if ($delete) {
    echo "<script>alert('Se ha eliminado el producto con éxito');
    window.location = '/'</script>";
} else {
    echo "<script>alert('No se pudo eliminar el producto');
    window.history.go(-1);</script>";
}
