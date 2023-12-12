<?php 
    $id = $_GET['id'];
    $so_du_lieu = 15;

    $conn = new mysqli("localhost", "tên_người_dùng", "mật_khẩu", "tên_cơ_sở_dữ_liệu");

    if ($conn->connect_error) {
        die("Kết nối không thành công: " . $conn->connect_error);
    }

    $tv = "SELECT COUNT(*) FROM san_pham WHERE thuoc_menu='$id'";
    $tv_1 = $conn->query($tv);
    $tv_2 = $tv_1->fetch_row();
    $so_trang = ceil($tv_2[0] / $so_du_lieu);

    if (!isset($_GET['trang'])) {
        $vtbd = 0;
    } else {
        $trang = intval($_GET['trang']); // Làm sạch dữ liệu trước khi sử dụng
        $vtbd = ($trang - 1) * $so_du_lieu;
    }

    $tv = "SELECT id, ten, gia, hinh_anh, thuoc_menu FROM san_pham WHERE thuoc_menu='$id' ORDER BY id DESC LIMIT $vtbd, $so_du_lieu";
    $tv_1 = $conn->query($tv);

    echo "<table>";
    while ($tv_2 = $tv_1->fetch_assoc()) {
		echo "<table>";
	while($tv_2=mysqli_fetch_array($tv_1))
	{
		echo "<tr>";
			for($i=1;$i<=3;$i++)
			{
				echo "<td align='center' width='215px' valign='top' >";
					if($tv_2!=false)
					{
						$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
						$link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
						$gia=$tv_2['gia'];
						$gia=number_format($gia,0,",",".");
						echo "<a href='$link_chi_tiet' >";
							echo "<img src='$link_anh' width='150px' >";
						echo "</a>";
						echo "<br>";
						echo "<br>";
						echo "<a href='$link_chi_tiet' >";
							echo $tv_2['ten'];
						echo "</a>";
						echo "<div style='margin-top:5px' >";						
						echo $gia;
						echo "</div>";
						echo "<br>";
					}
					else 
					{
						echo "&nbsp;";
					}
				echo "</td>";
				if($i!=3)
				{
					$tv_2=mysqli_fetch_array($tv_1);
				}
			}
		echo "</tr>";
	}
	echo "<tr>";
		echo "<td colspan='3' align='center' >";
			echo "<div class='phan_trang' >";
				for($i=1;$i<=$so_trang;$i++)
				{
					$link="?thamso=xuat_san_pham&id=".$_GET['id']."&trang=".$i;
					echo "<a href='$link' >";
						echo $i;echo " ";
					echo "</a>";
				}
			echo "</div>";
		echo "</td>";
	echo "</tr>";
	echo "</table>";
    }
    echo "</table>";

    echo "<div class='phan_trang'>";
    for ($i = 1; $i <= $so_trang; $i++) {
        $link = "?thamso=xuat_san_pham&id=$id&trang=$i";
        echo "<a href='$link'>$i </a>";
    }
    echo "</div>";

    $conn->close();
?>
