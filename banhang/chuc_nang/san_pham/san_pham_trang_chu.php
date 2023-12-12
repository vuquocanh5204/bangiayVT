<br><br>

<div class="the"> <p style="font-size:20px; color:#FFF; text-align:center; padding-top:9px; font-family:Tahoma;"> sản phẩm của chúng tôi </p> </div>
<br><br>
<?php 
    // Kết nối CSDL bằng MySQLi
    $connection = mysqli_connect("localhost", "root", "", "ban_hang");

    // Kiểm tra kết nối
    if (!$connection) {
        die("Kết nối không thành công: " . mysqli_connect_error());
    }

    // Truy vấn SQL
    $tv = "SELECT id, ten, gia, hinh_anh FROM san_pham WHERE trang_chu='co' ORDER BY sap_xep_trang_chu DESC LIMIT 0,15";
    $tv_1 = mysqli_query($connection, $tv);

    echo "<table>";
    while ($tv_2 = mysqli_fetch_array($tv_1)) {
        echo "<tr>";
        for ($i = 1; $i <= 4; $i++) {
            echo "<td align='center' width='215px' valign='top'>";
            if ($tv_2 != false) {
                $link_anh = "hinh_anh/san_pham/" . $tv_2['hinh_anh'];
                $link_chi_tiet = "?thamso=chi_tiet_san_pham&id=" . $tv_2['id'];
                $gia = $tv_2['gia'];
                $gia = number_format($gia, 0, ",", ".");
                echo "<a href='$link_chi_tiet' >";
                echo "<img src='$link_anh' width='280px' height='300px' style='margin-left:25px' >";
                echo "</a>";
                echo "<br><br>";
                echo "<a href='$link_chi_tiet' >";
                echo $tv_2['ten'];
                echo "</a>";
                echo "<div style='margin-top:5px'>";
                echo $gia;
                echo "</div><br>";
            } else {
                echo "&nbsp;";
            }
            echo "</td>";
            if ($i != 3) {
                $tv_2 = mysqli_fetch_array($tv_1);
            }
        }
        echo "</tr>";
    }
    echo "</table>";

    // Đóng kết nối
    mysqli_close($connection);
?>
