<head>
    <link rel="stylesheet" href="../style3.css">
</head>


<div >
  <h3 class="hash-title">Catégories</h3>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
<fieldset class="modal-content">
          <legend class="modal-title">Ajoutez une catégorie</legend>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="controller/addCatController.php" method="POST">
              <input type="text" class="form-control" name="c_name" required placeholder="Nom de categorie">
              <button type="submit" class="btn btn-secondary" name="upload">Ajouter Catégorie</button>
          </form>

        </div>

</fieldset>
      
    </div>
  </div>






  <table>
    <thead>
      <tr>
        <th class="sn">S.N.</th>
        <th class="nomcat">Nom de Catégorie</th>
        <th class="operations" colspan="2">Opérations</th>
      </tr>
    </thead>
    <?php
      include_once "../config.php";
      $sql="SELECT * from categorie";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr class="table-row">
      <td class="sn-content"><?=$count?></td>
      <td class="nomcat-content"><?=$row["NomCategorie"]?></td>   
      <!-- <td><button class="btn btn-primary" >Edit</button></td> -->
      <td class="operations"><button class="btn btn-danger" onclick="categoryDelete('<?=$row['IdCategorie']?>')">Supprimer</button></td>
    </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>


  

  
</div>
   