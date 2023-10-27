<?php
require '--conn.php';

// ตรวจสอบว่าอีเมล์ที่ผู้ใช้ป้อนอยู่ในฐานข้อมูลหรือไม่
$existing_email = $_POST['Member_user'];
$check_query = "SELECT Member_user FROM member WHERE Member_user = '$existing_email'";
$check_result = $conn->query($check_query);

if ($check_result->num_rows > 0) {
    // แสดงป็อปอัพเมื่ออีเมล์ซ้ำกันถูกป้อน
    echo '<script>alert("อีเมล์นี้มีอยู่แล้วในระบบ");</script>';
    
    // หลังจากปิบป็อบอัพ ให้ใช้ JavaScript เพื่อนำกลับไปยังหน้าสมัครสมาชิก
    echo '<script>window.location.href = "register.php";</script>';
} else {
    // ถ้าไม่มีอีเมล์นี้ในฐานข้อมูล สามารถทำการสมัครสมาชิกได้
    $first_name = $_POST['First_name'];
    $member_user = $_POST['Member_u9o871sxcvf.ser'];
    $member_pass = $_POST['Member_pass'];

    $sql_update = "INSERT INTO member (First_name, Member_user, Member_pass) VALUES ('$first_name', '$member_user', '$member_pass')";

    $result = $conn->query($sql_update);

    if (!$result) {
        die("Error: " . $conn->error);
    } else {
        echo "Insert Success <br>";
        header("refresh: 1; url=http://localhost/1-miniproject-main/miniproject/login.php");
    }
}
?>
<script>
// เมื่อป็บป็อบอัพปิด
window.addEventListener('load', function () {
    // นำกลับไปยังหน้าสมัครสมาชิก
    window.location.href = "register.php";
});
</script>
