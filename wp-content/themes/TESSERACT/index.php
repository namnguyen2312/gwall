<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('title');?></title>
	
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/iconmoon.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/responsive.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/animate.css">
	<!-- REVOLUTION BANNER CSS SETTINGS -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/rs-plugin/css/settings.css" media="screen">

	<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/ico/favicon.ico">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory');?>/js/isotope.pkgd.min.js"></script>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.inview.js"></script>
	
</head>
<body>
<div id="wrapper">
	<section id="mainHeader">
		<header class="header">
			<div class="menu-navicon" id="menu-navicon">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 12" style="background-color:#ffffff00" version="1.1" xml:space="preserve" x="0px" y="0px" width="38px" height="32px"><rect x="0" y="0" width="18" height="2" fill="#ffffff"/><rect x="0" y="5" width="18" height="2" fill="#ffffff"/><rect x="0" y="10" width="18" height="2" fill="#ffffff"/></svg>
			</div>
		</header>
		<div class="menu-wrap">
			<nav class="menu">
				<div class="menu-list">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				</div>
			</nav>
			<button class="close-button" id="close-button">Close Menu</button>
		</div>
		<div class="content-wrap">
			<div class="overlay">
				<div class="content">
					<div class="center-content">
						<div class="logo-decor">
							<a href="index.php"><img class="img-responsive" src="<?php bloginfo('template_directory');?>/images/tets.png" alt="greenwall"></a>
						</div>
						<div class="center-text">
							<h1><?php bloginfo('title');?></h1>
							<p>mang khong gian xanh den nha ban</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> <!--End mainHeader-->

	<section id="slider" class="content-background"> <!-- Start Slider -->
		<div class="container">
			<div class="main-title white">
				<h2>Hệ thống Hydroponic</h2>
				<p>Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.</p>
			</div>
		</div>
		<div class="bannercontainer">
			<div class="banner">
				<ul>
					<!-- SLIDE  -->
					<li data-transition="slotfade-horizontal" data-masterspeed="1500">
						<!-- MAIN IMAGE -->
						<img src="<?php bloginfo('template_directory');?>/images/greenwall_background1.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
						<!-- LAYERS -->
						<!-- LAYER NR. 1 -->
						<div class="tp-caption lfr lightgrey_divider  big_orange skewfromrightshort fadeout"
							data-x="400"
							data-y="150"
							data-speed="1500"
							data-start="1200"
							data-easing="Power4.easeInQuad">Hệ thống treo tường
						</div>
						<div class="tp-caption lfr lightgrey_divider skewfromrightshort fadeout"
							data-x="400"
							data-y="200"
							data-speed="2000"
							data-start="1200"
							data-easing="Power4.easeInElastic">Tiet kiem chi phi
						</div>
						<div class="tp-caption lfr lightgrey_divider skewfromrightshort fadeout"
							data-x="400"
							data-y="250"
							data-speed="2500"
							data-start="1200"
							data-easing="Power4.easeInQuint">Lam sach khong khi
						</div>
					</li>
					<!-- SLIDE  -->
					<li data-transition="slotfade-horizontal" data-masterspeed="1500">
						<!-- MAIN IMAGE -->
						<img src="<?php bloginfo('template_directory');?>/images/greenwall_background2.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
						<!-- LAYERS -->
						<!-- LAYER NR. 1 -->
						<div class="tp-caption lfr lightgrey_divider skewfromrightshort fadeout"
							data-x="85"
							data-y="224"
							data-speed="500"
							data-start="1200"
							data-easing="Power4.easeOut">Hệ thống dây 
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section> <!-- End Slider -->

	<section id="portfolio"> <!-- Start Portfolio -->
		<div class="container">
			<div class="main-title green">
				<h2>Phụ kiện hệ thống</h2>
				<p>phụ kiện cho hệ thống gwall</p>
			</div>
			<div class="nav nav-fills filters" class="button-group">
				<button class="btn" data-filter="*" class="current">All</button>
				<button class="btn" data-filter=".plastic">plastic</button>
				<button class="btn" data-filter=".chemical">chemical</button>
			</div>
			<div id="single-item">
				<div id="divSibling" class="toggleDiv row single-item">
					<div class="col-sm-6">
						<img class="img-responsive" src="<?php bloginfo('template_directory');?>/images/juice.jpg" alt="burger">
					</div>
					<div class="col-sm-6 item-description">
						<div class="item-title clearfix">
							<h3>Banh Mi Burger</h3>
							<span class="show-hide close">
								<i class="icon-cross"></i>
							</span>
						</div>
						<div class="item-info">
							<ul>
								<li>
									<span>Chất liệu</span> Nhựa
								</li>
								<li>
									<span>Thể tích</span> 40x40
								</li>
								<li>
									<span>Sản phẩm</span> Rọ 
								</li>
								<li>
									<span>Giá</span> 10.000 Đ
								</li>
							</ul>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
					</div>
				</div>
				<div id="divSibling1" class="toggleDiv row single-item">
					<div class="col-sm-6">
						<img src="<?php bloginfo('template_directory');?>/images/tree.jpg" alt="burger">
					</div>
					<div class="col-sm-6 item-description">
						<div class="item-title clearfix">
							<h3>Big Tree Stand Alone</h3>
							<span class="show-hide close">
								<i class="icon-cross"></i>
							</span>
						</div>
						<div class="item-info">
							<ul>
								<li>
									<span>Chất liệu</span> Nhựa
								</li>
								<li>
									<span>Thể tích</span> 40x40
								</li>
								<li>
									<span>Sản phẩm</span> Rọ 
								</li>
								<li>
									<span>Giá</span> 10.000 Đ
								</li>
							</ul>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
					</div>
				</div>
				<div class="portfolioContainer" style="margin-right:-30px">
					<div class="plastic col-sm-4 item-background">
						<div class="item">
							<img class="img-responsive" src="<?php bloginfo('template_directory');?>/images/tree.jpg" alt="Ro Thuy Canh">
							<a href="#single-project" class="more show-hide" rel="#divSibling">
			  					<i class="icon-eye-plus"></i>
			  				</a>
							<h3>Ro ua Thuy Canh</h3>
							<p>Lorem ipsum dolor sit amet..</p>
							<div class="mask"></div>
						</div>
					</div>
		  			<div class="plastic col-sm-4 item-background">
		  				<div class="item">
			  				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/images/vegetables.jpg" alt="Ong Trong Cay">
			  				<a href="#single-project" class="more show-hide" rel="#divSibling1">
			  					<i class="icon-eye-plus"></i>
			  				</a>
			  				<h3>Ống Trồng Cây</h3>
			  				<p>Lorem ipsum dolor sit amet..</p>
			  				<div class="mask"></div>
		  				</div>
		  			</div>
		  			<div class="plastic col-sm-4 item-background">
		  				<div class="item">
			  				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/images/juice.jpg" alt="Nap Day Ong">
			  				<a href="#single-project" class="more show-hide">
			  					<i class="icon-eye-plus"></i>
			  				</a>
			  				<h3>Nắp Đậy Ống Trồng</h3>
			  				<p>Lorem ipsum dolor sit amet..</p>
			  				<div class="mask"></div>
		  				</div>
		  			</div>
		  			<div class="chemical col-sm-4 item-background">
		  				<div class="item">
			  				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/images/tree.jpg" alt="So Dua Perlit">
			  				<a href="#single-project" class="more show-hide">
			  					<i class="icon-eye-plus"></i>
			  				</a>
			  				<h3>Giá Thể Sơ Dừa</h3>
			  				<p>Lorem ipsum dolor sit amet..</p>
			  				<div class="mask"></div>
		  				</div>
		  			</div>
		  			<div class="chemical col-sm-4 item-background">
		  				<div class="item">
			  				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/images/vegetables.jpg" alt="Gia The So Dua">
			  				<a href="#single-project" class="more show-hide">
			  					<i class="icon-eye-plus"></i>
			  				</a>
			  				<h3>Bình Tưới Cây</h3>
			  				<p>Lorem ipsum dolor sit amet..</p>
			  				<div class="mask"></div>
		  				</div>
		  			</div>
		  			<div class="chemical col-sm-4 item-background">
		  				<div class="item">
			  				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/images/juice.jpg" alt="Khay Uom">
			  				<a href="#single-project" class="more show-hide">
			  					<i class="icon-eye-plus"></i>
			  				</a>
			  				<h3>Khay Ươm Cây</h3>
			  				<p>Lorem ipsum dolor sit amet..</p>
			  				<div class="mask"></div>
		  				</div>
		  			</div>
	  			</div>
  			</div>
		</div>
	</section> <!-- End Portfolio -->
	
	<section class="content-background"> <!-- Start Benefit -->
		<div class="container">
			<div class="main-title white">
				<h2>Lợi ích</h2>
				<p>những lợi ích bạn có được khi lắp tường cây</p>
			</div>
			<div class="bannercontainerbenefit">
				<div class="bannerbenefit">
					<ul>
						<li data-transition="slideright" data-masterspeed="1500">
							<div class="caption"
							data-x="-380"
							data-y="10"
							data-speed="1500"
							data-start="1200"
							data-easing="Power4.fadeout">
								<h3>Tiết kiệm năng lượng</h3>
								<p>Tiết kiệm chi phí điện máy điều hoà: vào mùa hè, thời tiết oi bức, đặt biệt là ở các toà nhà cao tầng, mức hấp thụ và giữu nhiệt cao khiến nhu cầu sử dụng hệ thống làm mát tăng cao, lượng điện tiêu thụ cũng từ đó tăng lên. Bức tường xanh được bao phủ bởi lớp cây cối sẽ giúp giảm khả năng hấp nhiệt, đóng vai trò như màn bảo vệ làm mát cho bức tường. Bức tường xanh có thể làm giảm tới 15F</p>
							</div>
						</li>
						<li data-transition="slideright" data-masterspeed="1500">
							<div class="caption"
							data-x="-380"
							data-y="10"
							data-speed="1500"
							data-start="1200"
							data-easing="Power4.fadeout">
								<h3>Tính thẩm mĩ</h3>
								<p>Biến những tấm bê tông cứng nhắc trở nên mềm mại và đẹp mắt hơn, bổ sung vào không gian sống hương vị của thiên nhiên. Giống như cây trên đường phố, không gian tràn ngập sắc xanh cũng khiến người xung quanh cảm thấy được nhẹ nhõm, hoà mình vào cuộc sống vốn hoang sơ của thiên nhiên</p>
							</div>
						</li>
						<li data-transition="slideright" data-masterspeed="1500">
							<div class="caption"
							data-x="-380"
							data-y="10"
							data-speed="1500"
							data-start="1200"
							data-easing="Power4.fadeout">
								<h3>Quảng cáo</h3>
								<p>Hãy tưởng tượng tên, logo công ty bạn được chạm khắc trên rừng cây xanh như một biển quảng cáo sẽ thu hút và bắt mắt đến mức nào. Sự sáng tạo và đặc sắc được tha hồ hiện hữu bằng cây cối, việc quảng cáo này không còn xa lạ, nhưng liệu công ty bạn có muốn sở hữu nó đầu tiên.</p>
							</div>
						</li>
						<li data-transition="slideright" data-masterspeed="1500">
							<div class="caption"
							data-x="-380"
							data-y="10"
							data-speed="1500"
							data-start="1200"
							data-easing="Power4.fadeout">
								<h3>Cải thiện không khí</h3>
								<p>Chúng ta thường dành 90% thời gian để ở trong một không gian chật hẹp, với bầu không khí độc hại và ngộp ngạt. Đó cũng là một trong những nguyên nhân khiến tỉ lệ dân văn phòng bị stress, có chứng đâu đầu tăng cao. Tường xanh sẽ là một giả pháp tối ưu cho cuộc sống hiện đại ngày nay. Đóng vai trò như một máy lọc không khí tự nhiên, giảm thiểu bụi bẩn và các hoạt chất độc hại trong không khí</p>
							</div>
						</li>
						<li data-transition="slideright" data-masterspeed="1500">
							<div class="caption"
							data-x="-380"
							data-y="10"
							data-speed="1500"
							data-start="1200"
							data-easing="Power4.fadeout">
								<h3>Sức khoẻ</h3>
								<p>Một nghiên cứu đã chứng minh rằng, một bệnh nhân được nghĩ dưỡng trong căn phòng hoặc nơi sạch sẽ, có cây cối sẽ ít dùng thuốc giảm đau và khả năng hồi phục nhanh hơn so với những phòng bệnh thông thường. Tác dụng thư giãn, giảm stress của cây cối cũng được đề cập, do cây xanh có thể giảm bớt tác động của tiếng ồn, áp lực tâm sinh lí, đồng thời dễ dàng kết nối cuộc sống với thiên nhiên. Với tâm trạng thoải mái, chắc chắn hiệu quả công việc cũng cao hơn.</p>
							</div>
						</li>
						<li data-transition="slideright" data-masterspeed="1500">
							<div class="caption"
							data-x="-380"
							data-y="10"
							data-speed="1500"
							data-start="1200"
							data-easing="Power4.fadeout">
								<h3>Giải pháp âm thanh</h3>
								<p>Cuộc sống hiện đại phải đối moặt với hàng ngàn tạp âm xung quanh như phương tiện giao thông, con người, máy móc....Tường cây xanh chính là bộ đệm giảm tiếng ồn tự nhiên, giúp giảm tới 40dB âm thanh bên trong cũng như bên ngoài. Bên cạnh đó, cây xanh cũng giúp giảm tiếng vang trong văn phòng
								</p>
							</div>
						</li>
						<li data-transition="slideright" data-masterspeed="1500">
							<div class="caption"
							data-x="-380"
							data-y="10"
							data-speed="1500"
							data-start="1200"
							data-easing="Power4.fadeout">
								<h3>Giải pháp Điều hoà nhiệt độ</h3>
								<p>Tường cây, thông qua quá trình bốc hơi, và bụi cây rậm rạp giúp hấp thụ nhiệt, làm mát không khí. Việc làm dịu không khí oi bức trong văn phòng cũng giúp giảm thiểu chi phí điện cũng như hiệu ứng nhà kính
								</p>
							</div>
						</li>
						<li data-transition="slideright" data-masterspeed="1500">
							<div class="caption"
							data-x="-380"
							data-y="10"
							data-speed="1500"
							data-start="1200"
							data-easing="Power4.fadeout">
								<h3>Giá trị kinh tế</h3>
								<p>Những tác động giảm thiểu chi phí điện, giảm stress, nâng cao hiệu quả công việc, tăng tính thẩm mĩ,... đã dẫn đến việc tăng giá trị kinh tế cho không gian sống, Không gian xung quanh bạn không những mang lái sự hài lòng cho bạn mà còn là điểm thu hút người xung quanh.
								</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section> <!-- End Benefit -->

	<section id="service"> <!-- Start Service -->
		<div class="container">
			<div class="main-title green">
				<h2>dich vu</h2>
				<p>dịch vụ của chúng tôi luôn đáp ứng được những yêu cầu của khách hàng</p>
			</div>
			<div class="row service-content">
				<div class="maintenance col-sm-6">
					<img src="<?php bloginfo('template_directory');?>/images/service.png" alt="service">
					<h3>Bao trì</h3>
					<p>kiểm tra hệ thống, giải pháp dinh dưỡng phù hợp cho cây, cắt tỉa cây, thay thế cây khi có một cây không chịu đựng được với môi trường... được thực hiện thường xuyên. Chương trình bảo trì được thực hiện trên những sản phẩm của Gwall và cả tường cây có sẵn của </p>
				</div>
				<div class="consulting col-sm-6">
					<img src="<?php bloginfo('template_directory');?>/images/consulting.png" alt="consulting">
					<h3>Tư vấn</h3>
					<p>chúng tôi sẽ làm việc với các kiến trúc sư chuyên nghiệp để cung cấp cho bạn một thiết kế nội thất hoàn hảo nhất theo yêu cầu cũng như sở thích của khách hàng.bạn Bên cạnh đó, Gwall sẽ tư vấn cho khách hàng việc trồng cây nào là phù hợp với điều kiện tự nhiên (ánh sáng, nhiệt độ,...)</p>	
				</div>
			</div>
		</div>
	</section> <!-- End Service -->

	<footer id="footer-wrapper" class="content-background">
		<div class="container">
			<div class="main-address">
				<p>Main Office: 127/97 Ni Su Huynh Lien, F.12, Q.Tan Binh</p>
				<p>Show Room: 270A Bac Hai, F.12, Q.10</p>
				<p>Phone: +(08) 39747047</p>
				<p>fax: +(08) 39747052</p>
				<a href="#"><i>Email:</i> sales@gwall.vn</a>
				<div class="social-title">Kết Nối Với Chúng Tôi</div>
				<nav>
					<ul>
						<li><a href="#"><i class="icon-facebook3"></i></a></li>
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-pinterest"></i></a></li>
						<li><a href="#"><i class="icon-google-plus3"></i></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div id="main-footer">
			<p class="footer-text">Copyright © 2015 Bản quyền thuộc về GreenWall. Design by NamNguyen</p>
		</div>
	</footer> <!-- End Footer-->
</div>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/classie.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/main.js"></script>
</body>
</html>

