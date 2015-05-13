<?php

error_reporting(0);
ini_set("display_errors", 0);
$error = 0;
$errormessage = "";

include('includes/mysqliConn.php');
$conn = mysqliConnect();


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



$conn->query($sql);



if(error==1) {
  print JSON_encode($error);
}
else{
  print 1;

}
