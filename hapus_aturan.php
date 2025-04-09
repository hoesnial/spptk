<?php

$idaturan=$_GET['id'];

$sql = "DELETE FROM basis_aturan WHERE idaturan='$idaturan'";
$conn->query($sql);

$conn->close();

header("Location:?page=aturan");
?>