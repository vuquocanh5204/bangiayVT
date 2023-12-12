<style type="text/css" >
	div.slideshow img {width:335px;height:287px}
</style>
<center>
<div class="slideshow" id="slideshow">
    <?php
    $conn = new mysqli("localhost", "root", "", "ban_hang");

    if ($conn->connect_error) {
        die("Kết nối không thành công: " . $conn->connect_error);
    }

    $tv = "SELECT hinh, lien_ket FROM slideshow ORDER BY id";
    $stmt = $conn->prepare($tv);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($tv_2 = $result->fetch_assoc()) {
        $link_hinh = "hinh_anh/slideshow/" . $tv_2['hinh'];
        echo "<a href='" . $tv_2['lien_ket'] . "'>";
        echo "<img src='" . $link_hinh . "'>";
        echo "</a>";
    }

    $stmt->close();
    $conn->close();
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