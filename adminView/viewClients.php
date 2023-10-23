<div >
  <h2 class="hash-title">Clients</h2>
  <table class="table client-table">
    <thead>
      <tr>
        <th class="sn">S.N.</th>
        <th class="nomclient">Nom</th>
        <th class="nomclient">Email</th>
        <th class="nomclient">Num. Téléphone</th>
        <th class="nomclient">Adresse</th>
        <th class="nomclient">Date d'inscription</th>
      </tr>
    </thead>
    <?php
      include_once "../config.php";
      $sql="SELECT * from user where isAdmin=0";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td class="nomclient-cnt"><?=$row["NomUser"]?></td>
      <td class="nomclient-cnt"><?=$row["EmailUser"]?></td>
      <td class="nomclient-cnt"><?=$row["TelephoneUser"]?></td>
      <td class="nomclient-cnt"><?=$row["AdresseUser"]?></td>
      <td class="nomclient-cnt"><?=$row["RegisterDate"]?></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>