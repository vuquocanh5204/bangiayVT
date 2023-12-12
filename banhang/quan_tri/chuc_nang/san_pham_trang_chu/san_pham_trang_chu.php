<?php 
	if(!isset($bien_bao_mat)){exit();}
	// Thực hiện kết nối tới CSDL với MySQLi
	$servername = "localhost"; // Địa chỉ server CSDL
	$username = "your_username"; // Tên đăng nhập MySQL
	$password = "your_password"; // Mật khẩu MySQL
	$dbname = "your_database"; // Tên CSDL

	// Tạo kết nối đến CSDL
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Kiểm tra kết nối
	if ($conn->connect_error) {
		die("Kết nối thất bại: " . $conn->connect_error);
	}

	$so_dong_tren_mot_trang = 10;
	if(!isset($_GET['trang'])) {
		$_GET['trang'] = 1;
	}	

	$tv_count = "SELECT COUNT(id) AS total FROM san_pham WHERE trang_chu='co'";
	$result_count = $conn->query($tv_count);
	$row_count = $result_count->fetch_assoc();
	$so_trang = ceil($row_count['total'] / $so_dong_tren_mot_trang);
	
	$vtbd = ($_GET['trang'] - 1) * $so_dong_tren_mot_trang;
	$tv_select = "SELECT id, ten, gia, hinh_anh, sap_xep_trang_chu FROM san_pham WHERE trang_chu='co' ORDER BY sap_xep_trang_chu DESC LIMIT $vtbd, $so_dong_tren_mot_trang";
	$result_select = $conn->query($tv_select);
	
	if ($result_select->num_rows > 0) {
		while($row = $result_select->fetch_assoc()) {
			$id = $row['id'];
			$ten = $row['ten'];
			$gia = $row['gia'];
			$hinh_anh = $row['hinh_anh'];
			$sap_xep_trang_chu = $row['sap_xep_trang_chu'];
		}
	} else {
		echo "Không có dữ liệu";
	}

	$conn->close();
?>


<form method="post" >
	<table width="990px" class="tb_a1" >
		<tr style="background:#CCFFFF;height:40px;" >
			<td width="120px" ><b>Hình ảnh</b></td>
			<td width="450px" ><b>Tên</b></td>
			<td align="center" width="140px" ><b>Giá</b></td>
			<td align="center" width="140px" ><b>Trang chủ</b></td>
			<td align="center" width="140px" ><b>Thứ tự</b></td>		
		</tr>
		<?php 
			$i=1;
			while($tv_2=mysqli_fetch_array($tv_1))
			{
				$id=$tv_2['id'];
				$ten=$tv_2['ten'];
				$gia=$tv_2['gia'];
				$gia=number_format($gia,0,",",".");
				$link_hinh="../hinh_anh/san_pham/".$tv_2['hinh_anh'];
				$sap_xep_trang_chu=$tv_2['sap_xep_trang_chu'];
				$ten_select="select_".$i;
				$ten_input="input_".$i;
				$ten_id="id_".$i;
				?>
					<tr class="a_1" >
						<td align="center" >
							<img src="<?php echo $link_hinh; ?>" style="width:100px;margin-top:10px;margin-bottom:10px;" border="0" >
						</td>
						<td>
							<?php echo $ten; ?>
						</td>
						<td align="center" >
							<?php echo $gia; ?>
						</td>
						<td align="center" >
							<select name="<?php echo $ten_select; ?>" >
								<option value="" >Không</option>
								<option value="co" selected >Có</option>
							</select>
						</td>
						<td align="center" >
							<input value="<?php echo $sap_xep_trang_chu; ?>" style="width:50px" name="<?php echo $ten_input; ?>" >
							<input  type="hidden" value="<?php echo $id; ?>" name="<?php echo $ten_id; ?>" >
						</td>					
					</tr>
				<?php				
				$i++;
			}
		?>
		<tr>
			<td colspan="3" align="center" >
				&nbsp;
			</td>
			<td colspan="2" align="center" >
				<br>
				<input type="submit" name="bieu_mau_san_pham_trang_chu" value="Cập nhật" style="width:180px;height:50px;font-size:24px" >
				<br><br>
			</td>			
		</tr>
		<tr>
			<td colspan="5" align="center" >
				<br>
				<?php 
					for($i=1;$i<=$so_trang;$i++)
					{
						$link_phan_trang="?thamso=san_pham_trang_chu&trang=".$i;
						echo "<a href='$link_phan_trang' class='phan_trang' >";
							echo $i;
						echo "</a> ";
					}
				?>
				<br><br>
			</td>
		</tr>
	</table>
</form>