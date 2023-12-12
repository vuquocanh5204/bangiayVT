<?php 
    if (!isset($bien_bao_mat)) {
        exit();
    }
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ban_hang";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Kết nối không thành công: " . $conn->connect_error);
    }

    $ten = trim($_POST['ten']);
    $ten = $conn->real_escape_string($ten); // Đảm bảo an toàn cho câu truy vấn SQL

    $danh_muc = $_POST['danh_muc'];

    $gia = trim($_POST['gia']);
    if ($gia == "") {
        $gia = 0;
    }

    $ten_file_anh = $_FILES['hinh_anh']['name'];

    $trang_chu = $_POST['trang_chu'];
    $noi_bat = $_POST['noi_bat'];

    $noi_dung = $_POST['noi_dung'];
    $noi_dung = $conn->real_escape_string($noi_dung); // Đảm bảo an toàn cho câu truy vấn SQL

    $tv_m = "SELECT MAX(sap_xep_trang_chu) FROM san_pham";
    $tv_m_1 = $conn->query($tv_m);
    $tv_m_2 = $tv_m_1->fetch_assoc();
    $sap_xep_trang_chu = $tv_m_2[0] + 1;

    if ($ten != "") {
        if ($ten_file_anh != "") {
            $tv_k = "SELECT COUNT(*) FROM san_pham WHERE hinh_anh = '$ten_file_anh'";
            $tv_k_1 = $conn->query($tv_k);
            $tv_k_2 = $tv_k_1->fetch_assoc();
            
            if ($tv_k_2[0] == 0) {
                $tv = "INSERT INTO san_pham (
                        id,
                        ten,
                        gia,
                        hinh_anh,
                        noi_dung,
                        thuoc_menu,
                        noi_bat,
                        trang_chu,
                        sap_xep_trang_chu
                    )
                    VALUES (
                        NULL,
                        '$ten',
                        '$gia',
                        '$ten_file_anh',
                        '$noi_dung',
                        '$danh_muc',
                        '$noi_bat',
                        '$trang_chu',
                        '$sap_xep_trang_chu'
                    )";
                    
                $conn->query($tv);

                $duong_dan_anh = "../hinh_anh/san_pham/" . $ten_file_anh;
                move_uploaded_file($_FILES['hinh_anh']['tmp_name'], $duong_dan_anh);
                
                $_SESSION['danh_muc_menu'] = $danh_muc;
                $_SESSION['tuy_chon_trang_chu'] = $trang_chu;
                $_SESSION['tuy_chon_noi_bat'] = $noi_bat;
            } else {
                echo "Hình ảnh bị trùng tên";
            }
        } else {
            echo "Chưa chọn ảnh";
        }
    } else {
        echo "Tên sản phẩm chưa được điền vào";
    }

    $conn->close();
?>
