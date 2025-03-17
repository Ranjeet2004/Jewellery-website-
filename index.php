<!doctype html>
<html lang="en">

<head>
    <title>jewellery</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="demo.css">

</head>

<body>

    <header>
        <!-- place navbar here -->
        <?php
        include("header.php")
        ?>
    </header>
    <main>
        <!-- Carousel start -->
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/photooo.avif" class="d-block w-100" alt="...">
                </div>
                <!-- <div class="carousel-item">
                    <img src="images/photo.jpeg" cla    ss="d-block w-100" alt="...">
                </div> -->
                <div class="carousel-item">
                    <img src="images/slide2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/slide3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Carousel end -->

        <!-- shop by category start -->
        <div class="container my-4">
            <h2 class="text-center mb-4">Shop By Categories</h2>
            <div class="row g-3">
                <!-- Jewelry Categories -->
                <div class="col-md-3 col-sm-6">
                    <div class="category-card">
                        <img src="images/ring.jpg" class="img-fluid" alt="Rings">
                        <p>Rings</p>
                        <a href="rings.php" class="btn btn-primary btn-sm">Explore</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="category-card">
                        <img src="images/Earrings2.jpg" class="img-fluid" alt="Earrings">
                        <p>Earrings</p>
                        <a href="earings.php" class="btn btn-primary btn-sm">Explore</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="category-card">
                        <img src="images/Pendant.jpg" class=" img-fluid" alt="Pendants">
                        <p>Pendants</p>
                        <a href="pendant.php" class="btn btn-primary btn-sm">Explore</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="category-card">
                        <img src="images/Bracelet.jpg" class="img-fluid" alt="Bracelets">
                        <p>Bracelets</p>
                        <a href="bracelets.php" class="btn btn-primary btn-sm">Explore</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="category-card">
                        <img src="images/Bangle.jpg" class="img-fluid" alt="Bangles">
                        <p>Bangles</p>
                        <a href="#" class="btn btn-primary btn-sm">Explore</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="category-card">
                        <img src="images/Necklace_set__2.jpg" class="img-fluid" alt="Necklaces">
                        <p>Necklaces</p>
                        <a href="#" class="btn btn-primary btn-sm">Explore</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="category-card">
                        <img src="images/Mangalsutra_27_09_2024_7_1.jpg" class="img-fluid" alt="Mangalsutra">
                        <p>Mangalsutra</p>
                        <a href="#" class="btn btn-primary btn-sm">Explore</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="category-card">
                        <img src="images/Gold_Coin_27_09_2024_7_1.jpg" class="img-fluid" alt="Gold Coins">
                        <p>Gold Coins</p>
                        <a href="#" class="btn btn-primary btn-sm">Explore</a>
                    </div>
                </div>
            </div>
        </div>

        <!--free shiping start -->
        <section class="benefits">
            <div class="benefit-item">
                <img src="icons/certified.png" alt="Certified">
                <p>100% Certified Jewellery</p>
            </div>
            <div class="divider"></div>
            <div class="benefit-item">
                <img src="icons/platinum.png" alt="Platinum">
                <p>Platinum Certified Jewellery</p>
            </div>
            <div class="divider"></div>
            <div class="benefit-item">
                <img src="icons/exchange.png" alt="Exchange">
                <p>Lifetime Exchange</p>
            </div>
            <div class="divider"></div>
            <div class="benefit-item">
                <img src="icons/buyback.png" alt="Buyback">
                <p>Lifetime Buyback</p>
            </div>
            <div class="divider"></div>
            <div class="benefit-item">
                <img src="icons/return.png" alt="Return">
                <p>7 Days Return Policy</p>
            </div>
            <div class="divider"></div>
            <div class="benefit-item">
                <img src="icons/insurance.png" alt="Insurance">
                <p>1 Year Free Insurance</p>
            </div>
            <div class="divider"></div>
            <div class="benefit-item">
                <img src="icons/shipping.png" alt="Shipping">
                <p>Free Shipping</p>
            </div>
        </section>
        <!--free shiping end   -->



        <!-- Video Start -->
        <!-- <div class="container-fluid video">
            <video width="1503" height="350" autoplay loop muted>
                <source src="images/1724486867518.mp4" type="video/mp4">
            </video>
        </div> -->
        <!-- Videos End -->

        <!--video start  -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="carousel-title">✨ ORRA STUDIO ✨</h2>

                    <div class="carousel-container">
                        <button id="prevBtn" class="nav-btn">&#10094;</button>

                        <div class="carousel">
                            <div class="card">
                                <video src="images/video1.mp4" muted loop></video>
                                <button class="view-btn">View</button>
                            </div>
                            <div class="card">
                                <video src="images/video2.mp4" muted loop></video>
                                <button class="view-btn">View</button>
                            </div>
                            <div class="card active">
                                <video src="images/video3.mp4" autoplay muted loop></video>
                                <button class="view-btn">View</button>
                            </div>
                            <div class="card">
                                <video src="images/video4.mp4" muted loop></video>
                                <button class="view-btn">View</button>
                            </div>
                            <div class="card">
                                <video src="images/video1.mp4" muted loop></video>
                                <button class="view-btn">View</button>
                            </div>
                        </div>

                        <button id="nextBtn" class="nav-btn">&#10095;</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- video end -->

        <!-- New Arrial Section start -->
        <div class="container mt-4">
            <div class="d-flex justify-content-between align-items-center">
                <h3>New Arrial</h3>
                <a href="#" class="view-all">View All →</a>
            </div>
            <hr>
            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1740223714457.jpeg" alt="Silver Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Silver Plated AD Necklace</div>
                                        <div class="star-rating">★★★★★</div>
                                        <div>
                                            <span class="product-price">₹233</span>
                                            <span class="old-price">₹424</span>
                                            <span class="discount">(45% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1740292429168.jpeg" alt="Zircon Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Rhodium Plated Zircon</div>
                                        <div class="star-rating">★★★★☆</div>
                                        <div>
                                            <span class="product-price">₹362.88</span>
                                            <span class="old-price">₹504</span>
                                            <span class="discount">(28% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1740219974077.jpeg" alt="Timeless Beauty Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Timeless Beauty Necklace</div>
                                        <div class="star-rating">★★★★★</div>
                                        <div>
                                            <span class="product-price">₹299</span>
                                            <span class="old-price">₹472</span>
                                            <span class="discount">(36% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1738586806876.jpeg" alt="Timeless Beauty Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Timeless Beauty Necklace</div>
                                        <div class="star-rating">★★★★★</div>
                                        <div>
                                            <span class="product-price">₹299</span>
                                            <span class="old-price">₹472</span>
                                            <span class="discount">(36% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New Arrial Section End -->


        <!-- Earings Section start -->
        <div class="container mt-4">
            <div class="d-flex justify-content-between align-items-center">
                <h3>Earings</h3>
                <a href="#" class="view-all">View All →</a>
            </div>
            <hr>
            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1722073438446.jpeg" alt="Silver Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Silver Plated AD Necklace</div>
                                        <div class="star-rating">★★★★★</div>
                                        <div>
                                            <span class="product-price">₹233</span>
                                            <span class="old-price">₹424</span>
                                            <span class="discount">(45% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1734940708543.jpeg" alt="Zircon Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Rhodium Plated Zircon</div>
                                        <div class="star-rating">★★★★☆</div>
                                        <div>
                                            <span class="product-price">₹362.88</span>
                                            <span class="old-price">₹504</span>
                                            <span class="discount">(28% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1722072430753.jpeg" alt="Timeless Beauty Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Timeless Beauty Necklace</div>
                                        <div class="star-rating">★★★★★</div>
                                        <div>
                                            <span class="product-price">₹299</span>
                                            <span class="old-price">₹472</span>
                                            <span class="discount">(36% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1734847370970.jpeg" alt="Timeless Beauty Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Timeless Beauty Necklace</div>
                                        <div class="star-rating">★★★★★</div>
                                        <div>
                                            <span class="product-price">₹299</span>
                                            <span class="old-price">₹472</span>
                                            <span class="discount">(36% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earing Section End -->


        <!-- Necklace Section start -->
        <div class="container mt-4">
            <div class="d-flex justify-content-between align-items-center">
                <h3>Necklace Set</h3>
                <a href="#" class="view-all">View All →</a>
            </div>
            <hr>
            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1718161623889.jpeg" alt="Silver Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Silver Plated AD Necklace</div>
                                        <div class="star-rating">★★★★★</div>
                                        <div>
                                            <span class="product-price">₹233</span>
                                            <span class="old-price">₹424</span>
                                            <span class="discount">(45% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1718106535475.jpeg" alt="Zircon Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Rhodium Plated Zircon</div>
                                        <div class="star-rating">★★★★☆</div>
                                        <div>
                                            <span class="product-price">₹362.88</span>
                                            <span class="old-price">₹504</span>
                                            <span class="discount">(28% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1711022791462.jpeg" alt="Timeless Beauty Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Timeless Beauty Necklace</div>
                                        <div class="star-rating">★★★★★</div>
                                        <div>
                                            <span class="product-price">₹299</span>
                                            <span class="old-price">₹472</span>
                                            <span class="discount">(36% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1711105736146.jpeg" alt="Timeless Beauty Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Timeless Beauty Necklace</div>
                                        <div class="star-rating">★★★★★</div>
                                        <div>
                                            <span class="product-price">₹299</span>
                                            <span class="old-price">₹472</span>
                                            <span class="discount">(36% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Necklace Section End -->



        <!-- Video Start -->
        <div class="container-fluid video">
            <video width="1503" height="350" autoplay loop muted>
                <source src="images/1724486867518.mp4" type="video/mp4">
            </video>
        </div>
        <!-- Videos End -->

        <!-- Traditional Section start -->
        <div class="container mt-4">
            <!-- <h3 class="section-title">Traditional Jewellery</h3> -->
            <div class="row mt-4">
                <div class="col-md-3 col-sm-6">
                    <div class="jewelry-card">
                        <img src="images/1713435346824.jpeg" alt="Bangles">
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="jewelry-card">
                        <img src="images/1713435401640.jpeg" alt="Bangles">
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="jewelry-card">
                        <img src="images/1713435591278.jpeg" alt="Earrings">
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="jewelry-card">
                        <img src="images/1713435297728.jpeg" alt="Rings">
                    </div>
                </div>
            </div>
        </div>
        <!-- Traditional Jewellery  section End -->

        <!-- Rings Section start -->
        <div class="container mt-4">
            <div class="d-flex justify-content-between align-items-center">
                <h3>Rings</h3>
                <a href="#" class="view-all">View All →</a>
            </div>
            <hr>
            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1728213377635.jpeg" alt="Silver Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Silver Plated AD Necklace</div>
                                        <div class="star-rating">★★★★★</div>
                                        <div>
                                            <span class="product-price">₹233</span>
                                            <span class="old-price">₹424</span>
                                            <span class="discount">(45% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1709888706485.jpeg" alt="Zircon Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Rhodium Plated Zircon</div>
                                        <div class="star-rating">★★★★☆</div>
                                        <div>
                                            <span class="product-price">₹362.88</span>
                                            <span class="old-price">₹504</span>
                                            <span class="discount">(28% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1710406122399.jpeg" alt="Timeless Beauty Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Timeless Beauty Necklace</div>
                                        <div class="star-rating">★★★★★</div>
                                        <div>
                                            <span class="product-price">₹299</span>
                                            <span class="old-price">₹472</span>
                                            <span class="discount">(36% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1728214207676.jpeg" alt="Timeless Beauty Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Timeless Beauty Necklace</div>
                                        <div class="star-rating">★★★★★</div>
                                        <div>
                                            <span class="product-price">₹299</span>
                                            <span class="old-price">₹472</span>
                                            <span class="discount">(36% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Rings Section End -->

        <!-- Bangles  Section start -->
        <div class="container mt-4">
            <div class="d-flex justify-content-between align-items-center">
                <h3>Bangles</h3>
                <a href="#" class="view-all">View All →</a>
            </div>
            <hr>
            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1691121484021.jpeg" alt="Silver Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Silver Plated AD Necklace</div>
                                        <div class="star-rating">★★★★★</div>
                                        <div>
                                            <span class="product-price">₹233</span>
                                            <span class="old-price">₹424</span>
                                            <span class="discount">(45% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1692253837411.jpeg" alt="Zircon Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Rhodium Plated Zircon</div>
                                        <div class="star-rating">★★★★☆</div>
                                        <div>
                                            <span class="product-price">₹362.88</span>
                                            <span class="old-price">₹504</span>
                                            <span class="discount">(28% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1691066851718.jpeg" alt="Timeless Beauty Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Timeless Beauty Necklace</div>
                                        <div class="star-rating">★★★★★</div>
                                        <div>
                                            <span class="product-price">₹299</span>
                                            <span class="old-price">₹472</span>
                                            <span class="discount">(36% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1691120935772.jpeg" alt="Timeless Beauty Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Timeless Beauty Necklace</div>
                                        <div class="star-rating">★★★★★</div>
                                        <div>
                                            <span class="product-price">₹299</span>
                                            <span class="old-price">₹472</span>
                                            <span class="discount">(36% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New Arrial Section End -->

        <!-- Traditional Section start -->
        <div class="container mt-4">
            <h3 class="section-title">Traditional Jewellery</h3>
            <div class="row mt-4">
                <div class="col-md-3 col-sm-6">
                    <div class="jewelry-card">
                        <img src="images/1724384670437.jpeg" alt="Bangles">

                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="jewelry-card">
                        <img src="images/1724384687830.jpeg" alt="Bangles">
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="jewelry-card">
                        <img src="images/1724384709686.jpeg" alt="Earrings">
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="jewelry-card">
                        <img src="images/1724384731846.jpeg" alt="Rings">
                    </div>
                </div>
            </div>
        </div>
        <!-- Traditional Jewellery  section End -->


        <!-- Juda Section start -->
        <div class="container mt-4">
            <div class="d-flex justify-content-between align-items-center">
                <h3>Juda</h3>
                <a href="#" class="view-all">View All →</a>
            </div>
            <hr>
            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1690455127394.jpeg" alt="Silver Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Silver Plated AD Necklace</div>
                                        <div class="star-rating">★★★★★</div>
                                        <div>
                                            <span class="product-price">₹233</span>
                                            <span class="old-price">₹424</span>
                                            <span class="discount">(45% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1690455422109.jpeg" alt="Zircon Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Rhodium Plated Zircon</div>
                                        <div class="star-rating">★★★★☆</div>
                                        <div>
                                            <span class="product-price">₹362.88</span>
                                            <span class="old-price">₹504</span>
                                            <span class="discount">(28% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1690453687142.jpeg" alt="Timeless Beauty Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Timeless Beauty Necklace</div>
                                        <div class="star-rating">★★★★★</div>
                                        <div>
                                            <span class="product-price">₹299</span>
                                            <span class="old-price">₹472</span>
                                            <span class="discount">(36% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1691407619035.jpeg" alt="Timeless Beauty Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Timeless Beauty Necklace</div>
                                        <div class="star-rating">★★★★★</div>
                                        <div>
                                            <span class="product-price">₹299</span>
                                            <span class="old-price">₹472</span>
                                            <span class="discount">(36% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Juda Section End -->


        <!-- Saree Pin Section start -->
        <div class="container mt-4">
            <div class="d-flex justify-content-between align-items-center">
                <h3>Saree Pin</h3>
                <a href="#" class="view-all">View All →</a>
            </div>
            <hr>
            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1690442510764.jpeg" alt="Silver Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Silver Plated AD Necklace</div>
                                        <div class="star-rating">★★★★★</div>
                                        <div>
                                            <span class="product-price">₹233</span>
                                            <span class="old-price">₹424</span>
                                            <span class="discount">(45% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1690440220903.jpeg" alt="Zircon Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Rhodium Plated Zircon</div>
                                        <div class="star-rating">★★★★☆</div>
                                        <div>
                                            <span class="product-price">₹362.88</span>
                                            <span class="old-price">₹504</span>
                                            <span class="discount">(28% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1690443253763.jpeg" alt="Timeless Beauty Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Timeless Beauty Necklace</div>
                                        <div class="star-rating">★★★★★</div>
                                        <div>
                                            <span class="product-price">₹299</span>
                                            <span class="old-price">₹472</span>
                                            <span class="discount">(36% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="images/1690442123172.jpeg" alt="Timeless Beauty Necklace">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">Timeless Beauty Necklace</div>
                                        <div class="star-rating">★★★★★</div>
                                        <div>
                                            <span class="product-price">₹299</span>
                                            <span class="old-price">₹472</span>
                                            <span class="discount">(36% OFF)</span>
                                        </div>
                                        <button class="btn btn-outline-primary w-100 mt-2">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Saree Pin Section End -->

        <!-- banner start -->
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <a href="all_jewellery.php"><img src="images/2X-desktop.jpg" alt="Banner" class="img-fluid"></a>
                </div>
                <div class="col">
                    <a href="diamond.php"><img src="images/2X-CityBannerDLFPromenadeMall.jpg" alt="Banner" class="img-fluid"></a>
                </div>
            </div>
        </div>
        <!-- banner end -->


    </main>
    <footer>
        <!-- place footer here -->
        <?php
        include("footer.php")
        ?>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous">
    </script>
    <script src="script.js"></script>

</body>

</html>