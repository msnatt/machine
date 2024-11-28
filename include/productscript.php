<script>
    const products = [{
            id: 1,
            name: "สินค้า 1",
            price: 1000,
            image: "https://via.placeholder.com/400x400",
            description: "รายละเอียดของสินค้า 1 ที่ช่วยอธิบายว่าเป็นสินค้าอะไร"
        },
        {
            id: 2,
            name: "สินค้า 2",
            price: 1200,
            image: "https://via.placeholder.com/400x400",
            description: "รายละเอียดของสินค้า 2 ที่เหมาะสำหรับการใช้งานแบบ..."
        },
        {
            id: 3,
            name: "สินค้า 3",
            price: 1500,
            image: "https://via.placeholder.com/400x400",
            description: "รายละเอียดเพิ่มเติมเกี่ยวกับสินค้า 3 ที่ทำให้มันโดดเด่น"
        },
        {
            id: 4,
            name: "สินค้า 4",
            price: 2000,
            image: "https://via.placeholder.com/400x400",
            description: "รายละเอียดของสินค้า 4 ที่ออกแบบมาเพื่อตอบสนองความต้องการ..."
        },
        {
            id: 5,
            name: "สินค้า 5",
            price: 1700,
            image: "https://via.placeholder.com/400x400",
            description: "รายละเอียดของสินค้า 5 พร้อมฟีเจอร์เด่นที่ไม่เหมือนใคร"
        },
        {
            id: 6,
            name: "สินค้า 6",
            price: 1300,
            image: "https://via.placeholder.com/400x400",
            description: "ข้อมูลเพิ่มเติมเกี่ยวกับสินค้า 6 สำหรับผู้ที่ต้องการ..."
        },
        {
            id: 7,
            name: "สินค้า 7",
            price: 1400,
            image: "https://via.placeholder.com/400x400",
            description: "รายละเอียดสินค้า 7 ที่มีคุณภาพและความทนทาน"
        },
        {
            id: 8,
            name: "สินค้า 8",
            price: 1800,
            image: "https://via.placeholder.com/400x400",
            description: "สินค้า 8 ที่มาพร้อมกับรายละเอียดที่น่าสนใจ"
        },
        {
            id: 9,
            name: "สินค้า 9",
            price: 1600,
            image: "https://via.placeholder.com/400x400",
            description: "สินค้า 9 พร้อมรายละเอียดสำหรับการใช้งานที่หลากหลาย"
        },
        {
            id: 10,
            name: "สินค้า 10",
            price: 2100,
            image: "https://via.placeholder.com/400x400",
            description: "ข้อมูลของสินค้า 10 ที่เหมาะสมกับการใช้งานในทุกสถานการณ์"
        },
    ];
</script>
<!-- page product -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        let productsPerPage = 6; // จำนวนสินค้าต่อหน้า
        let currentPage = 1;
        let filteredProducts = [...products];

        // ฟังก์ชันตรวจสอบขนาดหน้าจอ
        function updateProductsPerPage() {
            if (window.innerWidth < 768) {
                productsPerPage = 3; // หน้าจอเล็ก
            } else {
                productsPerPage = 6; // หน้าจอใหญ่
            }
            currentPage = 1; // รีเซ็ตไปหน้าแรก
            renderProducts(currentPage);
        }

        // ฟังก์ชันเปลี่ยนหน้า
        function changePage(offset) {
            currentPage += offset;
            renderProducts(currentPage);
        }

        // ฟังก์ชันกรองสินค้า
        function filterProducts() {
            const filter = document.getElementById("price-filter").value;
            if (filter === "low") {
                filteredProducts = products.filter(p => p.price < 1500);
            } else if (filter === "mid") {
                filteredProducts = products.filter(p => p.price >= 1500 && p.price <= 2000);
            } else if (filter === "high") {
                filteredProducts = products.filter(p => p.price > 2000);
            } else {
                filteredProducts = [...products];
            }
            currentPage = 1;
            renderProducts(currentPage);
        }

        // ฟังก์ชันแสดงสินค้า
        function renderProducts(page) {
            const startIndex = (page - 1) * productsPerPage;
            const endIndex = startIndex + productsPerPage;
            const visibleProducts = filteredProducts.slice(startIndex, endIndex);

            const productList = document.getElementById("product-list");
            productList.innerHTML = visibleProducts.map(product => `
            <div class="col-12 col-md-6 col-lg-4 d-flex mt-3 justify-content-center">
                <div class="card h-100 w-100">
                    <img src="${product.image}" class="card-img-top" alt="${product.name}">
                    <div class="card-body">
                        <h5 class="card-title">${product.name}</h5>
                        <p class="text-danger fw-bold">฿${product.price.toLocaleString()}</p>
                        <a href="../pages/detailproduct.php?id=${product.id}" class="btn btn-primary w-100">ดูรายละเอียด</a>

                    </div>
                </div>
            </div>
        `).join("");

            // คำนวณจำนวนหน้าสูงสุด
            const totalPages = Math.ceil(filteredProducts.length / productsPerPage);
            document.getElementById("total-pages").textContent = totalPages;

            // อัปเดตปุ่ม Pagination
            document.getElementById("current-page").textContent = currentPage;
            document.getElementById("prev-page").disabled = currentPage === 1;
            document.getElementById("next-page").disabled = currentPage === totalPages;
        }

        // Event Listeners
        document.getElementById("prev-page").addEventListener("click", () => changePage(-1));
        document.getElementById("next-page").addEventListener("click", () => changePage(1));
        document.getElementById("price-filter").addEventListener("change", filterProducts);
        window.addEventListener('resize', updateProductsPerPage);

        // เริ่มต้น
        updateProductsPerPage();
    });
</script>