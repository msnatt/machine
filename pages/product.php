<!DOCTYPE html>
<html lang="en">

<?php session_start(); ?>
<?php include "../include/ref.html"; ?>
<?php include "../include/style.html"; ?>


<body class="bg-custom ">
    <?php include "../components/header.php"; ?>
    <?php include "../components/bg-header.php"; ?>
    <div class="container bg-light" style="height: 175vh;">
        <br>
        <h2 class="text-center text-warning"><i class="bi bi-star-fill"></i><span class="text-dark">recommands</span> </h2>
        <br>
        <?php include "../components/slidepage_product.php"; ?>
        <div class="container my-2">
            <h2 class="text-center text-warning"><i class="bi bi-shop"></i><span class="text-dark">Product</span></h2>
            <div class="filter-section">
                <!-- <select id="price-filter" class="form-select w-auto" onchange="filterProducts()">
                    <option value="all">ทั้งหมด</option>
                    <option value="low">ต่ำกว่า 1,500 บาท</option>
                    <option value="mid">1,500 - 2,000 บาท</option>
                    <option value="high">มากกว่า 2,000 บาท</option>
                </select> -->
            </div>
            <!-- Pagination -->
            <div class="pagination mt-4">
                <div class="row">
                    <div class="col-4 d-flex justify-content-center">
                        <button class="page-link" id="prev-page" disabled>&lt;</button>
                    </div>
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <span class="page-link" id="current-page">1</span> / <span id="total-pages">1</span>
                    </div>
                    <div class="col-4 d-flex justify-content-center">
                        <button class="page-link" id="next-page">&gt;</button>
                    </div>
                </div>
            </div>
            <br>
            <!-- แสดงสินค้า -->
            <div id="product-list" class="row g-6"></div>

            <!-- Pagination -->
            <br>
        </div>
    </div>


    <?php include "../pages/footer.php"; ?>
    <?php include "../include/productscript.php"; ?>
    <?php include "../include/scriptjs.html"; ?>
</body>

</html>