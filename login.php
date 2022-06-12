<html>
<?php
session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = "localhost"; 
$user = "root"; 
$password = ""; 
$dbname = "grndresturant"; 

$con = mysqli_connect($host, $user, $password,$dbname);
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}


    $Username = mysqli_real_escape_string($con,$_POST['Username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

        $sql_query = "select count(*) as cntUser from users where username='".$Username."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['Username'] = $Username;
            header('Location: hpu.php');
        }else{
            echo "Invalid username and password";
        }


   }
   else{
  die ('Error 404 Redirect');
   }
   ?>
   </html>
