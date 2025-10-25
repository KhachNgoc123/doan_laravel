<!-- A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>⚠️ {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif
<!DOCTYPE html>
<html>
<head>
<title>Lighting A Ecommerce Category Flat Bootstarp Resposive Website Template | Contact :: w3layouts</title>
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
<script src="https://cdn.ckeditor.com/ckeditor5/41.2.0/classic/ckeditor.js"></script>
</head>
<body>
<!--header-->	
{{-- Chèn phần header --}}
@include('user.partials.header')
<!---->
<div class="contact">
	  <div class="container">
		<script type="importmap">
		{
			"imports": {
				"ckeditor5": "./ckeditor5/ckeditor5.js",
				"ckeditor5/": "./ckeditor5/"
			}
		}
		</script>
		
		 <ol class="breadcrumb">
		  <li><a href="index">Home</a></li>
		  <li class="active">Contact</li>
		 </ol>
			<!--start contact-->
			<h3>Contact Us</h3>
		  <div class="section group">				
				<div class="col-md-6 span_1_of_3">
					<div class="contact_info">
			    	 	<h4>Find Us Here</h4>
			    	 		<div class="map">
					   			<iframe src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe>
					   		</div>
      				</div>
      			<div class="company_address">
				     	<h4>Company Information :</h4>
						    	<p>500 Lorem Ipsum Dolor Sit,</p>
						   		<p>22-56-2-9 Sit Amet, Lorem,</p>
						   		<p>USA</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <a href="mailto:info@example.com">info@mycompany.com</a></p>
				   		<p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>
				   </div>
				</div>				
				<div class="col-md-6 span_2_of_3">
				  <div class="contact-form">
					     <form>
						
						<div>
							<span><label>E-MAIL</label></span>
							<span><input name="userEmail" type="email" class="textbox" required placeholder="Nhập email của bạn"></span>
						</div>
						<div>
							<span><label>MOBILE</label></span>
							<span><input name="userPhone" type="text" class="textbox"required></span>
						</div>
						<div>
							<span><label>NAME</label></span>
							<span><input name="userName" type="text" class="textbox"required></span>
						</div>
						<div>
							<span><label>SUBJECT</label></span>
							<span><textarea name="subject" id="subject"></textarea></span>
							
						<script>
						ClassicEditor
							.create(document.querySelector('#subject'), {
							toolbar: [ 'bold', 'italic', 'bulletedList', 'link', 'imageUpload' ],
							ckfinder: {
								
								uploadUrl: '/upload' 
							}
							})
							.catch(error => {
							console.error(error);
							});
						</script>
						</div>
						<div>
							<span><input type="submit" class="mybutton" value="Submit"></span>
						</div>
						</form>
				    </div>	
					

					
  				</div>				
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
<!---->
{{-- Chèn phần footer --}}
@include('user.partials.footer')

<!---->
</body>
</html> 
