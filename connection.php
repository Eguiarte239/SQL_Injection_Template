<?php
    //Database and localhost info
    $user = "root";
    //Empty string in case you don't have a password for localhost
    $pass = "";
    $server = "localhost";
    //Database you will connect to
    $db = "";
    $con = new mysqli($server, $user, $pass, $db);

    //Retrieves information for login
    $username = $_POST["username"];
    $pass = $_POST["pass"];
    $query = "select * from login where username = '".$username."' and pass = '".$pass."'";
    if ($con -> multi_query($query)) {
      do{
        // Store first result set
        if ($result = $con -> store_result()){
          while ($row = $result -> fetch_row()){
            printf("Hello %s\n", $row[0]);
          }
          $result -> free_result();
        }
        // if there are more result-sets, then print a divider
        if ($con -> more_results()){
          printf("-------------\n");
        }
        //Prepare next result set
      }while ($con -> next_result());
    }
      
    $con -> close();
?>