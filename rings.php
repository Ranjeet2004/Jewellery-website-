<!doctype html>
<html lang="en">

<head>
    <title>Rings</title>
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
        <style>
            body {
                background-color: #fffaf5;
            }

            .filter-section {
                padding: 15px;
                border-right: 1px solid #ddd;
                height: 100vh;
                overflow-y: auto;
            }

            .filter-title {
                font-size: 18px;
                font-weight: bold;
                margin-bottom: 10px;
            }

            .price-range {
                width: 100%;
                accent-color: #c49b63;
            }

            .product-card {
                border: none;
                transition: transform 0.3s ease-in-out;
            }

            .product-card:hover {
                transform: scale(1.05);
            }

            .product-img {
                border-radius: 10px;
                width: 100%;
                height: auto;
            }

            .product-title {
                font-size: 14px;
                font-weight: bold;
                color: #333;
                text-decoration: none;
            }

            .product-price {
                color: #c49b63;
                font-weight: bold;
                font-size: 16px;
            }

            .product-old-price {
                color: #888;
                text-decoration: line-through;
                font-size: 14px;
            }

            .discount-badge {
                color: red;
                font-size: 13px;
                font-weight: bold;
            }

            .offer-badge {
                background-color: #f5e1c8;
                font-size: 12px;
                padding: 5px 10px;
                border-radius: 5px;
                display: inline-block;
                margin-top: 5px;
            }

            .sort-dropdown {
                float: right;
            }
        </style>
        </head>

        <body>

            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Jewelry Rings</title>

                <!-- Bootstrap 5.3 CSS -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

                <!-- Custom CSS -->
                <style>
                    body {
                        background-color: #fffaf5;
                    }

                    /* Sidebar styling */
                    .filter-section {
                        padding: 15px;
                        border-right: 1px solid #ddd;
                        height: 100vh;
                        overflow-y: auto;
                    }

                    .filter-title {
                        font-size: 18px;
                        font-weight: bold;
                        margin-bottom: 10px;
                    }

                    .price-range {
                        width: 100%;
                        accent-color: #c49b63;
                    }

                    /* Product card styling */
                    .product-card {
                        border: none;
                        transition: transform 0.3s ease-in-out;
                    }

                    .product-card:hover {
                        transform: scale(1.05);
                    }

                    .product-img {
                        border-radius: 10px;
                        width: 100%;
                        height: auto;
                    }

                    .product-title {
                        font-size: 14px;
                        font-weight: bold;
                        color: #333;
                        text-decoration: none;
                    }

                    .product-price {
                        color: #c49b63;
                        font-weight: bold;
                        font-size: 16px;
                    }

                    .product-old-price {
                        color: #888;
                        text-decoration: line-through;
                        font-size: 14px;
                    }

                    .discount-badge {
                        color: red;
                        font-size: 13px;
                        font-weight: bold;
                    }

                    .offer-badge {
                        background-color: #f5e1c8;
                        font-size: 12px;
                        padding: 5px 10px;
                        border-radius: 5px;
                        display: inline-block;
                        margin-top: 5px;
                    }

                    .sort-dropdown {
                        float: right;
                    }
                </style>
            </head>

            <body>

                <div class="container-fluid">
                    <div class="row">
                        <!-- Filter Sidebar -->
                        <div class="col-md-3 filter-section">
                            <h5 class="filter-title">Filters</h5>

                            <!-- Price Range -->
                            <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input type="range" class="price-range" min="0" max="699" value="350">
                                <div class="d-flex justify-content-between">
                                    <span>₹0</span>
                                    <span>₹699</span>
                                </div>
                            </div>

                            <!-- Base Metal -->
                            <div class="mb-3">
                                <label class="form-label">Base Metal</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="brass">
                                    <label class="form-check-label" for="brass">Brass</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="alloy">
                                    <label class="form-check-label" for="alloy">Alloy</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="copper">
                                    <label class="form-check-label" for="copper">Copper</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="steel">
                                    <label class="form-check-label" for="steel">Stainless Steel</label>
                                </div>
                            </div>

                            <!-- Polish -->
                            <div class="mb-3">
                                <label class="form-label">Polish</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gold-polish">
                                    <label class="form-check-label" for="gold-polish">Gold Polish</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="matte-gold">
                                    <label class="form-check-label" for="matte-gold">Matte Gold Polish</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rose-gold">
                                    <label class="form-check-label" for="rose-gold">Rose Gold Polish</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="silver-polish">
                                    <label class="form-check-label" for="silver-polish">Rhodium Silver Polish</label>
                                </div>
                            </div>
                        </div>

                        <!-- Product Listing -->
                        <div class="col-md-9">
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <h4>Finger Ring</h4>
                                <div class="sort-dropdown">
                                    <label>Sort by:</label>
                                    <select class="form-select form-select-sm d-inline-block w-auto">
                                        <option selected>Latest</option>
                                        <option>Price: Low to High</option>
                                        <option>Price: High to Low</option>
                                        <option>Best Seller</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <!-- Product 1 -->
                                <div class="col-md-3 col-sm-6 mb-4">
                                    <div class="card product-card">
                                        <img src="https://via.placeholder.com/300x400" alt="Ring 1" class="product-img">
                                        <div class="card-body">
                                            <a href="#" class="product-title">"Unexpected Texture: The Gold Ring"</a>
                                            <div>
                                                <span class="product-price">₹280.8</span>
                                                <span class="product-old-price">₹624</span>
                                                <span class="discount-badge">(55% OFF)</span>
                                            </div>
                                            <span class="offer-badge">any 7 & Get @ ₹139</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product 2 -->
                                <div class="col-md-3 col-sm-6 mb-4">
                                    <div class="card product-card">
                                        <img src="https://via.placeholder.com/300x400" alt="Ring 2" class="product-img">
                                        <div class="card-body">
                                            <a href="#" class="product-title">"Bold and Beautiful: A Chain Link Ring"</a>
                                            <div>
                                                <span class="product-price">₹252</span>
                                                <span class="product-old-price">₹504</span>
                                                <span class="discount-badge">(50% OFF)</span>
                                            </div>
                                            <span class="offer-badge">any 7 & Get @ ₹139</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product 2 -->
                                <div class="col-md-3 col-sm-6 mb-4">
                                    <div class="card product-card">
                                        <img src="https://via.placeholder.com/300x400" alt="Ring 2" class="product-img">
                                        <div class="card-body">
                                            <a href="#" class="product-title">"Bold and Beautiful: A Chain Link Ring"</a>
                                            <div>
                                                <span class="product-price">₹252</span>
                                                <span class="product-old-price">₹504</span>
                                                <span class="discount-badge">(50% OFF)</span>
                                            </div>
                                            <span class="offer-badge">any 7 & Get @ ₹139</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product 2 -->
                                <div class="col-md-3 col-sm-6 mb-4">
                                    <div class="card product-card">
                                        <img src="https://via.placeholder.com/300x400" alt="Ring 2" class="product-img">
                                        <div class="card-body">
                                            <a href="#" class="product-title">"Bold and Beautiful: A Chain Link Ring"</a>
                                            <div>
                                                <span class="product-price">₹252</span>
                                                <span class="product-old-price">₹504</span>
                                                <span class="discount-badge">(50% OFF)</span>
                                            </div>
                                            <span class="offer-badge">any 7 & Get @ ₹139</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product 2 -->
                                <div class="col-md-3 col-sm-6 mb-4">
                                    <div class="card product-card">
                                        <img src="https://via.placeholder.com/300x400" alt="Ring 2" class="product-img">
                                        <div class="card-body">
                                            <a href="#" class="product-title">"Bold and Beautiful: A Chain Link Ring"</a>
                                            <div>
                                                <span class="product-price">₹252</span>
                                                <span class="product-old-price">₹504</span>
                                                <span class="discount-badge">(50% OFF)</span>
                                            </div>
                                            <span class="offer-badge">any 7 & Get @ ₹139</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bootstrap JS -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

            </body>

            </html>


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