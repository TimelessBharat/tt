<?php

require "database/connection.php";


if(isset($_POST['submit']))
{

   $name=$_POST['name'];
//    echo "$name";
   $email=$_POST['email'];
//    echo "$email";
   $subject=$_POST['sub'];
//    echo "$subject";
   $mess=$_POST['mass'];
//    echo "$mess";

    $insert="INSERT INTO `contact` (`Your_Name`, `Your_Email`, `Subject`, `Message`) VALUES ('$name', '$email', '$subject', '$mess')";

     $exi=mysqli_query($coon,$insert);
     if ($exi) 
     {
         echo "<script>if(confirm('Submited Successfully')){
            window.location.href='contact.html';
         }
          </script>";
     }
 
}

?>