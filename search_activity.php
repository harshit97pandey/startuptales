<?php
$link = mysqli_connect("localhost", "root", "", "login");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$query = mysqli_real_escape_string($link, $_REQUEST['query']);
 
if(isset($query)){
 
    $sql = "SELECT activity FROM company_activity WHERE activity LIKE '" . $query . "%'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['activity'] . "</p>";
            }
      
            mysqli_free_result($result);
        } else{
            echo "<p>No matches found for <b>$query</b></p>";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
 

mysqli_close($link);
?>