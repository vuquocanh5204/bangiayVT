<?php 
	if(!isset($bien_bao_mat)){exit();}
	
	$id = $_GET['id'];

	// Kết nối tới CSDL với MySQLi
	$servername = "localhost"; // Địa chỉ server CSDL
	$username = "root"; // Tên đăng nhập MySQL
	$password = ""; // Mật khẩu MySQL
	$dbname = "ban_hang"; // Tên CSDL

	// Tạo kết nối đến CSDL
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Kiểm tra kết nối
	if ($conn->connect_error) {
		die("Kết nối thất bại: " . $conn->connect_error);
	}

	// Xóa hình ảnh nếu tồn tại
	$tv = "SELECT hinh FROM slideshow WHERE id='$id'";
	$tv_1 = $conn->query($tv);
	$row = $tv_1->fetch_assoc();
	$link_hinh = "../hinh_anh/slideshow/" . $row['hinh'];
	if(file_exists($link_hinh)) {
		unlink($link_hinh);
	}
	
	// Xóa dữ liệu từ bảng slideshow
	$tv = "DELETE FROM slideshow WHERE id = $id ";
	$conn->query($tv);

	// Đóng kết nối CSDL
	$conn->close();
?>
