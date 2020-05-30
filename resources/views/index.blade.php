@extends('layout.principal')

@section('title')
	Inicio
@endsection

@section('styles')
@endsection

@section('content')

<section class="container-fluid">
	<div class="row mt-3">
		<div class="col-12">
			<img src="{{ env('APP_URL') }}/assets/images/index/banner1.png" width="100%">
		</div>


		{{-- MINI WIDGET PARA DIVISIÓN HR E IMAGENES --}}
		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr-red mr-0">
		</div>
		<div class="col-md-4 mt-5 text-center lines-mid">
			<img src="{{ env('APP_URL') }}/assets/images/index/icono1.png" width="100%">
		</div>
		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr-red ml-0">
		</div>
		
		<div class="col-md-6 offset-md-3 mt-2">
			<p class="p-normal text-center">
				Somos una empresa Mexicana legalmente constituida, que nace del trabajo de más de 20 años en el ámbito de la publicidad, reconocida y dedicada a brindar un servicio íntegro, profesional y oportuno hacia nuestros clientes.
			</p>
		</div>

		{{-- MINI WIDGET PARA DIVISIÓN HR E IMAGENES --}}
		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr-red mr-0">
		</div>
		<div class="col-md-4 mt-5 text-center lines-mid">
			<img src="{{ env('APP_URL') }}/assets/images/index/icono2.png" width="100%">
		</div>
		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr-red ml-0">
		</div>

		<div class="col-md-10 offset-md-1 mt-5">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="{{ env('APP_URL') }}/assets/images/index/slider1.png" alt="">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="{{ env('APP_URL') }}/assets/images/index/slider1.png" alt="S">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="{{ env('APP_URL') }}/assets/images/index/slider1.png" alt="">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		{{-- MINI WIDGET PARA DIVISIÓN HR E IMAGENES --}}
		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr-red mr-0">
		</div>
		<div class="col-md-4 mt-5 text-center lines-mid">
			<img src="{{ env('APP_URL') }}/assets/images/index/icono3.png" width="100%">
		</div>
		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr-red ml-0">
		</div>

		<div class="col-md-8 offset-md-2 mt-2">
			<h4 class="text-center mt-2 mb-3 h-sabias">Sabías que ...</h4>
			<p class="p-normal text-center">
				La publicidad al aire libre, no interrumpe a los consumidores de ninguna manera. No hay ningún sonido odioso, olor u otro tipo de atención negativa. Las carteleras se notan debido a sus mensajes, colores brillantes y sus gráficos creativos.
			</p>
		</div>

		{{-- MINI WIDGET PARA DIVISIÓN HR E IMAGENES --}}
		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr-red mr-0">
		</div>
		<div class="col-md-4 mt-5 text-center lines-mid">
			<img src="{{ env('APP_URL') }}/assets/images/index/icono4.png" width="100%">
		</div>
		<div class="col-md-4 mt-5 lines-left-right">
			<hr class="hr-red ml-0">
		</div>
		
		<div class="col-12 mb-5 row">
			<div class="col-md-3 text-center">
				<img src="{{ env('APP_URL') }}/assets/images/index/objetivos1.png" width="80%">
			</div>
			<div class="col-md-3 text-center mar-obj">
				<img src="{{ env('APP_URL') }}/assets/images/index/objetivos2.png" width="80%">
			</div>
			<div class="col-md-3 text-center">
				<img src="{{ env('APP_URL') }}/assets/images/index/objetivos3.png" width="80%">
			</div>
			<div class="col-md-3 text-center mar-obj">
				<img src="{{ env('APP_URL') }}/assets/images/index/objetivos4.png" width="80%">
			</div>
		</div>
		

	</div>
</section>

<style>
	.p-normal{
		color: #0d3b7c;
		font-size: 25px;
	}
	.hr-red{
		border-top: 3px solid rgb(219, 25, 59);
	    width: 85%;
	    margin-top: 8%;
	}
	.lines-mid{
		max-width: 10% !important;
		flex: 0 0 10%;
	}
	.lines-left-right{
		max-width: 45% !important;
		flex: 0 0 45%;
	}
	.h-sabias{
		font-size: 50px;
		color: #0d3b7c;
		font-weight: bolder;
	}
	.mar-obj{
		margin-top: 100px;
	}

</style>

@endsection

@section('scripts')
@endsection
