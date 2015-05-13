<?php


include('includes/mysqliConn.php');
$conn = mysqliConnect();

print_r($_POST);

$phone = $_POST['phone'];


if (isset($_POST['id'])){

  // editing

  //UPDATE table_name SET field1=new-value1, field2=new-value2 [WHERE Clause]
  $sql = "UPDATE items
  SET name = '".$_POST['name']."', address = '".$_POST['address']."', phone = '$phone'
  WHERE id=".$_POST['id'].";";


}
else {

  $sql = "INSERT INTO items (name, address, phone)
  VALUES ('".$_POST['name']."', '".$_POST['address']."', '$phone')";

  // adding

}


print $sql . "<br/>";

$conn->query($sql) or die(mysqli_error());


header("Location: index.php?message=add_success");
