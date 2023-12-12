<?php 
if (!isset($bien_bao_mat)) {
    exit();
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

// Lấy thông tin quản trị để hiển thị trong form sửa
$query = "SELECT * FROM thong_tin_quan_tri WHERE id = '1'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $ky_danh = $row['ky_danh'];
}

if (isset($_POST['bieu_mau_sua_thong_tin_quan_tri'])) {
    $ky_danh = $_POST['ky_danh'];
    $mat_khau = $_POST['mat_khau'];

    $mat_khau_hash = $mat_khau === 'khong_doi' ? $row['mat_khau'] : md5($mat_khau);

    $update_query = "UPDATE thong_tin_quan_tri SET ky_danh = '$ky_danh', mat_khau = '$mat_khau_hash' WHERE id = '1'";
    if ($conn->query($update_query) === TRUE) {
        echo "Thông tin quản trị đã được cập nhật thành công";
    } else {
        echo "Lỗi khi cập nhật thông tin quản trị: " . $conn->error;
    }
}

$conn->close();
?>
<form action="" method="post">
    <table width="990px">
        <!-- Các trường form -->
        <tr>
            <td colspan="2"><b style="color:blue;font-size:20px">Sửa thông tin quản trị</b><br><br></td>
        </tr>
        <tr>
            <td width="100px">Ký danh : </td>
            <td width="890px">
                <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="ky_danh" value="<?php echo htmlspecialchars($ky_danh); ?>" >
            </td>
        </tr>
        <tr>
            <td valign="top">Mật khẩu : </td>
            <td>
                <input type="password" style="width:400px;margin-top:3px;margin-bottom:3px;" name="mat_khau" value="khong_doi" ><br><br>
                <!-- Ghi chú cho người dùng -->
                - Nếu chỉ muốn đổi ký danh thì chỉ cần sửa ký danh, còn phần mật khẩu thì để nguyên (mật khẩu sẽ không đổi khi gửi biểu mẫu)<br><br>
                - Khi sửa thông tin quản trị mà thông tin mật khẩu nhập vào là 'khong_doi' thì thông tin mật khẩu vẫn giữ nguyên (nghĩa là mật khẩu cũ không đổi)<br><br>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <br>
                <input type="submit" name="bieu_mau_sua_thong_tin_quan_tri" value="Sửa" style="width:200px;height:50px;font-size:24px" >
            </td>
        </tr>
    </table>
</form>
