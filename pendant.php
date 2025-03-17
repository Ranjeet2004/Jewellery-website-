<!doctype html>
<html lang="en">

<head>
    <title>Mangalsutras</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>

        <!-- place navbar here -->
        <?php
        include("header.php")
        ?>

    </header>
    <main>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Jewelry Collection</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <style>
                .product-card {
                    border-radius: 10px;
                    overflow: hidden;
                    transition: transform 0.3s ease-in-out;
                }

                .product-card:hover {
                    transform: scale(1.05);
                }

                .product-card img {
                    width: 100%;
                    height: 230px;
                    object-fit: cover;
                }

                .discount {
                    color: red;
                    font-size: 14px;
                    font-weight: bold;
                }

                .carousel-control-prev,
                .carousel-control-next {
                    background: rgba(255, 255, 255, 0.6);
                    border-radius: 50%;
                    width: 35px;
                    height: 35px;
                }

                .rating {
                    color: gold;
                }

                .view-all {
                    float: right;
                    color: #b6895b;
                    font-weight: bold;
                    text-decoration: none;
                }

                .view-all:hover {
                    text-decoration: underline;
                }
            </style>
        </head>

        <body>

            <div class="container mt-4">
                <div class="d-flex justify-content-between align-items-center">
                    <h3>Necklace Set</h3>
                    <a href="#" class="view-all">View All →</a>
                </div>
                <hr>

                <div id="jewelryCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-2 col-sm-4">
                                    <div class="product-card">
                                        <img src="https://via.placeholder.com/300x200" alt="Silver Necklace">
                                        <div class="p-2">
                                            <h6>Silver Plated AD Necklace</h6>
                                            <p class="rating">★★★★★</p>
                                            <p><b>₹233</b> <s>₹424</s> <span class="discount">(45% OFF)</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="product-card">
                                        <img src="https://via.placeholder.com/300x200" alt="Rose Gold Necklace">
                                        <div class="p-2">
                                            <h6>Rose Gold Polish</h6>
                                            <p class="rating">★★★★☆</p>
                                            <p><b>₹232</b> <s>₹464</s> <span class="discount">(50% OFF)</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="product-card">
                                        <img src="https://via.placeholder.com/300x200" alt="Diamond Necklace">
                                        <div class="p-2">
                                            <h6>Rhodium Plated Zircons</h6>
                                            <p class="rating">★★★★★</p>
                                            <p><b>₹362</b> <s>₹504</s> <span class="discount">(28% OFF)</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="product-card">
                                        <img src="https://via.placeholder.com/300x200" alt="Luxury Necklace">
                                        <div class="p-2">
                                            <h6>Rose Gold Zircon</h6>
                                            <p class="rating">★★★★☆</p>
                                            <p><b>₹230</b> <s>₹464</s> <span class="discount">(50% OFF)</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="product-card">
                                        <img src="https://via.placeholder.com/300x200" alt="Gift Necklace">
                                        <div class="p-2">
                                            <h6>Timeless Beauty Set</h6>
                                            <p class="rating">★★★★★</p>
                                            <p><b>₹299</b> <s>₹472</s> <span class="discount">(36% OFF)</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="product-card">
                                        <img src="https://via.placeholder.com/300x200" alt="Gift Necklace">
                                        <div class="p-2">
                                            <h6>Timeless Beauty Set</h6>
                                            <p class="rating">★★★★★</p>
                                            <p><b>₹299</b> <s>₹472</s> <span class="discount">(36% OFF)</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="product-card">
                                        <img src="https://via.placeholder.com/300x200" alt="Gift Necklace">
                                        <div class="p-2">
                                            <h6>Timeless Beauty Set</h6>
                                            <p class="rating">★★★★★</p>
                                            <p><b>₹299</b> <s>₹472</s> <span class="discount">(36% OFF)</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="product-card">
                                        <img src="https://via.placeholder.com/300x200" alt="Gift Necklace">
                                        <div class="p-2">
                                            <h6>Timeless Beauty Set</h6>
                                            <p class="rating">★★★★★</p>
                                            <p><b>₹299</b> <s>₹472</s> <span class="discount">(36% OFF)</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#jewelryCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#jewelryCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        </body>

        </html>


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
        crossorigin="anonymous"></script>
</body>

</html>