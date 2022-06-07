<script>

</script>

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$DB = "grndresturant";
$conn = mysqli_connect($servername, $username, $password , $DB);

$min = 1;
$max = 99999999999999999;

$number = (rand($min,$max));

?>

<?php /*--------------------------------------------------          drinks                  --------------------------------------------------------------*/ ?>
					<?php
					if(!empty($_SESSION["drinks_cart"]))
					{
						foreach($_SESSION["drinks_cart"] as $keys => $values)
						{

                            $name = $values["item_name"];
                            echo $name ."<br>";
                            $price = $values["item_price"];

                            $query = "INSERT INTO order_details(order_id , type, price, name) 
                            VALUES ('$number','drinks','$price', '$name')";

                            if ($conn ->query($query) === TRUE) {
                               echo "New record created succsesfullly";
                                }
    
                           else{
                    echo "Error" . $query . "<br>" . $conn->error;
                         }
                         $query = NULL ;
                            
						}
                        
                        
					}
                    else{

                        echo "there is no drinks";
                    }
                   
					?>
