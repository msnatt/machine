<script>
    // ตรวจสอบว่ามีข้อความใน PHP ที่ส่งมาไหม 
    <?php if ($message != "") { ?>
        document.getElementById("popupMessage").innerText = "<?php echo $message ?>";
        document.getElementById("popup").style.display = "block";
    <?php } ?>
    // ปิดpopup
    function closePopup() {
        document.getElementById("popup").style.display = "none";
    }
</script>