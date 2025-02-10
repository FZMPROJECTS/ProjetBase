<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Clin D'oeil</title>
    <link rel="icon" href="./image2/logo111.png">

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- header section starts  -->
  <?php  require 'login.php'?>
    <header class="header">
      <a href="#" class="logo">
        <img
          src="./image2/logo111.png"
          alt=""
        />
      </a>

      <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#menu">menu</a>
        <a href="#Anything delivered">Anything delivered</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
        <a href="#Let’s do it together">Let’s do it together</a>
      </nav>

      <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
      </div>

      <div class="search-form">
        <input type="search" id="search-box" placeholder="search here..." />
        <label for="search-box" class="fas fa-search"></label>
      </div>

      <div class="cart-items-container">
        <div class="cart-item">
          <span class="fas fa-times"></span>
          <img src="images/cart-item-1.png" alt="" />
          <div class="content">
            <h3>cart item 01</h3>
            <div class="price">$15.99/-</div>
          </div>
        </div>
        <div class="cart-item">
          <span class="fas fa-times"></span>
          <img src="images/cart-item-2.png" alt="" />
          <div class="content">
            <h3>cart item 02</h3>
            <div class="price">$15.99/-</div>
          </div>
        </div>
        <div class="cart-item">
          <span class="fas fa-times"></span>
          <img src="images/cart-item-3.png" alt="" />
          <div class="content">
            <h3>cart item 03</h3>
            <div class="price">$15.99/-</div>
          </div>
        </div>
        <div class="cart-item">
          <span class="fas fa-times"></span>
          <img src="images/cart-item-4.png" alt="" />
          <div class="content">
            <h3>cart item 04</h3>
            <div class="price">$15.99/-</div>
          </div>
        </div>
        <a href="#" class="btn">checkout now</a>
      </div>
    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">
      <div class="content">
        <h3>Food delivery and more</h3>
        <p>
          “Pour une meilleure expérience, nous vous recommandons d'activer votre localisation ou d'ajouter une adresse de livraison. Continuer."
        </p>
        <a href="#" class="btn">get yours now</a>
      </div>
    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">
      <h1 class="heading"><span>about</span> us</h1>

      <div class="row">
        <div class="image">
          <img src="images/about.jpg" alt="" />
        </div>

        <div class="content">
          <h3>HIGH DELIVERY FLZ</h3>
          <p>
            High Delivery, 4 ans d’expérience dans le domaine de la livraison, 
            En raison des difficultés, les problèmes et les obstacles rencontrés par le secteur du E-commerce et la vente en ligne,
            nous proposons des prestations complètes, de première qualité 
            qui prend en charge vos projets en termes de réalisation et l’accomplissement de vos objectifs,
            dans des conditions conformes aux règles de l'art.
            <br>
            ->Ramassage
            <br>
            ->Livraison à domicile
            <br>
            ->Retours des fonds
            <br>
            ->Echange
            <br>
            ->Remboursement
          </p>
         
          <a href="#" class="btn">learn more</a>
        </div>
      </div>
    </section>

    <!-- about section ends -->

    <!-- menu section starts  -->

    <section class="menu" id="menu">
      <h1 class="heading">our <span>menu</span></h1>

      <div class="box-container">
        <div class="box">
          <img
            src="images/mc.png"
            alt=""
          />
          <h3>Macdonald</h3>
          <div class="price">$0.99 <span>1.99</span></div>
          <a href="loginv.php" name = "addtocart" class="btn">add to cart</a>
        </div>
        <div class="box">
          <img
            src="images/nike.jpg"
            alt=""
          />
          <h3>NIKE</h3>
          <div class="price">$1.99 <span>2.99</span></div>
          <a href="loginv.php" name = "addtocart" class="btn">add to cart</a>
        </div>
        <div class="box">
          <img
            src="images/flower.png"
            alt=""
          />
          <h3>FLOWER SHOP</h3>
          <div class="price">$1.99 <span>2.99</span></div>
          <a href="loginv.php" name = "addtocart" class="btn">add to cart</a>
        </div>

        <div class="box">
          <img
            src="images/kfc.png"
            alt=""
          />
          <h3>KFC</h3>
          <div class="price">$1.99 <span>2.99</span></div>
          <a href="loginv.php" name = "addtocart" class="btn">add to cart</a>
        </div>

        <div class="box">
          <img
            src="images/lyon.jpg"
            alt=""
          />
          <h3>TACOS LYON</h3>
          <div class="price">$1.99 <span>2.99</span></div>
          <a href="loginv.php" name = "addtocart" class="btn">add to cart</a>
        </div>
        <div class="box">
          <img
            src="images/zara.jpg"
            alt=""
          />
          <h3>ZARA</h3>
          <div class="price">$2.99 <span>2.99</span></div>
          <a href="loginv.php" name = "addtocart" class="btn">add to cart</a>
        </div>
        <div class="box">
          <img
            src="images/matjane.jpg"
            alt=""
          />
          <h3>MARJANE</h3>
          <div class="price">$0.00 <span>1.99</span></div>
          <a href="loginv.php" name = "addtocart" class="btn">add to cart</a>
        </div>

        <div class="box">
          <img
            src="images/pizza.png"
            alt=""
          />
          <h3>PIZZA HUT</h3>
          <div class="price">$1.99 <span>2.99</span></div>
          <a href="loginv.php" name = "addtocart" class="btn">add to cart</a>
        </div>
        <div class="box">
          <img
            src="images/marwa.png"
            alt=""
          />
          <h3>MARWA</h3>
          <div class="price">$1.99 <span>2.99</span></div>
          <a href="loginv.php" name = "addtocart" class="btn">add to cart</a>
        </div>

        <div class="box">
          <img
            src="./image2/stat.jpg"
            alt=""
          />
          <h3>Starbucks</h3>
          <div class="price">$0.99 <span>1.99</span></div>
          <a href="loginv.php" name = "addtocart" class="btn">add to cart</a>
        </div>
      </div>
    </section>

    <!-- menu section ends -->

    <section class="products" id="Anything delivered">
      <h1 class="heading">our <span>Anything delivered</span></h1>

      <div class="box-container">
        <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
          </div>
          <div class="image">
            <img
              src="images/1.jpg"
              alt=""
            />
          </div>
          <div class="content">
            <h3>Your city's top restaurants</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
        
          </div>
        </div>

        <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
          </div>
          <div class="image">
            <img
              src="images/2.png"
              alt=""
            />
          </div>
          <div class="content">
            <h3>Fast delivery</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            
          </div>
        </div>

        <div class="box">
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
          </div>
          <div class="image">
            <img
              src="images/33"
              alt=""
            />
          </div>
          <div class="content">
            <h3>Groceries delivery & more</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            
          </div>
        </div>
      </div>
    </section>

    <!-- review section starts  -->

    <section class="review" id="review">
      <h1 class="heading">customer's <span>review</span></h1>

      <div class="box-container">
        <div class="box">
          <img src="images/quote-img.png" alt="" class="quote" />
          <p>Aujourd'hui, je travaille avec le site FLZ pour gagner du temps.
             Avant j'utilisais Internet pour passer mes commandes montures, 
             mais cela me prenait 2 à 3 minutes par opération.
             Maintenant, cela ne me prend plus que quelques secondes...</p>
          <img src="images/pic-1.png" class="user" alt="" />
          <h3>HICHAM SIFKIR</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>

        <div class="box">
          <img src="images/quote-img.png" alt="" class="quote" />
          <p>
            J’utilise le site FLZ depuis trois ans environ, 
            et j’ai vu les améliorations au fur et à mesure,
             notamment au niveau des mises à jour de catalogues.
              J’apprécie en tout premier lieu le gain de temps que
               le système permet pour les commandes...
          </p>
          <img src="images/pic-2.png" class="user" alt="" />
          <h3>AHLAM ADIM</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>

        <div class="box">
          <img src="images/quote-img.png" alt="" class="quote" />
          <p>
            La fiabilité de cette plate-forme  pour les transferts de commandes nous permet 
            de nous focaliser sur les services à valeur ajoutée.
             La diffusion des catalogues est d’une facilité exemplaire,
              elle remplace de nombreux échanges en direct...
          </p>
          <img src="images/pic-3.png" class="user" alt="" />
          <h3>SAMI MNIA</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>
      </div>
    </section>

    <!-- review section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">
      <h1 class="heading"><span>contact</span> us</h1>

      <div class="row">
        <iframe
          class="map"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1629452077891!5m2!1sen!2sin"
          allowfullscreen=""
          loading="lazy"
        ></iframe>

        <form action="">
          <h3>get in touch</h3>
          <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="text" placeholder="name" />
          </div>
          <div class="inputBox">
            <span class="fas fa-envelope"></span>
            <input type="email" placeholder="email" />
          </div>
          <div class="inputBox">
            <span class="fas fa-phone"></span>
            <input type="number" placeholder="number" />
          </div>
          <input type="submit" value="contact now" class="btn" />
        </form>
      </div>
    </section>

    <!-- contact section ends -->

    <!-- blogs section starts  -->

    <section class="blogs" id="Let’s do it together">
      <h1 class="heading"> <span>Let’s do it together</span></h1>

      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="images/111.png" alt="" />
          </div>
          <div class="content">
            <a href="#" class="title">Become a rider</a>
           
            <p>
              Be your own boss! Enjoy flexibility, 
              freedom and competitive earnings
                   by delivering with FLZ.
            </p>
            <a href="#" class="btn">Join us</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/222.jpg" alt="" />
          </div>
          <div class="content">
            <a href="#" class="title">Become a partner</a>
           
            <p>
               Grow with FLZ! Our technology and 
              user base can help you boost sales and 
                  unlock new opportunities!
            </p>
            <a href="#" class="btn">Join us</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/333" alt="" />
          </div>
          <div class="content">
            <a href="#" class="title">Careers</a>
  
            <p>
              Ready for an exciting new challenge?
                If you’re ambitious, humble,
                and love working with others,
                then we want to hear from you!
            </p>
            <a href="#" class="btn">Join us</a>
          </div>
        </div>
      </div>
    </section>

    <!-- blogs section ends -->

    <!-- footer section starts  -->

    <section class="footer">
      <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
      </div>

      <div class="links">
        <a href="#">home</a>
        <a href="#">about</a>
        <a href="#">menu</a>
        <a href="#">Anything delivered</a>
        <a href="#">review</a>
        <a href="#">contact</a>
        <a href="#">Let’s do it together</a>
      </div>

      <div class="credit">
        created by <span> GROUPE FLZ  </span> | all rights reserved
      </div>
    </section>

    <!-- footer section ends -->

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
  </body>
</html>
