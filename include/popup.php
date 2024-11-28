<div class="d-flex">
    <div id="popup" class="toast popup show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="row">
            <p id="popupMessage" class="col-11" style="margin: 0;">This is a custom popup message!</p>
            <button type="button" class="btn-close col-1" onclick="closePopup()" aria-label="Close"></button>
        </div>
    </div>
</div>
<?php
// เช็คว่า session มีข้อความหรือไม่
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']); // ลบข้อความหลังจากแสดงแล้ว
} else {
    $message = "";
}
?>