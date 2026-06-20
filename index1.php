<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  </head>
  <body>
    <!-- for nav bar -->
    <section>
        <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="Image/Image1.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Gadgets
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item me-2">
          <a class="nav-link active btn btn-outline-success bg-light" aria-current="page" href="#"><i class="bi bi-house-fill"></i>Home </a>
        </li>
        <li class="nav-item me-2">
          <a class="nav-link bg-light btn btn-outline-success" href="aboutus.php"><i class="bi bi-question-circle"></i> About Us</i></a>
        </li>
        
        <li class="nav-item button dropdown me-2">
          <a class="nav-link dropdown-toggle btn btn-outline-success bg-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-bag"></i>
            Products
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="smart-glasses.php">Smart-Glasses</a></li>
            <li><a class="dropdown-item" href="smart-phone.php">Smart-Phone</a></li>
            <li><a class="dropdown-item" href="smart-watch.php">Smart-Watch</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="moregadgets.php">More Gadgets</a></li>
          </ul>
        </li>
        <button type="button " class="btn btn-outline-success bg-light">
          <a href="addtocart.php">
          <i class="bi bi-cart-plus-fill"></i> Add to Cart</a>
        </button>
        <!-- <li class="nav-item">
          <a class="nav-link ">Disabled</a>
        </li> -->
      </ul>
      <form class="d-flex" role="Login/Register">
        <button class="btn btn-outline-success bg-light" type="Login/Register"></i><i class="bi bi-door-closed-fill"></i></i><a href="auth/logout.php">Logout</a></button>
      </form>

      <!-- <i class="bi bi-cart4"></i> -->
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>
    </section>

    <!-- this is for carousel -->
     <section>
        <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Image/gadget1.jpg" class="d-block mx-auto w-100 h-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Image/images2.png" class="d-block mx-auto w-100 h-50" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Image/gadget2.avif" class="d-block mx-auto w-100 h-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
     </section>

      <section>
      <h1 class="About Us mt-5 text-center">About Us</h1>
     <div class="container">
        <div class="card card-custom border-warning">
            <div class="row g-0 p-4"> 
              <div class="col-md-3 card-img-container d-flex"> 
              <img src="Image/gadgets1.png" class="img-fluid rounded-start card-img-top h-100 w-100" alt="Assortment of Gadgets">
              </div>
            <div class="col-md-6"> 
          <div class="card-body">
             <h5 class="card-title">Explore Our Gadgets</h5>
                <p class="card-text">
                  We believe in enriching everyday life through technology. We provide carefully curated gadgets, unbeatable value, and the expert guidance necessary to make the best digital choices.
                  From smartwatches and portable gaming devices to innovative home tech, our selection is designed to keep you ahead of the curve.
                </p>
                  <p class="card-text">
                    <small class="text-muted">Discover your next tech obsession today!</small>
                  </p>
                    <a href="moregadgets.php" class="btn btn-primary mt-3">Shop Now</a>
                  </div>
                </div>
            </div>
    </section>

    <!-- youtube -->
         <section id="gallery" class="py-5 ">
          <!-- <div class="card card-custom border-warning">
            <div class="row g-0 p-md-3"> -->
          <h1 class="text-center">Gallery</h1>
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                  <span class="badge bg-primary mb-2">Aura Drone 7 Pro</span>
                   <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-2">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/G9IvJlRbr4k?si=o0-SLukYTayJbQCs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                   </div>
                   </div>
                <div class="col-md-6">
                  <span class="badge bg-primary mb-2">Nova Watch</span>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-2">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/9dLjaY7D7Dw?si=M_CkA5MDhwG4nWrj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

     <!-- card -->

      <section>
        <!-- <div class="card card-custom border-warning">
            <div class="row g-0 p-md-3"> -->
        <h1 class="Gadgets mt-2 text-center">GADGETS</h1>
        <!-- <div class="card card-custom border-warning">
        <div class="row g-0 p-md-4"> -->
        <div class="row row-cols-1 row-cols-md-3 my-5 mx-5">
  <div class="col">
    <div class="card h-100">
      <img src="Image/Smart-Glasses.png.webp" class="card-img-top bg-success" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Smart-Glasses</h5>
        <p class="card-text">Glasses that can show info, take pictures, or connect to the internet while worn.</p>
        <div> 
    <div>
        <span class="text-muted text-decoration-line-through me-2">
            $99.99
        </span>
        <span class="fs-4 fw-bold text-dark d-inline-block">
            $49.99
        </span>
    </div>

    <div class="mt-2">
      <button class="btn btn-warning w-100 rounded-pill">
        <i class="bi bi-bag-plus me-2"></i><a href="addtocart.php">Add to Cart</a>
    </button>
        <!-- <button class="btn btn-warning"><i class="bi bi-cart-plus-fill"></i><a href="addtocart.html">Add to Cart</a></button> -->
    </div>
