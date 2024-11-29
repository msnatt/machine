<!DOCTYPE html>
<html lang="en">

<?php session_start(); ?>
<?php include "../include/ref.html"; ?>
<?php include "../include/style.html"; ?>


<body class="bg-custom ">
    <?php include "../components/header.php"; ?>
    <?php include "../components/slidepage.php"; ?>
    <div class="container container-lg bg-light">
        <br>
        <p class="text-center" style="font-size: 2.5rem; font-weight: bold;">ABOUT <img src="../assets/images/home_body_logo.png" width="150rem"> US</p>
        <div class="d-flex justify-content-center mt-5">
            <p class="w-100 w-lg-50 text-dark text-center">As an export-oriented, industry &amp; trade integrated enterprise, Yangzhou Euro Group has three production bases: Yangzhou Euro Brother Machine &amp; Tools Co., Ltd.; &nbsp;China-German joint venture OPTIMUM (Yangzhou) Machinery Co., Ltd.</p>
        </div>
        <div class="row" style="margin-top: 100px;">
            <div class="col-xxl-3 col-lg-6 col-xs-12 text-center" style="visibility: visible; animation-duration: 700ms; animation-delay: 300ms; animation-name: fadeInUp;">
                <div class="featureImg"><img src="../assets/images/home_body_banner_01.png" alt="Company"></div>
                <div class="featureContent">
                    <h3><a href="../pages/product.php" class="text-decoration-none">Company<span>Production</span></a></h3>
                    <p style="color: gray;">We mainly produce CNC machines, drilling &amp; milling machines, drilling machines, metal cutting saws</p>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-6 col-xs-12 text-center" style="visibility: visible; animation-duration: 700ms; animation-delay: 350ms; animation-name: fadeInUp;">
                <div class="featureImg"><img src="../assets/images/home_body_banner_02.png" alt="Company"></div>
                <div class="featureContent">
                    <h3><a href="../pages/product.php" class="text-decoration-none">Company<span>Companies</span></a></h3>
                    <p style="color: gray;">With a total area of 75,000 square meters, our three production bases have Management Center, Technology R &amp; D center</p>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-6 col-xs-12 text-center" style="visibility: visible; animation-duration: 700ms; animation-delay: 400ms; animation-name: fadeInUp;">
                <div class="featureImg"><img src="../assets/images/home_body_banner_03.png" alt="Company"></div>
                <div class="featureContent">
                    <h3><a href="../pages/product.php" class="text-decoration-none">Company<span>QUALITY</span></a></h3>
                    <p style="color: gray;">In addition to adherence to delivery deadlines and service，We carry out strict technical process and quality control.</p>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-6 col-xs-12 text-center" style="visibility: visible; animation-duration: 700ms; animation-delay: 450ms; animation-name: fadeInUp;">
                <div class="featureImg"><img src="../assets/images/home_body_banner_04.png" alt="24/7"></div>
                <div class="featureContent">
                    <h3><a href="../pages/product.php" class="text-decoration-none">24/7 <span>Support</span></a></h3>
                    <p style="color: gray;">Address：Foreign Trade Company: No.99 West Development Road, Ganjiang District, Yangzhou City, Jiangsu Province, China</p>
                </div>
            </div>
        </div>
        <div class="d-none d-lg-block">
            <br>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="row justify-content-center">
            <div class="d-flex justify-content-center">
                <img src="../assets/images/home_body_OurProduct.png">
            </div>
            <div class="text-center mb-4">
                <h2 class="text-warning">Our <span class="text-dark">Product</span></h2>
            </div>
            <div class="card-container">
                <div class="scroll-content" id="scrollContent">
                    <!-- Cards อยู่ใน scroll-content -->
                    <div class="card">
                        <img src="https://via.placeholder.com/250x150" alt="Product 1">
                        <div class="card-body">
                            <h3 class="card-title">Product 01</h3>
                            <p class="card-text">Descriptions</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://via.placeholder.com/250x150" alt="Product 2">
                        <div class="card-body">
                            <h3 class="card-title">Product 02</h3>
                            <p class="card-text">Descriptions</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://via.placeholder.com/250x150" alt="Product 3">
                        <div class="card-body">
                            <h3 class="card-title">Product 03</h3>
                            <p class="card-text">Descriptions</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://via.placeholder.com/250x150" alt="Product 4">
                        <div class="card-body">
                            <h3 class="card-title">Product 04</h3>
                            <p class="card-text">Descriptions</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <h3 class="card-title">view more</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- <div class="row mt-5 justify-content-center">
            <div class="d-flex justify-content-center">
                <img src="../assets/images/home_body_OurProduct.png">
            </div>
            <div class="text-center mb-4">
                <h2 class="text-warning">Latest <span class="text-dark">News</span></h2>
            </div>
        </div> -->
        <br>
        <br>
    </div>


    <?php include "../pages/footer.php"; ?>
    <?php include "../include/scriptjs.html"; ?>

</body>

</html>