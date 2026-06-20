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
          <a class="nav-link active btn btn-outline-success bg-light" aria-current="page" href="index1.php"><i class="bi bi-house-fill"></i> Home </a>
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

<!-- this is for the content -->
<header class="hero-gadget text-center mb-5 bg-info">
        <div class="container">
            <h1 class="display-3 mb-3 text-dark">Powering the Future, Today.</h1>
            <p class="lead text-light-50 mx-auto" style="max-width: 600px;">
                We are more than just a gadget store. We are curators of innovation, dedicated to bringing you the cutting-edge technology that shapes tomorrow.
            </p>
        </div>
    </header>

    <section id="our-story" class="py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="badge bg-primary mb-2">Our Origin</span>
                    <h2 class="display-6 fw-bold mb-4">The Pulse of Tech Innovation</h2>
                    <p class="lead">Technology was born from a simple frustration: the best gadgets were always hard to find, hard to trust, and often overpriced.</p>
                    <p class="text-muted">Our founders—a veteran software engineer and a product design fanatic—decided to solve this by creating a platform that tests, vets, and delivers only the most reliable and genuinely innovative technology. We are your filter for the future.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-4">
                        <a href="index1.php" class="btn btn-outline-secondary bg-info text-black btn-lg px-4">See Our Latest Gear</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="Image/gadgets1.png" class="img-fluid rounded shadow story-image" alt="Gadget lab or team working with tech" style="min-height: 400px; object-fit: cover;">
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Edge -->
    <section id="tech-features" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center display-6 fw-bold mb-5">Our Unbeatable Tech Edge</h2>
            <div class="row text-center g-4">
                
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 bg-white rounded shadow-sm h-100">
                        <i class="bi bi-cpu feature-icon-gadget mb-3"></i>
                        <h3 class="h5 fw-bold">Vetted Performance</h3>
                        <p class="text-muted">Every device is put through rigorous, real-world testing by our engineers before it hits the shelf.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="p-4 bg-white rounded shadow-sm h-100">
                        <i class="bi bi-lightning-charge feature-icon-gadget mb-3"></i>
                        <h3 class="h5 fw-bold">Hyper-Fast Delivery</h3>
                        <p class="text-muted">Using optimized logistics, we ensure the latest tech gets into your hands faster than anyone else.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-12">
                    <div class="p-4 bg-white rounded shadow-sm h-100">
                        <i class="bi bi-code-slash feature-icon-gadget mb-3"></i>
                        <h3 class="h5 fw-bold">Expert Tech Support</h3>
                        <p class="text-muted">Our support team consists of tech experts, not just call center agents, ready to solve complex issues.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    <!-- team -->
    <section id="team" class="py-5">
        <div class="container">
            <h2 class="text-center display-6 fw-bold mb-5">The Minds Behind the Gear</h2>
            <div class="row justify-content-center g-4">
                
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center team-card border-2 shadow-sm">
                        <img src="Image/Team1.jpg" class="card-img-top mx-auto mt-3 rounded-circle" alt="Chief Technology Officer" style="width: 120px; height: 120px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title mb-1">Alex Chen</h5>
                            <p class="text-primary mb-2 small">Chief Technology Officer (CTO)</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card text-center team-card border-2 shadow-sm">
                        <img src="Image/Team2.webp" class="card-img-top mx-auto mt-3 rounded-circle" alt="Lead Product Buyer" style="width: 120px; height: 120px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title mb-1">Maya Singh</h5>
                            <p class="text-primary mb-2 small">Lead Product Curator</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card text-center team-card border-2 shadow-sm">
                        <img src="Image/Team3.jpg" class="card-img-top mx-auto mt-3 rounded-circle" alt="Customer Support Lead" style="width: 120px; height: 120px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title mb-1">David Lee</h5>
                            <p class="text-primary mb-2 small">Customer Success Lead</p>
                        </div>
                    </div>
                </div>
              </section>

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