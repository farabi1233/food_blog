<!DOCTYPE html>
<html lang="en">
<head>
	<title>Food Blog - Web Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Food Blog Web Template">
	<meta name="keywords" content="food, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="{{ asset ('asset/front/img/favicon.ico') }}" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset ('asset/front/css/bootstrap.min.css' ) }} "/>
	<link rel="stylesheet" href="{{asset ('asset/front/css/font-awesome.min.css' ) }} "/>
	<link rel="stylesheet" href="{{asset ('asset/front/css/owl.carousel.css' ) }} "/>
	<link rel="stylesheet" href="{{asset ('asset/front/css/animate.css' ) }} "/>
	<link rel="stylesheet" href="{{asset ('asset/front/css/style.css' ) }} "/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder 
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	@include('layout.front.header')
	<!-- Header section end -->


    <!-- Hero section -->
    @include('layout.front.banner')
	
	<!-- Hero section end -->


    <!-- Add section end 
    @include('layout.front.add')
	
	<!-- Add section end -->


    <!-- Recipes section -->
    @include('layout.front.latest_recipes')
	
	<!-- Recipes section end -->


    <!-- Footer widgets section -->
    @include('layout.front.widgets')
	
	<!-- Footer widgets section end -->


    <!-- Review section end -->
    @include('layout.front.review')
    
	
	<!-- Review section end -->


    <!-- Gallery section -->
    @include('layout.front.footer_gallery')
	
	<!-- Gallery section end -->


    <!-- Footer section  -->
    @include('layout.front.footer')
	
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset ('asset/front/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{asset ('asset/front/js/owl.carousel.min.js') }}"></script>
	<script src="{{asset ('asset/front/js/main.js') }}"></script>
</body>
</html>