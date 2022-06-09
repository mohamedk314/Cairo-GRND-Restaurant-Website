
<script>
function functioncompose() {
  header('Location: compose.php');
}

</script>




<?php 
if( $_SERVER["REQUEST_METHOD"] == "POST") {

  die ('Error 404 Redirect');
}
?>



<style>
* {
  margin: 0;
  padding: 0;
}
::-webkit-scrollbar {
    display: none;
}
h1{

    color: SlateGray;
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
  border-radius: 12px;
}
.button:active:after {
  padding: 0;
  margin: 0;
  opacity: 0.22;
  transition: 0s
}
.button:hover {
  color: skyblue;
}
body {
  font-family: Arial, Helvetica, sans-serif;
  background: #333;
  color: #fff;
  height: 100vh;
  line-height: 1.6;
}

.container {
  width: 100%;
  height: 100%;
  /* CSS Smooth Scroll */
  overflow-y: scroll; 
  scroll-behavior: smooth;
  scroll-snap-type: y mandatory;
}

.talk {
  font-size: 1.5rem;
}

.navbar {
  position: fixed;
  top: 0;
  z-index: 1;
  display: flex;
  width: 100%;
  height: 60px;
  background: rgba(0,0,0,0.7);
}

.navbar ul {
  display: flex;
  list-style: none;
  width: 100%;
  justify-content: center;
}

.navbar ul li {
  margin: 0 1rem;
  padding: 1rem;
}

.navbar ul li a {
  text-decoration: none;
  text-transform: uppercase;
  color: #f4f4f4;
}

.navbar ul li a:hover {
  color: skyblue;
}

section {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  width: 100%;
  height: 100vh;
 
  /* Scroll Snap */
  scroll-snap-align: center;
}

section h1 {
  font-size: 4rem;
}

/* Section Images */
section#Drinks {
  background: url('https://feglawgarger.com/wp-content/uploads/2021/11/sss-780x470.jpg') no-repeat center center/cover;;
}

section#Breakfast {
  background: url('https://desmoinesparent.com/wp-content/uploads/2021/09/BrunchDSM.png') no-repeat center center/cover;;
}

section#Lunch {
  background: url('https://www.citycentremirdif.com/-/media/blogs/2019/march/all-malls/tasty-medals-under-aed50/main-image.jpg') no-repeat center center/cover;;
}

section#Dinner {
  background: url('https://foolproofliving.com/wp-content/uploads/2020/05/Easy-Dinner-Recipes.jpg') no-repeat center center/cover;;
}

section#ComposeaSandwitch {
  background: url('https://cdn2.vectorstock.com/i/1000x1000/44/06/sandwich-cartoon-design-vector-13724406.jpg') no-repeat center center/cover;;
}
</style>
<header>
<?php
session_start();
$user = $_SESSION['Username'];
?>
</header>


<html>
  <body>
    <?php ?>
<div class="container">
  <nav class="navbar">
      <ul>
          <li><a href="#Drinks">Drinks</a></li>
          <li><a href="#Breakfast">Breakfast</a></li>
          <li><a href="#Lunch">Lunch</a></li>
          <li><a href="#Dinner">Dinner</a></li>
          <li><a href="#ComposeaSandwitch">Compose a Sandwitch</a></li>
          <li><a href="Logout.php">Logout</a></li>
          <li><a href=""> <?php echo $user ?> </a> </li>
        </ul>
      </nav>
  
  <section id="Drinks">
    <h1>Drinks</h1>
    <p class="talk"></p>
    <button class="button" type="button" onclick="window.location.href='menudrinks.php'">Order!</button>
  </section>
  
  <section id="Breakfast">
      <h1>Breakfast</h1>
      <p class="talk"></p>
      <button class="button" type="button" onclick="window.location.href='menubreakfast.php'">Order!</button>
  </section>
  
  <section id="Lunch">
      <h1>Lunch</h1>
      <p class="talk"></p>
      <button class="button" type="button" onclick="window.location.href='menulunch.php'">Order!</button>
  </section>
  
  <section id="Dinner">
      <h1>Dinner</h1>
      <p class="talk"></p>
      <button class="button" type="button" onclick="window.location.href='menudinner.php'">Order!</button>
  </section>
  
  <section id="ComposeaSandwitch">
      <h1>Compose a Sandwitch</h1>
      <p class="talk"></p>
      <button class="button" type="button"  onclick="window.location.href='compose.php'">Compose</button>
  </section>
  
</div>
</body>
</html>
