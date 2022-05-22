<?php 
//DEVELOPED BY Jehankandy
    function Connection(){
        $server = "localhost";
        $user = "root";
        $pass = "";
        $db = "find_last_index";
        
        $con = mysqli_connect($server,$user,$pass,$db);

        $result = (!$con)?null:$con;

        return $result;
    }
?>
