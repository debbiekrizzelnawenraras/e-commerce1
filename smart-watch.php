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
          <a class="nav-link active btn btn-outline-success bg-light" aria-current="page" href="index.php"><i class="bi bi-house-fill"></i> Home </a>
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
          <i class="bi bi-cart-plus-fill"></i><a href="addtocart.php">Add to Cart</a> 
        </button>
        <!-- <li class="nav-item">
          <a class="nav-link ">Disabled</a>
        </li> -->
      </ul>
      <form class="d-flex" role="Login/Register">
        <button class="btn btn-outline-success bg-light" type="Login/Register"><i class="bi bi-person-plus-fill"></i><a href="auth/login.php">Login/Register</a></button>
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

<!-- this is for the content -->
<div class="container">
    <h1 class="mt-5 mb-4 text-center">Smart-Watch</h1>

    <div class="card card-custom border-warning">
        <div class="row g-0"> 
                
            <div class="col-md-6 card-img-container"> 
                <img src="Image/Smart-Watch.png.webp" class="img-fluid rounded-start h-100 w-75" alt="Gadgets on display">
            </div>
                
            <div class="col-md-6"> 
                <div class="card-body">
                    <h5 class="card-title mt-5 mb-4">The Smart-Watch you Dreamed off</h5>
                    <p class="card-text">
                      A smartwatch is a portable computing device worn like a traditional wristwatch. It acts as an extension of your smartphone, displaying notifications, running mobile apps, and, most importantly, collecting vast amounts of biometric data.
                    </p>
                    <p class="card-text">
                        <small class="text-muted">Shop with confidence knowing you're getting the best value and support.</small>
                    </p>
                    <p class="small text-warning mb-1">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                    </p>
                    <div>
                      <span class="text-muted text-decoration-line-through me-2">
                          $100
                      </span>
                      <span class="fs-4 fw-bold text-dark d-inline-block">
                          $30
                      </span>
                  </div>
                        
                    <a href="addtocart.php" class="btn btn-success mt-3"> <button onclick="addtocart('p1')"><i class="bi bi-bag-plus me-2"></i>Add to Cart</button></a>
                </div>
            </div>
                
        </div>
    </div>
    <p class="mt-5 text-center">Thank you for making us your trusted source for technology.</p>
</div>
             

<!-- Bootstrap 5 JS Bundle (required for the tabs to switch views) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    

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