</div>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="Image/Smart-Phone.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Smart-Phone</h5>
        <p class="card-text">A mobile phone that lets you call, text, use apps, take photos, and access the internet.</p>
        <div> 
    <div>
        <span class="text-muted text-decoration-line-through me-2">
            $1,200
        </span>
        <span class="fs-4 fw-bold text-dark d-inline-block">
            $800
        </span>
    </div>

    <div class="mt-2">
      <button class="btn btn-warning w-100 rounded-pill">
        <i class="bi bi-bag-plus me-2"></i><a href="addtocart.php">Add to Cart</a>
    </button>
        <!-- <button href="addtocart.html" class="btn btn-warning"><i class="bi bi-cart-plus-fill"></i>Add to Cart</button> -->
    </div>
</div>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  
  <div class="col">
    <div class="card h-100">
      <img src="Image/Smart-Watch.png.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Smart-Watch</h5>
        <p class="card-text">A digital watch that connects to your phone and tracks health, time, and messages.</p>
        <div> 
    <div>
        <span class="text-muted text-decoration-line-through me-2">
            $100
        </span>
        <span class="fs-4 fw-bold text-dark d-inline-block">
            $30
        </span>
    </div>

    <div class="mt-2">
      <button class="btn btn-warning w-100 rounded-pill">
        <i class="bi bi-bag-plus me-2"></i><a href="addtocart.php">Add to Cart</a>
    </button>
        <!-- <button href="addtocart.html" class="btn btn-warning"><i class="bi bi-cart-plus-fill"></i>Add to Cart</button> -->
    </div>
</div>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  </div>
</div>
</div>
      </section>

         <!-- Pagination/Load More Button -->
            <div class="col-12 text-center mb-2 mt-5">
                <button class="btn btn-info ">
                  <a href="products.php" class="text-dark">
                    View More Gadgets</a>
                </button>
            </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>

  <!--Footer -->
  <footer class="footer-bg-color bg-dark text-primary text-center pt-5">
    <div class="container">
        
        <div class="row pb-4">
            
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <h5 class="text-uppercase text-white mb-4">About us</h5>
                <p class="small text-info">
                    Every product is vigorously tested by our in-house team before it earns a spot in our catalog.
                    We promise fair, upfront pricing with no hidden fees, backed by hassle-free returns.
                    Our dedicated tech team is always ready to answer your questions and help you maximize your gadgets.
                </p>
                <a href="#" class="footer-link-color small text-decoration-none text-warning">Learn more</a>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h5 class="text-uppercase text-white mb-4"><i class="bi bi-telephone-fill">Contact & Address</i></h5>
                <ul class="list-unstyled mb-0 small text-light-50">
                    <li class="mb-2">
                        <strong class="text-warning">Address:</strong><strong class="text-info"> Barangay D'Mabirukan ilang Kantong pakanan kung saan iyong Madadatnan ay syang kulay Berdeng pintuan<i class="bi bi-emoji-laughing-fill"></i></strong>
                    </li>
                    <li class="mb-2">
                        <strong class="text-warning">Telephone:</strong> <strong class="text-info"> +63 9123 456 1457</strong>
                    </li>
                    <li>
                        <strong class="text-warning">Email:</strong> <strong class="text-info"> friendswith<i class="bi bi-emoji-kiss-fill"></i>@yourdomain.com</strong>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="text-uppercase mb-4 text-light">Social media</h5>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item me-3">
                        <a href="#" class="footer-link-color text-info" aria-label="Twitter"><i class="bi bi-twitter fs-5"></i></a>
                    </li>
                    <li class="list-inline-item me-3">
                        <a href="#" class="footer-link-color text-info" aria-label="Facebook"><i class="bi bi-facebook fs-5"></i></a>
                    </li>
                    <li class="list-inline-item me-3">
                        <a href="#" class="footer-link-color text-info" aria-label="LinkedIn"><i class="bi bi-linkedin fs-5"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="footer-link-color text-info" aria-label="Instagram"><i class="bi bi-instagram fs-5"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        
        <hr class="text-white-50">

        <div class="row pt-2 pb-3">
            <div class="col-12 text-center small text-warning">
                Copyright ©2025 All rights reserved | This project is made with<i class="bi bi-arrow-through-heart-fill"></i>
            </div>
        </div>
        
    </div>
</footer>

</html>