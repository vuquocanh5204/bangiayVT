
<?php
    session_start();
    $connection = mysqli_connect("localhost", "root", "", "ban_hang");
    
    if (!$connection) {
        die("Kết nối không thành công: " . mysqli_connect_error());
    }

    mysqli_query($connection, 'SET NAMES "UTF8"');

    include("chuc_nang/ham/ham.php");

    if (isset($_POST['thong_tin_khach_hang'])) {
        include("chuc_nang/gio_hang/thuc_hien_mua_hang.php");
    }
    if (isset($_POST['cap_nhat_gio_hang'])) {
        include("chuc_nang/gio_hang/cap_nhat_gio_hang.php");
        trang_truoc();
    }

    mysqli_close($connection);
?>
 
<html>
	<head>
		<meta charset="UTF-8">
		<title>Web bán hàng</title>
      <link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="giao_dien/giao_dien.css">  
        <script src="javascript.js" type="text/javascript" charset="utf-8" async defer></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="coin-slider.js"></script>    
	</head>
	<body>
    <div id="heder1">
     
<div id="top">
<nav class="menu">

        <ul class="clearfix">
            <li>
                <a href="#">Tài khoản <span class="arrow">&#9660;</span></a>
 
                <ul class="sub-menu">
                    <li><a href="quan_tri/index.php">Đăng nhập</a></li>
            
                </ul>
            </li>
            
			<?php 
    // Kết nối CSDL bằng MySQLi
    $connection = mysqli_connect("localhost", "root", "", "ban_hang");

    // Kiểm tra kết nối
    if (!$connection) {
        die("Kết nối không thành công: " . mysqli_connect_error());
    }

    // Truy vấn SQL
    $tv = "SELECT id, ten, loai_menu FROM menu_ngang ORDER BY id";
    $tv_1 = mysqli_query($connection, $tv);

    echo "<div class='menu_ngang' >";

    while ($tv_2 = mysqli_fetch_array($tv_1)) {
        $link_menu = "";
        if ($tv_2['loai_menu'] == "") {
            $link_menu = "?thamso=xuat_mot_tin&id=" . $tv_2['id'];
        }
        if ($tv_2['loai_menu'] == "san_pham") {
            $link_menu = "?thamso=xuat_san_pham_2";
        }
        echo "<a href='$link_menu'>";
        echo $tv_2['ten'];
        echo "</a>";
    }

    echo "</div>";

    // Đóng kết nối
    mysqli_close($connection);
?>

<div style="float:right; margin-right:-250px;">
   <?php 						
						include("chuc_nang/gio_hang/vung_gio_hang.php"); 
				
					?>	 
                    </div>                   
        </ul>
    </nav>
 </div>
 <img src="img/Untitled-2.jpg" style="width:220px; height:68px; float:left; margin-left:500px;  "> 
 
<form>
    <input type="hidden" name="thamso" value="tim_kiem" >
    <input type="text" name="tu_khoa" value="" placeholder="     Tìm kiếm giầy" style="width:600px; height:30px;  border: 1px solid #999999;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
    border-radius: 10px; margin-top:20px; margin-left:50px;">
    <input type="submit" value="Tìm" style="width:50px; height:30px; background:#F30; color:#FFF;  -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
    border-radius: 10px;" >
</form> 
</div>
<div id="menu">
 <nav class="menu22">
        <ul class="clearfix">
            <li>
                   <li><a href="index.php">Trang chủ</a></li>
                   <li><a href="http://localhost:85/ban_hang/index.php?thamso=xuat_san_pham_2">Giầy lười mới 2018</a></li>
                    <li><a href="http://localhost:85/ban_hang/index.php?thamso=xuat_san_pham_2&trang=2">giầy tây</a></li>   
                     <li><a href="http://localhost:85/ban_hang/index.php?thamso=xuat_san_pham_2&trang=3">giầy vải</a></li>   
                     
                           
        </ul>
    </nav> </div>
<div id="cnt"> 
<div id="giua">
<div class="menu2">
<div id="keo">
<div id="menuu">
  <ul>
    <li><a href="index.php">Trang chủ</a></li>
    <li><a href="http://localhost:85/ban_hang/index.php?thamso=xuat_san_pham_2&trang=3">Giầy lười mới</a>
      <ul class="sub-menuu">
        <li><a href="http://localhost:85/ban_hang/index.php?thamso=xuat_san_pham_2&trang=3">Giầy mua nhiều</a></li>
        <li><a href="http://localhost:85/ban_hang/index.php?thamso=xuat_san_pham_2&trang=3">giầy rẻ</a></li>
     
      </ul>
    </li>
    <li><a href="http://localhost:85/ban_hang/index.php?thamso=xuat_san_pham_2&trang=3">Giầy Tây</a>
     <ul class="sub-menuu">
        <li><a href="http://localhost:85/ban_hang/index.php?thamso=xuat_san_pham_2">Giầy mua nhiều</a></li>
        <li><a href="http://localhost:85/ban_hang/index.php?thamso=xuat_san_pham_2">giầy rẻ</a></li>
      </ul>
    </li>
    <li><a href="http://localhost:85/ban_hang/index.php?thamso=xuat_san_pham_2">Giầy vải</a>
     <ul class="sub-menuu">
        <li><a href="http://localhost:85/ban_hang/index.php?thamso=xuat_san_pham_2">Giầy mua nhiều</a></li>
        <li><a href="http://localhost:85/ban_hang/index.php?thamso=xuat_san_pham_2">giầy rẻ</a></li>
     
      </ul></li>
     <li><a href="http://localhost:85/ban_hang/index.php?thamso=xuat_san_pham_2">Áo Nam</a></li>
      <li><a href="http://localhost:85/ban_hang/index.php?thamso=xuat_san_pham_2">Ví bóp - Thắt lưng</a></li>
       <li><a href="http://localhost:85/ban_hang/index.php?thamso=xuat_san_pham_2">Cặp - Túi xách</a></li>
  </ul>
