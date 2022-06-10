<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<meta name="viewport" content=
            "width=device-width, initial-scale=1">
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
     
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
     
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
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
 height: 45%;
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

.Heading
    {
 font-size: 20px;
 font-family: 'Open Sans';
 font-weight: 700;
 color: #2F3841;
}

input[type=text], [type=password] {
  font-size: medium;
  width: 90%;
  padding: 12px 20px;
  border-radius: 20px;
  margin: 8px 10;
  box-sizing: border-box;
}

label{
  font-size: 14px;
}

button[type=button], button[type=submit]
{
    
  background-color: rgba(0,0,0,0.7);
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: -10px 5px;
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

input::placeholder{
font-size: medium;
}

.centered1 {
  position: fixed;
  top: 72%;
  left: 52%;

    margin-top: -50px;
  margin-left: -100px;
  font-size: medium;
}

/* .checkbox2 
{
  position: fixed;
  top: 55%;
  left:55%;
  margin-top: -25px;
  margin-left: -180px;
} */
fieldset{
    margin: -10px 20px;
}
//add line t7t al klam
legend
    {
    font-size: medium;

}

input[type=radio]
{
    border-radius: 50%;
    
    width: 16px;
  height: 16px;

  /* border: 2px solid #999; */
  /* transition: 1s all linear; */
  /* margin-right: 5px; */
  /* position: relative; */

  /* top: 4px; */
}

/* input:checked {
  border: 6px solid black;
} */
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

  <div class="form-check form-check-inline">
  <button class="button" type="submit" id="checked">Login</button>
  <button type="button" class="button">Cancel</button>
      
  <br>  <br>

  <span class=centered1 >Forgot <a href="#">password?</a></span>

  <fieldset>
      
     <legend><b>Select user type:</b></legend>
    <div class= "form-check form-check-inline">
    <input class="form-check-input" type="radio" id="user" name="type" value="user" required>
    <label for="user">User</label>
    <input class="form-check-input" type="radio" id="cashier" name="type" value="cashier" required>
    <label for="cashier">Cashier</label>
    <input class="form-check-input" type="radio" id="control" name="type" value="control" required>
    <label for="control">Control</label>

  </div>

  </fieldset>
      
  <br><br>

  </div>
  
</form>

<span id="msg"></span>
    
    </div>
     
    <script>
     
        // On clicking submit do following
        $("input[type=submit]").click(function() {
             
            var atLeastOneChecked = false;
            $("input[type=radio]").each(function() {
             
                // If radio button not checked
                // display alert message
                if ($(this).attr("checked") != "checked") {
                 
                    // Alert message by displaying
                    // error message
                    $("#msg").html(
        "<span class='alert alert-danger' id='error'>"
        + "Please Choose atleast one</span>");
                }
            }
            );
        }
        )
        ;
    </script>

</body>

</html>
