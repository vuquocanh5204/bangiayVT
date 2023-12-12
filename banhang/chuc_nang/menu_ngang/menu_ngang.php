<?php 
    $connection = mysqli_connect("localhost", "root", "", "ban_hang");

    if (!$connection) {
        die("Kết nối không thành công: " . mysqli_connect_error());
    }

    $tv = "SELECT id, ten, loai_menu FROM menu_ngang ORDER BY id";
    $tv_1 = mysqli_query($connection, $tv);

    echo "<div class='menu_ngang' >";
    while ($tv_2 = mysqli_fetch_array($tv_1)) {
        $link_menu = "";
        if ($tv_2['loai_menu'] == "") {
            $link_menu = "?thamso=xuat_mot_tin&id=" . $tv_2['id'];
        } elseif ($tv_2['loai_menu'] == "san_pham") {
            $link_menu = "?thamso=xuat_san_pham_2";
        }
        echo "<a href='$link_menu'>";
        echo $tv_2['ten'];
        echo "</a>";
    }
    echo "</div>";

    mysqli_close($connection);
?>
