<?php 
	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}
	
	$_SESSION['trang_chi_tiet_gio_hang'] = "co";
	$id = $_GET['id'];

	// Kết nối CSDL bằng MySQLi
	$conn = new mysqli("localhost", "root", "", "ban_hang");

	// Kiểm tra kết nối
	if ($conn->connect_error) {
		die("Kết nối không thành công: " . $conn->connect_error);
	}

	// Sử dụng Prepared Statements để tránh SQL Injection
	$stmt = $conn->prepare("SELECT * FROM san_pham WHERE id = ?");
	$stmt->bind_param("i", $id); // Giả sử id là số nguyên, "i" là kiểu dữ liệu INTEGER

	// Thực thi truy vấn
	$stmt->execute();
	$result = $stmt->get_result();

	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$link_anh = "hinh_anh/san_pham/" . $row['hinh_anh'];

		echo "<table>";
		echo "<tr>";
		echo "<td width='250px' align='center'>";
		echo "<img src='$link_anh' width='150px'>";
		echo "</td>";
		echo "<td valign='top'>";
		echo "<a href='#'>";
		echo $row['ten'];
		echo "</a>";
		echo "<br><br>";
		$gia = number_format($row['gia'], 0, ",", ".");
		echo $gia;
		echo "<br><br>";
		echo "<form method='post' action='xu_ly_gio_hang.php'>";
		echo "<input type='hidden' name='thamso' value='gio_hang'>";
		echo "<input type='hidden' name='id' value='$id'>";
		echo "<input type='text' name='so_luong' value='1' style='width:50px'>";
		echo "<input type='submit' value='Thêm vào giỏ' style='margin-left:15px'>";
		echo "</form>";
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td colspan='2'>";
		echo "<br><br>";
		echo $row['noi_dung'];
		echo "</td>";
		echo "</tr>";
		echo "</table>";

	} else {
		echo "Không tìm thấy sản phẩm.";
	}

	// Đóng kết nối
	$stmt->close();
	$conn->close();
?>
