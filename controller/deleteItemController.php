<?php

    include_once "../config.php";
    
    $p_id=$_POST['record'];
    $query="DELETE FROM produit where IdProduit='$p_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo "Product Item Deleted";
    }
    else{
        echo "Not able to delete";
    }
    
?>