<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini-Market</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header -->
    <header>
        <!-- Nav -->
        <div class="nav container">
            <a href="index.html" class="logo bold-title">Mini-Market</a>
            <!-- Cart-Icon -->
            <img class="shopping-bag" id="cart-icon" src='img/shopping-bags-solid-24.png'>
            <!-- Cart -->
            <div class="cart">
                <h2 class="cart-title bold-title">Votre Panier</h2>
                <!-- Content -->
                <div class="cart-content">
                    <!-- <div class="cart-box">
                        
                    </div> -->
                </div>
                <!-- Total -->
                <div class="total">
                    <div class="total-title">Prix Total:</div>
                    <div class="total-price">$0</div>
                </div>
                <!-- Buy Button -->
                <button type="button" class="btn-buy">Acheter maintenant</button>
                <!-- Cart Close -->
                <img src="img/x-regular-24.png" id="close-cart" alt="" class="bx bx-x">
            </div>
        </div>
    </header>


    <!-- Shop -->
    <section class="shop container">
        <h2 class="section-title bold-title">Shop Products</h2>


        <!-- Categories -->
        <div class="categories">
            <span>Catégories : &ensp;</span>
            <button class="categorie-btn active" data-filter="all">Afficher tout</button>
            <button class="categorie-btn" data-filter="tshirt">T-Shirts</button>
            <button class="categorie-btn" data-filter="sneaker">Sneakers</button>
            <button class="categorie-btn" data-filter="game">Jeux Vidéo</button>
            <button class="categorie-btn" data-filter="phonecase">Phone Cases</button>          
        </div>


        <!-- Content -->
        <div class="shop-content">

            <!-- Tshirts -->
            <div class="product-box" data-item="tshirt">
                <img src="img/tshirts/tshirt1.jpg" alt="" class="product-img">
                <h2 class="product-title">Future High Off Life Classic T-Shirt</h2>
                <span class="price">$25</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="tshirt">
                <img src="img/tshirts/tshirt2.jpg" alt="" class="product-img">
                <h2 class="product-title">Enderman Classic T-Shirt</h2>
                <span class="price">$25</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="tshirt">
                <img src="img/tshirts/tshirt3.jpg" alt="" class="product-img">
                <h2 class="product-title">Goosebumps Vintage T-Shirt</h2>
                <span class="price">$25</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>           
            <div class="product-box" data-item="tshirt">
                <img src="img/tshirts/tshirt4.jpg" alt="" class="product-img">
                <h2 class="product-title">Goosebumps T-Shirt</h2>
                <span class="price">$25</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>       
            <div class="product-box" data-item="tshirt">
                <img src="img/tshirts/tshirt5.jpg" alt="" class="product-img">
                <h2 class="product-title">Let It Be Classic T-Shirt</h2>
                <span class="price">$25</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="tshirt">
                <img src="img/tshirts/tshirt6.jpg" alt="" class="product-img">
                <h2 class="product-title">Travis Scott Goosebumps Lyrics T-Shirt</h2>
                <span class="price">$25</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="tshirt">
                <img src="img/tshirts/tshirt7.jpg" alt="" class="product-img">
                <h2 class="product-title">Travis Scott Cactus Jack T-Shirt</h2>
                <span class="price">$25</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="tshirt">
                <img src="img/tshirts/tshirt8.jpg" alt="" class="product-img">
                <h2 class="product-title">Berserk: Egg of the King T-Shirt</h2>
                <span class="price">$25</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>



            <!-- Sneakers -->
            <div class="product-box" data-item="sneaker">
                <img src="img/sneakers/sneaker1.jfif" alt="" class="product-img">
                <h2 class="product-title">Nike Air Jordan 1 Retro High Off-White Chicago Sample</h2>
                <span class="price">$18000</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="sneaker">
                <img src="img/sneakers/sneaker2.jfif" alt="" class="product-img">
                <h2 class="product-title">Nike Air Jordan 1 Retro High Off-White University Blue</h2>
                <span class="price">$4750</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="sneaker">
                <img src="img/sneakers/sneaker3.jfif" alt="" class="product-img">
                <h2 class="product-title">Nike Air Jordan 1 Retro High Off-White NRG</h2>
                <span class="price">$20000</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="sneaker">
                <img src="img/sneakers/sneaker4.jfif" alt="" class="product-img">
                <h2 class="product-title">Nike Air Jordan 1 Retro High Turbo Green</h2>
                <span class="price">$550</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="sneaker">
                <img src="img/sneakers/sneaker5.jfif" alt="" class="product-img">
                <h2 class="product-title">Nike Air Jordan 1 High Dior</h2>
                <span class="price">$24000</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="sneaker">
                <img src="img/sneakers/sneaker6.jfif" alt="" class="product-img">
                <h2 class="product-title">Nike Air Jordan 1 High Travis Scott</h2>
                <span class="price">$2500</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="sneaker">
                <img src="img/sneakers/sneaker7.jfif" alt="" class="product-img">
                <h2 class="product-title">Nike Air Jordan 1 High Patent Bred</h2>
                <span class="price">$425</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="sneaker">
                <img src="img/sneakers/sneaker8.jfif" alt="" class="product-img">
                <h2 class="product-title">Nike Air Jordan 4 Off-White Sail</h2>
                <span class="price">$1950</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            


            <!-- Games -->
            <div class="product-box" data-item="game">
                <img src="img/games/game1.png" alt="" class="product-img">
                <h2 class="product-title">Elden Ring - Standard Edition, PS5</h2>
                <span class="price">$59.99</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="game">
                <img src="img/games/game2.png" alt="" class="product-img">
                <h2 class="product-title">God of War: Ragnarök, PS5</h2>
                <span class="price">$79.99</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="game">
                <img src="img/games/game3.png" alt="" class="product-img">
                <h2 class="product-title">Marvel's Spider-Man: Miles Morales, PS5</h2>
                <span class="price">$59.99</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="game">
                <img src="img/games/game4.png" alt="" class="product-img">
                <h2 class="product-title">The Last of Us Part I, PS5</h2>
                <span class="price">$79.99</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="game">
                <img src="img/games/game5.png" alt="" class="product-img">
                <h2 class="product-title">Call of Duty: Modern Warfare II, PS5</h2>
                <span class="price">$69.99</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="game">
                <img src="img/games/game6.png" alt="" class="product-img">
                <h2 class="product-title">Gran Turismo 7, PS5</h2>
                <span class="price">$59.99</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="game">
                <img src="img/games/game7.png" alt="" class="product-img">
                <h2 class="product-title">Horizon Forbidden West, PS5</h2>
                <span class="price">$69.99</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="game">
                <img src="img/games/game8.png" alt="" class="product-img">
                <h2 class="product-title">Stray, PS5</h2>
                <span class="price">$29.99</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>



            <!-- Phone Cases -->
            <div class="product-box" data-item="phonecase">
                <img src="img/phonecase/phonecase1.jpg" alt="" class="product-img">
                <h2 class="product-title">Cute Monsters Pattern iPhone Case</h2>
                <span class="price">$33.34</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="phonecase">
                <img src="img/phonecase/phonecase2.jpg" alt="" class="product-img">
                <h2 class="product-title">Travis Scott - Highest in the Room iPhone Case</h2>
                <span class="price">$37.51</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="phonecase">
                <img src="img/phonecase/phonecase3.jpg" alt="" class="product-img">
                <h2 class="product-title">Travis Scott iPhone Tough Case</h2>
                <span class="price">$47.23</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="phonecase">
                <img src="img/phonecase/phonecase4.jpg" alt="" class="product-img">
                <h2 class="product-title">Katana iPhone Tough Case</h2>
                <span class="price">$33.34</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="phonecase">
                <img src="img/phonecase/phonecase5.jpg" alt="" class="product-img">
                <h2 class="product-title">Life is Strange Butterfly iPhone Case</h2>
                <span class="price">$30.81</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="phonecase">
                <img src="img/phonecase/phonecase6.jpg" alt="" class="product-img">
                <h2 class="product-title">Consequences (Life Is Strange: Before The Storm) iPhone Case</h2>
                <span class="price">$37.50</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="phonecase">
                <img src="img/phonecase/phonecase7.jpg" alt="" class="product-img">
                <h2 class="product-title">Life is Strange Stickers iPhone Case</h2>
                <span class="price">$41.95</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="phonecase">
                <img src="img/phonecase/phonecase8.jpg" alt="" class="product-img">
                <h2 class="product-title">Chloe Price - Misfit Skull (Life is Strange) iPhone Case</h2>
                <span class="price">$31.95</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="phonecase">
                <img src="img/phonecase/phonecase9.jpg" alt="" class="product-img">
                <h2 class="product-title">BUTTERFLY EFFECT iPhone Case</h2>
                <span class="price">$33.34</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="phonecase">
                <img src="img/phonecase/phonecase10.jpg" alt="" class="product-img">
                <h2 class="product-title">Wish You Were Here iPhone Case</h2>
                <span class="price">$38.89</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="phonecase">
                <img src="img/phonecase/phonecase11.jpg" alt="" class="product-img">
                <h2 class="product-title">Wish You Were Here: The Wavy Edition iPhone Case</h2>
                <span class="price">$40.89</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="phonecase">
                <img src="img/phonecase/phonecase12.jpg" alt="" class="product-img">
                <h2 class="product-title">Travis Scott Cactus Jack iPhone Case</h2>
                <span class="price">$47.23</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="phonecase">
                <img src="img/phonecase/phonecase13.jpg" alt="" class="product-img">
                <h2 class="product-title">Horror Poster iPhone Case</h2>
                <span class="price">$33.34</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="phonecase">
                <img src="img/phonecase/phonecase14.jpg" alt="" class="product-img">
                <h2 class="product-title">Butterfly Effect (Life Is Strange) iPhone Case</h2>
                <span class="price">$29.97</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="phonecase">
                <img src="img/phonecase/phonecase15.jpg" alt="" class="product-img">
                <h2 class="product-title">"Rewind" Life Is Strange iPhone Case</h2>
                <span class="price">$31.21</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>
            <div class="product-box" data-item="phonecase">
                <img src="img/phonecase/phonecase16.jpg" alt="" class="product-img">
                <h2 class="product-title">Consequences (Life Is Strange) iPhone Case</h2>
                <span class="price">$29.97</span>
                <img src="img/shopping-bag-solid-24.png" class="bx bx-shopping-bag add-cart">
            </div>

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
    <script src="main.js"></script>

</body>
</html>