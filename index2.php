<!DOCTYPE html>
<html lang="es">
   
<!-- Mirrored from freshcart.codescandy.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Feb 2024 03:18:25 GMT -->
<head>
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Codescandy" name="author">
    <title>La Cuponera</title>

    <link href="plantilla/assets/libs/slick-carousel/slick/slick.css" rel="stylesheet" />
    <link href="plantilla/assets/libs/slick-carousel/slick/slick-theme.css" rel="stylesheet" />
    <link href="plantilla/assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet" />

      <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="static/assets/cupon%20(2)">


      <!-- Libs CSS -->
    <link href="plantilla/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="plantilla/assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet">
    <link href="plantilla/assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet">


    <!-- Theme CSS -->
    <link rel="stylesheet" href="plantilla/assets/css/theme.min.css?ver=2.2">

    <style>

        #nav-fruitsandveg-tab:active{
              /* background-color: ; */
           }
           .icono{

              width:22px;
              margin-right:6%;
           }
        .nav-pills .nav-link.active {
           background-color: #fffdbe; /* Cambia este valor al color que desees para el estado desactivado */
               border:1px solid #c3b722; /* Cambia este valor al color que desees */
              color: #28292d;


        }
        .nav-pills .nav-link {
           /* background-color:  ; Cambia este valor al color que desees para el estado desactivado */
              border-color: #fcec2d;
              color:black;
        }

        .yellower{
           background-color: #f9ed48; /* Cambia este valor al color que desees para el estado desactivado */
               border:1px solid #c3b722; /* Cambia este valor al color que desees */
              color: #28292d;

        }

        .yellower:hover{
           background-color: #e5d939; /* Cambia este valor al color que desees para el estado desactivado */
               border:1px solid #c3b722; /* Cambia este valor al color que desees */
              color: #28292d;

        }


        .fs-6{

        }
        .fs-6:hover{
        color:#e5d939;

        }

        #btn-action{
        }

        #btn-action:hover{
        color:black;
           background-color: #e5d939; /* Cambia este valor al color que desees para el estado desactivado */

        }




        .text-uppercase{

           color:#c3b722;

        }
        .card{


        }
        .card:hover{

           border:1px solid #c3b722;

        }

        #card{


        }

        #card.card:hover {
           border:1px solid #c3b722 !important;

            border-color: #c3b722 !important;
        }

        #card:hover{
           border:1px solid #c3b722;


        }

        #card:end{

        border:1px solid #c3b722;

        }
        .face {
          animation-duration: 2s;
          animation-name: slidein;
        }

        .insta {
          animation-duration: 2.5s;
          animation-name: slidein;
        }

        .wsap {
          animation-duration: 3s;
          animation-name: slidein;
        }

        @keyframes slidein {
          from {
            margin-left: -100%;
           }

          to {
            margin-left: -2%;
           }
        }

        .logo{
           width: 100%;
           margin-left: -5%;
        }

        .alldepartaments{

           background-color: red;
        }

        /* Define tu propio color personalizado */
        .custom-btn {
              /* background-color: ; Cambia este valor al color que desees */
              border-color: #f9ed48; /* Cambia este valor al color que desees */
              color: #e4d529; /* Color del texto del botón */
        }

        .custom-btn:active {
          background-color:red ; /* Cambia este valor al color que desees */
          border-color: #f9ed48; /* Cambia este valor al color que desees */
          color: #e4d529; /* Color del texto del botón */
        }

        /* Estilo para el botón cuando está activo */
        .custom-btn:hover {
          background-color: #f9ed48; /* Cambia este valor al color que desees para el estado activo */
          border-color: #e2d326; /* Cambia este valor al color que desees para el estado activo */
        }


        .custom-btn3 {
          /* background-color: ; Cambia este valor al color que desees para el estado activo */
          border-color: black; /* Cambia este valor al color que desees para el estado activo */
        }

        .custom-btn3:active{
          /* background-color: ; Cambia este valor al color que desees */
          border-color: #f9ed48; /* Cambia este valor al color que desees */
          color: #e4d529; /* Color del texto del botón */
        }



        /* Estilo para el botón cuando está activo */
        .custom-btn3:hover {
          background-color: #f9ed48; /* Cambia este valor al color que desees para el estado activo */
          border-color: #e2d326; /* Cambia este valor al color que desees para el estado activo */
        }

        .custom-btn2 {
           border-color: #f9ed48; /* Cambia este valor al color que desees */
          color: #e4d529; /* Color del texto del botón */
        }

        /* Estilo para el botón cuando está activo */
        .custom-btn2:hover {
          background-color: #f9ed48; /* Cambia este valor al color que desees para el estado activo */
          border-color: #e2d326; /* Cambia este valor al color que desees para el estado activo */
        }

        /* Estilo para el botón cuando está desactivado */
        .custom-btn.disabled,
        .custom-btn:disabled {
          background-color: #f9ed48; /* Cambia este valor al color que desees para el estado desactivado */
          border-color: #fcec2d; /* Cambia este valor al color que desees para el estado desactivado */
        }

        .amarillo{
 
        color: black;
        }

        .amarillo:hover{

        color: #e4d529;
        }
        #amarillo{

          color: black;
        }

        #amarillo:hover{

        color: #e4d529;
        }

        #amarillo2{
         color: #e4d529;
        }

        #amarillo3{
        color: black;
        background-color: #e4d529;
        }
    </style>
</head>

<body>
      
<div style="display: grid; position: fixed;top:33% ">
   <img class="face" style=" width:10%;margin:2% 0% 0% -2%" src="static/assets/face.png">
   <img class="insta" style=" width:10%;margin:2% 0% 0% -2%" src="static/assets/insta.png">
   <img class="wsap" style=" width:10%;margin:2% 0% 0% -2%" src="static/assets/wsap.png">
</div>
<div class="border-bottom">
	 
	<div class="py-5">
		<div class="container">
			<div class="row w-100 align-items-center gx-lg-2 gx-0">
				<div class="col-xxl-2 col-lg-3 col-md-6 col-5">
					<a class="navbar-brand d-none d-lg-block" href="index-2.html">
						<img class="logo" src="static/assets/logo.png?ver=2.0" alt="eCommerce HTML Template" />
					</a>
					<div class="d-flex justify-content-between w-100 d-lg-none">
						<a class="navbar-brand" href="index-2.html">
							<img class="logo" src="static/assets/logo.png?ver=2.0" alt="eCommerce HTML Template" />
						</a>
					</div>
				</div>
				<div class="col-xxl-5 col-lg-5 d-none d-lg-block">
					<form action="#">
						<div class="input-group">
							<input class="form-control rounded" type="search" placeholder="Search for products" />
							<span class="input-group-append">
								<button class="btn bg-white border border-start-0 ms-n10 rounded-0 rounded-end" type="button">
									<svg
										xmlns="http://www.w3.org/2000/svg"
										width="16"
										height="16"
										viewBox="0 0 24 24"
										fill="none"
										stroke="currentColor"
										stroke-width="2"
										stroke-linecap="round"
										stroke-linejoin="round"
										class="feather feather-search"
									>
										<circle cx="11" cy="11" r="8"></circle>
										<line x1="21" y1="21" x2="16.65" y2="16.65"></line>
									</svg>
								</button>
							</span>
						</div>
					</form>
				</div>
				<div class="col-md-2 col-xxl-3 d-none d-lg-block">
					<!-- Button trigger modal -->
					<button  type="button" class="btn btn-outline-gray-400 text-muted" data-bs-toggle="modal" data-bs-target="#locationModal">
						<i class="feather-icon icon-map-pin me-2"></i>
                  <a id="ciudad" ></a>

					</button>
				</div>
				<div class="col-lg-2 col-xxl-2 text-end col-md-6 col-7">
					<div class="list-inline">
						<div class="list-inline-item me-5">
							<a href="plantilla/temps/shop-wishlist.html" class="text-muted position-relative">
								<svg
									xmlns="http://www.w3.org/2000/svg"
									width="20"
									height="20"
									viewBox="0 0 24 24"
									fill="none"
									stroke="currentColor"
									stroke-width="2"
									stroke-linecap="round"
									stroke-linejoin="round"
									class="feather feather-heart"
								>
									<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
								</svg>
								<span  class="position-absolute top-0 start-100 translate-middle badge rounded-pill  " id="amarillo3"  >
									5
									<span class="visually-hidden">unread messages</span>
								</span>
							</a>
						</div>
						<div class="list-inline-item me-5">
							<a href="#!" class="text-muted" data-bs-toggle="modal" data-bs-target="#userModal">
								<svg
									xmlns="http://www.w3.org/2000/svg"
									width="20"
									height="20"
									viewBox="0 0 24 24"
									fill="none"
									stroke="currentColor"
									stroke-width="2"
									stroke-linecap="round"
									stroke-linejoin="round"
									class="feather feather-user"
								>
									<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
									<circle cx="12" cy="7" r="4"></circle>
								</svg>
							</a>
						</div>
						<div class="list-inline-item me-5 me-lg-0">
							<a class="text-muted position-relative" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" href="#offcanvasExample" role="button" aria-controls="offcanvasRight">
								<svg
									xmlns="http://www.w3.org/2000/svg"
									width="20"
									height="20"
									viewBox="0 0 24 24"
									fill="none"
									stroke="currentColor"
									stroke-width="2"
									stroke-linecap="round"
									stroke-linejoin="round"
									class="feather feather-shopping-bag"
								>
									<path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
									<line x1="3" y1="6" x2="21" y2="6"></line>
									<path d="M16 10a4 4 0 0 1-8 0"></path>
								</svg>
								<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill " id="amarillo3">
									1
									<span class="visually-hidden">unread messages</span>
								</span>
							</a>
						</div>
						<div class="list-inline-item d-inline-block d-lg-none">
							<!-- Button -->
							<button class="navbar-toggler collapsed" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar-default" aria-controls="navbar-default" aria-label="Toggle navigation">
								<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#e4d529" class="bi bi-text-indent-left text-primary" viewBox="0 0 16 16">
									<path
										d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"
									/>
								</svg>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-light navbar-default py-0 pb-lg-4" aria-label="Offcanvas navbar large">
		<div class="container">
			<div class="offcanvas offcanvas-start" tabindex="-1" id="navbar-default" aria-labelledby="navbar-defaultLabel">
				<div class="offcanvas-header pb-1">
					<a href="index-2.html"><img src="static/assets/logo.png" alt="eCommerce HTML Template" /></a>
					<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<div class="d-block d-lg-none mb-4">
						<form action="#">
							<div class="input-group">
								<input class="form-control rounded" type="search" placeholder="Search for products" />
								<span class="input-group-append">
									<button class="btn bg-white border border-start-0 ms-n10 rounded-0 rounded-end" type="button">
										<svg
											xmlns="http://www.w3.org/2000/svg"
											width="16"
											height="16"
											viewBox="0 0 24 24"
											fill="none"
											stroke="currentColor"
											stroke-width="2"
											stroke-linecap="round"
											stroke-linejoin="round"
											class="feather feather-search"
										>
											<circle cx="11" cy="11" r="8"></circle>
											<line x1="21" y1="21" x2="16.65" y2="16.65"></line>
										</svg>
									</button>
								</span>
							</div>
						</form>
						<div class="mt-2">
							<button type="button" class="btn btn-outline-gray-400 text-muted w-100" data-bs-toggle="modal" data-bs-target="#locationModal">
								<i class="feather-icon icon-map-pin me-2"></i>
								Pick Location
							</button>
						</div>
					</div>
					<div  class="d-block d-lg-none mb-4">
						<a
							id="amarillo3" 
                     class="btn w-100 d-flex justify-content-center align-items-center"
							data-bs-toggle="collapse"
							href="#collapseExample"
							role="button"
							aria-expanded="false"
							aria-controls="collapseExample"
                     class="alldepartaments"
						>
							<span class="me-2">
								<svg
									xmlns="http://www.w3.org/2000/svg"
									width="16"
									height="16"
									viewBox="0 0 24 24"
									fill="none"
									stroke="currentColor"
									stroke-width="1.5"
									stroke-linecap="round"
									stroke-linejoin="round"
									class="feather feather-grid"
								>
									<rect x="3" y="3" width="7" height="7"></rect>
									<rect x="14" y="3" width="7" height="7"></rect>
									<rect x="14" y="14" width="7" height="7"></rect>
									<rect x="3" y="14" width="7" height="7"></rect>
								</svg>
							</span>
							Todas las categorias
						</a>
						<div class="collapse mt-2" id="collapseExample">
							<div class="card card-body">
							<ul class="mb-0 list-unstyled">
							<li><a class="dropdown-item" href="plantilla/temps/shop-grid.html"><img src=".static/assets/peludos.png">Para los peludos</a></li>
							<li><a class="dropdown-item" href="plantilla/temps/shop-grid.html">Para ti</a></li>
							<li><a class="dropdown-item" href="plantilla/temps/shop-grid.html">Para tu mesa</a></li>
							<li><a class="dropdown-item" href="plantilla/temps/shop-grid.html">Inmobiliaria & Automotriz</a></li>
							<li><a class="dropdown-item" href="plantilla/temps/shop-grid.html">Para Disfrutar</a></li>
							<li><a class="dropdown-item" href="plantilla/temps/shop-grid.html">Para Divertirte</a></li>
							<li><a class="dropdown-item" href="plantilla/temps/shop-grid.html">Para los Gobernantes</a></li>
                     <li><a class="dropdown-item" href="plantilla/temps/shop-grid.html">Para Quien Amas</a></li>

                     <li><a class="dropdown-item" href="plantilla/temps/shop-grid.html">Para Tu Bienestar</a></li>

                     <li><a class="dropdown-item" href="plantilla/temps/shop-grid.html">Para Tu Hogar</a></li>
                     <li><a class="dropdown-item" href="plantilla/temps/shop-grid.html">Servicios Profesionales</a></li>


						</ul>
							</div>
						</div>
					</div>
					<div class="dropdown me-3 d-none d-lg-block">
						<button  class="btn custom-btn" class="alldepartaments" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" >
							<span class="me-1">
								<svg
									xmlns="http://www.w3.org/2000/svg"
									width="16"
									height="16"
									viewBox="0 0 24 24"
									fill="none"
									stroke="currentColor"
									stroke-width="1.2"
									stroke-linecap="round"
									stroke-linejoin="round"
									class="feather feather-grid"
								>
									<rect x="3" y="3" width="7" height="7"></rect>
									<rect x="14" y="3" width="7" height="7"></rect>
									<rect x="14" y="14" width="7" height="7"></rect>
									<rect x="3" y="14" width="7" height="7"></rect>
								</svg>
							</span>
							Todas las categorias
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="plantilla/temps/shop-grid.html"><img class="icono" src="static/assets/peludos.png">Para los peludos</a></li>
							<li><a class="dropdown-item" href="plantilla/temps/shop-grid.html"><img class="icono" src="static/assets/parati.png">Para ti</a></li>
							<li><a class="dropdown-item" href="plantilla/temps/shop-grid.html"><img class="icono" src="static/assets/paratumesa.png">Para tu mesa</a></li>
                     <li><a class="dropdown-item" href="plantilla/temps/shop-grid.html"><img class="icono" src="static/assets/paratupaladar.png">Para tu paladar</a></li>

							<li><a class="dropdown-item" href="plantilla/temps/shop-grid.html"><img class="icono" src="static/assets/inmobiliaria.png">Inmobiliaria & Automotriz</a></li>
							<li><a class="dropdown-item" href="plantilla/temps/shop-grid.html"><img class="icono" src="static/assets/paradisfrutar.png">Para Disfrutar</a></li>
							<li><a class="dropdown-item" href="plantilla/temps/shop-grid.html"><img class="icono" src="static/assets/gobernantes.png">Para los gobernantes</a></li>
                     <li><a class="dropdown-item" href="plantilla/temps/shop-grid.html"><img class="icono" src="static/assets/paraquienamas.png">Para quien amas</a></li>

                     <li><a class="dropdown-item" href="plantilla/temps/shop-grid.html"><img class="icono" src="static/assets/paratubienestar.png">Para tu bienestar</a></li>
                     <li><a class="dropdown-item" href="plantilla/temps/shop-grid.html"><img class="icono" src="static/assets/paratumente.png">Para tu mente</a></li>


                     <li><a class="dropdown-item" href="plantilla/temps/shop-grid.html"><img class="icono" src="static/assets/paratuhogar.png">Para tu hogar</a></li>
                     <li><a class="dropdown-item" href="plantilla/temps/shop-grid.html"><img class="icono" src="static/assets/serviciosprfesionales.png">Servicios Profesionales</a></li>
                     <li><a class="dropdown-item" href="plantilla/temps/shop-grid.html"><img class="icono" src="static/assets/tecnologia.png">Tecnología</a></li>
                     <li><a class="dropdown-item" href="plantilla/temps/shop-grid.html"><img class="icono" src="static/assets/recilaygana.png">Recicla y gana</a></li>


						</ul>
					</div>
					<div>
						<ul class="navbar-nav align-items-center">
							<li class="nav-item dropdown w-100 w-lg-auto">
								<a class="nav-link dropdown-toggle" id="amarillo"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="plantilla/index-2.html">Home 1</a></li>
									<li><a class="dropdown-item" href="plantilla/temps/index-2.html">Home 2</a></li>
									<li><a class="dropdown-item" href="plantilla/temps/index-3.html">Home 3</a></li>
									<li><a class="dropdown-item" href="plantilla/temps/index-4.html">Home 4</a></li>
									<li>
										<a class="dropdown-item" href="plantilla/temps/index-5.html">Home 5</a>
									</li>
								</ul>
							</li>
							<li class="nav-item dropdown w-100 w-lg-auto">
								<a class="nav-link dropdown-toggle" href="#" role="button" id="amarillo" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="plantilla/temps/shop-grid.html">Shop Grid - Filter</a></li>
									<li><a class="dropdown-item" href="plantilla/temps/shop-grid-3-column.html">Shop Grid - 3 column</a></li>
									<li><a class="dropdown-item" href="plantilla/temps/shop-list.html">Shop List - Filter</a></li>
									<li><a class="dropdown-item" href="plantilla/temps/shop-filter.html">Shop - Filter</a></li>
									<li><a class="dropdown-item" href="plantilla/temps/shop-fullwidth.html">Shop Wide</a></li>
									<li><a class="dropdown-item" href="plantilla/temps/shop-single.html">Shop Single</a></li>
									<li><a class="dropdown-item" href="plantilla/temps/shop-single-2.html">Shop Single v2</a></li>
									<li><a class="dropdown-item" href="plantilla/temps/shop-wishlist.html">Shop Wishlist</a></li>
									<li><a class="dropdown-item" href="plantilla/temps/shop-cart.html">Shop Cart</a></li>
									<li><a class="dropdown-item" href="plantilla/temps/shop-checkout.html">Shop Checkout</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown w-100 w-lg-auto">
								<a class="nav-link dropdown-toggle" href="#" role="button" id="amarillo" data-bs-toggle="dropdown" aria-expanded="false">Stores</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="plantilla/temps/store-list.html">Store List</a></li>
									<li><a class="dropdown-item" href="plantilla/temps/store-grid.html">Store Grid</a></li>
									<li><a class="dropdown-item" href="plantilla/temps/store-single.html">Store Single</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown w-100 w-lg-auto dropdown-fullwidth">
								<a class="nav-link dropdown-toggle" href="#" role="button" id="amarillo" data-bs-toggle="dropdown" aria-expanded="false">Mega menu</a>
								<div class="dropdown-menu pb-0">
									<div class="row p-2 p-lg-4">
										<div class="col-lg-3 col-12 mb-4 mb-lg-0">
											<h6 class="  ps-3" id="amarillo2" >Dairy, Bread & Eggs</h6>
											<a class="dropdown-item" href="plantilla/temps/shop-grid.html">Butter</a>
											<a class="dropdown-item" href="plantilla/temps/shop-grid.html">Milk Drinks</a>
											<a class="dropdown-item" href="plantilla/temps/shop-grid.html">Curd & Yogurt</a>
											<a class="dropdown-item" href="plantilla/temps/shop-grid.html">Eggs</a>
											<a class="dropdown-item" href="plantilla/temps/shop-grid.html">Buns & Bakery</a>
											<a class="dropdown-item" href="plantilla/temps/shop-grid.html">Cheese</a>
											<a class="dropdown-item" href="plantilla/temps/shop-grid.html">Condensed Milk</a>
											<a class="dropdown-item" href="plantilla/temps/shop-grid.html">Dairy Products</a>
										</div>
										<div class="col-lg-3 col-12 mb-4 mb-lg-0">
											<h6 class=" ps-3" id="amarillo2" >Breakfast & Instant Food</h6>
											<a class="dropdown-item" href="plantilla/temps/shop-grid.html">Breakfast Cereal</a>
											<a class="dropdown-item" href="plantilla/temps/shop-grid.html">Noodles, Pasta & Soup</a>
											<a class="dropdown-item" href="plantilla/temps/shop-grid.html">Frozen Veg Snacks</a>
											<a class="dropdown-item" href="plantilla/temps/shop-grid.html">Frozen Non-Veg Snacks</a>
											<a class="dropdown-item" href="plantilla/temps/shop-grid.html">Vermicelli</a>
											<a class="dropdown-item" href="plantilla/temps/shop-grid.html">Instant Mixes</a>
											<a class="dropdown-item" href="plantilla/temps/shop-grid.html">Batter</a>
											<a class="dropdown-item" href="plantilla/temps/shop-grid.html">Fruit and Juices</a>
										</div>
										<div  class="col-lg-3 col-12 mb-4 mb-lg-0">
											<h6  class=" ps-3" id="amarillo2" >Cold Drinks & Juices</h6>
											<a class="dropdown-item" href="plantilla/temps/shop-grid.html">Soft Drinks</a>
											<a class="dropdown-item" href="plantilla/temps/shop-grid.html">Fruit Juices</a>
											<a class="dropdown-item" href="plantilla/temps/shop-grid.html">Coldpress</a>
											<a class="dropdown-item" href="plantilla/temps/shop-grid.html">Water & Ice Cubes</a>
											<a class="dropdown-item" href="plantilla/temps/shop-grid.html">Soda & Mixers</a>
											<a class="dropdown-item" href="plantilla/temps/shop-grid.html">Health Drinks</a>
											<a class="dropdown-item" href="plantilla/temps/shop-grid.html">Herbal Drinks</a>
											<a class="dropdown-item" href="plantilla/temps/shop-grid.html">Milk Drinks</a>
										</div>
										<div class="col-lg-3 col-12 mb-4 mb-lg-0">
											<div class="card border-0">
												<img src="plantilla/assets/images/banner/menu-banner.jpg" alt="eCommerce HTML Template" class="img-fluid" />
												<div class="position-absolute ps-6 mt-8">
													<h5 class="mb-0">
														Dont miss this
														<br />
														offer today.
													</h5>
													<a href="#" class="btn btn-primary btn-sm mt-3">Shop Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="nav-item dropdown w-100 w-lg-auto">
								<a class="nav-link dropdown-toggle" href="#" role="button" id="amarillo" data-bs-toggle="dropdown" aria-expanded="false">plantilla/temps</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="plantilla/temps/blog.html">Blog</a></li>
									<li><a class="dropdown-item" href="plantilla/temps/blog-single.html">Blog Single</a></li>
									<li><a class="dropdown-item" href="plantilla/temps/blog-category.html">Blog Category</a></li>
									<li><a class="dropdown-item" href="plantilla/temps/about.html">About us</a></li>
									<li><a class="dropdown-item" href="plantilla/temps/404error.html">404 Error</a></li>
									<li><a class="dropdown-item" href="plantilla/temps/contact.html">Contact</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown w-100 w-lg-auto">
								<a class="nav-link dropdown-toggle" href="#" role="button" id="amarillo"  data-bs-toggle="dropdown" aria-expanded="false">Account</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="plantilla/temps/signin.html">Sign in</a></li>
									<li><a class="dropdown-item" href="plantilla/temps/signup.html">Signup</a></li>
									<li><a class="dropdown-item" href="plantilla/temps/forgot-password.html">Forgot Password</a></li>
									<li class="dropdown-submenu dropend">
										<a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">My Account</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="plantilla/temps/account-orders.html">Orders</a></li>
											<li><a class="dropdown-item" href="plantilla/temps/account-settings.html">Settings</a></li>
											<li><a class="dropdown-item" href="plantilla/temps/account-address.html">Address</a></li>
											<li><a class="dropdown-item" href="plantilla/temps/account-payment-method.html">Payment Method</a></li>
											<li><a class="dropdown-item" href="plantilla/temps/account-notification.html">Notification</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="nav-item w-100 w-lg-auto">
								<a class="nav-link"id="amarillo"  href="plantilla/temps/dashboard/index.html">Dashboard</a>
							</li>
                     <li class="nav-item w-100 w-lg-auto">
								<a class="nav-link"id="amarillo"  href=" "></a>
							</li>
							<li class="nav-item dropdown w-100 w-lg-auto dropdown-flyout">
								<a  href="#" id="navbarDropdownDocs"  class="amarillo" >Docs</a>

								<div class="dropdown-menu dropdown-menu-lg" aria-labelledby="navbarDropdownDocs">
									<a class="dropdown-item align-items-start" href="docs/index.html">
										<div>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#e4d529" class="bi bi-file-text" viewBox="0 0 16 16">
                                    <path fill="#e4d529" d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                                    <path fill="#e4d529" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                  </svg>
                                  
										</div>
										<div class="ms-3 lh-1">
											<h6 class="mb-1">Documentations</h6>
											<p class="mb-0 small">Browse the all documentation</p>
										</div>
									</a>
								 
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
</div>


 
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="">
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        .leaflet-container {
            height: 400px;
            width: 100%;
            max-width: 100%;
            max-height: 100%;
        }
    </style>
    <!-- Otros enlaces o estilos que puedas tener en tu head -->
 
 
      <!-- Category Section End-->
      <section class="mt-8">
            <div class="container">
            <h6 id="ciudad"></h6>

               <div class="row">
                  <div class="col-12 col-md-6 mb-3 mb-lg-0">
                     <div>
                        <div class="py-10 px-8 rounded" style="background: url(plantilla/assets/images/banner/grocery-banner.png) no-repeat; background-size: cover; background-position: center">
                           <div>
                              <h3 class="fw-bold mb-1">Fruits & Vegetables</h3>
                              <p class="mb-4">
                                 Get Upto
                                 <span class="fw-bold">30%</span>
                                 Off
                              </p>
                              <a href="#!" class="btn btn-dark">Shop Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-6">
                     <div>
                        <div class="py-10 px-8 rounded" style="background: url(plantilla/assets/images/banner/grocery-banner-2.jpg) no-repeat; background-size: cover; background-position: center">
                           <div>
                              <h3 class="fw-bold mb-1">Freshly Baked Buns</h3>
                              <p class="mb-4">
                                 Get Upto
                                 <span class="fw-bold">25%</span>
                                 Off
                              </p>
                              <a href="#!" class="btn btn-dark">Shop Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
     <section class="mt-8">
        
               <!-- contianer -->
               <div style="width:100%" class="container">

                  <div class="row">
                     <!-- col -->
                     <div class="col-12">
                        <!-- cta -->
                        <div  class="bg-light d-lg-flex justify-content-between align-items-center py-2 py-lg-3 px-2 text-center text-lg-start rounded" >
                     

                        <div id="map" style="width:100%"  ></div>

                        </div>
                     </div>
                  </div>
               </div>
            </section>
            

