<?php

include('includes/mysqliConn.php');
$conn = mysqliConnect();

$sql = "DELETE FROM items WHERE id=".$_GET['id'].";";

print $sql;

$conn->query($sql) or die(mysqli_error());

header("Location: index.php?message=delete_success&id=".$_GET['id']);
