<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to CodeIgniter 4!</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<link  href="<?php echo base_url('assets/css/styles.css'); ?>" rel="stylesheet">
	<link  href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link  href="<?php echo base_url('assets/css/estilo.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/album.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/carousel.css'); ?>" rel="stylesheet">

	<style>
	
	</style>

	
</head>
<body>

<!-- navigation bar -->

<div class="header-box px-0 mx-0">
	<div class="row header-box-content mx-0 flex-row">
		<nav class="col-lg-12 navbar navbar-light navbar-container align-self-start">
			<div class="container align-self-start">
				<a href="" class="navbar-brand" href="#">
					<img src="../assets/images/banner.png" alt="" width="160" >
				</a>

				<form class="d-flex" action="">
					<input type="search" name="" id="" class="form-control me-2 car-searchbar" placeholder="¿Que tipo de vehiculo te gustaria comprar?">
					<button class="btn btn-outline-success mx-2" type="submit">BUSCAR</button>
				</form>
			</div>	
		</nav>

		<div class="py-4 col-lg-12 header-box-info align-self-en d-flex justify-content-around ">
			<div class="benefits-box text-center py-2">
				<img src="<?php echo base_url('assets/svg/financiamiento.svg'); ?>" alt="" height="50"  >
				<p class="mt-2">
					Te financiamos el <span class="fw-bold">90%</span> de tu vehiculo	
				</p>
			</div>
			<div class="benefits-box text-center py-2 ">
			<img src="../assets/svg/reloj-de-arena.svg" alt="" height="50" >
				<p class="mt-2">
					Plazo de hasta <span class="fw-bold">5 años</span> 
				</p>
			</div>
			<div class="benefits-box text-center py-2 ">
			<img src="../assets/svg/velocidad.svg" alt="" height="50" >
				<p class="mt-2">
					Tasa de interes <span class="fw-bold">competitiva</span>
				</p>
			</div>
		</div>
		
	</div>
</div>



<!--container for filter box and list of cars -->

<div class="row mx-0 p-4 cars-and-filter-container">

	<!-- filter box container -->
	<div class="col-lg-4 p-4  filter-box-container">

		<div class="list-group">
			<a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Buscar por marca</a>
			<a href="#" class="list-group-item list-group-item-action active" aria-current="true">
			TODAS
			</a>
			<a href="#" class="list-group-item list-group-item-action">Toyota</a>
			<a href="#" class="list-group-item list-group-item-action">Honda</a>
			<a href="#" class="list-group-item list-group-item-action">Nissan</a>
		</div>

	</div>


	<!-- list of cars container -->
	<div class="col-lg-8 px-0 list-of-cars">

		<div class="card mb-3 col-lg-12 my-4 mx-0 px-0 car-card">
			<div class="row g-0 mx-0">
				<div class="col-md-4 px-0">
					<img src="<?php echo base_url('assets/images/carro1.jpg'); ?>" alt="" width="100%" class="card-image">
				</div>
				<div class="col-md-8">
					<div class="card-body position-relative">
						<h5 class="card-title">NOMBRE Y MODELO DEL VEHICULO</h5>
						<p class="card-text">
							this is a brief description of the car model and their benefits, why you should get a credit with us and how we are going to help to make it easier
						</p>
						<div class="price-section row position-absolute bottom-0 start-0">
							<div class="col-lg-12">
								Precio: $17,000 
							</div>
							<div class="col-lg-12">
								Cuota: $150
							</div>
							<div class="col-lg-12 my-2">


								<button class="btn btn-light open-modal" data-toggle="modal" data-target="#car-modal">
									SOLICITAR CREDITO
								</button>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>

	</div>

</div>




<div class="modal fade" id="car-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
      </div><div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Save changes</button>
		</div></div>
	</div>
</div>

<script src="<?php echo base_url("assets/js/scroll-out.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/js/jquery-3.6.0.min.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/js/bootstrap.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/js/bootstrap.bundle.min.js"); ?>" type="text/javascript"></script>

</body>
</html>
