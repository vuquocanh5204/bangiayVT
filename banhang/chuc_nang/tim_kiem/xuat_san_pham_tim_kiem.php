<?php
if(isset($_GET['tu_khoa']) && trim($_GET['tu_khoa']) !== "") {
    $searchKeyword = trim($_GET['tu_khoa']);
    $keywords = explode(" ", $searchKeyword);
    
    $conditions = [];
    foreach ($keywords as $keyword) {
        if (!empty($keyword)) {
            $conditions[] = "ten LIKE '%" . $keyword . "%'";
        }
    }

    $whereClause = implode(" OR ", $conditions);

    // Kết nối đến CSDL (sử dụng MySQLi hoặc PDO)
    $connection = mysqli_connect("localhost", "root", "", "ban_hang");

    // Kiểm tra kết nối
    if($connection === false) {
        die("Lỗi: Không thể kết nối. " . mysqli_connect_error());
    }

    $so_du_lieu = 15;

    $tv = "SELECT COUNT(*) FROM san_pham WHERE $whereClause";
    $tv_1 = mysqli_query($connection, $tv);
    $tv_2 = mysqli_fetch_array($tv_1);
    $so_trang = ceil($tv_2[0] / $so_du_lieu);
    
    $vtbd = isset($_GET['trang']) ? ($_GET['trang'] - 1) * $so_du_lieu : 0;

    $tv = "SELECT id, ten, gia, hinh_anh, thuoc_menu FROM san_pham WHERE $whereClause ORDER BY id DESC LIMIT $vtbd, $so_du_lieu";
    $tv_1 = mysqli_query($connection, $tv);

    if ($tv_1 !== false && mysqli_num_rows($tv_1) > 0) {
        echo "<table>";
        while ($tv_2 = mysqli_fetch_array($tv_1)) {
            echo "<tr>";
            for ($i = 1; $i <= 3; $i++) {
                echo "<td align='center' width='215px' valign='top'>";
                $link_anh = "hinh_anh/san_pham/" . $tv_2['hinh_anh'];
                $link_chi_tiet = "?thamso=chi_tiet_san_pham&id=" . $tv_2['id'];
                $gia = number_format($tv_2['gia'], 0, ",", ".");
                echo "<a href='$link_chi_tiet'>";
                echo "<img src='$link_anh' width='150px'>";
                echo "</a>";
                echo "<br><br>";
                echo "<a href='$link_chi_tiet'>";
                echo $tv_2['ten'];
                echo "</a>";
                echo "<div style='margin-top:5px'>";
                echo $gia;
                echo "</div><br>";
                echo "</td>";
                if ($i != 3) {
                    $tv_2 = mysqli_fetch_array($tv_1);
                }
            }
            echo "</tr>";
        }
        echo "<tr>";
        echo "<td colspan='3' align='center'>";
        echo "<div class='phan_trang'>";
        for ($i = 1; $i <= $so_trang; $i++) {
            $link = "?thamso=tim_kiem&tu_khoa=" . $_GET['tu_khoa'] . "&trang=" . $i;
            echo "<a href='$link'>$i </a>";
        }
        echo "</div>";
        echo "</td>";
        echo "</tr>";
        echo "</table>";
    } else {
        echo "Không có kết quả phù hợp.";
    }

    mysqli_close($connection);
} else {
    echo "Bạn chưa nhập từ khóa";
}
?>
