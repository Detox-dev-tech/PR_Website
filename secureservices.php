<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Services</title>
    <link rel="icon" href="images/small-logo.ico" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</head>
<body>
    
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <h1>Revolutionizing Service Management</h1>
            <p>Streamline operations and enhance customer satisfaction with our cutting-edge solution.</p>
            <!-- Embedded YouTube Video -->
            <div class="video-container">
                <iframe width="100%" height="500px" src="https://www.youtube.com/embed/0UwI2ns06z0" 
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!-- Applications Section -->
    <section class="container mt-5" id="applications">
        <h1 class="text-center">Our Applications</h1>
        <div class="row justify-content-center">
            <div class="col-md-6 feature-card">
                <div class="card">
                    <div class="card-body text-center">
                        <h2 class="card-title">Customer App</h2>
                        <img src="images/customer-app.png" style="width: 200px; height: auto;">
                        <p class="card-text">Easily browse services, initiate requests, and communicate via text, WhatsApp, or photo submissions.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 feature-card">
                <div class="card">
                    <div class="card-body text-center">
                        <h2 class="card-title">Technician App</h2>
                        <img src="images/technician-app.png" style="width: 200px; height: auto;">
                        <p class="card-text">Real-time task tracking, updates, and direct communication for seamless on-site operations.</p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row justify-content-center">
        <div class="col-md-12 feature-card">
                <div class="card">
                    <div class="card-body text-center">
                        <h2 class="card-title">Admin CMS</h2>
                        <img src="images/admin-cms.png" style="width: 100%; height: auto;">
                        <p class="card-text">Efficiently manage service requests, inventory, and workflows with advanced analytics.</p>
                        <a href="http://82.112.238.13:5005/login.html" target="_blank" class="btn btn-primary mt-3 try-it-out-btn">Try it out!</a>
                        <br>
                        <p class="card-text"> email: admin@gmail.com | password: admin123 </p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <hr>
    </section>

    <!-- Features Section -->
    <section class="container mt-5" id="features">
        <h1 class="text-center">Our Features</h1>
        <p class="text-center">Explore the features for different roles.</p>
        <!-- Feature Buttons Section -->
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-sm-4 d-flex justify-content-center">
                <button class="btn feature-btn active" data-target="customer-container" id="customer-btn">
                    Customer
                </button>
            </div>
            <div class="col-12 col-sm-4 d-flex justify-content-center">
                <button class="btn feature-btn" data-target="technician-container" id="technician-btn">
                    Technician
                </button>
            </div>
            <div class="col-12 col-sm-4 d-flex justify-content-center">
                <button class="btn feature-btn" data-target="admin-container" id="admin-btn">
                    Admin
                </button>
            </div>
        </div>

        <div class="mt-5">
        <div id="customer-container" class="feature-container active"> 
            
            <img src="images/customer-feature.png" style="width: 100%; height: auto;">
        </div>
        <div id="technician-container" class="feature-container hidden"> 
            
            <img src="images/technician-feature.png" style="width: 100%; height: auto;">
        </div>
        <div id="admin-container" class="feature-container hidden">
            <div id="adminCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#adminCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#adminCarousel" data-slide-to="1"></li>
                    <li data-target="#adminCarousel" data-slide-to="2"></li>
                    <li data-target="#adminCarousel" data-slide-to="3"></li>
                    <li data-target="#adminCarousel" data-slide-to="4"></li>
                    <li data-target="#adminCarousel" data-slide-to="5"></li>
                    <li data-target="#adminCarousel" data-slide-to="6"></li>
                    <li data-target="#adminCarousel" data-slide-to="7"></li>
                    <li data-target="#adminCarousel" data-slide-to="8"></li>
                </ol>

                <!-- Slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/admin-feature-1.png" class="d-block w-100" alt="Admin Feature 1">
                    </div>
                    <div class="carousel-item">
                        <img src="images/admin-feature-2.png" class="d-block w-100" alt="Admin Feature 2">
                    </div>
                    <div class="carousel-item">
                        <img src="images/admin-feature-3.png" class="d-block w-100" alt="Admin Feature 3">
                    </div>
                    <div class="carousel-item">
                        <img src="images/admin-feature-4.png" class="d-block w-100" alt="Admin Feature 4">
                    </div>
                    <div class="carousel-item">
                        <img src="images/admin-feature-5.png" class="d-block w-100" alt="Admin Feature 5">
                    </div>
                    <div class="carousel-item">
                        <img src="images/admin-feature-6.png" class="d-block w-100" alt="Admin Feature 6">
                    </div>
                    <div class="carousel-item">
                        <img src="images/admin-feature-7.png" class="d-block w-100" alt="Admin Feature 7">
                    </div>
                    <div class="carousel-item">
                        <img src="images/admin-feature-8.png" class="d-block w-100" alt="Admin Feature 8">
                    </div>
                    <div class="carousel-item">
                        <img src="images/admin-feature-9.png" class="d-block w-100" alt="Admin Feature 9">
                    </div>
                </div>

                <!-- Controls -->
                <a class="carousel-control-prev" href="#adminCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#adminCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <br>
    <hr>
    </section>

    <!-- About Section -->
    <section class="container mt-5" id="about">
        <h1 class="text-center">About Us</h1>
        <div class="row align-items-center">
        <div class="col-md-6">
            <img src="images/about-us.png" class="about-image" alt="About Us">
        </div>
        <div class="col-md-6">
            <p class="about-text">We are dedicated to transforming service management by addressing common challenges like communication delays, inconsistent experiences, and inefficient workflows. Our mission is to deliver innovative solutions that enhance operational efficiency and customer satisfaction.</p>
        </div>
    </div>
    <br>
    <hr>
    </section>

    <!-- Contact Section -->
    <section class="container mt-5" id="contact">
        <h1 class="text-center">Contact Us</h1>
        <form>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Your Name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Your Email">
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Your Message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; background-color: #000000">Submit</button>
        </form>
    </section>
    
    <br>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <!-- Return to Top Button -->
    <button id="returnToTop" title="Go to top">⬆</button>

    <script src="./script.js"></script>
</body>
</html>