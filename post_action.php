<?php
$connect = mysqli_connect("localhost", "root", "", "grndresturant");

if($_POST['action'] == "Remove Blog"){

$sql = "DELETE FROM order_details WHERE order_id=={$_POST['order_id']}";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
 // echo "Error deleting record: " . $conn->error;
}

$query = "DELETE FROM orded_status WHERE order_id=={$_POST['order_id']}";
if ($conn->query($query) === TRUE) {
    echo "Record deleted successfully";
   } else {
    // echo "Error deleting record: " . $conn->error;
   }

header ("Location: cashier.php");
} 
?>