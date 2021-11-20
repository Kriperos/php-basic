<?php
   $host = "localhost";
   $user = "root";
   $password = "";
   $dbname = "owca";
   $con = mysqli_connect($host,$user,$password);
  
   if(!$con){
       echo "nie połączono";
   };

   mysqli_select_db($con,$dbname);

   $query = "SELECT * FROM `cos`";
   $result = mysqli_query($con, $query);
   foreach($result as $uczen){
    echo '<p style = "color:blue">' .$uczen["imie"] ."</p>";
    echo '<p style = "color:red" >' .$uczen["nazwisko"] ."</p>";
   }


