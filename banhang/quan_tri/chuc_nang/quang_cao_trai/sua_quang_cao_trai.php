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

	// Truy vấn lấy nội dung quảng cáo vị trí 'trái'
	$sql = "SELECT * FROM quang_cao WHERE vi_tri='trai'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// Lấy dữ liệu từ kết quả
		$row = $result->fetch_assoc();
		$noi_dung = $row['html'];
	} else {
		$noi_dung = "";
	}

	// Đóng kết nối
	$conn->close();
?>

?>
<form action="" method="post" enctype="multipart/form-data" >
	<table width="990px" >
		<tr>
			<td><b style="color:blue;font-size:20px" >Sửa quảng cáo trái</b></td>
		</tr>

		<tr>
			<td align="center" >
				<br>
				<script type="text/javascript">
				  tinymce.init({
					selector: '#noi_dung',
					theme: 'modern',
					width: 980,
					height: 200,
					plugins: [
					  'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
					  'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
					  'save table contextmenu directionality emoticons template paste textcolor jbimages'
					],
					toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons jbimages',
					relative_urls: false
				  });
				  
				  </script>
				  <textarea id="noi_dung" name="noi_dung" ><?php echo $noi_dung; ?></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<br>
				<input type="submit" name="bieu_mau_sua_quang_cao_trai" value="Sửa quảng cáo" style="width:200px;height:50px;font-size:24px" >
			</td>
		</tr>
	</table>
</form>