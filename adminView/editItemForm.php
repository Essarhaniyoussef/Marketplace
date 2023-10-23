<head>
    <link rel="stylesheet" href="../style3.css">
</head>




<fieldset class="modal-content">

<legend class="modal-title">Modifier le produit</legend>
<?php
    include_once "../config.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * FROM produit WHERE IdProduit='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
      $catID=$row1["IdCategorie"];
?>

<form id="update-Items" onsubmit="updateItems()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="product_id" value="<?=$row1['IdProduit']?>" hidden>
    </div>


    <table class="additemtable">
    

    <tr>

    <td rowspan="4">
    <div class="form-group">
       <img width='200px' height='200px' src='<?=$row1["ImageProduit"]?>'>
    </div>
    </td>

              <td>Nom</td>
              <td>
    <div class="form-group">
      <input type="text" class="form-control" id="p_name" value="<?=$row1['NomProduit']?>">
    </div>
    </td>
    
    </tr>



    <tr>
              <td>Prix</td>
              <td>
    <div class="form-group">
      <input type="number" class="form-control" id="p_price" value="<?=$row1['PrixProduit']?>">
    </div> </td>
    </tr>



    <tr>
              <td>Catégorie</td>
              <td>
    <div class="form-group">
      <select id="category">
        <?php
          $sql="SELECT * from categorie WHERE IdCategorie='$catID'";
          $result = $conn-> query($sql);
          if ($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
              echo"<option value='". $row['IdCategorie'] ."'>" .$row['IdCategorie'] ."</option>";
            }
          }
        ?>
        <?php
          $sql="SELECT * from categorie WHERE IdCategorie!='$catID'";
          $result = $conn-> query($sql);
          if ($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
              echo"<option value='". $row['IdCategorie'] ."'>" .$row['NomCategorie'] ."</option>";
            }
          }
        ?>
      </select>
    </div></td></tr>



    <tr>
              <td>Image</td>
              <td>
    <div>
      <input type="text" id="existingImage" class="form-control" value="<?=$row1['ImageProduit']?>" hidden>
      <input type="file" id="newImage" value="">
    </div></td></tr>

    <tr>
           
           <td colspan="3">
    <div class="form-group">
      <button type="submit" class="btn btn-secondary">Modifier Produit</button>
    </div></td></tr>



    <?php
    		}
    	}
    ?>

    </table>
  </form>

    </fieldset>