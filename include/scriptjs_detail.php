<?php include "../include/productscript.php"; ?>
<script>
    let Detail_Product = [...products];
    const urlParams = new URLSearchParams(window.location.search);
    const product_id = urlParams.get('id');

    if (product_id !== null) { // ตรวจสอบว่า product_id ไม่เป็น null
        const selectedProduct = Detail_Product.find(product => product.id == product_id);

        if (selectedProduct) {
            document.getElementById('productName').textContent = selectedProduct.name;
            document.getElementById('productPrice').textContent = `฿${selectedProduct.price.toLocaleString()}`;
            document.getElementById('productImage').src = selectedProduct.image;
            document.getElementById('productDescription').textContent = selectedProduct.description;
        } else {
            console.log("FALSE: Product not found");
            document.getElementById('productName').textContent = "FALSE: Product not found";
        }
    } else {
        console.log("No product_id provided in URL");
    }
</script>