<br> 
                      <!-- section -->
         <section class="mb-lg-14 mb-8">
            <div class="container">
               <!-- row -->
               <div class="row">
                  <div class="col-12">
                     <div class="mb-6 d-xl-flex justify-content-between align-items-center">
                        <!-- heading -->
                    
                        <div >
                           <!-- nav -->
                           <nav >
                              <ul  style="width:100%;display:flex;   justify-content:center"  class="nav nav-pills nav-scroll border-bottom-0 gap-1 " id="nav-tab" role="tablist">
                                 <!-- nav item -->
                                 <li style="display:flex;  align-items: center; "  class="nav-item">
                                    <!-- nav link -->
                                
                                    <a  
                                    style="font-size:75%; width:100px; display:flex;    align-items: center; "
                                       href="#"
                                       class="nav-link active"
                                       id="nav-para-los-peludos"
                                       data-bs-toggle="tab"
                                       data-bs-target="#para-los-peludos"
                                       role="tab"
                                       aria-controls="para-los-peludos"
                                       aria-selected="true">
                                       <img class="icono" src="static/assets/peludos.png">
                                       Para los peludos
                                    </a>
                                 </li>
                            
                                 <!-- nav item -->
                                 <li style="display:flex;  align-items: center; "  class="nav-item">
                                    <!-- nav link -->
                                    <a style="font-size:75%; width:97px; display:flex;    align-items: center; "
 href="#"  class="nav-link" id="nav-para-tu-mesa" data-bs-toggle="tab" data-bs-target="#para-tu-mesa" role="tab" aria-controls="para-tu-mesa" aria-selected="false"><img class="icono" src="static/assets/paratumesa.png">Para tu mesa
                                    </a>

                                 </li>
                                 <!-- nav item -->
                                   <li style="display:flex;  align-items: center; "  class="nav-item">
                                    <!-- nav link -->
                                    <a style="font-size:75%; width:95px; display:flex;    align-items: center; "
 href="#" class="nav-link" id="nav-tea-tab" data-bs-toggle="tab" data-bs-target="#nav-tea" role="tab" aria-controls="nav-tea" aria-selected="false">
 <img class="icono" src="static/assets/paratupaladar.png">Para tu paladar
                                    </a>

                                 </li>
                                 <!-- nav item -->
                                   <li style="display:flex;  align-items: center; "  class="nav-item">
                                    <!-- nav link -->
                                    <a style="font-size:75%; width:115px; display:flex;    align-items: center; " href="#" class="nav-link" id="nav-drinks-tab" data-bs-toggle="tab" data-bs-target="#nav-drinks" role="tab" aria-controls="nav-drinks" aria-selected="false">
                                    <img class="icono" src="static/assets/inmobiliaria.png">Inmobiliaria Automotriz
                                    </a>

                                 </li>

                                    <!-- nav item -->
                                   <li style="display:flex;  align-items: center; "  class="nav-item">
                                    <!-- nav link -->
                                    <a style="font-size:75%; width:100px; display:flex;    align-items: center; " href="#" class="nav-link" id="nav-drinks-tab" data-bs-toggle="tab" data-bs-target="#nav-drinks" role="tab" aria-controls="nav-drinks" aria-selected="false">
                                    <img class="icono" src="static/assets/paradisfrutar.png">Para Disfrutar
                                    </a>

                                 </li>

                                     <!-- nav item -->
                                   <li style="display:flex;  align-items: center; "  class="nav-item">
                                    <!-- nav link -->
                                    <a style="font-size:75%; width:120px; display:flex;    align-items: center; " href="#" class="nav-link" id="nav-drinks-tab" data-bs-toggle="tab" data-bs-target="#nav-drinks" role="tab" aria-controls="nav-drinks" aria-selected="false">
                                    <img class="icono" src="static/assets/gobernantes.png">Para Los Gobernantes
                                    </a>

                                 </li>


                                     <!-- nav item -->
                                   <li style="display:flex;  align-items: center; "  class="nav-item">
                                    <!-- nav link -->
                                    <a style="font-size:75%; width:116px; display:flex;    align-items: center; " href="#" class="nav-link" id="nav-drinks-tab" data-bs-toggle="tab" data-bs-target="#nav-drinks" role="tab" aria-controls="nav-drinks" aria-selected="false">
                                    <img class="icono" src="static/assets/paraquienamas.png">Para Quien Amas
                                    </a>

                                 </li>

                                      <!-- nav item -->
                                   <li style="display:flex;  align-items: center; "  class="nav-item">
                                    <!-- nav link -->
                                    <a style="font-size:75%; width:105px; display:flex;    align-items: center; " href="#" class="nav-link" id="nav-drinks-tab" data-bs-toggle="tab" data-bs-target="#nav-drinks" role="tab" aria-controls="nav-drinks" aria-selected="false">
                                    <img class="icono" src="static/assets/paratubienestar.png">Para Tu Bienestar
                                    </a>

                                 </li>

                                   <!-- nav item -->
                                   <li style="display:flex;  align-items: center; "  class="nav-item">
                                    <!-- nav link -->
                                    <a style="font-size:75%; width:98px; display:flex;    align-items: center; " href="#" class="nav-link" id="nav-drinks-tab" data-bs-toggle="tab" data-bs-target="#nav-drinks" role="tab" aria-controls="nav-drinks" aria-selected="false">
                                    <img class="icono" src="static/assets/paratumente.png">Para Tu Mente
                                    </a>

                                 </li>

                                     <!-- nav item -->
                                     <li style="display:flex;  align-items: center; "  class="nav-item">
                                    <!-- nav link -->
                                    <a style="font-size:75%; width:98px; display:flex;    align-items: center; " href="#" class="nav-link" id="nav-drinks-tab" data-bs-toggle="tab" data-bs-target="#nav-drinks" role="tab" aria-controls="nav-drinks" aria-selected="false">
                                    <img class="icono" src="static/assets/paratuhogar.png">Para Tu Hogar
                                    </a>

                                 </li>

                                   <!-- nav item -->
                                   <li style="display:flex;  align-items: center; "  class="nav-item">
                                    <!-- nav link -->
                                    <a style="font-size:75%; width:122px; display:flex;    align-items: center; " href="#" class="nav-link" id="nav-drinks-tab" data-bs-toggle="tab" data-bs-target="#nav-drinks" role="tab" aria-controls="nav-drinks" aria-selected="false">
                                    <img class="icono" src="static/assets/serviciosprfesionales.png">Servicios Profesionales
                                    </a>

                                 </li>


                                   <!-- nav item -->
                                   <li style="display:flex;  align-items: center; "  class="nav-item">
                                    <!-- nav link -->
                                    <a style="font-size:75%; width:98px; display:flex;    align-items: center; " href="#" class="nav-link" id="nav-drinks-tab" data-bs-toggle="tab" data-bs-target="#nav-drinks" role="tab" aria-controls="nav-drinks" aria-selected="false">
                                    <img class="icono" src="static/assets/recilaygana.png">Recicla Y Gana
                                    </a>

                                 </li>

                                   <!-- nav item -->
                                   <li style="display:flex;  align-items: center; "  class="nav-item">
                                    <!-- nav link -->
                                    <a style="font-size:75%; width:110px; display:flex;    align-items: center; " href="#" class="nav-link" id="nav-drinks-tab" data-bs-toggle="tab" data-bs-target="#nav-drinks" role="tab" aria-controls="nav-drinks" aria-selected="false">
                                    <img class="icono" src="static/assets/tecnologia.png">Tecnología
                                    </a>

                                 </li>

                                 
                                    <!-- nav item -->

                                    <li style="display:flex;  align-items: center; "  class="nav-item">
                                    <!-- nav link -->
                                    <a
                                    style="font-size:75%; width:92px; display:flex;    align-items: center; "

                                       href="#"
                                       class="nav-link"
                                       id="nav-snackMunchies-tab"
                                       data-bs-toggle="tab"
                                       data-bs-target="#mascotas-mas"
                                       role="tab"
                                       aria-controls="mascotas-mas"
                                       aria-selected="false">
                                       <img class="icono" src="static/assets/parati.png">
                                       Para tí
             
                                    </a>
                                 </li>
                                 

                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- row -->
               <div style="position:relative"class="row">
                      <!-- tab -->
 


                     <div id="result-container2"  >
   


			</div>
                    
                      


                       

                        
                        <div class="tab-pane fade" id="nav-bakery" role="tabpanel" aria-labelledby="nav-bakery-tab" tabindex="0">
                           <div class="row row-cols-2 row-cols-xl-5 row-cols-md-3 g-4">
                              <div class="col">
                                 <!-- card -->
                                 <div class="card card-product-v2 h-100">
                                    <div class="card-body position-relative">
                                       <!-- badge -->
                                       <div class="text-center position-relative">
                                          <div class="position-absolute top-0 start-0">
                                             <span class="badge bg-warning text-dark">14%</span>
                                          </div>
                                          <!-- img -->
                                          <a href="#!"><img src="plantilla/assets/images/products/product-img-5.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                          <!-- action btn -->
                                          <div class="product-action-btn">
                                             <a href="#!" class="btn-action mb-1" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="bi bi-eye"></i></a>
                                             <a href="plantilla/temps/shop-wishlist.html" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                             <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                          </div>
                                       </div>
                                       <!-- title -->
                                       <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Salted Instant Popcorn</a></h2>
                                       <div>
                                          <!-- rating -->
                                          <small class="text-warning">
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-half"></i>
                                          </small>
                                          <span class="text-muted small">4.5(212)</span>
                                       </div>
                                       <!-- price -->
                                       <div class="d-flex justify-content-between align-items-center mt-3">
                                          <div>
                                             <span class="text-danger">$40</span>
                                             <span class="text-decoration-line-through text-muted">$65</span>
                                          </div>
                                          <div><span class="text-uppercase small text-primary">In Stock</span></div>
                                       </div>
                                       <!-- btn -->
                                       <div class="product-fade-block">
                                          <div class="d-grid mt-4">
                                             <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- hidden class for hover -->
                                    <div class="product-content-fade border-info" style="margin-bottom: -60px"></div>
                                 </div>
                              </div>
                              <div class="col">
                                 <!-- card -->
                                 <div class="card card-product-v2 h-100">
                                    <div class="card-body position-relative">
                                       <!-- badge -->
                                       <div class="text-center position-relative">
                                          <!-- img -->
                                          <a href="#!"><img src="plantilla/assets/images/products/product-img-6.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                          <!-- action btn -->
                                          <div class="product-action-btn">
                                             <a href="#!" class="btn-action mb-1" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="bi bi-eye"></i></a>
                                             <a href="plantilla/temps/shop-wishlist.html" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                             <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                          </div>
                                       </div>
                                       <!-- title -->
                                       <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Epigamia Blueberry Greek Yogurt, 90g</a></h2>
                                       <div>
                                          <!-- rating -->
                                          <small class="text-warning">
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-half"></i>
                                          </small>
                                          <span class="text-muted small">4.4(694)</span>
                                       </div>
                                       <!-- price -->
                                       <div class="d-flex justify-content-between align-items-center mt-3">
                                          <div><span class="text-dark">$17</span></div>
                                          <div><span class="text-uppercase small text-primary">In Stock</span></div>
                                       </div>
                                       <!-- btn -->
                                       <div class="product-fade-block">
                                          <div class="d-grid mt-4">
                                             <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- hidden class for hover -->
                                    <div class="product-content-fade border-info" style="margin-bottom: -60px"></div>
                                 </div>
                              </div>
                              <div class="col">
                                 <!-- card -->
                                 <div class="card card-product-v2 h-100">
                                    <div class="card-body position-relative">
                                       <!-- badge -->
                                       <div class="text-center position-relative">
                                          <!-- img -->
                                          <a href="#!"><img src="plantilla/assets/images/products/product-img-8.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                          <!-- action btn -->
                                          <div class="product-action-btn">
                                             <a href="#!" class="btn-action mb-1" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="bi bi-eye"></i></a>
                                             <a href="plantilla/temps/shop-wishlist.html" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                             <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                          </div>
                                       </div>
                                       <!-- title -->
                                       <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Kellogg's Special K Original Cereal</a></h2>
                                       <div>
                                          <!-- rating -->
                                          <small class="text-warning">
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-half"></i>
                                          </small>
                                          <span class="text-muted small">4.7(1,130)</span>
                                       </div>
                                       <!-- price -->
                                       <div class="d-flex justify-content-between align-items-center mt-3">
                                          <div>
                                             <span class="text-danger">$25</span>
                                             <span class="text-muted text-decoration-line-through ms-1">$28</span>
                                          </div>
                                          <div><span class="text-uppercase small text-primary">In Stock</span></div>
                                       </div>
                                       <!-- btn -->
                                       <div class="product-fade-block">
                                          <div class="d-grid mt-4">
                                             <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- hidden class for hover -->
                                    <div class="product-content-fade border-info" style="margin-bottom: -60px"></div>
                                 </div>
                              </div>
                              <div class="col">
                                 <!-- card -->
                                 <div class="card card-product-v2 h-100">
                                    <div class="card-body position-relative">
                                       <!-- badge -->
                                       <div class="text-center position-relative">
                                          <!-- img -->
                                          <a href="#!"><img src="plantilla/assets/images/products/product-img-9.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                          <!-- action btn -->
                                          <div class="product-action-btn">
                                             <a href="#!" class="btn-action mb-1" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="bi bi-eye"></i></a>
                                             <a href="plantilla/temps/shop-wishlist.html" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                             <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                          </div>
                                       </div>
                                       <!-- title -->
                                       <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Slurrp Farm No Maida Millet Pancake Mix</a></h2>
                                       <div>
                                          <!-- rating -->
                                          <small class="text-warning">
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-half"></i>
                                          </small>
                                          <span class="text-muted small">4.5(212)</span>
                                       </div>
                                       <!-- price -->
                                       <div class="d-flex justify-content-between align-items-center mt-3">
                                          <div>
                                             <span class="text-danger">$34</span>
                                             <span class="text-muted text-decoration-line-through ms-1">$38</span>
                                          </div>
                                          <div><span class="text-uppercase small text-primary">In Stock</span></div>
                                       </div>
                                       <!-- btn -->
                                       <div class="product-fade-block">
                                          <div class="d-grid mt-4">
                                             <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- hidden class for hover -->
                                    <div class="product-content-fade border-info" style="margin-bottom: -60px"></div>
                                 </div>
                              </div>

                              <div class="col">
                                 <!-- card -->
                                 <div class="card card-product-v2 h-100">
                                    <div class="card-body position-relative">
                                       <!-- badge -->
                                       <div class="text-center position-relative">
                                          <div class="position-absolute top-0 start-0">
                                             <span class="badge bg-danger">Sale</span>
                                          </div>
                                          <!-- img -->
                                          <a href="#!"><img src="plantilla/assets/images/products/product-img-1.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                          <!-- action btn -->
                                          <div class="product-action-btn">
                                             <a href="#!" class="btn-action mb-1" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="bi bi-eye"></i></a>
                                             <a href="plantilla/temps/shop-wishlist.html" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                             <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                          </div>
                                       </div>
                                       <!-- title -->
                                       <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Haldiram's Sev Bhujia</a></h2>
                                       <div>
                                          <!-- rating -->
                                          <small class="text-warning">
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-half"></i>
                                          </small>
                                          <span class="text-muted small">4.5(149)</span>
                                       </div>
                                       <!-- price -->
                                       <div class="d-flex justify-content-between align-items-center mt-3">
                                          <div>
                                             <span class="text-danger">$18</span>
                                             <span class="text-decoration-line-through text-muted">$24</span>
                                          </div>
                                          <div><span class="text-uppercase small text-primary">In Stock</span></div>
                                       </div>
                                       <!-- btn -->
                                       <div class="product-fade-block">
                                          <div class="d-grid mt-4">
                                             <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- hidden class for hover -->
                                    <div class="product-content-fade border-info" style="margin-bottom: -60px"></div>
                                 </div>
                              </div>
                              <div class="col">
                                 <!-- card -->
                                 <div class="card card-product-v2 h-100">
                                    <div class="card-body position-relative">
                                       <!-- badge -->
                                       <div class="text-center position-relative">
                                          <!-- img -->
                                          <a href="#!"><img src="plantilla/assets/images/products/product-img-2.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                          <!-- action btn -->
                                          <div class="product-action-btn">
                                             <a href="#!" class="btn-action mb-1" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="bi bi-eye"></i></a>
                                             <a href="plantilla/temps/shop-wishlist.html" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                             <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                          </div>
                                       </div>
                                       <!-- title -->
                                       <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Britannia NutriChoice Digestive Biscuits</a></h2>
                                       <div>
                                          <!-- rating -->
                                          <small class="text-warning">
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-half"></i>
                                          </small>
                                          <span class="text-muted small">4.4(3,149)</span>
                                       </div>
                                       <!-- price -->
                                       <div class="d-flex justify-content-between align-items-center mt-3">
                                          <div><span class="text-dark">$15</span></div>
                                          <div><span class="text-uppercase small text-primary">In Stock</span></div>
                                       </div>
                                       <!-- btn -->
                                       <div class="product-fade-block">
                                          <div class="d-grid mt-4">
                                             <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- hidden class for hover -->
                                    <div class="product-content-fade border-info" style="margin-bottom: -60px"></div>
                                 </div>
                              </div>
                              <div class="col">
                                 <!-- card -->
                                 <div class="card card-product-v2 h-100">
                                    <div class="card-body position-relative">
                                       <!-- badge -->
                                       <div class="text-center position-relative">
                                          <!-- img -->
                                          <a href="#!"><img src="plantilla/assets/images/products/product-img-3.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                          <!-- action btn -->
                                          <div class="product-action-btn">
                                             <a href="#!" class="btn-action mb-1" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="bi bi-eye"></i></a>
                                             <a href="plantilla/temps/shop-wishlist.html" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                             <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                          </div>
                                       </div>
                                       <!-- title -->
                                       <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Cadbury 5 star chocolate</a></h2>
                                       <div>
                                          <!-- rating -->
                                          <small class="text-warning">
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-half"></i>
                                          </small>
                                          <span class="text-muted small">4.7(1,130)</span>
                                       </div>
                                       <!-- price -->
                                       <div class="d-flex justify-content-between align-items-center mt-3">
                                          <div><span class="text-dark">$32</span></div>
                                          <div><span class="text-uppercase small text-primary">In Stock</span></div>
                                       </div>
                                       <!-- btn -->
                                       <div class="product-fade-block">
                                          <div class="d-grid mt-4">
                                             <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- hidden class for hover -->
                                    <div class="product-content-fade border-info" style="margin-bottom: -60px"></div>
                                 </div>
                              </div>
                              <div class="col">
                                 <!-- card -->
                                 <div class="card card-product-v2 h-100">
                                    <div class="card-body position-relative">
                                       <!-- badge -->
                                       <div class="text-center position-relative">
                                          <!-- img -->
                                          <a href="#!"><img src="plantilla/assets/images/products/product-img-4.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                          <!-- action btn -->
                                          <div class="product-action-btn">
                                             <a href="#!" class="btn-action mb-1" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="bi bi-eye"></i></a>
                                             <a href="plantilla/temps/shop-wishlist.html" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                             <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                          </div>
                                       </div>
                                       <!-- title -->
                                       <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Onion Flavour Potato</a></h2>
                                       <div>
                                          <!-- rating -->
                                          <small class="text-warning">
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-half"></i>
                                          </small>
                                          <span class="text-muted small">4.5(140)</span>
                                       </div>
                                       <!-- price -->
                                       <div class="d-flex justify-content-between align-items-center mt-3">
                                          <div>
                                             <span class="text-danger">$12</span>
                                             <span class="text-muted text-decoration-line-through ms-1">$18</span>
                                          </div>
                                          <div><span class="text-uppercase small text-primary">In Stock</span></div>
                                       </div>
                                       <!-- btn -->
                                       <div class="product-fade-block">
                                          <div class="d-grid mt-4">
                                             <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- hidden class for hover -->
                                    <div class="product-content-fade border-info" style="margin-bottom: -60px"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="nav-tea" role="tabpanel" aria-labelledby="nav-tea-tab" tabindex="0">
                           <div class="row row-cols-2 row-cols-xl-5 row-cols-md-3 g-4">
                              <div class="col">
                                 <!-- card -->
                                 <div class="card card-product-v2 h-100">
                                    <div class="card-body position-relative">
                                       <!-- badge -->
                                       <div class="text-center position-relative">
                                          <!-- img -->
                                          <a href="#!"><img src="plantilla/assets/images/products/product-img-4.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                          <!-- action btn -->
                                          <div class="product-action-btn">
                                             <a href="#!" class="btn-action mb-1" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="bi bi-eye"></i></a>
                                             <a href="plantilla/temps/shop-wishlist.html" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                             <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                          </div>
                                       </div>
                                       <!-- title -->
                                       <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Onion Flavour Potato</a></h2>
                                       <div>
                                          <!-- rating -->
                                          <small class="text-warning">
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-half"></i>
                                          </small>
                                          <span class="text-muted small">4.5(140)</span>
                                       </div>
                                       <!-- price -->
                                       <div class="d-flex justify-content-between align-items-center mt-3">
                                          <div>
                                             <span class="text-danger">$12</span>
                                             <span class="text-muted text-decoration-line-through ms-1">$18</span>
                                          </div>
                                          <div><span class="text-uppercase small text-primary">In Stock</span></div>
                                       </div>
                                       <!-- btn -->
                                       <div class="product-fade-block">
                                          <div class="d-grid mt-4">
                                             <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- hidden class for hover -->
                                    <div class="product-content-fade border-info" style="margin-bottom: -60px"></div>
                                 </div>
                              </div>
                              <div class="col">
                                 <!-- card -->
                                 <div class="card card-product-v2 h-100">
                                    <div class="card-body position-relative">
                                       <!-- badge -->
                                       <div class="text-center position-relative">
                                          <div class="position-absolute top-0 start-0">
                                             <span class="badge bg-warning text-dark">14%</span>
                                          </div>
                                          <!-- img -->
                                          <a href="#!"><img src="plantilla/assets/images/products/product-img-5.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                          <!-- action btn -->
                                          <div class="product-action-btn">
                                             <a href="#!" class="btn-action mb-1" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="bi bi-eye"></i></a>
                                             <a href="plantilla/temps/shop-wishlist.html" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                             <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                          </div>
                                       </div>
                                       <!-- title -->
                                       <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Salted Instant Popcorn</a></h2>
                                       <div>
                                          <!-- rating -->
                                          <small class="text-warning">
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-half"></i>
                                          </small>
                                          <span class="text-muted small">4.5(212)</span>
                                       </div>
                                       <!-- price -->
                                       <div class="d-flex justify-content-between align-items-center mt-3">
                                          <div>
                                             <span class="text-danger">$40</span>
                                             <span class="text-decoration-line-through text-muted">$65</span>
                                          </div>
                                          <div><span class="text-uppercase small text-primary">In Stock</span></div>
                                       </div>
                                       <!-- btn -->
                                       <div class="product-fade-block">
                                          <div class="d-grid mt-4">
                                             <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- hidden class for hover -->
                                    <div class="product-content-fade border-info" style="margin-bottom: -60px"></div>
                                 </div>
                              </div>
                              <div class="col">
                                 <!-- card -->
                                 <div class="card card-product-v2 h-100">
                                    <div class="card-body position-relative">
                                       <!-- badge -->
                                       <div class="text-center position-relative">
                                          <!-- img -->
                                          <a href="#!"><img src="plantilla/assets/images/products/product-img-6.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                          <!-- action btn -->
                                          <div class="product-action-btn">
                                             <a href="#!" class="btn-action mb-1" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="bi bi-eye"></i></a>
                                             <a href="plantilla/temps/shop-wishlist.html" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                             <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                          </div>
                                       </div>
                                       <!-- title -->
                                       <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Epigamia Blueberry Greek Yogurt, 90g</a></h2>
                                       <div>
                                          <!-- rating -->
                                          <small class="text-warning">
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-half"></i>
                                          </small>
                                          <span class="text-muted small">4.4(694)</span>
                                       </div>
                                       <!-- price -->
                                       <div class="d-flex justify-content-between align-items-center mt-3">
                                          <div><span class="text-dark">$17</span></div>
                                          <div><span class="text-uppercase small text-primary">In Stock</span></div>
                                       </div>
                                       <!-- btn -->
                                       <div class="product-fade-block">
                                          <div class="d-grid mt-4">
                                             <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- hidden class for hover -->
                                    <div class="product-content-fade border-info" style="margin-bottom: -60px"></div>
                                 </div>
                              </div>
                              <div class="col">
                                 <!-- card -->
                                 <div class="card card-product-v2 h-100">
                                    <div class="card-body position-relative">
                                       <!-- badge -->
                                       <div class="text-center position-relative">
                                          <div class="position-absolute top-0 start-0">
                                             <span class="badge bg-danger">Sale</span>
                                          </div>
                                          <!-- img -->
                                          <a href="#!"><img src="plantilla/assets/images/products/product-img-1.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                          <!-- action btn -->
                                          <div class="product-action-btn">
                                             <a href="#!" class="btn-action mb-1" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="bi bi-eye"></i></a>
                                             <a href="plantilla/temps/shop-wishlist.html" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                             <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                          </div>
                                       </div>
                                       <!-- title -->
                                       <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Haldiram's Sev Bhujia</a></h2>
                                       <div>
                                          <!-- rating -->
                                          <small class="text-warning">
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-half"></i>
                                          </small>
                                          <span class="text-muted small">4.5(149)</span>
                                       </div>
                                       <!-- price -->
                                       <div class="d-flex justify-content-between align-items-center mt-3">
                                          <div>
                                             <span class="text-danger">$18</span>
                                             <span class="text-decoration-line-through text-muted">$24</span>
                                          </div>
                                          <div><span class="text-uppercase small text-primary">In Stock</span></div>
                                       </div>
                                       <!-- btn -->
                                       <div class="product-fade-block">
                                          <div class="d-grid mt-4">
                                             <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- hidden class for hover -->
                                    <div class="product-content-fade border-info" style="margin-bottom: -60px"></div>
                                 </div>
                              </div>
                              <div class="col">
                                 <!-- card -->
                                 <div class="card card-product-v2 h-100">
                                    <div class="card-body position-relative">
                                       <!-- badge -->
                                       <div class="text-center position-relative">
                                          <!-- img -->
                                          <a href="#!"><img src="plantilla/assets/images/products/product-img-2.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                          <!-- action btn -->
                                          <div class="product-action-btn">
                                             <a href="#!" class="btn-action mb-1" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="bi bi-eye"></i></a>
                                             <a href="plantilla/temps/shop-wishlist.html" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                             <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                          </div>
                                       </div>
                                       <!-- title -->
                                       <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Britannia NutriChoice Digestive Biscuits</a></h2>
                                       <div>
                                          <!-- rating -->
                                          <small class="text-warning">
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-half"></i>
                                          </small>
                                          <span class="text-muted small">4.4(3,149)</span>
                                       </div>
                                       <!-- price -->
                                       <div class="d-flex justify-content-between align-items-center mt-3">
                                          <div><span class="text-dark">$15</span></div>
                                          <div><span class="text-uppercase small text-primary">In Stock</span></div>
                                       </div>
                                       <!-- btn -->
                                       <div class="product-fade-block">
                                          <div class="d-grid mt-4">
                                             <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- hidden class for hover -->
                                    <div class="product-content-fade border-info" style="margin-bottom: -60px"></div>
                                 </div>
                              </div>
                              <div class="col">
                                 <!-- card -->
                                 <div class="card card-product-v2 h-100">
                                    <div class="card-body position-relative">
                                       <!-- badge -->
                                       <div class="text-center position-relative">
                                          <!-- img -->
                                          <a href="#!"><img src="plantilla/assets/images/products/product-img-3.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                          <!-- action btn -->
                                          <div class="product-action-btn">
                                             <a href="#!" class="btn-action mb-1" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="bi bi-eye"></i></a>
                                             <a href="plantilla/temps/shop-wishlist.html" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                             <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                          </div>
                                       </div>
                                       <!-- title -->
                                       <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Cadbury 5 star chocolate</a></h2>
                                       <div>
                                          <!-- rating -->
                                          <small class="text-warning">
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-half"></i>
                                          </small>
                                          <span class="text-muted small">4.7(1,130)</span>
                                       </div>
                                       <!-- price -->
                                       <div class="d-flex justify-content-between align-items-center mt-3">
                                          <div><span class="text-dark">$32</span></div>
                                          <div><span class="text-uppercase small text-primary">In Stock</span></div>
                                       </div>
                                       <!-- btn -->
                                       <div class="product-fade-block">
                                          <div class="d-grid mt-4">
                                             <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- hidden class for hover -->
                                    <div class="product-content-fade border-info" style="margin-bottom: -60px"></div>
                                 </div>
                              </div>

                              <div class="col">
                                 <!-- card -->
                                 <div class="card card-product-v2 h-100">
                                    <div class="card-body position-relative">
                                       <!-- badge -->
                                       <div class="text-center position-relative">
                                          <!-- img -->
                                          <a href="#!"><img src="plantilla/assets/images/products/product-img-8.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                          <!-- action btn -->
                                          <div class="product-action-btn">
                                             <a href="#!" class="btn-action mb-1" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="bi bi-eye"></i></a>
                                             <a href="plantilla/temps/shop-wishlist.html" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                             <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                          </div>
                                       </div>
                                       <!-- title -->
                                       <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Kellogg's Special K Original Cereal</a></h2>
                                       <div>
                                          <!-- rating -->
                                          <small class="text-warning">
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-half"></i>
                                          </small>
                                          <span class="text-muted small">4.7(1,130)</span>
                                       </div>
                                       <!-- price -->
                                       <div class="d-flex justify-content-between align-items-center mt-3">
                                          <div>
                                             <span class="text-danger">$25</span>
                                             <span class="text-muted text-decoration-line-through ms-1">$28</span>
                                          </div>
                                          <div><span class="text-uppercase small text-primary">In Stock</span></div>
                                       </div>
                                       <!-- btn -->
                                       <div class="product-fade-block">
                                          <div class="d-grid mt-4">
                                             <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- hidden class for hover -->
                                    <div class="product-content-fade border-info" style="margin-bottom: -60px"></div>
                                 </div>
                              </div>
                              <div class="col">
                                 <!-- card -->
                                 <div class="card card-product-v2 h-100">
                                    <div class="card-body position-relative">
                                       <!-- badge -->
                                       <div class="text-center position-relative">
                                          <!-- img -->
                                          <a href="#!"><img src="plantilla/assets/images/products/product-img-9.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                          <!-- action btn -->
                                          <div class="product-action-btn">
                                             <a href="#!" class="btn-action mb-1" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="bi bi-eye"></i></a>
                                             <a href="plantilla/temps/shop-wishlist.html" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                             <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                          </div>
                                       </div>
                                       <!-- title -->
                                       <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Slurrp Farm No Maida Millet Pancake Mix</a></h2>
                                       <div>
                                          <!-- rating -->
                                          <small class="text-warning">
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-half"></i>
                                          </small>
                                          <span class="text-muted small">4.5(212)</span>
                                       </div>
                                       <!-- price -->
                                       <div class="d-flex justify-content-between align-items-center mt-3">
                                          <div>
                                             <span class="text-danger">$34</span>
                                             <span class="text-muted text-decoration-line-through ms-1">$38</span>
                                          </div>
                                          <div><span class="text-uppercase small text-primary">In Stock</span></div>
                                       </div>
                                       <!-- btn -->
                                       <div class="product-fade-block">
                                          <div class="d-grid mt-4">
                                             <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- hidden class for hover -->
                                    <div class="product-content-fade border-info" style="margin-bottom: -60px"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="nav-drinks" role="tabpanel" aria-labelledby="nav-drinks-tab" tabindex="0">
                           <div class="row row-cols-2 row-cols-xl-5 row-cols-md-3 g-4">
                              <div class="col">
                                 <!-- card -->
                                 <div class="card card-product-v2 h-100">
                                    <div class="card-body position-relative">
                                       <!-- badge -->
                                       <div class="text-center position-relative">
                                          <!-- img -->
                                          <a href="#!"><img src="plantilla/assets/images/products/product-img-4.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                          <!-- action btn -->
                                          <div class="product-action-btn">
                                             <a href="#!" class="btn-action mb-1" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="bi bi-eye"></i></a>
                                             <a href="plantilla/temps/shop-wishlist.html" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                             <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                          </div>
                                       </div>
                                       <!-- title -->
                                       <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Onion Flavour Potato</a></h2>
                                       <div>
                                          <!-- rating -->
                                          <small class="text-warning">
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-half"></i>
                                          </small>
                                          <span class="text-muted small">4.5(140)</span>
                                       </div>
                                       <!-- price -->
                                       <div class="d-flex justify-content-between align-items-center mt-3">
                                          <div>
                                             <span class="text-danger">$12</span>
                                             <span class="text-muted text-decoration-line-through ms-1">$18</span>
                                          </div>
                                          <div><span class="text-uppercase small text-primary">In Stock</span></div>
                                       </div>
                                       <!-- btn -->
                                       <div class="product-fade-block">
                                          <div class="d-grid mt-4">
                                             <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- hidden class for hover -->
                                    <div class="product-content-fade border-info" style="margin-bottom: -60px"></div>
                                 </div>
                              </div>
                              <div class="col">
                                 <!-- card -->
                                 <div class="card card-product-v2 h-100">
                                    <div class="card-body position-relative">
                                       <!-- badge -->
                                       <div class="text-center position-relative">
                                          <div class="position-absolute top-0 start-0">
                                             <span class="badge bg-warning text-dark">14%</span>
                                          </div>
                                          <!-- img -->
                                          <a href="#!"><img src="plantilla/assets/images/products/product-img-5.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                          <!-- action btn -->
                                          <div class="product-action-btn">
                                             <a href="#!" class="btn-action mb-1" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="bi bi-eye"></i></a>
                                             <a href="plantilla/temps/shop-wishlist.html" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                             <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                          </div>
                                       </div>
                                       <!-- title -->
                                       <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Salted Instant Popcorn</a></h2>
                                       <div>
                                          <!-- rating -->
                                          <small class="text-warning">
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-half"></i>
                                          </small>
                                          <span class="text-muted small">4.5(212)</span>
                                       </div>
                                       <!-- price -->
                                       <div class="d-flex justify-content-between align-items-center mt-3">
                                          <div>
                                             <span class="text-danger">$40</span>
                                             <span class="text-decoration-line-through text-muted">$65</span>
                                          </div>
                                          <div><span class="text-uppercase small text-primary">In Stock</span></div>
                                       </div>
                                       <!-- btn -->
                                       <div class="product-fade-block">
                                          <div class="d-grid mt-4">
                                             <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- hidden class for hover -->
                                    <div class="product-content-fade border-info" style="margin-bottom: -60px"></div>
                                 </div>
                              </div>
                              <div class="col">
                                 <!-- card -->
                                 <div class="card card-product-v2 h-100">
                                    <div class="card-body position-relative">
                                       <!-- badge -->
                                       <div class="text-center position-relative">
                                          <!-- img -->
                                          <a href="#!"><img src="plantilla/assets/images/products/product-img-6.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                          <!-- action btn -->
                                          <div class="product-action-btn">
                                             <a href="#!" class="btn-action mb-1" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="bi bi-eye"></i></a>
                                             <a href="plantilla/temps/shop-wishlist.html" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                             <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                          </div>
                                       </div>
                                       <!-- title -->
                                       <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Epigamia Blueberry Greek Yogurt, 90g</a></h2>
                                       <div>
                                          <!-- rating -->
                                          <small class="text-warning">
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-half"></i>
                                          </small>
                                          <span class="text-muted small">4.4(694)</span>
                                       </div>
                                       <!-- price -->
                                       <div class="d-flex justify-content-between align-items-center mt-3">
                                          <div><span class="text-dark">$17</span></div>
                                          <div><span class="text-uppercase small text-primary">In Stock</span></div>
                                       </div>
                                       <!-- btn -->
                                       <div class="product-fade-block">
                                          <div class="d-grid mt-4">
                                             <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- hidden class for hover -->
                                    <div class="product-content-fade border-info" style="margin-bottom: -60px"></div>
                                 </div>
                              </div>
                              <div class="col">
                                 <!-- card -->
                                 <div class="card card-product-v2 h-100">
                                    <div class="card-body position-relative">
                                       <!-- badge -->
                                       <div class="text-center position-relative">
                                          <div class="position-absolute top-0 start-0">
                                             <span class="badge bg-danger">Sale</span>
                                          </div>
                                          <!-- img -->
                                          <a href="#!"><img src="plantilla/assets/images/products/product-img-1.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                          <!-- action btn -->
                                          <div class="product-action-btn">
                                             <a href="#!" class="btn-action mb-1" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="bi bi-eye"></i></a>
                                             <a href="plantilla/temps/shop-wishlist.html" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                             <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                          </div>
                                       </div>
                                       <!-- title -->
                                       <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Haldiram's Sev Bhujia</a></h2>
                                       <div>
                                          <!-- rating -->
                                          <small class="text-warning">
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-half"></i>
                                          </small>
                                          <span class="text-muted small">4.5(149)</span>
                                       </div>
                                       <!-- price -->
                                       <div class="d-flex justify-content-between align-items-center mt-3">
                                          <div>
                                             <span class="text-danger">$18</span>
                                             <span class="text-decoration-line-through text-muted">$24</span>
                                          </div>
                                          <div><span class="text-uppercase small text-primary">In Stock</span></div>
                                       </div>
                                       <!-- btn -->
                                       <div class="product-fade-block">
                                          <div class="d-grid mt-4">
                                             <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- hidden class for hover -->
                                    <div class="product-content-fade border-info" style="margin-bottom: -60px"></div>
                                 </div>
                              </div>
                              <div class="col">
                                 <!-- card -->
                                 <div class="card card-product-v2 h-100">
                                    <div class="card-body position-relative">
                                       <!-- badge -->
                                       <div class="text-center position-relative">
                                          <!-- img -->
                                          <a href="#!"><img src="plantilla/assets/images/products/product-img-2.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                          <!-- action btn -->
                                          <div class="product-action-btn">
                                             <a href="#!" class="btn-action mb-1" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="bi bi-eye"></i></a>
                                             <a href="plantilla/temps/shop-wishlist.html" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                             <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                          </div>
                                       </div>
                                       <!-- title -->
                                       <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Britannia NutriChoice Digestive Biscuits</a></h2>
                                       <div>
                                          <!-- rating -->
                                          <small class="text-warning">
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-half"></i>
                                          </small>
                                          <span class="text-muted small">4.4(3,149)</span>
                                       </div>
                                       <!-- price -->
                                       <div class="d-flex justify-content-between align-items-center mt-3">
                                          <div><span class="text-dark">$15</span></div>
                                          <div><span class="text-uppercase small text-primary">In Stock</span></div>
                                       </div>
                                       <!-- btn -->
                                       <div class="product-fade-block">
                                          <div class="d-grid mt-4">
                                             <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- hidden class for hover -->
                                    <div class="product-content-fade border-info" style="margin-bottom: -60px"></div>
                                 </div>
                              </div>
                              <div class="col">
                                 <!-- card -->
                                 <div class="card card-product-v2 h-100">
                                    <div class="card-body position-relative">
                                       <!-- badge -->
                                       <div class="text-center position-relative">
                                          <!-- img -->
                                          <a href="#!"><img src="plantilla/assets/images/products/product-img-3.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                          <!-- action btn -->
                                          <div class="product-action-btn">
                                             <a href="#!" class="btn-action mb-1" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="bi bi-eye"></i></a>
                                             <a href="plantilla/temps/shop-wishlist.html" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                             <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                          </div>
                                       </div>
                                       <!-- title -->
                                       <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Cadbury 5 star chocolate</a></h2>
                                       <div>
                                          <!-- rating -->
                                          <small class="text-warning">
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-half"></i>
                                          </small>
                                          <span class="text-muted small">4.7(1,130)</span>
                                       </div>
                                       <!-- price -->
                                       <div class="d-flex justify-content-between align-items-center mt-3">
                                          <div><span class="text-dark">$32</span></div>
                                          <div><span class="text-uppercase small text-primary">In Stock</span></div>
                                       </div>
                                       <!-- btn -->
                                       <div class="product-fade-block">
                                          <div class="d-grid mt-4">
                                             <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- hidden class for hover -->
                                    <div class="product-content-fade border-info" style="margin-bottom: -60px"></div>
                                 </div>
                              </div>
                              <div class="col">
                                 <!-- card -->
                                 <div class="card card-product-v2 h-100">
                                    <div class="card-body position-relative">
                                       <!-- badge -->
                                       <div class="text-center position-relative">
                                          <!-- img -->
                                          <a href="#!"><img src="plantilla/assets/images/products/product-img-8.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                          <!-- action btn -->
                                          <div class="product-action-btn">
                                             <a href="#!" class="btn-action mb-1" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="bi bi-eye"></i></a>
                                             <a href="plantilla/temps/shop-wishlist.html" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                             <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                          </div>
                                       </div>
                                       <!-- title -->
                                       <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Kellogg's Special K Original Cereal</a></h2>
                                       <div>
                                          <!-- rating -->
                                          <small class="text-warning">
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-half"></i>
                                          </small>
                                          <span class="text-muted small">4.7(1,130)</span>
                                       </div>
                                       <!-- price -->
                                       <div class="d-flex justify-content-between align-items-center mt-3">
                                          <div>
                                             <span class="text-danger">$25</span>
                                             <span class="text-muted text-decoration-line-through ms-1">$28</span>
                                          </div>
                                          <div><span class="text-uppercase small text-primary">In Stock</span></div>
                                       </div>
                                       <!-- btn -->
                                       <div class="product-fade-block">
                                          <div class="d-grid mt-4">
                                             <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- hidden class for hover -->
                                    <div class="product-content-fade border-info" style="margin-bottom: -60px"></div>
                                 </div>
                              </div>
                              <div class="col">
                                 <!-- card -->
                                 <div class="card card-product-v2 h-100">
                                    <div class="card-body position-relative">
                                       <!-- badge -->
                                       <div class="text-center position-relative">
                                          <!-- img -->
                                          <a href="#!"><img src="plantilla/assets/images/products/product-img-9.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                          <!-- action btn -->
                                          <div class="product-action-btn">
                                             <a href="#!" class="btn-action mb-1" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="bi bi-eye"></i></a>
                                             <a href="plantilla/temps/shop-wishlist.html" class="btn-action mb-1" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                             <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                          </div>
                                       </div>
                                       <!-- title -->
                                       <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Slurrp Farm No Maida Millet Pancake Mix</a></h2>
                                       <div>
                                          <!-- rating -->
                                          <small class="text-warning">
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-half"></i>
                                          </small>
                                          <span class="text-muted small">4.5(212)</span>
                                       </div>
                                       <!-- price -->
                                       <div class="d-flex justify-content-between align-items-center mt-3">
                                          <div>
                                             <span class="text-danger">$34</span>
                                             <span class="text-muted text-decoration-line-through ms-1">$38</span>
                                          </div>
                                          <div><span class="text-uppercase small text-primary">In Stock</span></div>
                                       </div>
                                       <!-- btn -->
                                       <div class="product-fade-block">
                                          <div class="d-grid mt-4">
                                             <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- hidden class for hover -->
                                    <div class="product-content-fade border-info" style="margin-bottom: -60px"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var defaultLat = 4.60971;
            var defaultLng = -74.08175;

            const map = L.map('map').setView([defaultLat, defaultLng], 4);
            const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: ''
            }).addTo(map);

            const marker = L.marker([defaultLat, defaultLng], { draggable: true }).addTo(map)
                .bindPopup('<b>Hello world!</b><br />I am a popup.').openPopup();

            const circle = L.circle([defaultLat, defaultLng], {
                color: 'red',
                fillColor: '#f03',
                fillOpacity: 0.5,
                radius: 500
            }).addTo(map).bindPopup('I am a circle.');

            function updateCity(lat, lng) {
                // Utilizar Nominatim para obtener la dirección
                const nominatimUrl = `https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${lat}&lon=${lng}`;

                fetch(nominatimUrl)
                    .then(response => response.json())
                    .then(data => {
                        const ciudad = data.address.city || data.address.town || data.address.village || data.address.hamlet;
 

                     
   
            var selectedFilter = ciudad;

            $.ajax({
                type: 'GET',
                url: 'tu_script_php_que_procesa_el_filtro2.php',
                data: { filter: selectedFilter },
                success: function(response) {
                    $('#result-container2').html(response);
                    document.getElementById('ciudad').innerText = ciudad;

                }
            });
        
 
                    })
                    .catch(error => console.error('Error al obtener la dirección:', error));
            }

            // Al mover el marcador
            marker.on('moveend', function (e) {
                const latlng = e.target.getLatLng();
                updateCity(latlng.lat, latlng.lng);
            });

            // Al cargar la página
            updateCity(defaultLat, defaultLng);

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    function(position) {
                        var latitud = position.coords.latitude;
                        var longitud = position.coords.longitude;

                        map.setView([latitud, longitud], 13);
                        marker.setLatLng([latitud, longitud]);
                        circle.setLatLng([latitud, longitud]);

                        updateCity(latitud, longitud);
                    },
                    function(error) {
                        switch (error.code) {
                            case error.PERMISSION_DENIED:
                                // El usuario rechazó la geolocalización, se mantiene la ubicación predeterminada
                                break;
                            case error.POSITION_UNAVAILABLE:
                                alert("La información de ubicación no está disponible.");
                                break;
                            case error.TIMEOUT:
                                alert("La solicitud para obtener la ubicación del usuario ha caducado.");
                                break;
                            case error.UNKNOWN_ERROR:
                                alert("Se produjo un error desconocido al intentar obtener la ubicación del usuario.");
                                break;
                        }
                    }
                );
            } else {
                alert("La geolocalización no es compatible en este navegador.");
            }
        });
    </script>

    
