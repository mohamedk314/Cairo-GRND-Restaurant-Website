<?php

$con = mysqli_connect("localhost","root","","grndresturant");

$order_id = $_GET['order_id'];

$query="UPDATE orded_status set status='1' WHERE order_id='".$order_id."'";

if ($con ->query($query) === TRUE) {
   // echo "New record created succsesfullly";
}

else{
    //echo "Error" . $query . "<br>" . $conn->error;
}
$query = NULL ;
header('Location: cashier.php');