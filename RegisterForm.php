<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<html>
  <script>
  function onChange() {
  const password = document.querySelector('input[name=password]');
  const password_confirm = document.querySelector('input[name=password_confirm]');
  if (password_confirm.value === password.value) {
    password_confirm.setCustomValidity('');
  } else {
    password_confirm.setCustomValidity('Passwords do not match');
  }
}
function fun() {}
  </script>
<head>  
<style>
body{
 margin: 0;
 padding: 0;
 background: linear-gradient(to bottom right, #E3F0FF, #FAFCFF);
 height: 100vh;
 display: flex;
 justify-content: center;
 align-items: center;
}
.Container{
 padding: 10;
 width: 30%;
 height: 80%;
 background-color: white;
 border-radius: 20px;
 box-shadow: 0px 25px 40px #1687d933;
}
.Header{
 margin: auto;
 width: 90%;
 height: 15%;
 display: flex;
 justify-content: space-between;
 align-items: center;
}
.Heading{
 font-size: 20px;
 font-family: ‘Open Sans’;
 font-weight: 700;
 color: #2F3841;
}
input[type=text], [type=password] {
  
  width: 80%;
  padding: 12px 20px;
  border-radius: 20px;
  margin: 8px 10;
  box-sizing: border-box;
}
button[type=button], button[type=submit]
{
  background-color: rgba(0,0,0,0.7);
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
 border-radius: 20px;
 cursor: pointer;
 font-size: 16px;
 font-weight: 400;
}
.button:hover {
  color: skyblue;
}
 /*
 .submit:hover {
  background-color: #4CAF50;
  color: white;
}
h1 {
 text-align: center ;
 font-family: Arial, Helvetica, sans-serif;
 background-color: RosyBrown;
  border: none;
  color: white;
  padding: 16px 16px;
  text-decoration: none;
  margin: 4px 2px;
}
input[type=text] {
  
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=button], input[type=submit], input[type=reset], input[type=file] {
  background-color: RosyBrown;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
}
*/
</style>
</head>
<body>
<form class= Container action="addtosql.php" method="post">
<div class=”Header”>
 <h3 class=”Heading”>Register</h3>
 </div>
  <label for="Fullname"><b>Fullname</b></label>
  <input type="text" placeholder="ex. DR_EL GAZZAR" name="Fullname"  required /><br>
  <label for="username"><b>Username</b></label>
  <input type="text"  placeholder="ex. EL_GAZZAR" name="username"  required /><br>
  <label for="email"><b>Email</b></label>
  <input type="text" placeholder="ex. ***@gmail.com" name="email"  required /><br>
  <label for="password"><b>Password</b></label>
  <input type="password" placeholder="password" name="password" onChange="onChange()" required /><br>
  <label for="password_confirm"><b>Confirm</b></label>
  <input type="password" placeholder="confirm password" name="password_confirm" onChange="onChange()" required /><br>
  <br>  <br>
  <label for="Image"><b>Insert your picture</b></label>
  <input type="file" name="Image" accept="image/*"  required /><br>
  <br>  <br>
  <label for="ID"><b>Insert your ID</b></label>
  <input type="file" name="ID" accept="image/*" required /><br>
  <br>  <br>
  <button class="button" type="submit">Register</button>
  
  <label>
    <input type="checkbox" name="Guidelines" required> 
    Accept <a href="#">Terms & Conditions</a>
  </label>
</form>
</body>
</html>
