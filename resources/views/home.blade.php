<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="" />
  <meta name="keywords" content="" />

  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&family=Muli:wght@400;700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">

  <title>Meow Shop.</title>
</head>

<body>

  <div class="search-form" id="search-form">
    <form action="">
      <input type="search" class="form-control" placeholder="Enter keyword to search...">
      <button class="button">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
          <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
        </svg>
      </button>
      <button class="button">
        <div class="close-search">
          <span class="icofont-close js-close-search"></span>
        </div>
      </button>
    </form>
  </div>
  
  <nav class="site-nav mb-5">
    <div class="sticky-nav js-sticky-header">

      <div class="container position-relative">
        <div class="site-navigation text-center dark">
          <a href="index.html" class="logo menu-absolute m-0">Meow Shop<span class="text-primary">.</span></a>

          <ul class="js-clone-nav pl-0 d-none d-lg-inline-block site-menu">
            <li class="has-children">
              <a href="#">Catalog</a>
              <ul class="dropdown">
                <li><a href="#">Gundam</a></li>
                <li><a href="#">Tokyo Ghoul</a></li>
                <li><a href="#">Kimetsu no yaiba</a></li>
                <li><a href="#">One piece</a></li>
              </ul>
            </li>

            <li class="has-children">
              <a href="#">Pre Order</a>
              <ul class="dropdown">
                <li><a href="#">Overlord</a></li>
                <li><a href="#">Hololive</a></li>
                <li><a href="#">One piece</a></li>
                <li><a href="#">Re:Zero</a></li>
              </ul>
            </li>

            <li class="active"><a href="shop.html">Order Status</a></li>
            <li class="has-children">
              <a href="#">ERM System</a>
              <ul class="dropdown">
                <li><a href="elements.html">Customer</a></li>
                <li><a href="#">Order Status</a></li>
                <li><a href="#">Add Product</a></li>
              </ul>
            </li>
          </ul>
          

          

          <div class="menu-icons">

            <a href="#" class="btn-custom-search" id="btn-search">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
              </svg>
            </a>

            <a href="#" class="user-profile">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
              </svg>
              <p>Seller ID :</p>
            </a>

            <a href="cart.html" class="cart">
              <span class="item-in-cart">2</span>
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
              </svg>
            </a>

          </div>

          <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>

        </div>
      </div>
    </div>
  </nav>
  
  <div class="untree_co-section">
    <div class="container">

      <div class="row">
        <div class="col-6 col-sm-6 col-md-6 mb-4 col-lg-4">
          <div class="product-item">
            <a href="shop-single.html" class="product-img">
              <span class="custom-badge new">New</span>
              <img src="images/Godenel.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="title"><a href="#">God Enel By LX Studio</a></h3>
            <div class="price">
              <span>24,900 THB</span>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 mb-4 col-lg-4">
          <div class="product-item">
            <a href="shop-single.html" class="product-img">
              <span class="custom-badge sale">Sale</span>
              <img src="images/tokyogou.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="title"><a href="#">Ken Kaneki By Kura Collectibles</a></h3>
            <div class="price">
              <del>25,000 THB</del> &mdash; <span>21,000 THB</span>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 mb-4 col-lg-4">
          <div class="product-item">
            <a href="shop-single.html" class="product-img">
              <img src="images/Nami.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="title"><a href="#">Nami By Mr.J Studio</a></h3>
            <div class="price">
              <span>18,000 THB</span>
            </div>
          </div>
        </div>

        <div class="col-6 col-sm-6 col-md-6 mb-4 col-lg-4">

          <div class="product-item">
            <a href="shop-single.html" class="product-img">
              <img src="images/giyu.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="title"><a href="#">Giyu & Sabito By The Super Dimension Studio</a></h3>
            <div class="price">
              <span>22,000 THB</span>
            </div>
          </div>

        </div>
        <div class="col-6 col-sm-6 col-md-6 mb-4 col-lg-4">

          <div class="product-item">
            <a href="shop-single.html" class="product-img">
              <span class="custom-badge sale">Sale</span>
              <img src="images/inosuke.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="title"><a href="#">Inosuke By TNT Studio</a></h3>
            <div class="price">
              <del>14,500 THB</del> &mdash; <span>12,500 THB</span>
            </div>
          </div>


        </div>
        <div class="col-6 col-sm-6 col-md-6 mb-4 col-lg-4">

          <div class="product-item">
            <a href="shop-single.html" class="product-img">
              <span class="custom-badge sale">Sale</span>
              <img src="images/tanjiro.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="title"><a href="#">Tanjiro x Nezuko By Goose Fty Studio</a></h3>
            <div class="price">
              <del>7,950 THB</del> &mdash; <span>6,500 THB</span>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->

  <div class="untree_co-section">
    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="col-md-6">
          <h2 class="h3">Popular Items</h2>        
        </div>
        <div class="col-sm-6 carousel-nav text-sm-right">
          <a href="#" class="prev js-custom-prev-v2">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path fill-rule="evenodd" d="M8.354 11.354a.5.5 0 0 0 0-.708L5.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z"/>
              <path fill-rule="evenodd" d="M11.5 8a.5.5 0 0 0-.5-.5H6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5z"/>
            </svg>
          </a>
          <a href="#" class="next js-custom-next-v2">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path fill-rule="evenodd" d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z"/>
              <path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"/>
            </svg>
          </a>
        </div>
      </div> <!-- /.heading -->
      <div class="owl-3-slider owl-carousel">
        <div class="item">
          <div class="product-item">
            <a href="shop-single.html" class="product-img">
              <span class="custom-badge new">New</span>
              <img src="images/netsuko.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="title"><a href="#">Nezuko By Whale Studio</a></h3>
            <div class="price">
              <span>2,800 THB</span>
            </div>
          </div>
        </div> <!-- /.item -->
        <div class="item">
          <div class="product-item">
            <a href="shop-single.html" class="product-img">
              <span class="custom-badge sale">Sale</span>
              <img src="images/giant.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="title"><a href="#">Fools Paradise Vinyl series: Chocolate Game</a></h3>
            <div class="price">
              <del>15,000 THB</del> &mdash; <span>10,500 THB</span>
            </div>
          </div>
        </div> <!-- /.item -->
        <div class="item">
          <div class="product-item">
            <a href="shop-single.html" class="product-img">
              <img src="images/pikachu.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="title"><a href="#">Pikachu By Egg Studio</a></h3>
            <div class="price">
              <span>7,380 THB</span>
            </div>
          </div>
        </div> <!-- /.item -->
        <div class="item">
          <div class="product-item">
            <a href="shop-single.html" class="product-img">
              <img src="images/slamdunk.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="title"><a href="#">Sakuragi Hanamichi By ShowHand studio</a></h3>
            <div class="price">
              <span>2,800 THB</span>
            </div>
          </div>
        </div> <!-- /.item -->
        <div class="item">
          <div class="product-item">
            <a href="shop-single.html" class="product-img">
              <span class="custom-badge sale">Sale</span>
              <img src="images/yoda.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="title"><a href="#">Star Wars The Child (Baby Yoda) Life Size Figure</a></h3>
            <div class="price">
              <del>13,500 THB</del> &mdash; <span>11,500 THB</span>
            </div>
          </div>
        </div> <!-- /.item -->
        <div class="item">
          <div class="product-item">
            <a href="shop-single.html" class="product-img">
              <span class="custom-badge sale">Sale</span>
              <img src="images/storm.jpg" alt="Image" class="img-fluid">
            </a>
            <h3 class="title"><a href="#">Hot Toys – TMS011 – The Mandalorian : Remnant Stormtrooper</a></h3>
            <div class="price">
              <del>8,000 THB</del> &mdash; <span>6,400 THB</span>
            </div>
          </div>
        </div> <!-- /.item -->
      </div>
    </div> <!-- /.container -->
  </div> <!-- /.untree_co-section -->  

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/custom.js"></script>
  
</body>
</html>