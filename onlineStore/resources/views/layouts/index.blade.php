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
<script src="js/bootstrap.js"> </script>
<!-- /start menu -->
</head>
<body> 
<!-- {{-- Chèn phần header --}} -->

@include('user.partials.header')

<!-- {{--chèn phần slider--}} -->

@include('user.partials.slider')


<!-- {{--phan hien thi san pham--}} -->

<h2 class="mb-3">Sản phẩm mới nhất</h2>
<div class="row row-cols-1 row-cols-md-4 g-4">
	@foreach($newProducts as $sp)
			<div class="col">
				<div class="card h-100">
					<img src="{{ asset('images/' . $sp->hinh) }}" class="card-img-top" alt="">
					<div class="card-body">
		               <h4 class="card-title">{{ $sp->tensp }}</h4>

						@if($sp->giakm && $sp->giakm < $sp->dongia)
							<p class="card-text text-muted"><del>{{ number_format($sp->dongia) }} VNĐ</del> (Giá gốc)</p>
							<p class="card-text text-danger fw-bold">{{ number_format($sp->giakm) }} VNĐ (Giá khuyến mãi)</p>
						@else
							<p class="card-text text-danger fw-bold">{{ number_format($sp->dongia) }} VNĐ</p>
						@endif

							<p class="card-text">{{ $sp->mota }}</p>
					</div>
                <div class="card-footer">
							<small class="text-muted">Số lượng: {{ $sp->soluong }}</small>
				</div>
            	</div>
        	</div>
    @endforeach
</div>
<h2 class="mb-3">Sản phẩm phổ biến nhất </h2>
<div class="row row-cols-1 row-cols-md-4 g-4">
	@foreach($popularProducts as $sp)
			<div class="col">
				<div class="card h-100">
					<img src="{{ asset('images/' . $sp->hinh) }}" class="card-img-top" alt="">
					<div class="card-body">
		               <h4 class="card-title">{{ $sp->tensp }}</h4>

						@if($sp->giakm && $sp->giakm < $sp->dongia)
							<p class="card-text text-muted"><del>{{ number_format($sp->dongia) }} VNĐ</del> (Giá gốc)</p>
							<p class="card-text text-danger fw-bold">{{ number_format($sp->giakm) }} VNĐ (Giá khuyến mãi)</p>
						@else
							<p class="card-text text-danger fw-bold">{{ number_format($sp->dongia) }} VNĐ</p>
						@endif

							<p class="card-text">{{ $sp->mota }}</p>
					</div>
                <div class="card-footer">
							<small class="text-muted">Số lượng: {{ $sp->soluong }}</small>
				</div>
            	</div>
        	</div>
    @endforeach
</div>
<h2 class="mb-3"> Sản phẩm phổ đắt nhất  </h2>
<div class="row row-cols-1 row-cols-md-4 g-4">
	@foreach($expensiveProducts as $sp)
			<div class="col">
				<div class="card h-100">
					<img src="{{ asset('images/' . $sp->hinh) }}" class="card-img-top" alt="">
					<div class="card-body">
		               <h4 class="card-title">{{ $sp->tensp }}</h4>

						@if($sp->giakm && $sp->giakm < $sp->dongia)
							<p class="card-text text-muted"><del>{{ number_format($sp->dongia) }} VNĐ</del> (Giá gốc)</p>
							<p class="card-text text-danger fw-bold">{{ number_format($sp->giakm) }} VNĐ (Giá khuyến mãi)</p>
						@else
							<p class="card-text text-danger fw-bold">{{ number_format($sp->dongia) }} VNĐ</p>
						@endif

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

<!-- {{--Offers--}} -->
@include('user.partials.offers')

<!-- {{-- Chèn phần footer --}} -->
@include('user.partials.footer')

<!---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
