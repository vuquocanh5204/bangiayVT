<?php 
	if (!isset($bien_bao_mat)) {
		exit();
	}

	$servername = "localhost";
	$username = "root"; 
	$password = ""; 
	$dbname = "ban_hang"; 

	// Tạo kết nối đến cơ sở dữ liệu
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Kiểm tra kết nối
	if ($conn->connect_error) {
		die("Kết nối không thành công: " . $conn->connect_error);
	}

	$noi_dung = $_POST['noi_dung'];
	$noi_dung = $conn->real_escape_string($noi_dung); // Tránh lỗ hổng SQL Injection

	// Truy vấn cập nhật nội dung quảng cáo vị trí 'trái'
	$sql = "UPDATE quang_cao SET html = '$noi_dung' WHERE vi_tri='trai'";

	if ($conn->query($sql) === TRUE) {
		echo "Cập nhật thành công";
	} else {
		echo "Lỗi: " . $sql . "<br>" . $conn->error;
	}

	// Đóng kết nối
	$conn->close();
?>
