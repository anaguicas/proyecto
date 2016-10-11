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
					<a href="{{route('landing')}}">
						<img src="../public/media/img/layout/pandora.png">
					</a>
				</h1>
			</div>

			<div class="col-lg-2 pull-right">
			@if(!Auth::check())
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
	    	@else
	    		<div class="row">
	    			<div class="dropdown categorias">
					    <!--img src="../public/media/img/layout/menu.png" lass="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"-->
					    <!--a href="" class="dropdown-toggle"  data-toggle="dropdown">
					    	<i class="fa fa-gear fa-fw"></i>
					    	<i class="fa fa-caret-down"></i>
					    </a-->
					    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
					    {{Auth::user()->name}}
  						<span class="caret"></span>
  						</button>
					    <ul class="dropdown-menu inverse-dropdown">

					    	@if(Auth::user()->user_type == 3)
					      		<li><a href="{{route('studio.inicio')}}">Menu</a></li>
					      		@elseif(Auth::user()->user_type == 2)
					      		<li><a href="{{route('subscriber.inicio')}}">Menu</a></li>
					      	@else
					      		<li><a href="{{route('performer.inicio')}}">Menu</a></li>
					      	@endif

					      <li><a href="#">Profile</a></li>
					      <li><a href="{{route('logout')}}">Log out</a></li>
					    </ul>
				  	</div>
	    		</div>
	    	@endif

			</div>
		</div>
	</div>
	
</div>