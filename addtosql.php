<html>

<script>
function showAlertEmail() {
  alert ("Invalid Email");
}
</script>


<?php
$Cnt = 0 ;

$servername = "localhost";
$username = "root";
$password = "";
$DB = "grndresturant";
$conn = mysqli_connect($servername, $username, $password , $DB);

$Fullname = $_POST['Fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordConfirm = $_POST['password_confirm'];
$Image = $_POST['Image'];
$ID = $_POST['ID'];

$data = $_POST;

if (empty($data['username']) ||
    empty($data['password']) ||
    empty($data['Fullname']) ||
    empty($data['email']) ||
    empty($data['password_confirm'])) {
    
      die('Please fill all required fields!');
}


if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo "invalid Email". "<br>";
  $Cnt++ ;
}

if ($data['password'] !== $data['password_confirm']) {
  echo "Password and Confirm password should match!" . "<br>";  
  $Cnt++ ; 
}

 $select = mysqli_query($conn, "SELECT * FROM users WHERE username = '".$_POST['username']."'");
if(mysqli_num_rows($select)) {
    echo "This username already exists" . "<br>";
    $Cnt++ ;
}

$selectz = mysqli_query($conn, "SELECT * FROM users WHERE email = '".$_POST['email']."'");
if(mysqli_num_rows($selectz)) {
    echo "This email already exists" . "<br>";
    $Cnt++ ;
}
/*$filename = $_FILES['image']['ID'];

	$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));

	$extensions_arr = array("jpg","jpeg","png","gif");

	if( !in_array($imageFileType,$extensions_arr) ){

    echo "the picture should be jpg jpeg png gif" . "<br>";



SELECT SYSDATE();



$Cnt++;
  }*/

if($Cnt ==0){
  $sql = "INSERT INTO users(Fullname, username, email, password, Image, ID) 
  VALUES ('$Fullname','$username','$email', '$password', '$Image', '$ID')";

if ($conn ->query($sql) === TRUE) {
echo "New record created succsesfullly";
header('Location: Loginform.php');
}

else{
echo "Error" . $sql . "<br>" . $conn->error;
}



}

?>

</html>

