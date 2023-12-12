<?php 
	if(!isset($bien_bao_mat)){exit();}
	
	// Thực hiện kết nối đến CSDL
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ban_hang";

	$conn = new mysqli($servername, $username, $password, $dbname);

	// Kiểm tra kết nối
	if ($conn->connect_error) {
		die("Kết nối không thành công: " . $conn->connect_error);
	}
	
	// Lấy thông tin quản trị từ CSDL
	$query = "SELECT * FROM thong_tin_quan_tri WHERE id='1'";
	$result = $conn->query($query);
	
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$ky_danh = $_POST['ky_danh'];
		$mat_khau = $row['mat_khau'];

		$mat_khau_tu_form = trim($_POST['mat_khau']);
		if ($mat_khau_tu_form !== "khong_doi") {
			$mat_khau = md5(md5($mat_khau_tu_form));
		}

		// Cập nhật thông tin quản trị
		$update_query = "UPDATE thong_tin_quan_tri SET ky_danh = '$ky_danh', mat_khau = '$mat_khau' WHERE id = '1'";
		if ($conn->query($update_query) === TRUE) {
			$_SESSION['ky_danh'] = $ky_danh;
			$_SESSION['mat_khau'] = $mat_khau;
			
			// Thông báo sau khi cập nhật
			thong_bao_html("Đã cập nhật lại thông tin quản trị");
		} else {
			echo "Lỗi khi cập nhật thông tin quản trị: " . $conn->error;
		}
	} else {
		echo "Không tìm thấy thông tin quản trị";
	}
	
	// Đóng kết nối
	$conn->close();
?>
