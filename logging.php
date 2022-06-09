<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grndresturant";

session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT * FROM users";
$result = mysqli_query($conn,$query);


$con = mysqli_connect("localhost","root","","grndresturant");
  
    $sql = "SELECT * FROM `users` ";
    $result = mysqli_query($con,$sql);


    
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {     
foreach($result as $data)
{
  if (!empty($data)){
  
  $ID = $data["ID"];
  $fullname = $data["Fullname"];
  $email = $data["email"];
  $username = $data["username"];
 

            //echo $order_id ."<br>";
            $query = "SELECT * FROM `users` ";
            $result2 = mysqli_query($con, $query);
            $order = mysqli_fetch_all($result2,MYSQLI_ASSOC);
            $arrlength = count($order);
			
					
  }
}
for($x = 0; $x < $arrlength; $x++) {
			print_r($order[$x]["username"]);
echo "<br>";			
			}
		}
	}
			
	


			  
?>