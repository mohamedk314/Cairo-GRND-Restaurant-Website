<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB = "grndresturant";
$conn = mysqli_connect($servername, $username, $password , $DB);

if (!$conn) {
die ("connection failed".mysqli_connect_error());

}
/*
$sql = "INSERT INTO test (id ,date)
VALUES (1,CURRENT_TIMESTAMP());";

if ($conn ->query($sql) === TRUE) {
    echo "New record created succsesfullly";
    }
    
    else{
    echo "Error" . $sql . "<br>" . $conn->error;
    }

$sql = ("SELECT date FROM test WHERE id = '1' ");
echo 'Check Time : '.date('H:i:s', $sql);
*/






$sql_query = "select * from test where id = '2'";

$result = mysqli_query($conn,$sql_query);

        if (mysqli_num_rows($result) > 0) 
        {
            while ($date1 = mysqli_fetch_assoc($result)) {
        
                echo $date1["date_time"] ;
                echo "<br>";
            }
        }




/*

        $sql = "INSERT INTO test (id ,date)
        VALUES (2,CURRENT_TIMESTAMP());";
        
        if ($conn ->query($sql) === TRUE) {
            echo "New record created succsesfullly";
            }

*/



 /*$sql_query = "select * from test";

$result = mysqli_query($conn,$sql_query);

        if (mysqli_num_rows($result) > 0) 
        {
            while ($date1 = mysqli_fetch_assoc($result)) {
        
                echo $date1["date_time"] ;
                echo "<br>";
            }
        }
        else {

            echo "0 rows returned";
        }
        */
 ?>