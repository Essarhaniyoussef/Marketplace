<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
    header('location:index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style3.css">
</head>


<body>

    <header>
        <div class="header">
            <div><a href="admin_page.php" class="logo bold-title">Admin Dashboard</a></div>
            <div class="nav-btns">
                <a href="logout.php"><img class="logout-btn" src='img/log-in-regular-24.png' title="Déconnexion"></a>
            </div>
        </div>
    </header>

    <aside>
        <ul>
            <li><a href="admin_page.php">Accueil</a></li>
            <li><a href="#clients" onclick="showClients()">Clients</a></li>
            <li><a href="#categories" onclick="showCategories()">Catégories</a></li>
            <li><a href="#produits" onclick="showProduits()">Produits</a></li>
            <li><a href="#commandes" onclick="showCommandes()">Commandes</a></li>

        </ul>
    </aside>

    <div class="content allContent-section">
    <h2 class="hash-title">Accueil</h2>
        <div class="flex-cards">
        <div class="card">
            <h4 >Total des Clients</h4>
                    <h5  class="number">
                        <?php
                            $sql="SELECT * from user where isAdmin=0";
                            $result=$conn-> query($sql);
                            $count=0;
                            if ($result-> num_rows > 0){
                                while ($row=$result-> fetch_assoc()) {
                        
                                    $count=$count+1;
                                }
                            }
                            echo $count;
                        ?></h5>
        </div>

        <div class="card">
                        <h4 >Total des Catégories</h4>
                        <h5  class="number">
                        <?php
                        
                        $sql="SELECT * from categorie";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?>
                    </h5>
        </div>

        <div class="card">
                        <h4 >Total des Produits</h4>
                        <h5  class="number">
                        <?php
                        
                        $sql="SELECT * from produit";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?>
                    </h5>
        </div>

        <div class="card">
            <h4 >Total des Commandes</h4>
            <h5 class="number">XX
                        <!-- <?php
                        
                        $sql="SELECT * from produit";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?> -->
            </h5>
        </div>
        </div>
    </div>


    <script type="text/javascript" src="ajaxWork.js"></script>    

    
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>




















<!-- <div class="container">
    <div class="content">
        <h3>Bienvenue, @<span><?php echo $_SESSION['admin_name'] ?></span></h3>
        <a href="admin_page.php" class="btn">Dashboard</a>
        <a href="logout.php" class="btn">Déconnexion</a>
    </div>
</div> -->