</div>
</div>
<div id="keo2">
<style type="text/css" >
	div.slideshow img {width:335px;height:287px}
</style>
<center>
<div class="slideshow" id="slideshow" >
<?php 
    // Kết nối CSDL bằng MySQLi
    $connection = mysqli_connect("localhost", "root", "", "ban_hang");

    // Kiểm tra kết nối
    if (!$connection) {
        die("Kết nối không thành công: " . mysqli_connect_error());
    }

    // Truy vấn SQL
    $tv = "SELECT hinh, lien_ket FROM slideshow ORDER BY id";
    $tv_1 = mysqli_query($connection, $tv);

    while ($tv_2 = mysqli_fetch_array($tv_1)) {
        $link_hinh = "hinh_anh/slideshow/" . $tv_2['hinh'];
        echo "<a href='" . $tv_2['lien_ket'] . "'>";
        echo "<img src='" . $link_hinh . "'>";
        echo "</a>";
    }

    // Đóng kết nối
    mysqli_close($connection);
?>

</div>
</center>
<script type="text/javascript" >

	var i_img=0;
	var div_slideshow=document.getElementById("slideshow");
	var img_slideshow=div_slideshow.getElementsByTagName("img");
	for(var i=0;i<img_slideshow.length;i++)
	{
		img_slideshow[i].style.display="none";
	}
	img_slideshow[0].style.display="block";
	
	setInterval(function(){
		img_slideshow[i_img].style.display="none";
		i_img=i_img+1;
		if(i_img>=img_slideshow.length){i_img=0;}
		img_slideshow[i_img].style.display="block";		
	},5000);
</script>
 </div>
</div>
<div class="chuyendong">  
<div id="games">
		
			<a href="http://localhost:85/ban_hang/index.php?thamso=chi_tiet_san_pham&id=36" target="_blank">
				<img src="img/22366714_1573847322654447_6374887001152717668_n-261x261.jpg" alt="Mini Ninjas" />
				<span>
					<b>Giầy mới đẹp</b><br />
				
				</span>
			</a>
			
			<a href="http://localhost:85/ban_hang/index.php?thamso=chi_tiet_san_pham&id=36" target="_blank">
				<img src="img/EO8A0913-261x261.JPG" alt="Price of Persia" />
			</a>
			
			<a href="http://localhost:85/ban_hang/index.php?thamso=chi_tiet_san_pham&id=35" target="_blank">
				<img src="img/giay-thoang-khi-01-261x261.jpg" alt="Spiderman: Shattered Dimensions" />
			</a>
			
			<a href="http://localhost:85/ban_hang/index.php?thamso=chi_tiet_san_pham&id=30" target="_blank">
				<img src="img/TB20esde.lnpuFjSZFjXXXTaVXa_!!629983525-261x261.jpg" alt="Brink" />
			</a>
		
			<a href="http://localhost:85/ban_hang/index.php?thamso=chi_tiet_san_pham&id=31" target="_blank" >
				<img src="img/TB1bOJXOVXXXXX8apXXXXXXXXXX_!!0-item_pic-261x261.jpg" alt="God of War III" />
			</a>
			
			<a href="http://localhost:85/ban_hang/index.php?thamso=chi_tiet_san_pham&id=33" target="_blank">
				<img src="img/EO8A0913-261x261.JPG" alt="Borderlands" />
			
			</a>
			
			<a href="http://localhost:85/ban_hang/index.php?thamso=chi_tiet_san_pham&id=32" target="_blank">
				<img src="img/2816570888_824335788-261x261.jpg" alt="Star Wars: The Old Republic" />
			</a>
				
			<a href="http://localhost:85/ban_hang/index.php?thamso=chi_tiet_san_pham&id=31" target="_blank">
				<img src="img/TB2lwTQXgYDK1JjSZFNXXXnkVXa_!!2433251950-261x261.jpg" alt="Batman: Arkham Asylum" />
			</a>
			
		</div>
		<script>
			$('#games').coinslider();
		</script>
          
</div>
		<center>
			<table width="990px">
				
				<tr>
					<td colspan="3" height="50px" >
						
					</td>
				</tr>
				<tr>
				
					<td width="650px" valign="top" >
						<?php 
							include("chuc_nang/dieu_huong.php");
						?>
					</td>
					<td width="170px" valign="top" >
									
					</td>
				</tr>
				<tr>
					<td colspan="3">
					<?php 
    // Kết nối CSDL bằng MySQLi
    $connection = mysqli_connect("localhost", "root", "", "ban_hang");

    // Kiểm tra kết nối
    if (!$connection) {
        die("Kết nối không thành công: " . mysqli_connect_error());
    }

    // Truy vấn SQL
    $tv = "SELECT * FROM footer LIMIT 0,1";
    $tv_1 = mysqli_query($connection, $tv);

    $tv_2 = mysqli_fetch_array($tv_1);
    echo $tv_2['html'];

    // Đóng kết nối
    mysqli_close($connection);
?>

</td>
				</tr>
			</table>
		</center>
	</body>
</html>