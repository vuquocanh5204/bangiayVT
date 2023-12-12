<?php 
	if (!isset($bien_bao_mat)) {
		exit();
	}

	$servername = "localhost";
	$username = "root"; 
	$password = ""; 
	$dbname = "ban_hang";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Kết nối không thành công: " . $conn->connect_error);
	}

	$ten = trim($_POST['ten']);
	$ten = $conn->real_escape_string($ten); // Tránh SQL Injection

	$gia = trim($_POST['gia']);
	$trang_chu = $_POST['trang_chu'];
	$noi_bat = $_POST['noi_bat'];

	$noi_dung = trim($_POST['noi_dung']);
	$noi_dung = $conn->real_escape_string($noi_dung); // Tránh SQL Injection

	$ten_file_anh_tai_len = $_FILES['hinh_anh']['name'];
	if ($ten_file_anh_tai_len != "") {
		$ten_file_anh = $ten_file_anh_tai_len;
	} else {
		$ten_file_anh = $_POST['ten_anh'];
	}
	
	$id = $_GET['id'];

	if ($ten != "") {
		$sql_check = "SELECT COUNT(*) AS total FROM san_pham WHERE hinh_anh = '$ten_file_anh'";
		$result_check = $conn->query($sql_check);
		$row_check = $result_check->fetch_assoc();

		if ($row_check['total'] == 0 || $ten_file_anh_tai_len == "") {
			$sql_update = "UPDATE san_pham SET 
				ten = '$ten',
				gia = '$gia',
				hinh_anh = '$ten_file_anh',
				noi_dung = '$noi_dung',
				trang_chu = '$trang_chu',
				noi_bat = '$noi_bat' 
				WHERE id = $id";

			if ($conn->query($sql_update) === TRUE) {
				if ($ten_file_anh_tai_len != "") {
					$duong_dan_anh = "../hinh_anh/san_pham/" . $ten_file_anh_tai_len;
					move_uploaded_file($_FILES['hinh_anh']['tmp_name'], $duong_dan_anh);
					$duong_dan_anh_cu = "../hinh_anh/san_pham/" . $_POST['ten_anh'];
					unlink($duong_dan_anh_cu);
				}
			} else {
				echo "Lỗi: " . $conn->error;
			}
		} else {
			thong_bao_html("Hình ảnh bị trùng tên");
		}
	} else {
		thong_bao_html("Tên sản phẩm chưa được điền vào");
	}

	$conn->close();
?>
