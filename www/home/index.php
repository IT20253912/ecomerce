<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>gemshop</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/main.css">
  <link rel="stylesheet" href="./assets/css/home.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>

    

    <div class="nav-wrapper">
      <div class="container">

        <h1 class="h1">
          <a href="./index.html" class="logo">Ex<span class="span">Gem</span></a>
        </h1>

        <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
          <ion-icon name="menu-outline"></ion-icon>
        </button>

        <nav class="navbar" data-navbar>

          <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>

          <ul class="navbar-list">

            <li>
              <a href="#" class="navbar-link">Home</a>
            </li>

            <li>
              <a href="#" class="navbar-link">About</a>
            </li>

            <li>
              <a href="#" class="navbar-link">Shop</a>
            </li>

            <li>
              <a href="#" class="navbar-link">Blog</a>
            </li>

            <li>
              <a href="#" class="navbar-link">Products</a>
            </li>

            <li>
              <a href="../seller/auth" class="navbar-link">Seller Login</a>
            </li>

          </ul>

        </nav>

        <div class="header-action">

          <div class="search-wrapper" data-search-wrapper>

            <button class="header-action-btn" aria-label="Toggle search" data-search-btn>
              <ion-icon name="search-outline" class="search-icon"></ion-icon>
              <ion-icon name="close-outline" class="close-icon"></ion-icon>
            </button>

            <div class="input-wrapper">
              <input type="search" name="search" placeholder="Search here" class="search-input">

              <button class="search-submit" aria-label="Submit search">
                <ion-icon name="search-outline"></ion-icon>
              </button>
            </div>

          </div>

          <button class="header-action-btn" aria-label="Open whishlist" data-panel-btn="whishlist">
            <ion-icon name="heart-outline"></ion-icon>

            <data class="btn-badge" value="3">03</data>
          </button>

          <button class="header-action-btn" aria-label="Open shopping cart" data-panel-btn="cart">
            <ion-icon name="basket-outline"></ion-icon>

            <data class="btn-badge" value="2">02</data>
          </button>

        </div>

      </div>
    </div>

  </header>





  <!-- 
    - #ASIDE
  -->

  <aside class="aside">

    <div class="side-panel" data-side-panel="whishlist">

      <button class="panel-close-btn" aria-label="Close whishlist" data-panel-btn="whishlist">
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <ul class="panel-list">

        <li class="panel-item">
          <a href="./product-details.html" class="panel-card">

            <figure class="item-banner">
              <img src="./assets/images/product-small-1.jpg" width="46" height="46" loading="lazy"
                alt="Bright Side Vegetarian">
            </figure>

            <div>
              <p class="item-title">Bright Side Vegetarian</p>

              <span class="item-value">$20.15x1</span>
            </div>

            <button class="item-close-btn" aria-label="Remove item">
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </a>
        </li>

        <li class="panel-item">
          <a href="./product-details.html" class="panel-card">

            <figure class="item-banner">
              <img src="./assets/images/product-small-2.jpg" width="46" height="46" loading="lazy" alt="Eco Vegetable">
            </figure>

            <div>
              <p class="item-title">Eco Vegetable</p>

              <span class="item-value">$13.25x2</span>
            </div>

            <button class="item-close-btn" aria-label="Remove item">
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </a>
        </li>

        <li class="panel-item">
          <a href="./product-details.html" class="panel-card">

            <figure class="item-banner">
              <img src="./assets/images/product-small-3.jpg" width="46" height="46" loading="lazy"
                alt="House of Veggies">
            </figure>

            <div>
              <p class="item-title">House of Veggies</p>

              <span class="item-value">$20.15x1</span>
            </div>

            <button class="item-close-btn" aria-label="Remove item">
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </a>
        </li>

      </ul>

      <div class="subtotal">
        <p class="subtotal-text">Subtotal:</p>

        <data class="subtotal-value" value="215.14">$215.14</data>
      </div>

      <a href="./whishlist.html" class="panel-btn">View Whishlist</a>

    </div>

    <div class="side-panel" data-side-panel="cart">

      <button class="panel-close-btn" aria-label="Close cart" data-panel-btn="cart">
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <ul class="panel-list">

        <li class="panel-item">
          <a href="./product-details.html" class="panel-card">

            <figure class="item-banner">
              <img src="./assets/images/product-small-1.jpg" width="46" height="46" loading="lazy"
                alt="Bright Side Vegetarian">
            </figure>

            <div>
              <p class="item-title">Bright Side Vegetarian</p>

              <span class="item-value">$20.15x1</span>
            </div>

            <button class="item-close-btn" aria-label="Remove item">
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </a>
        </li>

        <li class="panel-item">
          <a href="./product-details.html" class="panel-card">

            <figure class="item-banner">
              <img src="./assets/images/product-small-2.jpg" width="46" height="46" loading="lazy" alt="Eco Vegetable">
            </figure>

            <div>
              <p class="item-title">Eco Vegetable</p>

              <span class="item-value">$13.25x2</span>
            </div>

            <button class="item-close-btn" aria-label="Remove item">
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </a>
        </li>

      </ul>

      <div class="subtotal">
        <p class="subtotal-text">Subtotal:</p>

        <data class="subtotal-value" value="215.14">$215.14</data>
      </div>

      <a href="./cart.html" class="panel-btn">View Cart</a>

    </div>

  </aside>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">25% off all products.</p>

            <h2 class="h1 hero-title">
              ExGem <span class="span">Marketplace</span>
              Buying & <span class="span">Selling.</span>
            </h2>

            <p class="hero-text">
              It has survived not only five centuries also there leaped.
            </p>

            <a href="./shop.html" class="btn btn-primary">
              <span class="span">Shop Now</span>

              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>
            </a>

          </div>

          <figure class="hero-banner">
            <img src="./assets/images/gemlogo.png" width="603" height="634" loading="lazy" alt="Vegetables"
              class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service">
        <div class="container">

          <ul class="service-list">

            <li class="service-item">
              <div class="item-icon">
                <img src="./assets/images/icons8-guarantee-30.png" width="40" height="40" loading="lazy" alt="Truck icon">
              </div>

              <h3 class="h3 item-title">Trusted Service</h3>
            </li>

            <li class="service-item">
              <div class="item-icon">
                <img src="./assets/images/service-icon-2.png" width="40" height="40" loading="lazy"
                  alt="Payment card icon">
              </div>

              <h3 class="h3 item-title">Safe Payment</h3>
            </li>

            <li class="service-item">
              <div class="item-icon">
                <img src="./assets/images/service-icon-3.png" width="40" height="40" loading="lazy" alt="Helpline icon">
              </div>

              <h3 class="h3 item-title">24/7 Support</h3>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #OFFERS
      -->

      <section class="section offers">
        <div class="container">

          <ul class="offers-list has-scrollbar">

            <li class="offers-item">
              <a href="./shop.html" class="offers-card">

                <figure class="card-banner">
                  <img src="./assets/images/leftlogo.png" width="292" height="230" loading="lazy"
                    alt="Fresh vegetables package" class="w-100">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Up To 25% Off</p>

                  <h3 class="h3 card-title">Foreign Gems</h3>
                    
                  <div class="btn btn-primary">Shop Now</div>
                </div>

              </a>
            </li>

            <li class="offers-item">
              <a href="./shop.html" class="offers-card">

                <figure class="card-banner">
                  <img src="./assets/images/rightlogo.png" width="336" height="244" loading="lazy"
                    alt="Healthy & fresh beef" class="w-100">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Up To 25% Off</p>

                  <h3 class="h3 card-title">Local Gems</h3>

                  <div class="btn btn-primary">Shop Now</div>
                </div>

              </a>
            </li>

          </ul>

        </div>
      </section>

            <!-- 
        - #CTA
      -->

      <section class="cta">
        <div class="container">

          <p class="section-subtitle">Summer Offer</p>

          <h2 class="h2 section-title">Up To 50% Off All Product.</h2>

          <p class="cta-text">
            It has survived not only five centuries also leaped.
          </p>

          <a href="../cart/index.php?page=products" class="btn btn-primary">
            <span>Shop Now</span>

            <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>
          </a>

        </div>
      </section>





      <!-- 
        - #PRODUCT
      -->


      <?php
