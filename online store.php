<!DOCTYPE html>
<html>
<head>
	<title>onlinestore</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<style type="text/css">

	body {
      background: #262626;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 200%;
      padding: 20px;
  display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: inline-flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items:center;

    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 350px;
      float: right;
    }
    .swiper-slide img{
      margin: 20px;
      padding: 10px;
      display: inline;
      height: 200px;
      width: 250px;
    }
		
		.menu-bar{
			background-color: rgb(0,100,0);
			text-align: center;
			margin: 0px;
		}
		.menu-bar ul{
			display: inline-flex;
			list-style: none;
		}
		.menu-bar ul li{
		  width: 100px;
		  margin: 15px;
		  padding: 10px;
		}
		.menu-bar ul li a{
			text-decoration: none;
			color: #fff;
		}
		.active,.menu-bar ul li :hover{
            background-color: #2bab0d;
            border-radius: 5px;
		}
		.menu-bar .fa{
			margin-right: 8px;
			
		}
	</style>
</head>
<body>
	<nav class="menu">
		<div class="menu-bar">
			<ul>
				<li class="active"><a href="#"><i class="fa fa-home"></i>HOME</a></li>
				<li><a href="#">PRODUCTS</a></li>
				<li><a href="#">SERVICES</a></li>
				<li><a href="#">ABOUT US</a></li>
				<li><a href="#">CONTACTS</a></li>
				<li><a href="#">SHOP</a></li>
			</ul>
		</div>
	</nav>

<div class="swiper-container">
    <div class="swiper-wrapper">
          <div class="swiper-slide"> <img src="car2.jpg"></div>
          <div class="swiper-slide" ><img src="car2.jpg"></div>
          <div class="swiper-slide" ><img src="car2.jpg"></div>
          <div class="swiper-slide" ><img src="car2.jpg"></div>
          <div class="swiper-slide" ><img src="car2.jpg"></div>
          <div class="swiper-slide" ><img src="car2.jpg"></div>
          <div class="swiper-slide" ><img src="car2.jpg"></div>
    </div>
</div>
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