<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="../package/css/swiper.min.css">

  <!-- Demo styles -->
  <style>
    body {
      background: #262626;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
      background: #fff;
    }
  </style>
</head>
<body>
	 <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" </div>
      <div class="swiper-slide" </div>
      <div class="swiper-slide" </div>
      <div class="swiper-slide" </div>
      <div class="swiper-slide" </div>
      <div class="swiper-slide" </div>
      <div class="swiper-slide" </div>
      <div class="swiper-slide" </div>	
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="../package/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>

</body>
</html>