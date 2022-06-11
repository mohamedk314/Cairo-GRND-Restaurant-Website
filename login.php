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
$username=$_POST["Username"];

$password=$_POST["password"];

$check_admin=mysqli_query($con,"SELECT * FROM admin WHERE username='$username' AND password='$password' ");

$check_user=mysqli_query($con,"SELECT * FROM user WHERE username='$username' AND password='$password' ");

$check_control=mysqli_query($con,"SELECT * FROM control WHERE username='$username' AND password='$password' ");

$answer=$_POST['type'];

if(mysqli_num_rows($check_admin) > 0 && $answer=="cashier")
{
    
   header('location: home.html');

}
else if(mysqli_num_rows($check_user) > 0 && $answer=="user"){
   
    header('location:hpu.php');

}
else if(mysqli_num_rows($check_control) > 0 && $answer=="control")
{
   

header('location:RegisterForm.php');

}
else{

 
     $message = "Username and/or Password incorrect.\\nTry again.";
   
     echo "<script type='text/javascript'>alert('$message');location='LoginForm.php'</script>";

}

  /*  $Username = mysqli_real_escape_string($con,$_POST['Username']);
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
        }*/


 //  }
 //  else{
      
 // die ('Error 404 Redirect');
      
 //  }
   ?>
   </html>