<div class="rtcl rtcl-listings-sc-wrapper has-map "><div class="rtcl-listings-wrapper"><div class="rtcl-notices-wrapper"></div>
 

<div class="rtcl-listings rtcl-grid-view columns-3">

<div class="listing-item rtcl-listing-item post-154 status-publish is-featured is-sell is-bump-up rtcl_location-bogota rtcl_location-chia">




<div class="container">
		<div class="content">
 



<script>
    // Esta función se ejecuta al cargar la página para seleccionar la opción correspondiente al valor actual del h1
    window.onload = function() {
        updateSelect();
    };

    function updateSelect() {
        var filter = document.getElementById('filter');
        var ciudadH1 = document.getElementById('ciudad');

        // Obtener el valor actual del h1
        var h1Value = ciudadH1.innerText.toLowerCase();

        // Seleccionar la opción correspondiente en el select
        for (var i = 0; i < filter.options.length; i++) {
            if (filter.options[i].value === h1Value) {
                filter.selectedIndex = i;
                break;
            }
        }
    }

    // Esta función se ejecuta cada vez que el valor del h1 cambia
    function updateH1() {
        var filter = document.getElementById('filter');
        var ciudadH1 = document.getElementById('ciudad');

        // Actualizar el contenido del H1 con el valor seleccionado
        ciudadH1.innerText = filter.options[filter.selectedIndex].text;

        // Aquí puedes llamar a otras funciones o realizar acciones adicionales si es necesario
        console.log('H1 actualizado. Otras acciones pueden realizarse aquí.');
    }
