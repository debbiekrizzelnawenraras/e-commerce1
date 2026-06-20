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
          <a class="nav-link active btn btn-outline-success bg-light" aria-current="page" href="index1.php"><i class="bi bi-house-fill"></i>Home </a>
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
        <button class="btn btn-outline-success bg-light" type="Login/Register"><i class="bi bi-door-closed-fill"></i></i><a href="auth/logout.php">Logout</a></button>
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

<!-- Main Content: Gadgets Grid -->
    <main class="container text-center py-5">
        <h2 class="text-3xl font-bold text-gray-800 mb-5 border-b pb-2">
            Featured Tech
        </h2>

        <div class="row g-4">
            <!-- Gadget Card 1: Wireless Earbuds -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card gadget-card h-full rounded-xl shadow-lg hover:shadow-xl">
                    <img src="Image/product1.png" class="card-img-top rounded-t-xl" alt="Wireless Earbuds">
                    <div class="card-body flex flex-col">
                        <h5 class="card-title text-xl font-semibold text-gray-900">Aura Pro Earbuds</h5>
                        <p class="card-text text-gray-600 flex-grow">Crystal clear audio and 30-hour battery life with charging case.</p>
                        <div class="mt-2 flex justify-between items-center">
                            <span class="text-2xl font-bold text-indigo-600">$129.99</span>
                            <span class="badge bg-success">In Stock</span>
                        </div>
                        <a href="#" class="btn btn-primary mt-3 w-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Gadget Card 2: Smart Watch -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card gadget-card h-full rounded-xl shadow-lg hover:shadow-xl">
                    <img src="Image/product2" class="card-img-top rounded-t-xl" alt="Smart Watch X1">
                    <div class="card-body flex flex-col">
                        <h5 class="card-title text-xl font-semibold text-gray-900">Zenith Smart Watch X1</h5>
                        <p class="card-text text-gray-600 flex-grow">Track fitness, sleep, and notifications on a brilliant AMOLED display.</p>
                        <div class="mt-2 flex justify-between items-center">
                            <span class="text-2xl font-bold text-indigo-600">$299.00</span>
                            <span class="badge bg-success">In Stock</span>
                        </div>
                        <a href="#" class="btn btn-primary mt-3 w-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Gadget Card 3: Portable Projector -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card gadget-card h-80 rounded-xl shadow-lg hover:shadow-xl">
                    <img src="Image/Product3.avif" class="card-img-top rounded-t h-50 w-100" alt="Portable Projector">
                    <div class="card-body flex flex-col ">
                        <h5 class="card-title text-xl font-semibold text-gray-900">Pocket Cinema Projector</h5>
                        <p class="card-text text-gray-600 flex-grow">1080p resolution in the palm of your hand. Perfect for camping.</p>
                        <div class="mt-2 flex justify-between items-center">
                            <span class="text-2xl font-bold text-indigo-600">$450.50</span>
                            <span class="badge bg-warning text-dark">Low Stock</span>
                        </div>
                        <a href="#" class="btn btn-primary mt-3 w-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Gadget Card 4: Mechanical Keyboard -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card gadget-card h-full rounded-xl shadow-lg hover:shadow-xl">
                    <img src="Image/product4.jpg" class="card-img-top rounded-t-xl" alt="Mechanical Keyboard">
                    <div class="card-body flex flex-col">
                        <h5 class="card-title text-xl font-semibold text-gray-900">Tactile Vibe Keyboard</h5>
                        <p class="card-text text-gray-600 flex-grow">Clicky keys, customizable RGB lighting, and USB-C connectivity.</p>
                        <div class="mt-2 flex justify-between items-center">
                            <span class="text-2xl font-bold text-indigo-600">$189.99</span>
                            <span class="badge bg-success">In Stock</span>
                        </div>
                        <a href="#" class="btn btn-primary mt-3 w-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Gadget Card 5: Smart Scale -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card gadget-card h-full rounded-xl shadow-lg hover:shadow-xl">
                    <img src="https://placehold.co/400x300/1f2937/ffffff?text=Smart+Scale" class="card-img-top rounded-t-xl" alt="Smart Scale">
                    <div class="card-body flex flex-col">
                        <h5 class="card-title text-xl font-semibold text-gray-900">BodyMetric Smart Scale</h5>
                        <p class="card-text text-gray-600 flex-grow">Measures 12 health metrics and syncs directly to your phone.</p>
                        <div class="mt-2 flex justify-between items-center">
                            <span class="text-2xl font-bold text-indigo-600">$79.99</span>
                            <span class="badge bg-success">In Stock</span>
                        </div>
                        <a href="#" class="btn btn-primary mt-3 w-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Gadget Card 6: Noise Cancelling Headphones -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card gadget-card h-full rounded-xl shadow-lg hover:shadow-xl">
                    <img src="https://placehold.co/400x300/374151/ffffff?text=Over-Ear+Headphones" class="card-img-top rounded-t-xl" alt="Noise Cancelling Headphones">
                    <div class="card-body flex flex-col">
                        <h5 class="card-title text-xl font-semibold text-gray-900">SilenceMaster Headphones</h5>
                        <p class="card-text text-gray-600 flex-grow">Industry-leading noise cancellation for pure listening pleasure.</p>
                        <div class="mt-2 flex justify-between items-center">
                            <span class="text-2xl font-bold text-indigo-600">$349.00</span>
                            <span class="badge bg-danger">Out of Stock</span>
                        </div>
                        <a href="#" class="btn btn-secondary mt-3 w-full disabled">Details Unavailable</a>
                    </div>
                </div>
            </div>

            <!-- Gadget Card 7: Portable SSD -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card gadget-card h-full rounded-xl shadow-lg hover:shadow-xl">
                    <img src="https://placehold.co/400x300/4b5563/ffffff?text=1TB+Portable+SSD" class="card-img-top rounded-t-xl" alt="Portable SSD">
                    <div class="card-body flex flex-col">
                        <h5 class="card-title text-xl font-semibold text-gray-900">Velocity 1TB SSD</h5>
                        <p class="card-text text-gray-600 flex-grow">Lightning-fast storage for backups and media editing on the go.</p>
                        <div class="mt-2 flex justify-between items-center">
                            <span class="text-2xl font-bold text-indigo-600">$99.99</span>
                            <span class="badge bg-success">In Stock</span>
                        </div>
                        <a href="#" class="btn btn-primary mt-3 w-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Gadget Card 8: Power Bank -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card gadget-card h-full rounded-xl shadow-lg hover:shadow-xl">
                    <img src="https://placehold.co/400x300/6b7280/ffffff?text=20000mAh+Power+Bank" class="card-img-top rounded-t-xl" alt="Power Bank">
                    <div class="card-body flex flex-col">
                        <h5 class="card-title text-xl font-semibold text-gray-900">MegaCharge 20000mAh</h5>
                        <p class="card-text text-gray-600 flex-grow">Keep all your devices charged multiple times over, anytime, anywhere.</p>
                        <div class="mt-2 flex justify-between items-center">
                            <span class="text-2xl font-bold text-indigo-600">$59.99</span>
                            <span class="badge bg-warning text-dark">Low Stock</span>
                        </div>
                        <a href="#" class="btn btn-primary mt-3 w-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

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