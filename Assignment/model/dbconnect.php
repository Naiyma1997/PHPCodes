  
<?php
   function runQuery($q) {
        $db_username = "image";
        $db_servername = "localhost";
        $db_password = "";
        $db_database = "assignment1";
        $con = mysqli_connect($db_servername, $db_username, $db_password, $db_database);
        if (!$con) {
         die("Failed to connect to the server" . mysqli_connect_error());
        }
        mysqli_query($con, $q);
   }
   function getResult($q) {
        $db_username = "root";
        $db_servername = "localhost";
        $db_password = "";
        $db_database = "assignment1";
        $con = mysqli_connect($db_servername, $db_username, $db_password, $db_database);
         if (!$con) {
             die("Failed to connect to the server" . mysqli_connect_error());
         }
         $result = mysqli_query($con, $q);
         $data = array();
         if ($result && mysqli_num_rows($result) > 0) {
            while ($result && $row = mysqli_fetch_assoc($result)) {
               $data[] = $row;
            }
         }
         return $data;
   }
?>