// Create a database connection
$conn = mysqli_connect('db', 'gem', 'gem', 'gemshop');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch product data from the database
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

// Initialize an empty string to store the HTML content
$productHTML = '';

// Check if there are any products
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Extract product details from the database
        $productId = $row['id'];
        $productName = $row['name'];
        $productDesc = $row['desc'];
        $productPrice = $row['price'];
        $productRRP = $row['rrp'];
        $productImage = $row['img'];

        // Generate HTML for each product
        $productHTML .= <<<HTML
            <li>
              <div class="product-card">
                <figure class="card-banner">
                  <img src="../images/$productImage" width="189" height="189" loading="lazy" alt="$productName">
                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Wishlist">
                      <ion-icon name="heart-outline"></ion-icon>
                      <div class="tooltip">Add to Wishlist</div>
                    </button>
                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>
                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>
                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>
                <h3 class="h4 card-title">
                  <a href="./product-details.html">$productName</a>
                </h3>
                <div class="price-wrapper">
                  <del class="del">$$productRRP</del>
                  <data class="price" value="$$productPrice">$$productPrice</data>
                </div>
                <button class="btn btn-primary">Add to Cart</button>
              </div>
            </li>
HTML;
    }
} else {
    // Handle the case where no products are found in the database
    $productHTML = '<p>No products found</p>';
}

