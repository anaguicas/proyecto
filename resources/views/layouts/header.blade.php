<?php 
/**
 * Header (Vista)
 * 
 * Segmento de vista que se utiliza en la construccion de todas las vistas,
 * este se encarga en especifico de mostrar el encabezado
 * @author Kenny Bedoya <breakingwalls84@gmail.com>
 * @copyright 
 */
?>


<div class="row encabezado">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-1 logo">
				<h1>
					<a href="#">
						<img src="../public/media/img/layout/pandora.png">
					</a>
				</h1>
			</div>

			<div class="col-lg-2 pull-right">
				<div class="row user-row">
					<div class="col-lg-4 user-login">
						<a href="{{route('login')}}">
							<img src="../public/media/img/layout/log_in.png">
						</a>
					</div>

					<div class="col-lg-4 user-bar">
						<a>
							<img id="barra" src="../public/media/img/layout/barra.png">
						</a>
					</div>

					<div class="col-lg-4 user-sigup">
						<a href="{{route('subscriber.register')}}">
							<img src="../public/media/img/layout/sign_up.png">
						</a>
					</div>
					
					<!--li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li-->
	    		</div>
			</div>
		</div>
	</div>
	
</div>