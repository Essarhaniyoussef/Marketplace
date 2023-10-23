<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MiniMarket</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
    <header>
        <div class="nav container">
            <a href="user_page.php" class="logo bold-title">MiniMarket</a>
            <div class="nav-btns">
                <a href="logout.php"><img class="logout-btn" src='img/log-in-regular-24.png' title="Déconnexion"></a>
                <img class="shopping-bag" id="cart-icon" src='img/shopping-bags-solid-24.png' title="Votre Panier">
            </div>
            <div class="cart">
                <h2 class="cart-title bold-title">Votre Panier</h2>
                <div class="cart-content">
                    <!-- <div class="cart-box">
                        
                    </div> -->
                </div>
                <div class="total">
                    <div class="total-title">Prix Total:</div>
                    <div class="total-price">$0</div>
                </div>
                <button type="button" class="btn-buy">Acheter maintenant</button>
                <img src="img/x-regular-24.png" id="close-cart" alt="" class="bx bx-x">
            </div>
        </div>
    </header>

    <section class="shop container">
        <h2 class="section-title bold-title">Bienvenue, @<?php echo $_SESSION['user_name'] ?> !</h2>

        <div class="categories">
            <span>Catégories :&ensp;</span>
            <button class="categorie-btn active" data-filter="all">Afficher tout</button>

            <?php
            $qry = "select * from categorie";
            $run = $conn -> query($qry);
            if($run -> num_rows > 0){
                while($row = $run -> fetch_assoc()){
                    $IdCategorie = $row['IdCategorie'];
            ?>
            <button class="categorie-btn" data-filter="<?php echo $row['IdCategorie'] ?>"><?php echo $row['NomCategorie'] ?></button>            
                <?php
                }
            }
            ?>
        </div>

        <div class="shop-content" id="db-data">
            <?php
                $qry = "select * from produit";
                $run = $conn -> query($qry);
                if($run -> num_rows > 0){
                    while($row = $run -> fetch_assoc()){
                        $IdProduit = $row['IdProduit'];
            ?>
            <div class="product-box" data-item="<?php echo $row['IdCategorie'] ?>">
                <img src="<?php echo $row['ImageProduit'] ?>" alt="" class="product-img">
                <h2 class="product-title"><?php echo $row['NomProduit']    ?></h2>
                <span class="price">$<?php echo $row['PrixProduit']    ?></span>
                <img src="img/cart-add-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <?php
                    }
                }
            ?>
        </div>
    </section>

    <script>
        let categorieBtn = document.querySelectorAll('.categorie-btn');
        let productBox = document.querySelectorAll('.product-box');

        for(let i = 0; i < categorieBtn.length; i++){
            categorieBtn[i].addEventListener('click', function(){
                for(let j = 0; j<categorieBtn.length; j++){
                    categorieBtn[j].classList.remove('active');
                }
                this.classList.add('active');
                let dataFilter = this.getAttribute('data-filter');
                for(let k = 0; k<productBox.length; k++){
                    productBox[k].classList.remove('active');
                    productBox[k].classList.add('hide');
                    if(productBox[k].getAttribute('data-item') == dataFilter || dataFilter == "all"){
                        productBox[k].classList.remove('hide');
                        productBox[k].classList.add('active');
                    }
                }
            })
        }
    </script>
    <!-- Link TO JS -->
    <script src="main.js?v=1"></script>
</body>
</html>