</script>

		

            <div id="result-container" class="table-responsive">
            <br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
			
         
         
       
				<?php
              /*
require "conexion.php";
$filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL);

				if($filter){
					$sql = mysqli_query($con, "SELECT * FROM datos WHERE ubicacion='$filter' ORDER BY id ASC");
				}else{
					$sql = mysqli_query($con, "SELECT * FROM datos ORDER BY id ASC");
				}
				if(mysqli_num_rows($sql) == 0){
					echo "<tr><td colspan='8'>No hay datos.</td></tr>";
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
			

                        <div class="listing-thumb">
                        <div class="listing-thumb-inner">
                            <a href="" class="rtcl-media"><img loading="lazy" decoding="async" width="400" height="320" src="'.$row['imagen'].'" class="rtcl-thumbnail" alt="" title=""></a>
                            <div class="rtcl-meta-buttons"></div>
                    
                            <div class="rtcl-meta-buttons">
                                                <div class="rtcl-btn" data-tooltip="Add to favourite" data-listing_id="154">
                                        <a href="javascript:void(0)" class="rtcl-require-login "><span class="rtcl-icon rtcl-icon-heart-empty"></span><span class="favourite-label">Add to Favourites</span></a>                </div>
                                                            <div class="rtcl-quick-view rtcl-btn" data-tooltip="Quick view" data-listing_id="154">
                                        <i class="rtcl-icon rtcl-icon-zoom-in"></i>
                                    </div>
                                                            <div class="rtcl-compare rtcl-btn" data-tooltip="Add to compare list" data-listing_id="154">
                                        <i class="rtcl-icon rtcl-icon-exchange"></i>
                                    </div>
                                        </div>
                                </div>
                    </div>
                        <div class="item-content"><h3 class="listing-title rtcl-listing-title"><a href="">'.$row['nombre'].'</a></h3><div class="rtcl-listing-badge-wrap"></div>

                        <ul class="rtcl-listing-meta-data">
                                    <li class="author">
                                    <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.4508 12.2412C13.0996 11.3992 12.5899 10.6344 11.9502 9.98932C11.3125 9.34242 10.557 8.82664 9.72551 8.47048C9.71807 8.46671 9.71062 8.46482 9.70317 8.46105C10.863 7.61307 11.617 6.23178 11.617 4.67337C11.617 2.09171 9.55052 0 7 0C4.44949 0 2.38301 2.09171 2.38301 4.67337C2.38301 6.23178 3.13699 7.61306 4.29683 8.46294C4.28938 8.46671 4.28193 8.46859 4.27449 8.47236C3.44045 8.82852 2.69205 9.3392 2.04977 9.99121C1.41067 10.6367 0.901113 11.4015 0.549245 12.2431C0.203571 13.0671 0.0171405 13.9505 4.65534e-05 14.8455C-0.000450341 14.8656 0.00303479 14.8856 0.0102967 14.9043C0.0175586 14.9231 0.0284503 14.9401 0.04233 14.9545C0.0562097 14.9689 0.0727966 14.9804 0.0911133 14.9882C0.10943 14.996 0.129106 15 0.148982 15H1.266C1.34791 15 1.41307 14.934 1.41493 14.853C1.45216 13.3982 2.02929 12.0358 3.04949 11.0031C4.10507 9.93467 5.50693 9.34673 7 9.34673C8.49308 9.34673 9.89493 9.93467 10.9505 11.0031C11.9707 12.0358 12.5478 13.3982 12.5851 14.853C12.5869 14.9359 12.6521 15 12.734 15H13.851C13.8709 15 13.8906 14.996 13.9089 14.9882C13.9272 14.9804 13.9438 14.9689 13.9577 14.9545C13.9715 14.9401 13.9824 14.9231 13.9897 14.9043C13.997 14.8856 14.0005 14.8656 14 14.8455C13.9813 13.9447 13.797 13.0685 13.4508 12.2412ZM7 7.91457C6.14548 7.91457 5.34123 7.57726 4.73619 6.96482C4.13114 6.35239 3.79789 5.53832 3.79789 4.67337C3.79789 3.80842 4.13114 2.99435 4.73619 2.38191C5.34123 1.76947 6.14548 1.43216 7 1.43216C7.85452 1.43216 8.65877 1.76947 9.26381 2.38191C9.86886 2.99435 10.2021 3.80842 10.2021 4.67337C10.2021 5.53832 9.86886 6.35239 9.26381 6.96482C8.65877 7.57726 7.85452 7.91457 7 7.91457Z" fill="#BEC2C9"></path>
                                    </svg>
                                    by 			                <a href="http://localhost/lacuponera/author/cuponera/">'.$row['por'].'</a>
                                                        </li>
                                            <li class="rt-location">
                                    <svg width="13" height="17" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.5 9.71429C5.91565 9.71429 5.34442 9.53624 4.85854 9.20268C4.37267 8.86911 3.99398 8.39499 3.77036 7.84029C3.54674 7.28558 3.48823 6.6752 3.60223 6.08633C3.71623 5.49746 3.99762 4.95655 4.41082 4.532C4.82402 4.10745 5.35047 3.81832 5.9236 3.70119C6.49672 3.58405 7.09078 3.64417 7.63065 3.87394C8.17053 4.1037 8.63196 4.4928 8.95661 4.99202C9.28126 5.49124 9.45454 6.07816 9.45454 6.67857C9.4536 7.4834 9.14202 8.25498 8.58814 8.82408C8.03426 9.39318 7.28331 9.71332 6.5 9.71429ZM6.5 4.85714C6.14939 4.85714 5.80665 4.96397 5.51513 5.16411C5.2236 5.36425 4.99639 5.64872 4.86222 5.98154C4.72804 6.31436 4.69294 6.68059 4.76134 7.03391C4.82974 7.38724 4.99857 7.71178 5.24649 7.96652C5.49441 8.22125 5.81028 8.39472 6.15416 8.465C6.49803 8.53528 6.85447 8.49921 7.17839 8.36135C7.50232 8.22349 7.77918 7.99004 7.97397 7.6905C8.16876 7.39097 8.27273 7.03882 8.27273 6.67857C8.27226 6.19565 8.08534 5.73264 7.75299 5.39116C7.42064 5.04968 6.97001 4.85763 6.5 4.85714Z" fill="#BEC2C9"></path>
                                        <path d="M6.5 17L1.5151 10.9595C1.44583 10.8688 1.37728 10.7776 1.30946 10.6857C0.457949 9.53323 -0.00205706 8.12553 6.91533e-06 6.67857C6.91533e-06 4.9073 0.684826 3.20858 1.90381 1.95611C3.1228 0.703633 4.77609 0 6.5 0C8.22391 0 9.8772 0.703633 11.0962 1.95611C12.3152 3.20858 13 4.9073 13 6.67857C13.0021 8.12487 12.5423 9.53193 11.6911 10.6839L11.6905 10.6857C11.6905 10.6857 11.5133 10.9249 11.4867 10.9571L6.5 17ZM2.25255 9.95411C2.25373 9.95411 2.39082 10.1411 2.42214 10.1812L6.5 15.1227L10.5832 10.1745C10.6092 10.1411 10.7474 9.95289 10.748 9.95229C11.4436 9.01068 11.8195 7.8607 11.8182 6.67857C11.8182 5.22935 11.2579 3.83949 10.2605 2.81474C9.26317 1.78999 7.91047 1.21429 6.5 1.21429C5.08953 1.21429 3.73683 1.78999 2.73948 2.81474C1.74213 3.83949 1.18182 5.22935 1.18182 6.67857C1.18058 7.86143 1.55633 9.01207 2.25255 9.95411Z" fill="#BEC2C9"></path>
                                    </svg>
                                    <a href="">'.$row['ubicacion'].'</a><span class="rtcl-delimiter">       </li>
                                        <li class="updated">
                                    <i class="fa-regular fa-clock"></i>
                                    '.$row['periodo'].'</li>
                                </ul>
                            <div class="rtcl-price-wrap"><div class="rtcl-price price-type-fixed"><div class="rtcl-price-range"><span class="rtcl-price-amount amount"><bdi><span class="rtcl-price-currencySymbol">'.$row['precio'].'</span></bdi></span> </div></div></div>
                        
                        </div>

                        
						';
						$no++;
					}
				}

          
*/
				?>
			</table>
