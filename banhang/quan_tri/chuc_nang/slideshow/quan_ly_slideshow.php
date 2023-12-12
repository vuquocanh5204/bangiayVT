<?php 
	if(!isset($bien_bao_mat)){exit();}
	
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

	$tv = "SELECT * FROM slideshow ORDER BY id";
	$tv_1 = $conn->query($tv);

	// Kiểm tra và hiển thị dữ liệu
	if ($tv_1->num_rows > 0) {
		while($row = $tv_1->fetch_assoc()) {
			// Xử lý dữ liệu tại đây, ví dụ:
			$id = $row["id"];
			// Lấy các trường dữ liệu khác tương tự
			
			// In ra các giá trị hoặc xử lý dữ liệu tùy ý
			echo "ID: " . $id . "<br>";
			// Hiển thị các trường dữ liệu khác tương tự
		}
	} else {
		echo "Không có dữ liệu";
	}

	// Đóng kết nối CSDL
	$conn->close();
?>


<table width="990px" class="tb_a1" >
	<tr style="background:#CCFFFF;height:40px;" >
		<td width="710px" ><b>Hình ảnh</b></td>
		<td align="center" width="140px" ><b>Sửa</b></td>
		<td align="center" width="140px" ><b>Xóa</b></td>
	</tr>
	<?php 
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			$id=$tv_2['id'];
			$link_hinh="../hinh_anh/slideshow/".$tv_2['hinh'];
			$link_sua="?thamso=sua_slideshow&id=".$id;
			$link_xoa="?xoa_slideshow=co&id=".$id;
			?>
				<tr class="a_1" >
					<td align="center" >
						<a href="<?php echo $link_sua; ?>" >
							<img src="<?php echo $link_hinh; ?>" style="width:600px;margin-top:10px;margin-bottom:10px;" border="0" >
						</a>
					</td>
					<td align="center" >
						<a href="<?php echo $link_sua; ?>" class="lk_a1" >Sửa</a>
					</td>
					<td align="center" >
						<a href="<?php echo $link_xoa; ?>" class="lk_a1" >Xóa</a>
					</td>
				</tr>
			<?php 
		}
	?>

</table>