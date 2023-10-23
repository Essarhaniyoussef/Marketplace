<?php

    include_once "../config.php";
    
    $c_id=$_POST['record'];
    $query="DELETE FROM categorie where IdCategorie='$c_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo "Category Item Deleted";
    }
    else{
        echo "Not able to delete";
    }
    
?>