</div>



			</div>
		</div>
	</div>
        <br>
        <br>
<!--
<script>
    $(document).ready(function() {
        $('#filter').change(function() {
            var selectedFilter = $(this).val();

            $.ajax({
                type: 'GET',
                url: 'tu_script_php_que_procesa_el_filtro.php',
                data: { filter: selectedFilter },
                success: function(response) {
                    $('#result-container').html(response);
                }
            });
        });
    });

    
</script>

   -->


</div>








</div> 
</div></div>
 
<!-- Shop Cart -->

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
	<div class="offcanvas-header border-bottom">
		<div class="text-start">
			<h5 id="offcanvasRightLabel" class="mb-0 fs-4">Shop Cart</h5>
			<small>Location in 382480</small>
		</div>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body">
		<div>
			<!-- alert -->
			<div class="alert alert-danger p-2" role="alert">
				You’ve got FREE delivery. Start
				<a href="#!" class="alert-link">checkout now!</a>
			</div>
			<ul class="list-group list-group-flush">
				<!-- list group -->
				<li class="list-group-item py-3 ps-0 border-top">
					<!-- row -->
					<div class="row align-items-center">
						<div class="col-6 col-md-6 col-lg-7">
							<div class="d-flex">
								<img src="plantilla/assets/images/products/product-img-1.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
								<div class="ms-3">
									<!-- title -->
									<a href="plantilla/temps/shop-single.html" class="text-inherit">
										<h6 class="mb-0">Haldiram's Sev Bhujia</h6>
									</a>
									<span><small class="text-muted">.98 / lb</small></span>
									<!-- text -->
									<div class="mt-2 small lh-1">
										<a href="#!" class="text-decoration-none text-inherit">
											<span class="me-1 align-text-bottom">
												<svg
													xmlns="http://www.w3.org/2000/svg"
													width="14"
													height="14"
													viewBox="0 0 24 24"
													fill="none"
													stroke="currentColor"
													stroke-width="2"
													stroke-linecap="round"
													stroke-linejoin="round"
													class="feather feather-trash-2 text-success"
												>
													<polyline points="3 6 5 6 21 6"></polyline>
													<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
													<line x1="10" y1="11" x2="10" y2="17"></line>
													<line x1="14" y1="11" x2="14" y2="17"></line>
												</svg>
											</span>
											<span class="text-muted">Remove</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- input group -->
						<div class="col-4 col-md-3 col-lg-3">
							<!-- input -->
							<!-- input -->
							<div class="input-group input-spinner">
								<input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
								<input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
								<input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
							</div>
						</div>
						<!-- price -->
						<div class="col-2 text-lg-end text-start text-md-end col-md-2">
							<span class="fw-bold">$5.00</span>
						</div>
					</div>
				</li>
				<!-- list group -->
				<li class="list-group-item py-3 ps-0">
					<!-- row -->
					<div class="row align-items-center">
						<div class="col-6 col-md-6 col-lg-7">
							<div class="d-flex">
								<img src="plantilla/assets/images/products/product-img-2.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
								<div class="ms-3">
									<a href="plantilla/temps/shop-single.html" class="text-inherit">
										<h6 class="mb-0">NutriChoice Digestive</h6>
									</a>
									<span><small class="text-muted">250g</small></span>
									<!-- text -->
									<div class="mt-2 small lh-1">
										<a href="#!" class="text-decoration-none text-inherit">
											<span class="me-1 align-text-bottom">
												<svg
													xmlns="http://www.w3.org/2000/svg"
													width="14"
													height="14"
													viewBox="0 0 24 24"
													fill="none"
													stroke="currentColor"
													stroke-width="2"
													stroke-linecap="round"
													stroke-linejoin="round"
													class="feather feather-trash-2 text-success"
												>
													<polyline points="3 6 5 6 21 6"></polyline>
													<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
													<line x1="10" y1="11" x2="10" y2="17"></line>
													<line x1="14" y1="11" x2="14" y2="17"></line>
												</svg>
											</span>
											<span class="text-muted">Remove</span>
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- input group -->
						<div class="col-4 col-md-3 col-lg-3">
							<!-- input -->
							<!-- input -->
							<div class="input-group input-spinner">
								<input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
								<input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
								<input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
							</div>
						</div>
						<!-- price -->
						<div class="col-2 text-lg-end text-start text-md-end col-md-2">
							<span class="fw-bold text-danger">$20.00</span>
							<div class="text-decoration-line-through text-muted small">$26.00</div>
						</div>
					</div>
				</li>
				<!-- list group -->
				<li class="list-group-item py-3 ps-0">
					<!-- row -->
					<div class="row align-items-center">
						<div class="col-6 col-md-6 col-lg-7">
							<div class="d-flex">
								<img src="plantilla/assets/images/products/product-img-3.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
								<div class="ms-3">
									<!-- title -->
									<a href="plantilla/temps/shop-single.html" class="text-inherit">
										<h6 class="mb-0">Cadbury 5 Star Chocolate</h6>
									</a>
									<span><small class="text-muted">1 kg</small></span>
									<!-- text -->
									<div class="mt-2 small lh-1">
										<a href="#!" class="text-decoration-none text-inherit">
											<span class="me-1 align-text-bottom">
												<svg
													xmlns="http://www.w3.org/2000/svg"
													width="14"
													height="14"
													viewBox="0 0 24 24"
													fill="none"
													stroke="currentColor"
													stroke-width="2"
													stroke-linecap="round"
													stroke-linejoin="round"
													class="feather feather-trash-2 text-success"
												>
													<polyline points="3 6 5 6 21 6"></polyline>
													<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
													<line x1="10" y1="11" x2="10" y2="17"></line>
													<line x1="14" y1="11" x2="14" y2="17"></line>
												</svg>
											</span>
											<span class="text-muted">Remove</span>
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- input group -->
						<div class="col-4 col-md-3 col-lg-3">
							<!-- input -->
							<!-- input -->
							<div class="input-group input-spinner">
								<input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
								<input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
								<input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
							</div>
						</div>
						<!-- price -->
						<div class="col-2 text-lg-end text-start text-md-end col-md-2">
							<span class="fw-bold">$15.00</span>
							<div class="text-decoration-line-through text-muted small">$20.00</div>
						</div>
					</div>
				</li>
				<!-- list group -->
				<li class="list-group-item py-3 ps-0">
					<!-- row -->
					<div class="row align-items-center">
						<div class="col-6 col-md-6 col-lg-7">
							<div class="d-flex">
								<img src="plantilla/assets/images/products/product-img-4.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
								<div class="ms-3">
									<!-- title -->
									<!-- title -->
									<a href="plantilla/temps/shop-single.html" class="text-inherit">
										<h6 class="mb-0">Onion Flavour Potato</h6>
									</a>
									<span><small class="text-muted">250g</small></span>
									<!-- text -->
									<div class="mt-2 small lh-1">
										<a href="#!" class="text-decoration-none text-inherit">
											<span class="me-1 align-text-bottom">
												<svg
													xmlns="http://www.w3.org/2000/svg"
													width="14"
													height="14"
													viewBox="0 0 24 24"
													fill="none"
													stroke="currentColor"
													stroke-width="2"
													stroke-linecap="round"
													stroke-linejoin="round"
													class="feather feather-trash-2 text-success"
												>
													<polyline points="3 6 5 6 21 6"></polyline>
													<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
													<line x1="10" y1="11" x2="10" y2="17"></line>
													<line x1="14" y1="11" x2="14" y2="17"></line>
												</svg>
											</span>
											<span class="text-muted">Remove</span>
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- input group -->
						<div class="col-4 col-md-3 col-lg-3">
							<!-- input -->
							<!-- input -->
							<div class="input-group input-spinner">
								<input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
								<input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
								<input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
							</div>
						</div>
						<!-- price -->
						<div class="col-2 text-lg-end text-start text-md-end col-md-2">
							<span class="fw-bold">$15.00</span>
							<div class="text-decoration-line-through text-muted small">$20.00</div>
						</div>
					</div>
				</li>
				<!-- list group -->
				<li class="list-group-item py-3 ps-0 border-bottom">
					<!-- row -->
					<div class="row align-items-center">
						<div class="col-6 col-md-6 col-lg-7">
							<div class="d-flex">
								<img src="plantilla/assets/images/products/product-img-5.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
								<div class="ms-3">
									<!-- title -->
									<a href="plantilla/temps/shop-single.html" class="text-inherit">
										<h6 class="mb-0">Salted Instant Popcorn</h6>
									</a>
									<span><small class="text-muted">100g</small></span>
									<!-- text -->
									<div class="mt-2 small lh-1">
										<a href="#!" class="text-decoration-none text-inherit">
											<span class="me-1 align-text-bottom">
												<svg
													xmlns="http://www.w3.org/2000/svg"
													width="14"
													height="14"
													viewBox="0 0 24 24"
													fill="none"
													stroke="currentColor"
													stroke-width="2"
													stroke-linecap="round"
													stroke-linejoin="round"
													class="feather feather-trash-2 text-success"
												>
													<polyline points="3 6 5 6 21 6"></polyline>
													<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
													<line x1="10" y1="11" x2="10" y2="17"></line>
													<line x1="14" y1="11" x2="14" y2="17"></line>
												</svg>
											</span>
											<span class="text-muted">Remove</span>
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- input group -->
						<div class="col-4 col-md-3 col-lg-3">
							<!-- input -->
							<!-- input -->
							<div class="input-group input-spinner">
								<input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
								<input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
								<input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
							</div>
						</div>
						<!-- price -->
						<div class="col-2 text-lg-end text-start text-md-end col-md-2">
							<span class="fw-bold">$15.00</span>
							<div class="text-decoration-line-through text-muted small">$25.00</div>
						</div>
					</div>
				</li>
			</ul>
			<!-- btn -->
			<div class="d-flex justify-content-between mt-4">
				<a href="#!" class="btn btn-primary">Continue Shopping</a>
				<a href="#!" class="btn btn-dark">Update Cart</a>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body p-6">
				<div class="d-flex justify-content-between align-items-start">
					<div>
						<h5 class="mb-1" id="locationModalLabel">Choose your Delivery Location</h5>
						<p class="mb-0 small">Enter your address and we will specify the offer you area.</p>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="my-5">
					<input type="search" class="form-control" placeholder="Search your area" />
				</div>
				<div class="d-flex justify-content-between align-items-center mb-2">
					<h6 class="mb-0">Select Location</h6>
					<a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Clear All</a>
				</div>
				<div>
					<div data-simplebar style="height: 300px">
						<div class="list-group list-group-flush">
							<a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action active">
								<span>Alabama</span>
								<span>Min:$20</span>
							</a>
							<a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
								<span>Alaska</span>
								<span>Min:$30</span>
							</a>
							<a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
								<span>Arizona</span>
								<span>Min:$50</span>
							</a>
							<a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
								<span>California</span>
								<span>Min:$29</span>
							</a>
							<a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
								<span>Colorado</span>
								<span>Min:$80</span>
							</a>
							<a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
								<span>Florida</span>
								<span>Min:$90</span>
							</a>
							<a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
								<span>Arizona</span>
								<span>Min:$50</span>
							</a>
							<a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
								<span>California</span>
								<span>Min:$29</span>
							</a>
							<a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
								<span>Colorado</span>
								<span>Min:$80</span>
							</a>
							<a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
								<span>Florida</span>
								<span>Min:$90</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="assets/js/vendors/validation.js"></script>

      <main>
         <section class="mt-8">
            <div class="container">
               <div class="hero-slider">
                  <div style="background: url(plantilla/assets/images/slider/slide-1.jpg) no-repeat; background-size: cover; border-radius: 0.5rem; background-position: center">
                     <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                        <span class="badge text-bg-warning">Opening Sale Discount 50%</span>

                        <h2 class="text-dark display-5 fw-bold mt-4">SuperMarket For Fresh Grocery</h2>
                        <p class="lead">Introduced a new model for online grocery shopping and convenient home delivery.</p>
                        <a href="#!" class="btn btn-dark mt-3">
                           Shop Now
                           <i class="feather-icon icon-arrow-right ms-1"></i>
                        </a>
                     </div>
                  </div>
                  <div style="background: url(plantilla/assets/images/slider/slider-2.jpg) no-repeat; background-size: cover; border-radius: 0.5rem; background-position: center">
                     <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                        <span class="badge text-bg-warning">Free Shipping - orders over $100</span>
                        <h2 class="text-dark display-5 fw-bold mt-4">
                           Free Shipping on
                           <br />
                           orders over
                           <span class="text-primary">$100</span>
                        </h2>
                        <p class="lead">Free Shipping to First-Time Customers Only, After promotions and discounts are applied.</p>
                        <a href="#!" class="btn btn-dark mt-3">
                           Shop Now
                           <i class="feather-icon icon-arrow-right ms-1"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </section>

        
            <!-- section -->
            <section class="mt-8">
               <div class="container">
                  <!-- row -->
                  <div class="table-responsive-xl pb-6 pb-xl-0">
                     <div class="row flex-nowrap">
                        <div class="col-12 col-xl-4 col-lg-6">
                           <div class="p-8 mb-3 rounded" style="background: url(plantilla/assets/images/banner/ad-banner-1.jpg) no-repeat; background-size: cover">
                              <div>
                                 <h3 class="mb-0 fw-bold">
                                    10% cashback on
                                    <br />
                                    personal care
                                 </h3>
                                 <div class="mt-4 mb-5 fs-5">
                                    <p class="mb-0">Max cashback: $12</p>
                                    <span>
                                       Code:
                                       <span class="fw-bold text-dark">CARE12</span>
                                    </span>
                                 </div>
                                 <a href="#" class="btn btn-dark">Shop Now</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-xl-4 col-lg-6">
                           <div class="p-8 mb-3 rounded" style="background: url(plantilla/assets/images/banner/ad-banner-2.jpg) no-repeat; background-size: cover">
                              <!-- Banner Content -->
                              <div>
                                 <!-- Banner Content -->
                                 <h3 class="fw-bold mb-3">
                                    Say yes to
                                    <br />
                                    season’s fresh
                                 </h3>
                                 <div class="mt-4 mb-5 fs-5">
                                    <p class="fs-5 mb-0">
                                       Refresh your day
                                       <br />
                                       the fruity way
                                    </p>
                                 </div>
   
                                 <a href="#" class="btn btn-dark">Shop Now</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-xl-4 col-lg-6">
                           <div class="p-8 mb-3 rounded" style="background: url(plantilla/assets/images/banner/ad-banner-3.jpg) no-repeat; background-size: cover">
                              <div>
                                 <!-- Banner Content -->
                                 <h3 class="fw-bold mb-3">
                                    When in doubt,
                                    <br />
                                    eat ice cream
                                 </h3>
                                 <div class="mt-4 mb-5 fs-5">
                                    <p class="fs-5 mb-0">
                                       Enjoy a scoop of
                                       <br />
                                       summer today
                                    </p>
                                 </div>
   
                                 <a href="#" class="btn btn-dark">Shop Now</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>

            <section class="mt-8">
               <div class="container">
                  <!-- row -->
                  <div class="row">
                     <div class="col-xxl-8 col-xl-7">
                        <!-- hero slider -->
                        <div class="hero-slider">
                           <div style="background: url(plantilla/assets/images/slider/slider-image-1.jpg) no-repeat; background-size: cover; border-radius: 0.5rem">
                              <div class="ps-lg-12 py-lg-16 col-xxl-7 col-lg-9 py-14 px-8 text-xs-center">
                                 <!-- badge -->
                                 <div class="d-flex align-items-center mb-4">
                                    <span>Exclusive Offer</span>
                                    <span class="badge bg-danger ms-2">15%</span>
                                 </div>
                                 <!-- title -->
                                 <h2 class="text-dark display-5 fw-bold mb-3">Best Online Deals, Free Stuff</h2>
                                 <p class="fs-5 text-dark">Only on this week... Don’t miss</p>
                                 <!-- price -->
                                 <div class="mb-4 mt-4">
                                    <span class="text-dark">
                                       Start from
                                       <span class="fs-4 text-danger ms-1">$5.99</span>
                                    </span>
                                 </div>
                                 <!-- btn -->
                                 <a href="#!" class="btn" id="amarillo3">
                                    Get Best Deal
                                    <i class="feather-icon icon-arrow-right ms-1"></i>
                                 </a>
                              </div>
                           </div>
                           <!-- img -->
                           <div style="background: url(plantilla/assets/images/slider/slider-image-2.jpg) no-repeat; background-size: cover; border-radius: 0.5rem">
                              <div class="ps-lg-12 py-lg-16 col-xxl-7 col-lg-9 py-14 ps-8 text-xs-center">
                                 <!-- badge -->
                                 <div class="d-flex align-items-center mb-4">
                                    <span>Exclusive Offer</span>
                                    <span class="badge bg-danger ms-2">35%</span>
                                 </div>
   
                                 <!-- title -->
                                 <h2 class="text-dark display-5 fw-bold mb-3">Chocozay wafer-rolls Deals</h2>
                                 <!-- para -->
                                 <p class="fs-5 text-dark">Only on this week... Don’t miss</p>
                                 <div class="mb-4 mt-4">
                                    <span class="text-dark">
                                       Start from
                                       <span class="fs-4 text-danger ms-1">$34.99</span>
                                    </span>
                                 </div>
                                 <!-- btn -->
                                 <a href="#!" id="amarillo3" class="btn ">
                                    Shop Deals Now
                                    <i class="feather-icon icon-arrow-right ms-1"></i>
                                 </a>
                              </div>
                           </div>
                           <!-- img -->
                           <div style="background: url(plantilla/assets/images/slider/slider-image-3.jpg) no-repeat; background-size: cover; border-radius: 0.5rem">
                              <div class="ps-lg-12 py-lg-16 col-xxl-7 col-lg-9 py-14 ps-8 text-xs-center">
                                 <!-- badge -->
                                 <div class="d-flex align-items-center mb-4">
                                    <span>Exclusive Offer</span>
                                    <span class="badge bg-danger ms-2">20%</span>
                                 </div>
                                 <!-- title -->
                                 <h2 class="text-dark display-5 fw-bold mb-3">Cokoladni Kolutici Lasta</h2>
                                 <!-- para -->
                                 <p class="fs-5 text-dark">Only on this week... Don’t miss</p>
                                 <div class="mb-4 mt-4">
                                    <span class="text-dark">
                                       Start from
                                       <span class="fs-4 text-primary ms-1">$5.99</span>
                                    </span>
                                 </div>
                                 <!-- btn -->
                                 <a href="#!" class="btn" id="amarillo3">
                                    Shop This Week Offer
                                    <i class="feather-icon icon-arrow-right ms-1"></i>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>

                     
                     <div class="col-xxl-4 col-xl-5 col-12 d-lg-flex d-xl-block gap-3 gap-xl-0">

                     <div class="flex-fill px-8 py-9 mb-6 rounded" style="background: url(./assets/images/banner/ad-banner-1.jpg) no-repeat; background-size: cover">
                           <div>
                              <h3 class="mb-0 fw-bold">
                                 10% cashback on
                                 <br />
                                 personal care
                              </h3>
                              <div class="mt-4 mb-5 fs-5">
                                 <p class="mb-0">Max cashback: $12</p>
                                 <span>
                                    Code:
                                    <span class="fw-bold text-dark">CARE12</span>
                                 </span>
                              </div>
                              <a href="#" class="btn btn-dark">Shop Now</a>
                           </div>
                        </div>
                        <div class="flex-fill px-8 py-9 mb-6 rounded" style="background: url(plantilla/assets/images/banner/ad-banner-1.jpg) no-repeat; background-size: cover">
                           <div>
                              <h3 class="mb-0 fw-bold">
                                 10% cashback on
                                 <br />
                                 personal care
                              </h3>
                              <div class="mt-4 mb-5 fs-5">
                                 <p class="mb-0">Max cashback: $12</p>
                                 <span>
                                    Code:
                                    <span class="fw-bold text-dark">CARE12</span>
                                 </span>
                              </div>
                              <a href="#" class="btn btn-dark">Shop Now</a>
                           </div>
                        </div>
   
                        <div class="flex-fill px-8 py-8 rounded" style="background: url(./assets/images/banner/ad-banner-2.jpg) no-repeat; background-size: cover">
                           <!-- Banner Content -->
                           <div>
                              <!-- Banner Content -->
                              <h3 class="fw-bold mb-3">
                                 Say yes to
                                 <br />
                                 season’s fresh
                              </h3>
                              <div class="mt-4 mb-5 fs-5">
                                 <p class="fs-5 mb-0">
                                    Refresh your day
                                    <br />
                                    the fruity way
                                 </p>
                              </div>
   
                              <a href="#" class="btn btn-dark">Shop Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>

         <!-- Category Section Start-->
         <section class="mb-lg-10 mt-lg-14 my-8">
            <div class="container">
               <div class="row">
                  <div class="col-12 mb-6">
                     <h3 class="mb-0">Featured Categories</h3>
                  </div>
               </div>
               <div class="category-slider">
                  <div class="item">
                     <a href="plantilla/temps/shop-grid.html" class="text-decoration-none text-inherit">
                        <div class="card card-product mb-lg-4">
                           <div class="card-body text-center py-8">
                              <img src="plantilla/assets/images/category/category-dairy-bread-eggs.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                              <div class="text-truncate">Dairy, Bread & Eggs</div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="item">
                     <a href="plantilla/temps/shop-grid.html" class="text-decoration-none text-inherit">
                        <div class="card card-product mb-lg-4">
                           <div class="card-body text-center py-8">
                              <img src="plantilla/assets/images/category/category-snack-munchies.jpg" alt="Grocery Ecommerce Template" class="mb-3" />
                              <div class="text-truncate">Snack & Munchies</div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="item">
                     <a href="plantilla/temps/shop-grid.html" class="text-decoration-none text-inherit">
                        <div class="card card-product mb-lg-4">
                           <div class="card-body text-center py-8">
                              <img src="plantilla/assets/images/category/category-bakery-biscuits.jpg" alt="Grocery Ecommerce Template" class="mb-3" />
                              <div class="text-truncate">Bakery & Biscuits</div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="item">
                     <a href="plantilla/temps/shop-grid.html" class="text-decoration-none text-inherit">
                        <div class="card card-product mb-lg-4">
                           <div class="card-body text-center py-8">
                              <img src="plantilla/assets/images/category/category-instant-food.jpg" alt="Grocery Ecommerce Template" class="mb-3" />
                              <div class="text-truncate">Instant Food</div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="item">
                     <a href="plantilla/temps/shop-grid.html" class="text-decoration-none text-inherit">
                        <div class="card card-product mb-lg-4">
                           <div class="card-body text-center py-8">
                              <img src="plantilla/assets/images/category/category-tea-coffee-drinks.jpg" alt="Grocery Ecommerce Template" class="mb-3" />
                              <div class="text-truncate">Tea, Coffee & Drinks</div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="item">
                     <a href="plantilla/temps/shop-grid.html" class="text-decoration-none text-inherit">
                        <div class="card card-product mb-lg-4">
                           <div class="card-body text-center py-8">
                              <img src="plantilla/assets/images/category/category-atta-rice-dal.jpg" alt="Grocery Ecommerce Template" class="mb-3" />
                              <div class="text-truncate">Atta, Rice & Dal</div>
                           </div>
                        </div>
                     </a>
                  </div>

                  <div class="item">
                     <a href="plantilla/temps/shop-grid.html" class="text-decoration-none text-inherit">
                        <div class="card card-product mb-lg-4">
                           <div class="card-body text-center py-8">
                              <img src="plantilla/assets/images/category/category-baby-care.jpg" alt="Grocery Ecommerce Template" class="mb-3" />
                              <div class="text-truncate">Baby Care</div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="item">
                     <a href="plantilla/temps/shop-grid.html" class="text-decoration-none text-inherit">
                        <div class="card card-product mb-lg-4">
                           <div class="card-body text-center py-8">
                              <img src="plantilla/assets/images/category/category-chicken-meat-fish.jpg" alt="Grocery Ecommerce Template" class="mb-3" />
                              <div class="text-truncate">Chicken, Meat & Fish</div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="item">
                     <a href="plantilla/temps/shop-grid.html" class="text-decoration-none text-inherit">
                        <div class="card card-product mb-lg-4">
                           <div class="card-body text-center py-8">
                              <img src="plantilla/assets/images/category/category-cleaning-essentials.jpg" alt="Grocery Ecommerce Template" class="mb-3" />
                              <div class="text-truncate">Cleaning Essentials</div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="item">
                     <a href="plantilla/temps/shop-grid.html" class="text-decoration-none text-inherit">
                        <div class="card card-product mb-lg-4">
                           <div class="card-body text-center py-8">
                              <img src="plantilla/assets/images/category/category-pet-care.jpg" alt="Grocery Ecommerce Template" class="mb-3" />
                              <div class="text-truncate">Pet Care</div>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </section>
         <!-- Category Section End-->
         <section>
            <div class="container">
               <div class="row">
                  <div class="col-12 col-md-6 mb-3 mb-lg-0">
                     <div>
                        <div class="py-10 px-8 rounded" style="background: url(assets/images/banner/grocery-banner.png) no-repeat; background-size: cover; background-position: center">
                           <div>
                              <h3 class="fw-bold mb-1">Fruits & Vegetables</h3>
                              <p class="mb-4">
                                 Get Upto
                                 <span class="fw-bold">30%</span>
                                 Off
                              </p>
                              <a href="#!" class="btn btn-dark">Shop Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-6">
                     <div>
                        <div class="py-10 px-8 rounded" style="background: url(assets/images/banner/grocery-banner-2.jpg) no-repeat; background-size: cover; background-position: center">
                           <div>
                              <h3 class="fw-bold mb-1">Freshly Baked Buns</h3>
                              <p class="mb-4">
                                 Get Upto
                                 <span class="fw-bold">25%</span>
                                 Off
                              </p>
                              <a href="#!" class="btn btn-dark">Shop Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Popular Products Start-->
         <section class="my-lg-14 my-8">
            <div class="container">
               <div class="row">
                  <div class="col-12 mb-6">
                     <h3 class="mb-0">Popular Products</h3>
                  </div>
               </div>

               <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">
                  <div class="col">
                     <div class="card card-product">
                        <div class="card-body">
                           <div class="text-center position-relative">
                              <div class="position-absolute top-0 start-0">
                                 <span class="badge bg-danger">Sale</span>
                              </div>
                              <a href="#!"><img src="plantilla/assets/images/products/product-img-1.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>

                              <div class="card-product-action">
                                 <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                 </a>
                                 <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                 <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                              </div>
                           </div>
                           <div class="text-small mb-1">
                              <a href="#!" class="text-decoration-none text-muted"><small>Snack & Munchies</small></a>
                           </div>
                           <h2 class="fs-6"><a href="plantilla/temps/shop-single.html" class="text-inherit text-decoration-none">Haldiram's Sev Bhujia</a></h2>
                           <div>
                              <small class="text-warning">
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-half"></i>
                              </small>
                              <span class="text-muted small">4.5(149)</span>
                           </div>
                           <div class="d-flex justify-content-between align-items-center mt-3">
                              <div>
                                 <span class="text-dark">$18</span>
                                 <span class="text-decoration-line-through text-muted">$24</span>
                              </div>
                              <div>
                                 <a href="#!" class="btn btn-primary btn-sm">
                                    <svg
                                       xmlns="http://www.w3.org/2000/svg"
                                       width="16"
                                       height="16"
                                       viewBox="0 0 24 24"
                                       fill="none"
                                       stroke="currentColor"
                                       stroke-width="2"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       class="feather feather-plus">
                                       <line x1="12" y1="5" x2="12" y2="19"></line>
                                       <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Add
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card card-product">
                        <div class="card-body">
                           <div class="text-center position-relative">
                              <div class="position-absolute top-0 start-0">
                                 <span class="badge bg-success">14%</span>
                              </div>
                              <a href="plantilla/temps/shop-single.html"><img src="plantilla/assets/images/products/product-img-2.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                              <div class="card-product-action">
                                 <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                 </a>
                                 <a href="plantilla/temps/shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                 <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                              </div>
                           </div>
                           <div class="text-small mb-1">
                              <a href="#!" class="text-decoration-none text-muted"><small>Bakery & Biscuits</small></a>
                           </div>
                           <h2 class="fs-6"><a href="plantilla/temps/shop-single.html" class="text-inherit text-decoration-none">NutriChoice Digestive</a></h2>
                           <div class="text-warning">
                              <small>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-half"></i>
                              </small>
                              <span class="text-muted small">4.5 (25)</span>
                           </div>
                           <div class="d-flex justify-content-between align-items-center mt-3">
                              <div><span class="text-dark">$24</span></div>
                              <div>
                                 <a href="#!" class="btn btn-primary btn-sm">
                                    <svg
                                       xmlns="http://www.w3.org/2000/svg"
                                       width="16"
                                       height="16"
                                       viewBox="0 0 24 24"
                                       fill="none"
                                       stroke="currentColor"
                                       stroke-width="2"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       class="feather feather-plus">
                                       <line x1="12" y1="5" x2="12" y2="19"></line>
                                       <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Add
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card card-product">
                        <div class="card-body">
                           <div class="text-center position-relative">
                              <a href="plantilla/temps/shop-single.html"><img src="plantilla/assets/images/products/product-img-3.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                              <div class="card-product-action">
                                 <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                 </a>
                                 <a href="plantilla/temps/shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                 <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                              </div>
                           </div>
                           <div class="text-small mb-1">
                              <a href="#!" class="text-decoration-none text-muted"><small>Bakery & Biscuits</small></a>
                           </div>
                           <h2 class="fs-6"><a href="plantilla/temps/shop-single.html" class="text-inherit text-decoration-none">Cadbury 5 Star Chocolate</a></h2>
                           <div class="text-warning">
                              <small>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                              </small>
                              <span class="text-muted small">5 (469)</span>
                           </div>
                           <div class="d-flex justify-content-between align-items-center mt-3">
                              <div>
                                 <span class="text-dark">$32</span>
                                 <span class="text-decoration-line-through text-muted">$35</span>
                              </div>
                              <div>
                                 <a href="#!" class="btn btn-primary btn-sm">
                                    <svg
                                       xmlns="http://www.w3.org/2000/svg"
                                       width="16"
                                       height="16"
                                       viewBox="0 0 24 24"
                                       fill="none"
                                       stroke="currentColor"
                                       stroke-width="2"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       class="feather feather-plus">
                                       <line x1="12" y1="5" x2="12" y2="19"></line>
                                       <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Add
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card card-product">
                        <div class="card-body">
                           <div class="text-center position-relative">
                              <a href="plantilla/temps/shop-single.html"><img src="plantilla/assets/images/products/product-img-4.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                              <div class="card-product-action">
                                 <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                 </a>
                                 <a href="plantilla/temps/shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                 <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                              </div>
                              <div class="position-absolute top-0 start-0">
                                 <span class="badge bg-danger">Hot</span>
                              </div>
                           </div>
                           <div class="text-small mb-1">
                              <a href="#!" class="text-decoration-none text-muted"><small>Snack & Munchies</small></a>
                           </div>
                           <h2 class="fs-6"><a href="plantilla/temps/shop-single.html" class="text-inherit text-decoration-none">Onion Flavour Potato</a></h2>
                           <div class="text-warning">
                              <small>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-half"></i>
                                 <i class="bi bi-star"></i>
                              </small>
                              <span class="text-muted small">3.5 (456)</span>
                           </div>
                           <div class="d-flex justify-content-between align-items-center mt-3">
                              <div>
                                 <span class="text-dark">$3</span>
                                 <span class="text-decoration-line-through text-muted">$5</span>
                              </div>
                              <div>
                                 <a href="#!" class="btn btn-primary btn-sm">
                                    <svg
                                       xmlns="http://www.w3.org/2000/svg"
                                       width="16"
                                       height="16"
                                       viewBox="0 0 24 24"
                                       fill="none"
                                       stroke="currentColor"
                                       stroke-width="2"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       class="feather feather-plus">
                                       <line x1="12" y1="5" x2="12" y2="19"></line>
                                       <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Add
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card card-product">
                        <div class="card-body">
                           <div class="text-center position-relative">
                              <a href="plantilla/temps/shop-single.html"><img src="plantilla/assets/images/products/product-img-5.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                              <div class="card-product-action">
                                 <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                 </a>
                                 <a href="plantilla/temps/shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                 <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                              </div>
                           </div>
                           <div class="text-small mb-1">
                              <a href="#!" class="text-decoration-none text-muted"><small>Instant Food</small></a>
                           </div>
                           <h2 class="fs-6"><a href="plantilla/temps/shop-single.html" class="text-inherit text-decoration-none">Salted Instant Popcorn</a></h2>
                           <div class="text-warning">
                              <small>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-half"></i>
                              </small>
                              <span class="text-muted small">4.5 (39)</span>
                           </div>
                           <div class="d-flex justify-content-between mt-4">
                              <div>
                                 <span class="text-dark">$13</span>
                                 <span class="text-decoration-line-through text-muted">$18</span>
                              </div>
                              <div>
                                 <a href="#!" class="btn btn-primary btn-sm">
                                    <svg
                                       xmlns="http://www.w3.org/2000/svg"
                                       width="16"
                                       height="16"
                                       viewBox="0 0 24 24"
                                       fill="none"
                                       stroke="currentColor"
                                       stroke-width="2"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       class="feather feather-plus">
                                       <line x1="12" y1="5" x2="12" y2="19"></line>
                                       <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Add
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card card-product">
                        <div class="card-body">
                           <div class="text-center position-relative">
                              <div class="position-absolute top-0 start-0">
                                 <span class="badge bg-danger">Sale</span>
                              </div>
                              <a href="#!"><img src="plantilla/assets/images/products/product-img-6.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                              <div class="card-product-action">
                                 <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                 </a>
                                 <a href="plantilla/temps/shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                 <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                              </div>
                           </div>
                           <div class="text-small mb-1">
                              <a href="#!" class="text-decoration-none text-muted"><small>Dairy, Bread & Eggs</small></a>
                           </div>
                           <h2 class="fs-6"><a href="plantilla/temps/shop-single.html" class="text-inherit text-decoration-none">Blueberry Greek Yogurt</a></h2>
                           <div>
                              <small class="text-warning">
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-half"></i>
                              </small>
                              <span class="text-muted small">4.5 (189)</span>
                           </div>
                           <div class="d-flex justify-content-between align-items-center mt-3">
                              <div>
                                 <span class="text-dark">$18</span>
                                 <span class="text-decoration-line-through text-muted">$24</span>
                              </div>
                              <div>
                                 <a href="#!" class="btn btn-primary btn-sm">
                                    <svg
                                       xmlns="http://www.w3.org/2000/svg"
                                       width="16"
                                       height="16"
                                       viewBox="0 0 24 24"
                                       fill="none"
                                       stroke="currentColor"
                                       stroke-width="2"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       class="feather feather-plus">
                                       <line x1="12" y1="5" x2="12" y2="19"></line>
                                       <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Add
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card card-product">
                        <div class="card-body">
                           <div class="text-center position-relative">
                              <a href="plantilla/temps/shop-single.html"><img src="plantilla/assets/images/products/product-img-7.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                              <div class="card-product-action">
                                 <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                 </a>
                                 <a href="plantilla/temps/shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                 <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                              </div>
                           </div>
                           <div class="text-small mb-1">
                              <a href="#!" class="text-decoration-none text-muted"><small>Dairy, Bread & Eggs</small></a>
                           </div>
                           <h2 class="fs-6"><a href="plantilla/temps/shop-single.html" class="text-inherit text-decoration-none">Britannia Cheese Slices</a></h2>
                           <div class="text-warning">
                              <small>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                              </small>
                              <span class="text-muted small">5 (345)</span>
                           </div>
                           <div class="d-flex justify-content-between align-items-center mt-3">
                              <div><span class="text-dark">$24</span></div>
                              <div>
                                 <a href="#!" class="btn btn-primary btn-sm">
                                    <svg
                                       xmlns="http://www.w3.org/2000/svg"
                                       width="16"
                                       height="16"
                                       viewBox="0 0 24 24"
                                       fill="none"
                                       stroke="currentColor"
                                       stroke-width="2"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       class="feather feather-plus">
                                       <line x1="12" y1="5" x2="12" y2="19"></line>
                                       <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Add
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card card-product">
                        <div class="card-body">
                           <div class="text-center position-relative">
                              <a href="plantilla/temps/shop-single.html"><img src="plantilla/assets/images/products/product-img-8.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                              <div class="card-product-action">
                                 <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                 </a>
                                 <a href="plantilla/temps/shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                 <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                              </div>
                           </div>
                           <div class="text-small mb-1">
                              <a href="#!" class="text-decoration-none text-muted"><small>Instant Food</small></a>
                           </div>
                           <h2 class="fs-6"><a href="plantilla/temps/shop-single.html" class="text-inherit text-decoration-none">Kellogg's Original Cereals</a></h2>
                           <div class="text-warning">
                              <small>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-half"></i>
                              </small>
                              <span class="text-muted small">4 (90)</span>
                           </div>
                           <div class="d-flex justify-content-between align-items-center mt-3">
                              <div>
                                 <span class="text-dark">$32</span>
                                 <span class="text-decoration-line-through text-muted">$35</span>
                              </div>
                              <div>
                                 <a href="#!" class="btn btn-primary btn-sm">
                                    <svg
                                       xmlns="http://www.w3.org/2000/svg"
                                       width="16"
                                       height="16"
                                       viewBox="0 0 24 24"
                                       fill="none"
                                       stroke="currentColor"
                                       stroke-width="2"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       class="feather feather-plus">
                                       <line x1="12" y1="5" x2="12" y2="19"></line>
                                       <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Add
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card card-product">
                        <div class="card-body">
                           <div class="text-center position-relative">
                              <a href="plantilla/temps/shop-single.html"><img src="plantilla/assets/images/products/product-img-9.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                              <div class="card-product-action">
                                 <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                 </a>
                                 <a href="plantilla/temps/shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                 <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                              </div>
                           </div>
                           <div class="text-small mb-1">
                              <a href="#!" class="text-decoration-none text-muted"><small>Snack & Munchies</small></a>
                           </div>
                           <h2 class="fs-6"><a href="plantilla/temps/shop-single.html" class="text-inherit text-decoration-none">Slurrp Millet Chocolate</a></h2>
                           <div class="text-warning">
                              <small>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-half"></i>
                              </small>
                              <span class="text-muted small">4.5 (67)</span>
                           </div>
                           <div class="d-flex justify-content-between align-items-center mt-3">
                              <div>
                                 <span class="text-dark">$3</span>
                                 <span class="text-decoration-line-through text-muted">$5</span>
                              </div>
                              <div>
                                 <a href="#!" class="btn btn-primary btn-sm">
                                    <svg
                                       xmlns="http://www.w3.org/2000/svg"
                                       width="16"
                                       height="16"
                                       viewBox="0 0 24 24"
                                       fill="none"
                                       stroke="currentColor"
                                       stroke-width="2"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       class="feather feather-plus">
                                       <line x1="12" y1="5" x2="12" y2="19"></line>
                                       <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Add
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card card-product">
                        <div class="card-body">
                           <div class="text-center position-relative">
                              <a href="plantilla/temps/shop-single.html"><img src="plantilla/assets/images/products/product-img-10.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                              <div class="card-product-action">
                                 <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                 </a>
                                 <a href="plantilla/temps/shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                 <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                              </div>
                           </div>
                           <div class="text-small mb-1">
                              <a href="#!" class="text-decoration-none text-muted"><small>Dairy, Bread & Eggs</small></a>
                           </div>
                           <h2 class="fs-6"><a href="plantilla/temps/shop-single.html" class="text-inherit text-decoration-none">Amul Butter - 500 g</a></h2>
                           <div class="text-warning">
                              <small>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-half"></i>
                                 <i class="bi bi-star"></i>
                              </small>
                              <span class="text-muted small">3.5 (89)</span>
                           </div>
                           <div class="d-flex justify-content-between mt-4">
                              <div>
                                 <span class="text-dark">$13</span>
                                 <span class="text-decoration-line-through text-muted">$18</span>
                              </div>
                              <div>
                                 <a href="#!" class="btn btn-primary btn-sm">
                                    <svg
                                       xmlns="http://www.w3.org/2000/svg"
                                       width="16"
                                       height="16"
                                       viewBox="0 0 24 24"
                                       fill="none"
                                       stroke="currentColor"
                                       stroke-width="2"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       class="feather feather-plus">
                                       <line x1="12" y1="5" x2="12" y2="19"></line>
                                       <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Add
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Popular Products End-->
         <section>
            <div class="container">
               <div class="row">
                  <div class="col-md-12 mb-6">
                     <h3 class="mb-0">Daily Best Sells</h3>
                  </div>
               </div>
               <div class="table-responsive-xl pb-6">
                  <div class="row row-cols-lg-4 row-cols-1 row-cols-md-2 g-4 flex-nowrap">
                     <div class="col">
                        <div class="pt-8 px-6 px-xl-8 rounded" style="background: url(plantilla/assets/images/banner/banner-deal.jpg) no-repeat; background-size: cover; height: 470px">
                           <div>
                              <h3 class="fw-bold text-white">100% Organic Coffee Beans.</h3>
                              <p class="text-white">Get the best deal before close.</p>
                              <a href="#!" class="btn btn-primary">
                                 Shop Now
                                 <i class="feather-icon icon-arrow-right ms-1"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="card card-product">
                           <div class="card-body">
                              <div class="text-center position-relative">
                                 <a href="plantilla/temps/shop-single.html"><img src="plantilla/assets/images/products/product-img-11.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>

                                 <div class="card-product-action">
                                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                       <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                    </a>
                                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                 </div>
                              </div>
                              <div class="text-small mb-1">
                                 <a href="#!" class="text-decoration-none text-muted"><small>Tea, Coffee & Drinks</small></a>
                              </div>
                              <h2 class="fs-6"><a href="plantilla/temps/shop-single.html" class="text-inherit text-decoration-none">Roast Ground Coffee</a></h2>

                              <div class="d-flex justify-content-between align-items-center mt-3">
                                 <div>
                                    <span class="text-dark">$13</span>
                                    <span class="text-decoration-line-through text-muted">$18</span>
                                 </div>
                                 <div>
                                    <small class="text-warning">
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-half"></i>
                                    </small>
                                    <span><small>4.5</small></span>
                                 </div>
                              </div>
                              <div class="d-grid mt-2">
                                 <a href="#!" class="btn btn-primary">
                                    <svg
                                       xmlns="http://www.w3.org/2000/svg"
                                       width="16"
                                       height="16"
                                       viewBox="0 0 24 24"
                                       fill="none"
                                       stroke="currentColor"
                                       stroke-width="2"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       class="feather feather-plus">
                                       <line x1="12" y1="5" x2="12" y2="19"></line>
                                       <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Add to cart
                                 </a>
                              </div>
                              <div class="d-flex justify-content-start text-center mt-3">
                                 <div class="deals-countdown w-100" data-countdown="2028/10/10 00:00:00"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="card card-product">
                           <div class="card-body">
                              <div class="text-center position-relative">
                                 <a href="plantilla/temps/shop-single.html"><img src="plantilla/assets/images/products/product-img-12.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                 <div class="card-product-action">
                                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                       <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                    </a>
                                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                 </div>
                              </div>
                              <div class="text-small mb-1">
                                 <a href="#!" class="text-decoration-none text-muted"><small>Fruits & Vegetables</small></a>
                              </div>
                              <h2 class="fs-6"><a href="plantilla/temps/shop-single.html" class="text-inherit text-decoration-none">Crushed Tomatoes</a></h2>
                              <div class="d-flex justify-content-between align-items-center mt-3">
                                 <div>
                                    <span class="text-dark">$13</span>
                                    <span class="text-decoration-line-through text-muted">$18</span>
                                 </div>
                                 <div>
                                    <small class="text-warning">
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-half"></i>
                                    </small>
                                    <span><small>4.5</small></span>
                                 </div>
                              </div>
                              <div class="d-grid mt-2">
                                 <a href="#!" class="btn btn-primary">
                                    <svg
                                       xmlns="http://www.w3.org/2000/svg"
                                       width="16"
                                       height="16"
                                       viewBox="0 0 24 24"
                                       fill="none"
                                       stroke="currentColor"
                                       stroke-width="2"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       class="feather feather-plus">
                                       <line x1="12" y1="5" x2="12" y2="19"></line>
                                       <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Add to cart
                                 </a>
                              </div>
                              <div class="d-flex justify-content-start text-center mt-3 w-100">
                                 <div class="deals-countdown w-100" data-countdown="2028/12/9 00:00:00"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="card card-product">
                           <div class="card-body">
                              <div class="text-center position-relative">
                                 <a href="plantilla/temps/shop-single.html"><img src="plantilla/assets/images/products/product-img-13.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                 <div class="card-product-action">
                                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                       <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                    </a>
                                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                 </div>
                              </div>
                              <div class="text-small mb-1">
                                 <a href="#!" class="text-decoration-none text-muted"><small>Fruits & Vegetables</small></a>
                              </div>
                              <h2 class="fs-6"><a href="plantilla/temps/shop-single.html" class="text-inherit text-decoration-none">Golden Pineapple</a></h2>
                              <div class="d-flex justify-content-between align-items-center mt-3">
                                 <div>
                                    <span class="text-dark">$13</span>
                                    <span class="text-decoration-line-through text-muted">$18</span>
                                 </div>
                                 <div>
                                    <small class="text-warning">
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-half"></i>
                                    </small>
                                    <span><small>4.5</small></span>
                                 </div>
                              </div>
                              <div class="d-grid mt-2">
                                 <a href="#!" class="btn btn-primary">
                                    <svg
                                       xmlns="http://www.w3.org/2000/svg"
                                       width="16"
                                       height="16"
                                       viewBox="0 0 24 24"
                                       fill="none"
                                       stroke="currentColor"
                                       stroke-width="2"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       class="feather feather-plus">
                                       <line x1="12" y1="5" x2="12" y2="19"></line>
                                       <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Add to cart
                                 </a>
                              </div>
                              <div class="d-flex justify-content-start text-center mt-3">
                                 <div class="deals-countdown w-100" data-countdown="2028/11/11 00:00:00"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="my-lg-14 my-8">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 col-lg-3">
                     <div class="mb-8 mb-xl-0">
                        <div class="mb-6"><img src="plantilla/assets/images/icons/clock.svg" alt="" /></div>
                        <h3 class="h5 mb-3">10 minute grocery now</h3>
                        <p>Get your order delivered to your doorstep at the earliest from FreshCart pickup stores near you.</p>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="mb-8 mb-xl-0">
                        <div class="mb-6"><img src="plantilla/assets/images/icons/gift.svg" alt="" /></div>
                        <h3 class="h5 mb-3">Best Prices & Offers</h3>
                        <p>Cheaper prices than your local supermarket, great cashback offers to top it off. Get best pricess & offers.</p>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="mb-8 mb-xl-0">
                        <div class="mb-6"><img src="plantilla/assets/images/icons/package.svg" alt="" /></div>
                        <h3 class="h5 mb-3">Wide Assortment</h3>
                        <p>Choose from 5000+ products across food, personal care, household, bakery, veg and non-veg & other categories.</p>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="mb-8 mb-xl-0">
                        <div class="mb-6"><img src="plantilla/assets/images/icons/refresh-cw.svg" alt="" /></div>
                        <h3 class="h5 mb-3">Easy Returns</h3>
                        <p>
                           Not satisfied with a product? Return it at the doorstep & get a refund within hours. No questions asked
                           <a href="#!">policy</a>
                           .
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>

      <!-- Modal -->
