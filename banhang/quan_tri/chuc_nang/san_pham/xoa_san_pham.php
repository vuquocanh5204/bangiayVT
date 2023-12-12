<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id = $_GET['id'];
	
	// Kết nối tới CSDL
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ban_hang";

	$conn = new mysqli($servername, $username, $password, $dbname);

	// Kiểm tra kết nối
	if ($conn->connect_error) {
		die("Kết nối thất bại: " . $conn->connect_error);
	}
	
	// Truy vấn lấy thông tin sản phẩm
	$tv = "SELECT * FROM san_pham WHERE id='$id' ";
	$result = $conn->query($tv);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();

		$link_hinh = "../hinh_anh/san_pham/".$row['hinh_anh'];
		if(file_exists($link_hinh)) {
			// Kiểm tra và xóa hình ảnh trước khi xóa sản phẩm
			unlink($link_hinh);
		}

		// Truy vấn xóa sản phẩm
		$tv = "DELETE FROM san_pham WHERE id = $id ";
		if ($conn->query($tv) === TRUE) {
			echo "Sản phẩm đã được xóa thành công";
		} else {
			echo "Lỗi xóa sản phẩm: " . $conn->error;
		}
	} else {
		echo "Không tìm thấy sản phẩm";
	}

	$conn->close();
?>
