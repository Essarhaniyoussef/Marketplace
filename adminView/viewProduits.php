<head>
    <link rel="stylesheet" href="../style3.css">
</head>



<div >
  <h2 class="hash-title">Produits</h2>




  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <fieldset class="modal-content">
          <legend class="modal-title">Ajoutez un produit</legend>

          <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">
          <table class="additemtable">

            <tr>
              <td>Nom</td><td>Prix</td><td>Catégorie</td><td>Image</td><td></td>
            </tr>



            <tr>
              <td>
              <div class="form-group">
              <input type="text" class="form-control" id="p_name" placeholder="Nom du produit" required>
            </div></td>



              
              <td>
            <div class="form-group">
              <input type="number" class="form-control" id="p_price" placeholder="Prix du produit" required>
            </div>
            </td>
 

              
              <td>
            <div class="form-group">
              <label></label>
              <select id="category" >
                <option disabled selected>Select Catégorie</option>
                <?php

                  include_once "../config.php";

                  $sqll="SELECT * from categorie";
                  $resultt = $conn-> query($sqll);

                  if ($resultt-> num_rows > 0){
                    while($roww = $resultt-> fetch_assoc()){
                      echo"<option value='".$roww['IdCategorie']."'>".$roww['NomCategorie'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            </td>

              
              <td>
            <div class="form-group">
                <label for="file"></label>
                <input type="file" class="form-control-file" id="file">
            </div>
            </td>



           
              <td colspan="2">
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" id="upload">Ajouter Produit</button>
            </div>
            </td>

            </tr>




            </table>
          </form>

        </div>

      </fieldset>
      
    </div>
  </div>









  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="imgprod">Image</th>
        <th class="nomprod">Nom du Produit</th>
        <th class="catprod">Catégorie</th>
        <th class="prixprod">Prix ($)</th>
        <th class="operations" colspan="2">Opérations</th>
      </tr>
    </thead>
    <?php
      include_once "../config.php";
      $sql="SELECT * from produit, categorie WHERE produit.IdCategorie=categorie.IdCategorie";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td class="imgprod-cnt"><img height='80px' src='<?=$row["ImageProduit"]?>'></td>
      <td class="nomprod-cnt"><?=$row["NomProduit"]?></td>
      <td class="catprod"><?=$row["NomCategorie"]?></td> 
      <td class="prixprod"><?=$row["PrixProduit"]?></td>     
      <td class="operations"><button class="btn btn-primary"  onclick="itemEditForm('<?=$row['IdProduit']?>')">Modifier</button>
      <button class="btn btn-danger"  onclick="itemDelete('<?=$row['IdProduit']?>')">Supprimer</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>










  <!-- Modal -->
  <div class="modal fade loweritemadd" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <fieldset class="modal-content">
          <legend class="modal-title">Ajoutez un produit</legend>

          <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">
          <table class="additemtable">

            <tr>
              <td>Nom</td>
              <td>
            <div class="form-group">
              <input type="text" class="form-control" id="p_name" placeholder="Nom du produit" required>
            </div></td>

            </tr>


            <tr>
              <td>Prix</td>
              <td>
            <div class="form-group">
              <input type="number" class="form-control" id="p_price" placeholder="Prix du produit" required>
            </div>
            </td>
 

            <tr>
              <td>Catégorie</td>
              <td>
            <div class="form-group">
              <label></label>
              <select id="category" >
                <option disabled selected>Select Catégorie</option>
                <?php

                  $sql="SELECT * from categorie";
                  $result = $conn-> query($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['IdCategorie']."'>".$row['NomCategorie'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            </td></tr>

            <tr>
              <td>Image</td>
              <td>
            <div class="form-group">
                <label for="file"></label>
                <input type="file" class="form-control-file" id="file">
            </div>
            </td></tr>


            <tr>
           
              <td colspan="2">
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" id="upload">Ajouter Produit</button>
            </div>
            </td></tr>




            </table>
          </form>

        </div>

      </fieldset>
      
    </div>
  </div>

  
</div>
   