<div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body p-8">
        <div class="position-absolute top-0 end-0 me-3 mt-3">
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <!-- img slide -->
            <div class="product productModal" id="productModal">
              <div
                class="zoom"
                onmousemove="zoom(event)"
                style="
                  background-image: url(plantilla/assets/images/products/product-single-img-1.jpg);
                "
              >
                <!-- img -->
                <img
                  src="plantilla/assets/images/products/product-single-img-1.jpg"
                  alt=""
            >
              </div>
              <div>
                <div
                  class="zoom"
                  onmousemove="zoom(event)"
                  style="
                    background-image: url(plantilla/assets/images/products/product-single-img-2.jpg);
                  "
                >
                  <!-- img -->
                  <img
                    src="plantilla/assets/images/products/product-single-img-2.jpg"
                    alt=""
              >
                </div>
              </div>
              <div>
                <div
                  class="zoom"
                  onmousemove="zoom(event)"
                  style="
                    background-image: url(plantilla/assets/images/products/product-single-img-3.jpg);
                  "
                >
                  <!-- img -->
                  <img
                    src="plantilla/assets/images/products/product-single-img-3.jpg"
                    alt=""
              >
                </div>
              </div>
              <div>
                <div
                  class="zoom"
                  onmousemove="zoom(event)"
                  style="
                    background-image: url(plantilla/assets/images/products/product-single-img-4.jpg);
                  "
                >
                  <!-- img -->
                  <img
                    src="plantilla/assets/images/products/product-single-img-4.jpg"
                    alt=""
              >
                </div>
              </div>
            </div>
            <!-- product tools -->
            <div class="product-tools">
              <div class="thumbnails row g-3" id="productModalThumbnails">
                <div class="col-3" class="tns-nav-active">
                  <div class="thumbnails-img">
                    <!-- img -->
                    <img
                      src="plantilla/assets/images/products/product-single-img-1.jpg"
                      alt=""
                >
                  </div>
                </div>
                <div class="col-3">
                  <div class="thumbnails-img" >
                    <!-- img -->
                    <img
                      src="plantilla/assets/images/products/product-single-img-2.jpg"
                      alt=""
                >
                  </div>
                </div>
                <div class="col-3">
                  <div class="thumbnails-img">
                    <!-- img -->
                    <img
                      src="plantilla/assets/images/products/product-single-img-3.jpg"
                      alt=""
                >
                  </div>
                </div>
                <div class="col-3">
                  <div class="thumbnails-img">
                    <!-- img -->
                    <img
                      src="plantilla/assets/images/products/product-single-img-4.jpg"
                      alt=""
                >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="ps-lg-8 mt-6 mt-lg-0">
              <a href="#!" class="mb-4 d-block">Bakery Biscuits</a>
              <h2 class="mb-1 h1">Napolitanke Ljesnjak</h2>
              <div class="mb-4">
                <small class="text-warning">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i></small
                ><a href="#" class="ms-2">(30 reviews)</a>
              </div>
              <div class="fs-4">
                <span class="fw-bold text-dark">$32</span>
                <span class="text-decoration-line-through text-muted">$35</span
                ><span
                  ><small class="fs-6 ms-2 text-danger">26% Off</small></span
                >
              </div>
              <hr class="my-6">
              <div class="mb-4">
                <button type="button" class="btn btn-outline-secondary">
                  250g
                </button>
                <button type="button" class="btn btn-outline-secondary">
                  500g
                </button>
                <button type="button" class="btn btn-outline-secondary">
                  1kg
                </button>
              </div>
              <div>
                <!-- input -->
                <!-- input -->
                <div class="input-group input-spinner  ">
                  <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                  <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input   ">
                  <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                </div>
              </div>
              <div
                class="mt-3 row justify-content-start g-2 align-items-center"
              >

                <div class="col-lg-4 col-md-5 col-6 d-grid">
                  <!-- button -->
                  <!-- btn -->
                  <button type="button" class="btn btn-primary">
                    <i class="feather-icon icon-shopping-bag me-2"></i>Add to
                    cart
                  </button>
                </div>
                <div class="col-md-4 col-5">
                  <!-- btn -->
                  <a
                    class="btn btn-light"
                    href="#"
                    data-bs-toggle="tooltip"
                    data-bs-html="true"
                    aria-label="Compare"
                    ><i class="bi bi-arrow-left-right"></i
                  ></a>
                  <a
                    class="btn btn-light"
                    href="#!"
                    data-bs-toggle="tooltip"
                    data-bs-html="true"
                    aria-label="Wishlist"
                    ><i class="feather-icon icon-heart"></i
                  ></a>
                </div>
              </div>
              <hr class="my-6">
              <div>
                <table class="table table-borderless">
                  <tbody>
                    <tr>
                      <td>Product Code:</td>
                      <td>FBB00255</td>
                    </tr>
                    <tr>
                      <td>Availability:</td>
                      <td>In Stock</td>
                    </tr>
                    <tr>
                      <td>Type:</td>
                      <td>Fruits</td>
                    </tr>
                    <tr>
                      <td>Shipping:</td>
                      <td>
                        <small
                          >01 day shipping.<span class="text-muted"
                            >( Free pickup today)</span
                          ></small
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 <!-- footer -->
<footer class="footer">
  <div class="container">
    <div class="row g-4 py-4">
      <div class="col-12 col-md-12 col-lg-4">
        <h6 class="mb-4">Categories</h6>
        <div class="row">
          <div class="col-6">
            <!-- list -->
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Vegetables & Fruits</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Breakfast & instant food</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Bakery & Biscuits</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Atta, rice & dal</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Sauces & spreads</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Organic & gourmet</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Baby care</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Cleaning essentials</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Personal care</a></li>
            </ul>
          </div>
          <div class="col-6">
              <!-- list -->
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Dairy, bread & eggs</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Cold drinks & juices</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Tea, coffee & drinks</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Masala, oil & more</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Chicken, meat & fish</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Paan corner</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Pharma & wellness</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Home & office</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Pet care</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-8">
        <div class="row g-4">
          <div class="col-6 col-sm-6 col-md-3">
            <h6 class="mb-4">Get to know us</h6>
              <!-- list -->
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Company</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">About</a></li>
              <li class="nav-item mb-2"><a href="#1" class="nav-link">Blog</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Help Center</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Our Value</a></li>
            </ul>
          </div>
          <div class="col-6 col-sm-6 col-md-3">
            <h6 class="mb-4">For Consumers</h6>
            <ul class="nav flex-column">
                  <!-- list -->
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Payments</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Shipping</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Product Returns</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">FAQ</a></li>
              <li class="nav-item mb-2"><a href="plantilla/temps/shop-checkout.html" class="nav-link">Shop Checkout</a></li>
            </ul>
          </div>
          <div class="col-6 col-sm-6 col-md-3">
            <h6 class="mb-4">Become a Shopper</h6>
            <ul class="nav flex-column">
                <!-- list -->
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Shopper Opportunities</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Become a Shopper</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Earnings</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Ideas & Guides</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">New Retailers</a></li>
            </ul>
          </div>
          <div class="col-6 col-sm-6 col-md-3">
            <h6 class="mb-4">Freshcart programs</h6>
            <ul class="nav flex-column">
                <!-- list -->
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Freshcart programs</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Gift Cards</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Promos & Coupons</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Freshcart Ads</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Careers</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="border-top py-4">
      <div class="row align-items-center">
        <div class="col-lg-5 text-lg-start text-center mb-2 mb-lg-0">
          <ul class="list-inline mb-0">
            <li class="list-inline-item text-dark">Payment Partners</li>
            <li class="list-inline-item">
              <a href="#!"><img src="plantilla/assets/images/payment/amazonpay.svg" alt=""></a>
            </li>
            <li class="list-inline-item">
              <a href="#!"><img src="plantilla/assets/images/payment/american-express.svg" alt=""></a>
            </li>
            <li class="list-inline-item">
              <a href="#!"><img src="plantilla/assets/images/payment/mastercard.svg" alt=""></a>
            </li>
            <li class="list-inline-item">
              <a href="#!"><img src="plantilla/assets/images/payment/paypal.svg" alt=""></a>
            </li>
            <li class="list-inline-item">
              <a href="#!"><img src="plantilla/assets/images/payment/visa.svg" alt=""></a>
            </li>
          </ul>
        </div>
        <div class="col-lg-7 mt-4 mt-md-0">
          <ul class="list-inline mb-0 text-lg-end text-center">
            <li class="list-inline-item mb-2 mb-md-0 text-dark">Get deliveries with FreshCart</li>
            <li class="list-inline-item ms-4">
              <a href="#!"> <img src="plantilla/assets/images/appbutton/appstore-btn.svg" alt=""
                  style="width: 140px;"></a></li>
            <li class="list-inline-item">
              <a href="#!"> <img src="plantilla/assets/images/appbutton/googleplay-btn.svg" alt=""
                  style="width: 140px;"></a></li>
          </ul>
        </div>
      </div>

    </div>
    <div class="border-top py-4">
      <div class="row align-items-center">
        <div class="col-md-6"><span class="small text-muted">© 2022 <span id="copyright"> -
          <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>
      </span>FreshCart eCommerce HTML Template.  All rights reserved. Powered by <a href="https://codescandy.com/">Codescandy</a>.</span></div>
        <div class="col-md-6">
          <ul class="list-inline text-md-end mb-0 small mt-3 mt-md-0">
            <li class="list-inline-item text-muted">Follow us on</li>
            <li class="list-inline-item me-1">
              <a href="#!" class="btn btn-xs btn-social btn-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-facebook" viewBox="0 0 16 16">
                  <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg></a></li>
            <li class="list-inline-item me-1">
              <a href="#!" class="btn btn-xs btn-social btn-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-twitter" viewBox="0 0 16 16">
                  <path
                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                </svg></a></li>
            <li class="list-inline-item">
              <a href="#!" class="btn btn-xs btn-social btn-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-instagram" viewBox="0 0 16 16">
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg></a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</footer>

      <!-- Javascript-->

      <!-- Libs JS -->
<!-- <script src="./assets/libs/jquery/dist/jquery.min.js"></script> -->
<script src="plantilla/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="plantilla/assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="assets/js/theme.min.js"></script>

      <script src="plantilla/assets/js/vendors/jquery.min.js"></script>
      <script src="plantilla/assets/js/vendors/countdown.js"></script>
      <script src="plantilla/assets/libs/slick-carousel/slick/slick.min.js"></script>
      <script src="plantilla/assets/js/vendors/slick-slider.js"></script>
      <script src="plantilla/assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
      <script src="plantilla/assets/js/vendors/tns-slider.js"></script>
      <script src="plantilla/assets/js/vendors/zoom.js"></script>

      <style>

.card-product-v2{


}

.card-product-v2:hover{
   border:1px solid #c3b722 !important;
   
}

.card-product-v2:focus{
   border:1px solid #c3b722 !important;
   
}

      </style>
   </body>

<!-- Mirrored from freshcart.codescandy.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Feb 2024 03:18:49 GMT -->
</html>
