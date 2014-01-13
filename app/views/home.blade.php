@extends('master')

@section('head')
	<link rel="stylesheet" type="text/css" href="/bower_components/flexslider/flexslider.css">
	<script type="text/javascript" src="/bower_components/flexslider/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.flexslider').flexslider();
		});
	</script>
@stop

@section('content')
	<div class="container">
		<div class="flexslider">
			<ul class="slides">
				<li>
					<img src="http://fet.simful.com/img/slide5.jpg"/>
				</li>
				<li>
					<img src="http://fet.simful.com/img/slide4.jpg"/>
				</li>
				<li>
					<img src="http://fet.simful.com/img/slide2.jpg"/>
				</li>
			</ul>
		</div>

		<div class="row">
			<div class="col-md-6">
				<legend><h4>Promo Terbaru</h4></legend>

			</div>

			<div class="col-md-6">
				<legend><h4>Berita Terbaru</h4></legend>


			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<legend><h4>Why Us</h4></legend>

			</div>

			<div class="col-md-6">
				<legend><h4>Popular Destinations</h4></legend>


			</div>
		</div>


	</div>

@stop