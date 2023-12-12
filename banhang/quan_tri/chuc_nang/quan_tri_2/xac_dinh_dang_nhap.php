<?php 
// Đảm bảo biến bảo mật đã được khai báo trước khi sử dụng hàm này
if (!isset($bien_bao_mat)) {
    exit();
}

// Hàm thông báo với tham số được truyền vào
function thong_bao_abc($c) {
    $lien_ket_trang_truoc = $_SERVER['HTTP_REFERER'];
?>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Thông báo</title>
    </head>
    <body>
        <style type="text/css">
            a.trang_truoc_c8w{text-decoration:none;color:blue;font-size:36px;margin-left:50px}
            a.trang_truoc_c8w:hover{color:red;}
        </style>
        <br><br><br><br>
        <a href="<?php echo $lien_ket_trang_truoc; ?>" class="trang_truoc_c8w" >Bấm vào đây để trở về trang trước</a>
        <script type="text/javascript">
            alert("<?php echo $c; ?>");
        </script>
    </body>
    </html>		
<?php 
    exit();
}

// Hàm chuyển về trang trước
function trang_truoc_abc() {
?>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Đang chuyển về trang trước</title>
    </head>
    <body>
        <script type="text/javascript">
            window.history.back();
        </script>	
    </body>
    </html>
<?php 
}

// Kết nối CSDL với MySQLi
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ban_hang";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

// Xử lý đăng nhập
if (isset($_POST['dang_nhap_quan_tri'])) {
    $ky_danh = $_POST['ky_danh'];
    $mat_khau = md5($_POST['mat_khau']); // Băm mật khẩu ở đây

    // Sử dụng prepared statements để tránh SQL injection
    $stmt = $conn->prepare("SELECT COUNT(*) FROM thong_tin_quan_tri WHERE ky_danh=? AND mat_khau=?");
    $stmt->bind_param("ss", $ky_danh, $mat_khau);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    if ($count == 1) {
        $_SESSION['ky_danh'] = $ky_danh;
        $_SESSION['mat_khau'] = $mat_khau;
    } else {
        thong_bao_abc("Thông tin nhập vào không đúng");
    }
    trang_truoc_abc();
}


// Kiểm tra session để xác nhận đăng nhập
if(isset($_SESSION['ky_danh'])) {
    $ky_danh = $_SESSION['ky_danh'];
    $mat_khau = $_SESSION['mat_khau'];

    $stmt = $conn->prepare("SELECT COUNT(*) FROM thong_tin_quan_tri WHERE ky_danh=? AND mat_khau=?");
    $stmt->bind_param("ss", $ky_danh, $mat_khau);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    if($count == 1) {
        $xac_dinh_dang_nhap = "co";
    }
}

// Đóng kết nối CSDL
$conn->close();
?>
