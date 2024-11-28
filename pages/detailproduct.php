<!DOCTYPE html>
<html lang="en">

<?php session_start(); ?>
<?php include "../include/ref.html"; ?>
<?php include "../include/style.html"; ?>


<body class="bg-custom ">
    <?php include "../include/header.php"; ?>
    <?php include "../include/bg-header.php"; ?>
    <div class="container bg-light">
        <br>
        <h2 class="text-center text-warning"><i class="bi bi-star-fill"></i><span class="text-dark">Detail of Product</span> </h2>
        <div class="container my-5">
            <div class="row">
                <!-- ฝั่งซ้าย: รูปภาพสินค้า -->
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <img id="productImage" src="https://via.placeholder.com/400x400" alt="Product Image" class="product-image">
                </div>

                <!-- ฝั่งขวา: ข้อมูลสินค้า -->
                <div class="mt-5 mt-lg-0 col-lg-6 product-detail">
                    
                    <h1 id="productName" class="mb-3">ชื่อสินค้า</h1>
                    <p id="productPrice" class="price">฿0.00</p>
                    <p id="productDescription" class="description">รายละเอียดสินค้า</p>
                </div>
            </div>
        </div>
        <br>
    </div>


    <?php include "../pages/footer.php"; ?>
    <?php include "../include/scriptjs_detail.php"; ?>
    <?php include "../include/scriptjs.html"; ?>
</body>

</html>