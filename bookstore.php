<?php

require "database/connection.php";


if(isset($_POST['submitmy']))
{

   $name=$_POST['Name'];
//    echo "$name";
   $email=$_POST['Email'];
//    echo "$email";
   $date=$_POST['date'];
//    echo "$date";

   $destinatio=$_POST['desti'];
   $persones=$_POST['persones'];
   $kids=$_POST['kids'];
   $mess=$_POST['massge'];
   
//    echo "$destinatio";
//    echo "$persones";
//    echo "$kids";

    $insert="INSERT INTO `booking_table` (`Your_Name`, `Your_Email`, `Date_Time`, `Destination`, `Person`, `Kids`, `Special_request`) VALUES ('$name', '$email', '$date', '$destinatio', '$persones', '$kids', '$mess') ";

     $exi=mysqli_query($coon,$insert);
     if ($exi) 
     {
         echo "<script>if(confirm('Booked Successfully')){
            window.location.href='index.php';
         }
          </script>";
     }
 
}

?>