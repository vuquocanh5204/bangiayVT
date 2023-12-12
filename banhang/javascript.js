//khai báo biến slideIndex đại diện cho slide hiện tại
  var slideIndex;
  // KHai bào hàm hiển thị slide
  function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");//document.getElementsByClassName khả năng tương thích với trình duyệt
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";  
      }
	  //hien thị ảnh slide
      slides[slideIndex].style.display = "block";  
      dots[slideIndex].className += " active";
  }
  showSlides(slideIndex = 0);
  
  //Chuyển ảnh slide
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }