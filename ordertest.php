<script>

</script>

<?php
session_start();
$user_username = $_SESSION['Username'];
$servername = "localhost";
$username = "root";
$password = "";
$DB = "grndresturant";
$conn = mysqli_connect($servername, $username, $password , $DB);

$min = 1;
$max = 99999999999999999;

$number = (rand($min,$max));


$Cnt = 0 ;
?>

<?php /*--------------------------------------------------          drinks                  --------------------------------------------------------------*/ ?>
					<?php
if(!empty($_SESSION["drinks_cart"]))
					{
                        $Cnt ++ ;
						foreach($_SESSION["drinks_cart"] as $keys => $values)
						{

                            $name = $values["item_name"];
                            //echo $name ."<br>";
                            $price = $values["item_price"];

                            $query = "INSERT INTO order_details(order_id , type, price, name) 
                            VALUES ('$number','drinks','$price', '$name')";

                            if ($conn ->query($query) === TRUE) {
                               //echo "New drinks record created succsesfullly" ."<br>";
                                }
    
                           else{
                    //echo "Error" . $query . "<br>" . $conn->error;
                         }
                         $query = NULL ;
                            
						}
                        
                        
					}
                    else{
                        echo "there is no drinks" ."<br>";
                    }

 /*--------------------------------------------------          dinner                  --------------------------------------------------------------*/
 if(!empty($_SESSION["dinner_cart"]))
					{
                        $Cnt ++ ;
						foreach($_SESSION["dinner_cart"] as $keys => $values)
						{

                            $name = $values["item_name"];
                            //echo $name ."<br>";
                            $price = $values["item_price"];

                            $query = "INSERT INTO order_details(order_id , type, price, name) 
                            VALUES ('$number','dinner','$price', '$name')";

                            if ($conn ->query($query) === TRUE) {
                               //echo "New dinner record created succsesfullly";
                                }
    
                           else{
                    //echo "Error" . $query . "<br>" . $conn->error;
                         }
                         $query = NULL ;
                            
						}
                        
                        
					}
/*--------------------------------------------------          lunch                  --------------------------------------------------------------*/
 if(!empty($_SESSION["lunch_cart"]))
                {
                    $Cnt ++ ;
                    foreach($_SESSION["lunch_cart"] as $keys => $values)
                    {

                        $name = $values["item_name"];
                        //echo $name ."<br>";
                        $price = $values["item_price"];

                        $query = "INSERT INTO order_details(order_id , type, price, name) 
                    VALUES ('$number','lunch','$price', '$name')";

                    if ($conn ->query($query) === TRUE) {
                        //echo "New lunch record created succsesfullly";
                    }

                    else{
                       // echo "Error" . $query . "<br>" . $conn->error;
                    }
                    $query = NULL ;
         
     }
     
     
 }
  /*--------------------------------------------------          breakfast                  --------------------------------------------------------------*/
  if(!empty($_SESSION["breakfast_cart"]))
  {
    $Cnt ++ ;
      foreach($_SESSION["breakfast_cart"] as $keys => $values)
      {

          $name = $values["item_name"];
          //echo $name ."<br>";
          $price = $values["item_price"];

          $query = "INSERT INTO order_details(order_id , type, price, name) 
      VALUES ('$number','breakfast','$price', '$name')";

      if ($conn ->query($query) === TRUE) {
         // echo "New  breakfast record created succsesfullly";
      }

      else{
         // echo "Error" . $query . "<br>" . $conn->error;
      }
      $query = NULL ;

}


}
 /*--------------------------------------------------          compose                  --------------------------------------------------------------*/
 if(!empty($_SESSION["sandwitch"]))
                {
                    $Cnt ++ ;
                    foreach($_SESSION["sandwitch"] as $keys => $values)
                    {

                        $name = $values["item_name"];
                       // echo $name ."<br>";
                        $price = $values["item_price"];

                        $query = "INSERT INTO order_details(order_id , type, price, name) 
                    VALUES ('$number','compose','$price', '$name')";

                    if ($conn ->query($query) === TRUE) {
                       // echo "New record created succsesfullly";
                    }

                    else{
                        //echo "Error" . $query . "<br>" . $conn->error;
                    }
                    $query = NULL ;
         
     }
     
     
 }
 $total_order = $_SESSION['total_price_receipt'];
 if(!$Cnt = 0){
    $query = "INSERT INTO orded_status(order_id , user_username , Total) VALUES ('$number' , '$user_username' , '$total_order')";
    if ($conn ->query($query) === TRUE) {
         //echo "New record created succsesfullly";
     }

     else{
         //echo "Error" . $query . "<br>" . $conn->error;
     }
     header('Location: index.php');
 }
