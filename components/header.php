<header id="header">
    <nav class="container navbar d-none d-lg-flex justify-content-center justify-content-lg-between navbar-expand-lg navbar-light bg-light ">
        <?php include "../components/logo.php"; ?>

        <div class="w-50  ">
            <div class=" ">
                <!-- <div class="collapse navbar-collapse" id="navbarNav"> -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text" href="../pages/home.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text" href="../pages/about.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Company Profile</a></li>
                            <li><a class="dropdown-item" href="#">Quality</a></li>
                            <li><a class="dropdown-item" href="#">Service</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text" href="../pages/product.php?tag=all" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Product
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="../pages/product.php?tag=all">All</a></li>
                            <li><a class="dropdown-item" href="../pages/product.php?tag=1000">less 1000</a></li>
                            <li><a class="dropdown-item" href="../pages/product.php?tag=1500">less 1500</a></li>
                            <li><a class="dropdown-item" href="../pages/product.php?tag=2000">less 2000</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text" href="../pages/news.php">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text" href="../pages/contect.php">Contact us</a>
                    </li>
                </ul>
                <!-- </div> -->
            </div>
        </div>
        <div class="w-15 d-none d-lg-flex align-items-start">
            <span>
                <i class="bi bi-telephone-fill" style="font-size: 20px;"></i>
            </span>
            <p>+662-123-4567-8</p>
        </div>
    </nav>
</header>
<nav class="container navbar d-block d-lg-none justify-content-center justify-content-lg-between navbar-expand-lg navbar-light bg-light ">
    <div class="container-fluid d-flex justify-content-center">
        <?php include "../components/logo.php"; ?>
        <!-- ปุ่ม Toggle -->
        <button class="navbar-toggler w-100" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- เมนู Navbar -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="../pages/home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/product.php">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/news.php">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/contect.php">Contect us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>