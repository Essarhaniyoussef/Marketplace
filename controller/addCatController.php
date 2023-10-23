<?php
    include_once "../config.php";
    
    if(isset($_POST['upload']))
    {
       
        $catname = $_POST['c_name'];
       
         $insert = mysqli_query($conn,"INSERT INTO categorie
         (NomCategorie) 
         VALUES ('$catname')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../admin_page.php?categories=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../admin_page.php?categories=success");
         }
     
    }
        
?>