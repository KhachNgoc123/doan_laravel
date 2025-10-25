<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Lighting A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<script src="js/jquery.min.js"></script>
<!--//theme style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wedding Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<script src="js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!-- /start menu -->
</head>
<body> 
{{-- Chèn phần header --}}
@include('user.partials.header')
<div class="slider">
	  <div class="callbacks_container">
	     <ul class="rslides" id="slider">
	         <li>
				 <div class="banner1">				  
					  <div class="banner-info">
					  <h3>Morbi lacus hendrerit efficitur.</h3>
					  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. consectetur adipiscing elit.</p>
					  </div>
				 </div>
	         </li>
	         <li>
				 <div class="banner2">
					 <div class="banner-info">
					 <h3>Phasellus elementum tincidunt.</h3>
					 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. consectetur adipiscing elit.</p>
					 </div>
				 </div>
			 </li>
	         <li>
	             <div class="banner3">
	        	 <div class="banner-info">
	        	 <h3>Maecenas interposuere volutpat.</h3>
	          	 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. consectetur adipiscing elit.</p>
				 </div>
				 </div>
	         </li>
	      </ul>
	  </div>
  </div>
<!---->
<script src="js/bootstrap.js"> </script>

<h2 class="mb-3">Sản phẩm mới nhất</h2>
<div class="row row-cols-1 row-cols-md-4 g-4">
    @foreach($newProducts as $sp)
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('images/' . $sp->hinh) }}" class="card-img-top" alt="">
                <div class="card-body">
                     <h4 class="card-title">{{ $sp->tensp }}</h4>
                    <p class="card-text text-danger fw-bold">{{ number_format($sp->gia) }} VNĐ</p>
                    <p class="card-text">{{ $sp->mota }}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Số lượng: {{ $sp->soluong }}</small>
                </div>
            </div>
        </div>
    @endforeach
</div>
<h2 class="mt-5 mb-3">Sản phẩm phổ biến</h2>
<div class="row row-cols-1 row-cols-md-4 g-4">
    @foreach($popularProducts as $sp)
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('images/' . $sp->hinh) }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h4 class="card-title">{{ $sp->tensp }}</h4>
                    <p class="card-text text-danger fw-bold">{{ number_format($sp->gia) }} VNĐ</p>
                    <p class="card-text">{{ $sp->mota }}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Số lượng: {{ $sp->soluong }}</small>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>


<!---->
<div class="offers">
	 <div class="container">
	 <h3>End of Season Sale</h3>
	 <div class="offer-grids">
		
		 <div class="col-md-6 grid-left">
			 <a href="#"><div class="offer-grid1">
				 <div class="ofr-pic">
					 <img src="images/img2.jpg" class="img-responsive" alt=""/>
				 </div>
				 <div class="ofr-pic-info">
					 <h4>Đèn Tường Hai Lớp <br>Kiểu Kính Chạm Khắc Gỗ </h4>
					 <span>UP TO 20% OFF</span>
					 <p>Shop Now</p>
				 </div>
				 <div class="clearfix"></div>
			 </div></a>
		 </div>
		 <div class="col-md-6 grid-right">
			 <a href="#"><div class="offer-grid2">				 
				 <div class="ofr-pic-info2">
					 <h4>Đèn tường đôi vuông Rolex</h4>
					 <span>UP TO 30% OFF</span>
					 <p>Shop Now</p>
				 </div>
				 <div class="ofr-pic2">
					 <img src="images/img3.jpg" class="img-responsive" alt=""/>
				 </div>
				 <div class="clearfix"></div>
			 </div></a>
		 </div>
		 <div class="clearfix"></div>
	 </div>
	 </div>
</div>
<!---->
<div class="subscribe">
	 <div class="container">
		 <h3>Newsletter</h3>
		 <form>
			 <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
			 <input type="submit" value="Subscribe">
		 </form>
	 </div>
</div>
{{-- Chèn phần footer --}}
@include('user.partials.footer')

<!---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
