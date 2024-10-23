<?php 


       $mysqli = new MySQLi ("localhost", "root", "", "academ");
       if ($mysqli -> connect_errno) {
           die( "fallo la conexion a MySQL: (" . $mysqli -> mysqli_connect_errno()            
               .") " . $mysqli -> mysqli_connect_error());
        }
        else
            //echo "Conexion exitossa!";

//  $link =mysqli_connect("localhost", "root", "");
//  if($link){
//        mysqli_select_db($link, "academ");
//  }
?>