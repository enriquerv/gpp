<footer class="footer container-fluid footer-gpp">
	<div class="container-custom min200">
		<div class="row min200">
			<div class="col-4">
				<div class="bottom0">
					<p class="mt-2 mb-2 emails">
						<img src="{{ env('APP_URL') }}/assets/images/index/iconofooter2.png" width="30px">
						publicidad@grupopyp.com.mx
					</p>
					<p class="mt-2 mb-2 emails">
						<img src="{{ env('APP_URL') }}/assets/images/index/iconofooter2.png" width="30px">
						publicidadgpp@gmail.com
					</p>
				</div>
			</div>
			<div class="col-4">
				<div class="bottom0 text-center l-50">
					<img src="{{ env('APP_URL') }}/assets/images/index/whats.png" class="facewhats">
					<img src="{{ env('APP_URL') }}/assets/images/index/face.png" class="facewhats">
				</div>
			</div>
			<div class="col-4">
				<div class="bottom0" style="right: 10px">
					<p class="mt-2 mb-2 emails">
						55-37-21-45-49
						<img src="{{ env('APP_URL') }}/assets/images/index/iconofooter1.png" width="30px">
					</p>
					<p class="mt-2 mb-2 emails">
						55-50-85-81-55
						<img src="{{ env('APP_URL') }}/assets/images/index/iconofooter1.png" width="30px">
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 miniline"></div>
		<div class="col-12 miniline2 text-center">GPPP - TODOS LOS DERECHOS RESERVADOS</div>
		<div class="col-12 miniline"></div>
		<div class="col-12 miniline3 text-center">{{ date('Y') }}</div>
		<div class="col-12 miniline"></div>
	</div>
</footer>


<style>
	.footer-gpp{
		background-image: url("{{ env('APP_URL') }}/assets/images/index/footer.png");
	    background-repeat: no-repeat;
	    background-size: 100% 100%;
	    font-family: Palatino;
	    color: #ffffff;
	    min-height: 200px;
	}
	.bottom0{
		bottom: 0;
		position: absolute;
	}
	.min200{
		min-height: 200px;
	}
	.emails{
		font-size: 18px;
	}
	.l-50{
		left: 40%;
	}
	.facewhats{
		padding: 0 30px 10px 0;
		width: 80px;
	}
	.miniline{
		background: #003960;
   		height: 5px;
	}
	.miniline2{
		background: #e81d40;
   		height: 25px;
   		font-weight: bold;
	}
	.miniline3{
		background: #bfbfbf;
    	height: 20px;
    	color: #1d2f53;
    	font-weight: bold;
	}
</style>