<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
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
    <link rel="stylesheet" href="navbar.css">
    <style>
        /* Dropdown hover effect */
        .navbar-nav .nav-item .dropdown-menu {
            display: none;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
            width: 500px;
            position: absolute;
        }

        .navbar-nav .nav-item:hover .dropdown-menu {
            display: block;
            opacity: 1;
        }

        .navbar-nav .nav-item {
            margin-right: 5px;

        }
    </style>
</head>

<body>
    <header>
        <div>
            <p class="navbars">Free Shipping </p>
        </div>
        <!-- place navbar here -->
        <nav class="navbar navbar-expand-lg sticky-top">
            <div class="container">
                <a class="navbar-brand" href="index.php">logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <form class="d-flex search-box">
                    <input type="search" class="form-control" placeholder="Search here ...">
                    <button class="btn btn-outline-secondary" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
                <div class="nav-icons d-flex align-items-center">
                    <a class="nav-link mx-2 fs-4" href="account.php"><i class="bi bi-person-circle"></i></a>
                    <a class="nav-link mx-2 fs-4" href="cart.php"><i class="bi bi-cart"></i></a>
                    <a class="nav-link mx-2  fs-4 search-trigger" href="#" data-bs-toggle="offcanvas" data-bs-target="#searchOffCanvas">
                        <i class="bi bi-search"></i>
                    </a>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
                <!-- <a class="navbar-brand" href="#">MyWebsite</a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav ">
                    <ul class="navbar-nav g-4">
                        <!-- <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li> -->
                        <!-- Dropdown with hover effect -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="index.php" id="navbarDropdown" role="button">
                                All jewellery
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="row">
                                    <div class="col">
                                        <li><a class="dropdown-item" href="#">Web Design</a></li>
                                        <li><a class="dropdown-item" href="#">Development</a></li>
                                    </div>
                                    <div class="col">
                                        <li><a class="dropdown-item" href="#">Web Design</a></li>
                                        <li><a class="dropdown-item" href="#">Development</a></li>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="diamond.php" id="navbarDropdown" role="button">
                                diamond
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="row">
                                    <div class="col">
                                        <li><a class="dropdown-item" href="#">Web Design</a></li>
                                        <li><a class="dropdown-item" href="#">Development</a></li>
                                    </div>
                                    <div class="col">
                                        <li><a class="dropdown-item" href="#">Web Design</a></li>
                                        <li><a class="dropdown-item" href="#">Development</a></li>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="gold.php" id="navbarDropdown" role="button">
                                gold
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="row">
                                    <div class="col">
                                        <li><a class="dropdown-item" href="#">Web Design</a></li>
                                        <li><a class="dropdown-item" href="#">Development</a></li>
                                    </div>
                                    <div class="col">
                                        <li><a class="dropdown-item" href="#">Web Design</a></li>
                                        <li><a class="dropdown-item" href="#">Development</a></li>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="earings.php" id="navbarDropdown" role="button">
                                earings
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="row">
                                    <div class="col">
                                        <li><a class="dropdown-item" href="#">Web Design</a></li>
                                        <li><a class="dropdown-item" href="#">Development</a></li>
                                    </div>
                                    <div class="col">
                                        <li><a class="dropdown-item" href="#">Web Design</a></li>
                                        <li><a class="dropdown-item" href="#">Development</a></li>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="rings.php" id="navbarDropdown" role="button">
                                rings
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="row">
                                    <div class="col">
                                        <li><a class="dropdown-item" href="#">Engagement</a></li>
                                        <li><a class="dropdown-item" href="#">couple brands</a></li>
                                    </div>
                                    <div class="col">
                                        <li><a class="dropdown-item" href="#">office wear</a></li>
                                        <li><a class="dropdown-item" href="#">slider</a></li>

                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="necklace.php" id="navbarDropdown" role="button">
                                necklace sets
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Web Design</a></li>
                                <li><a class="dropdown-item" href="#">Development</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="juda.php" id="navbarDropdown" role="button">
                                juda
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Web Design</a></li>
                                <li><a class="dropdown-item" href="#">Development</a></li>
                                <li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="juda.php" id="navbarDropdown" role="button">
                                bangles
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Web Design</a></li>
                                <li><a class="dropdown-item" href="#">Development</a></li>
                                <li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="saree.php" id="navbarDropdown" role="button">
                                saree pin
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Web Design</a></li>
                                <li><a class="dropdown-item" href="#">Development</a></li>
                                <li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="bracelets.php" id="navbarDropdown" role="button">
                                bracelets
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Web Design</a></li>
                                <li><a class="dropdown-item" href="#">Development</a></li>
                                <li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="pendant.php" id="navbarDropdown" role="button">
                                pendant sets
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Web Design</a></li>
                                <li><a class="dropdown-item" href="#">Development</a></li>
                                <li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="gifting.php" id="navbarDropdown" role="button">
                                gifting
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Web Design</a></li>
                                <li><a class="dropdown-item" href="#">Development</a></li>
                                <li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown ">
                            <!-- <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button">
                                gifting
                            </a> -->
                            <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                Services
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Web Design</a></li>
                                <li><a class="dropdown-item" href="#">Development</a></li>
                                <li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main></main>
    <footer>
        <!-- place footer here -->

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

    <!-- off canvas start -->

</body>

</html>