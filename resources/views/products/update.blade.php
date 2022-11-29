<?php

include('../db_connection.php');

$id = $_POST["id"];
$name = $_POST["name"];
$reference = $_POST["reference"];
$price = $_POST["price"];
$weight = $_POST["weight"];
$category = $_POST["category"];
$stock = $_POST["stock"];

$query = $connection->prepare("UPDATE products SET name = ?, reference = ?, price = ?, weight = ?, category = ?, stock = ? WHERE id = ?;");
$update = $query->execute([$name, $reference, $price, $weight, $category, $stock, $id]);

if ($update) {
    echo "<script>alert('Se ha actualizado el producto con éxito');
    window.location = '/'</script>";
} else {
    echo "<script>alert('No se pudo actualizar el producto');
    window.history.go(-1);</script>";
}
