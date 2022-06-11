<script language="javascript"> //inserts javascript code
 function deleteme(delid)
 {
 if(confirm("You're about to delete this blog. Click OK to continue or click cancel.")){ //opens an alert window asking the user if they're they want ot remove the blog

 window.location.href='post_action.php?del_id=' +delid+''; //If they click OK then it'll run the delete function on post_action.php
 return true;
 }
 } 
 </script>

<header>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</header>

<script>
function deleteme()
 {
 if(confirm("You're about to delete this blog. Click OK to continue or click cancel.")){ 
 return true;
 }
 } 
 </script>
<?php 











/*if($_POST['action'] == "Remove Blog"){

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
} */




$conn = mysqli_connect("localhost", "root", "", "grndresturant");





if(isset($_GET["action"]))
{
        
    echo "inside 1";
        echo "inside 2";
        $id_to_delete = $_GET['order_id'];
        echo $id_to_delete ;


         $sql = "DELETE FROM order_details WHERE order_id = '$id_to_delete'";
        
         if ($conn ->query($sql) === TRUE) {
            // echo "New record created succsesfullly";
         }

         else{
             //echo "Error" . $query . "<br>" . $conn->error;
         }
         $sql = NULL ;

         $query = "DELETE FROM orded_status WHERE order_id = '$id_to_delete'";

         if ($conn ->query($query) === TRUE) {
            // echo "New record created succsesfullly";
         }

         else{
             //echo "Error" . $query . "<br>" . $conn->error;
         }
         $query = NULL ;


         header ("Location: cashier.php");
        }





?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Cashier</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="cashier.php">receipts <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="cashier.php" method="post">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<table  class="table table-hover">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">order id</th>
      <th scope="col">username</th>
      <th scope="col">total</th>
      <th scope="col">Action</th>
      <th scope="col">view</th>
    </tr>
  </thead>
<?php
  
    $con = mysqli_connect("localhost","root","","grndresturant");
  
    $sql = "SELECT * FROM `orded_status` WHERE status = '0' ORDER BY order_id ASC";
    $result = mysqli_query($con,$sql);


    
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {

            $data1[]=$row;

            $x = 1;
foreach($result as $data){

  if (!empty($data)){
  
  $id = $data["id"];
  $status = $data["status"];
  $order_id = $data["order_id"];
  $order_username = $data["user_username"];
  $total = $data["Total"];
 

            //echo $order_id ."<br>";
            $query = "SELECT * FROM `order_details` WHERE order_id = '$order_id'";
            $result2 = mysqli_query($con, $query);
            $order = mysqli_fetch_all($result2,MYSQLI_ASSOC);
            $arrlength = count($order);
              ?>
<tbody>
<tr>
<th scope="row"><?php echo $x ; $x++;?></th>
      <td><?php echo $order_id ?> </td>
      <td><?php echo $order_username ?></td>
      <td><?php echo "$" .$total ?></td>
      <td><a href="cashier.php?action=delete & order_id=<?php echo $data["order_id"]; ?>"><span class="text-danger">Remove</span></a></td> <?php //Action ?>
      <td><a href="cashier_rec.php? action1=cashout & order_id=<?php echo $data["order_id"]; ?>&total=<?php echo $total;?>"><span class="text-green">Cashout !</span></a></td> <?php //Action ?>
  </tr>

              <?php
            $order_id = NULL;

            //echo "********************************************************"."<br>";
        }
    }
    }


    }
    else {

        ?>

        <th scope ="row"> There is no orders for now </th>
        <?php
    }
?>
</table >
</tbody>
