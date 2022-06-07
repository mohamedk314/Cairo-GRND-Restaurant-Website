<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<html >

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
 height: 35%;
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
 font-family: 'Open Sans';
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
.centered {
  position: fixed;
  top: 62%;
  left: 50%;
  margin-top: -50px;
  margin-left: -100px;
}
.centered1 {
  position: fixed;
  top: 70%;
  left: 52%;
  margin-top: -50px;
  margin-left: -100px;
}
/*
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
input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
button[type=button], button[type=submit]
{
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

<body>
   
<form class= Container action="login.php" method="post">
<div class=”Header”>
 <h3 class=”Heading”>Login</h3>
 </div>

  <label for="Username"><b>Username</b></label>
  <input type="text" placeholder="Enter Username" name="Username" required>
  <br>  <br>
  <label for="password"><b>Password</b></label>
  <input type="password" placeholder="Enter Password" name="password" required>
  <br>  <br>
  <div class= "checkbox">
  <label >
    <input  type="checkbox" checked="checked" name="remember"> Remember me
  </label>
  </div>
  <br><br>
  <div class=centered>
  <button class="button" type="submit">Login</button>
  <button type="button" class="button">Cancel</button>
  <br>  <br>
  <span class=centered1 >Forgot <a href="#">password?</a></span>
  </div>
</form>
</body>
</html>