// Close the database connection
mysqli_close($conn);

// Now you can include the generated HTML within your existing template
?>

      <section class="section product">
        <div class="container">

          <p class="section-subtitle"> -- All Products --</p>

          <h2 class="h2 section-title">All Products</h2>

        

          <ul class="grid-list">
          <?php echo $productHTML; ?>

          </ul>

        </div>
      </section>











      <!-- 
        - #TOP PRODUCT
      -->

    





      <!-- 
        - #PARTNER
      -->

      <section class="section partner">
        <div class="container">

          <p class="section-subtitle"> -- ExGems --</p>

          <h2 class="h2 section-title">Trusted Partners</h2>

          <ul class="has-scrollbar">

            <li class="partner-item">
              <figure class="partner-logo">
                <img src="./assets/images/partner-1.png" width="132" height="134" loading="lazy" alt="Partner logo">
              </figure>
            </li>

            <li class="partner-item">
              <figure class="partner-logo">
                <img src="./assets/images/partner-2.png" width="132" height="134" loading="lazy" alt="Partner logo">
              </figure>
            </li>

            <li class="partner-item">
              <figure class="partner-logo">
                <img src="./assets/images/partner-3.png" width="132" height="134" loading="lazy" alt="Partner logo">
              </figure>
            </li>

            <li class="partner-item">
              <figure class="partner-logo">
                <img src="./assets/images/partner-4.png" width="132" height="134" loading="lazy" alt="Partner logo">
              </figure>
            </li>

            <li class="partner-item">
              <figure class="partner-logo">
                <img src="./assets/images/partner-5.png" width="132" height="134" loading="lazy" alt="Partner logo">
              </figure>
            </li>

            <li class="partner-item">
              <figure class="partner-logo">
                <img src="./assets/images/partner-6.png" width="132" height="134" loading="lazy" alt="Partner logo">
              </figure>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #TESTIMONIALS
      -->

      <section class="section testimonials">
        <div class="container">

          <p class="section-subtitle"> -- Some Testimonial --</p>

          <h2 class="h2 section-title">Feedback From Happy Clients</h2>

          <ul class="has-scrollbar">

            <li class="testi-item">
              <div class="testi-card">

                <div class="card-header">

                  <img src="./assets/images/quote-left.png" width="25" height="25" aria-hidden="true" alt="">

                  <img src="./assets/images/testimonial-1.jpg" width="90" height="90" loading="lazy"
                    alt="Willow Peralta" class="card-avatar">

                  <img src="./assets/images/quote-right.png" width="25" height="25" aria-hidden="true" alt="">

                </div>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <blockquote class="card-text">
                  It was popularised in the 1960s
                  with the release of Letraset sheets
                  containing Lorem passages and more recently with desktop publishing software like including.
                </blockquote>

                <h3 class="card-title">Willow Peralta</h3>

                <p class="card-subtitle">Web Developer</p>

              </div>
            </li>

            <li class="testi-item">
              <div class="testi-card">

                <div class="card-header">

                  <img src="./assets/images/quote-left.png" width="25" height="25" aria-hidden="true" alt="">

                  <img src="./assets/images/testimonial-2.jpg" width="90" height="90" loading="lazy"
                    alt="Pamelia Hamrick" class="card-avatar">

                  <img src="./assets/images/quote-right.png" width="25" height="25" aria-hidden="true" alt="">

                </div>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <blockquote class="card-text">
                  It was popularised in the 1960s
                  with the release of Letraset sheets
                  containing Lorem passages and more recently with desktop publishing software like including.
                </blockquote>

                <h3 class="card-title">Pamelia Hamrick</h3>

                <p class="card-subtitle">Web Developer</p>

              </div>
            </li>

            <li class="testi-item">
              <div class="testi-card">

                <div class="card-header">

                  <img src="./assets/images/quote-left.png" width="25" height="25" aria-hidden="true" alt="">

                  <img src="./assets/images/testimonial-3.jpg" width="90" height="90" loading="lazy"
                    alt="Novella Gerber" class="card-avatar">

                  <img src="./assets/images/quote-right.png" width="25" height="25" aria-hidden="true" alt="">

                </div>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <blockquote class="card-text">
                  It was popularised in the 1960s
                  with the release of Letraset sheets
                  containing Lorem passages and more recently with desktop publishing software like including.
                </blockquote>

                <h3 class="card-title">Novella Gerber</h3>

                <p class="card-subtitle">Web Developer</p>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      



      <!-- 
        - #NEWSLETTER
      -->

      <section class="section newsletter">
        <div class="container">

          <div class="newsletter-card">

            <p class="section-subtitle"> -- Subscribe Newsletter --</p>

            <h2 class="h2 section-title">Sign Up To Newsletter & Get <span class="span">20% Off.</span></h2>

            <form action="" class="newsletter-form">

              <input type="email" name="email" placeholder="Enter your email" required class="input-email">

              <button type="submit" class="btn btn-primary">
                <span>Sign Up</span>

                <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>
              </button>

            </form>

          </div>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="./index.html" class="logo">Ex<span class="span">gems</span></a>

          <p class="footer-text">
            It was popularised in the 1960s with the release of Letraset sheets containing Lorem passages and more
            recently with
            desktop publishing software like including.
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-skype"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Company</p>
          </li>

          <li>
            <a href="./about.html" class="footer-link">About Us</a>
          </li>

          <li>
            <a href="./shop.html" class="footer-link">Shop</a>
          </li>

          <li>
            <a href="./blog.html" class="footer-link">Blog</a>
          </li>

          <li>
            <a href="./shop.html" class="footer-link">Product</a>
          </li>

          <li>
            <a href="./contact.html" class="footer-link">Contact Us</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Contact</p>
          </li>

          <li class="footer-item">
            <div class="contact-icon">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <address class="contact-link">
              7 Green Lake Street Crawfordsville, IN 47933
            </address>
          </li>

          <li class="footer-item">
            <div class="contact-icon">
              <ion-icon name="call-outline"></ion-icon>
            </div>

            <a href="tel:+1800123456789" class="contact-link">+1 800 123 456 789</a>
          </li>

          <li class="footer-item">
            <div class="contact-icon">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <a href="mailto:organica@help.com" class="contact-link">organica@help.com</a>
          </li>

        </ul>

        <div class="footer-list">

          <p class="footer-list-title">Newsletter</p>

          <p class="newsletter-text">
            You will be notified when somthing new will be appear.
          </p>

          <form action="" class="footer-form">
            <input type="email" name="email" placeholder="Email Address *" required class="footer-input">

            <button type="submit" class="footer-form-btn" aria-label="Submit">
              <ion-icon name="mail-outline"></ion-icon>
            </button>
          </form>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2023 . All Rights Reserved.
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a href="#" class="footer-bottom-link">Term and Service</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">Privacy Policy</a>
          </li>

        </ul>

      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-to-top" aria-label="Back to Top" data-back-top-btn>
    <ion-icon name="arrow-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>