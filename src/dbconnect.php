<?php
   
    $servername = "localhost"; 
    // $username = "tsunami"; 
    // $password = "munia2003";
    $username = "id21082625_aryan"; 
    $password = "id21082625_organ_donation";
   
    $database = "Organ_Donation";
     $conn = mysqli_connect($servername, 
         $username, $password, $database);

    if(!$conn) {
        die("Error". mysqli_connect_error()); 
    } 
?>
