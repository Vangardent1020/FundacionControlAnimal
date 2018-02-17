<!DOCTYPE HTML>
<html lang="Es">
<head>
	<meta charset="UTF-8">
	<title>¿Cómo ayudar?</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- meta's advertement -->
	
	<!-- favicon -->
	<link rel="icon" href="../img/html/favicon.ico">	
	<!-- sección hojas de estilo framework -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" media="all">
	<link rel="stylesheet" type="text/css" href="../css/normalize.min.css" media="all">
	<link rel="stylesheet" type="text/css" href="../css/material.min.css" media="all">
	<link rel="stylesheet" type="text/css" href="../css/loader_page.css" media="all">
	<!-- hoja de estilo pagina -->
	<link rel="stylesheet" type="text/css" href="../css/como_ayudar.css" media="all">
	<!-- Sección fuentes -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet">
	<!-- Sección de iconos -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- seccion javascript -->
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/loader_page.js"></script>
	
</head>
<body>}
	<!-- --------------------------------------------------------------------------------------------------- -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<span id="loadpage">
						<div id="loader">
							<object><embed width="20%" src="../img/html/fundacion_loader.gif"></object>
						</div>
					</span>
				</div>
			</div>
		</div>
	<!-- ----------------------------------------------------------------------------------------------------- -->	
	<div class="container-fluid">
		<header>
			<div class="row">						
				<nav class="navbar navbar-default navbar-fixed-top">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse" id="menu">
							<ul class="nav navbar-nav">
								<li><a href="../home.html">Inicio</a></li>
								<li><a href="../quienes_somos.html">¿Quíenes somos?</a></li>
								<li ><a href="../como_lo_hacemos.html">¿Comó lo hacemos?</a></li>
								<li class="active"><a href="../como_ayudar.html">¿Comó ayudar?<span class="sr-only">(current)</span></a></li>
							</ul>						
						</div>
					</div>											
				</nav>							
			</div>
		</header>
	</div>
	
	<!-- ----------------------------------------------------------------------------------------------------- -->
	
	<div class="container">
		<main>
			<div class="row">
				<section id="contribucion">
					<div class="col-xs-12 col-sm-6">
						<div class="demo-card-wide mdl-card mdl-shadow--2dp" align="center">
							<h1>Contribuciones </h1>
							<p class="text-center">
								Podrás contribuir monetariamente o realizando donaciones de otros tipos
							</p>
							<p class="text-center">
								Diligencia el siguiente formulario contandonos tu contribución
							</p>
							
							<div class="form-group">							
								<!-- Button modal formulario -->
								<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalcontribution">Formulario</button>
								<!-- button contribución -->
								<button class="btn btn-default" type="button">Contribución</button>		
							</div>							
						</div>	
						<!-- Modal -->
						<div class="modal fade" id="modalcontribution" tabindex="-1" role="dialog" aria-labelledby="form_contribution">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="form_contribution" align="center">Formato de contribuciones Fundación Control Animal</h4>
									</div>

									<div class="modal-body">
										<?php 									
											
											$myemail = 'pardalispublicidad@gmail.com';											
											$name_person = $_POST['nom_person'];												
											$nom_empre = $_POST['nom_empre'];
											$nit_empre = $_POST['nit_empre'];
											$address = $_POST['direc'];
											$country = $_POST['pais'];
											$city = $_POST['ciudad'];
											$phone = $_POST['tel'];
											$electro = $_POST['elctro'];
											$nom_element = $_POST['nom_elemento'];
											$description_element = $_POST['descrip_elemento'];
											$cantidad_element = $_POST['canti_elemento'] . $_POST[valor_canti_elemento];
											$date_element = $_POST['date_elemento'];
											$wait_element = $_POST['wait_elemento'];
											$send_element = $_POST['send_elemento'];
											
											
											$to = $myemail;										
											$email_subject = "Formulario de contribuciones" ;
											$email_body = "Haz recibido una nueva contribución. \n direccion: $address ";
											
											mail($to, $email_subject, $email_body, $headers);

										?>																					
										<form id="Formato_de_contri" method="post" action="enviar_formulario.php" >
										
											<div class="form-group">											
												
												<div align="center">
													<h4 class="subtitle">Esta contribución se realiza a nombre de:</h4>
													<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#contri_personal" aria-expanded="false" aria-controls="contri_personal">Personal</button>
													<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#contri_empresa" aria-expanded="false" aria-controls="contri_empresa">Empresarial</button>
												</div>
												
												<!-- button_donaciones_personales -->
												<div class="collapse" id="contri_personal">
													<div class="well">
														<form>
															<div class="form-group">
																<label for="name">Nombre completo</label>
																<input type="text" autocomplete="name" class="form-control" id="name" placeholder="Escriba su nombre y apellido" name="nom_person">
															</div>																											
														</form>
													</div>
												</div>
												
												<!-- button_donaciones_empresariales -->												
												<div class="collapse" id="contri_empresa">
													<div class="well">
														<form>
															<div class="form-group">
																<label for="name_company">Nombre de la empresa</label>
																<input type="text" autocomplete="organization" class="form-control" id="name_company" placeholder="Escriba el nombre de la empresa" name="nom_empre">
															</div>
															<div class="form-group">
																<label for="nit">NIT de la empresa</label>
																<input type="text" class="form-control" id="nit" placeholder="Digite en NIT de la empresa" name="nit_empre">
															</div>															
														</form>
													</div>
												</div>												
											</div>
										
											<div class="form-group">
												<label for="address">Dirección</label>
												<input type="text" autocomplete="street-address" class="form-control" id="address" placeholder="Escriba una dirección" name="direc">
											</div>
											<div class="form-group">
												<label for="country">País</label>
												<input type="text" autocomplete="country" class="form-control" id="country" placeholder="Escriba un pais" name="pais">
											</div>
											<div class="form-group">
												<label for="city">Ciudad</label>
												<input type="text" class="form-control" id="city" placeholder="Escriba una ciudad" name="ciudad">
											</div>
											<div class="form-group">
												<label for="phone">Teléfono</label>
												<input type="tel" autocomplete="tel" class="form-control" id="phone" placeholder="Escriba un número de teléfono" name="tel">
											</div>
											<div class="form-group">
												<label for="email">Correo electrónico</label>
												<input type="email" autocomplete="email" class="form-control" id="email" placeholder="Escriba un correo electronico" name="elctro">
											</div>
											
										        <div class="thanks" align="center">
												<h4 class="subtitle">Felicitaciones</h4>
												<p>Con tu contribución ya haces parte de la solución, continuaremos con nuestra misión</p>
											</div>																		
											<div class="contribution">
												<h4 class="subtitle" align="center">Descripción de la contribución</h4>
												<div class="form-group">
													<label for="name_contri">Nombre del elemento</label>
													<input type="text" class="form-control" id="name_contri" placeholder="Escriba el nombre del elemento" name="nom_elemento">
												</div>
												<div class="form-group">
													<label for="descri_contri">Descripción del elemento</label>
													<input type="text" class="form-control" id="descri_contri" placeholder="Escriba una breve descripción del elemento" name="descrip_elemento">
												</div>
												<div class="form-group">
													<label for="canti_contri">Cantidad del elemento</label>
														<div class="input-group" id="cant">												
															<input type="number" class="form-control" id="canti_contri" placeholder="Escriba la cantidad total del elemento" name="canti_elemento">														
															<select class="form-control" name="valor_canti_elemento">
																<option>u/n</option>
																<option>Kg</option>
																<option>Lb</option>															
															</select>																																																																																				
														</div>
												</div>
												<div class="form-group">
													<label for="day_contri">Fecha que se realizara la contribución</label>
													<input type="date" class="form-control" id="day_contri" placeholder="Escriba el día en la cual se realizara la contribución" name="date_elemento">
												</div>
												<div class="form-group">
													<div class="checkbox">
														<label for="llevar" class="checkbox-inline">
															<input type="checkbox" id="llevar" name="wait_elemento">
															Lo esperamos.
														</label>																									
														<label for="recogida" class="checkbox-inline">
															<input type="checkbox" id="recogida" name="send_elemento">
															Lo recogemos.
														</label>													
													</div>
												</div>
											</div>
											
										</form>	
									</div>
									
									<div class="modal-footer">
										<button type="summit" class="btn btn-default" form="Formato_de_contri">Enviar</button>
										<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
										
									</div>

									
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6">
						<div class="demo-card-wide mdl-card mdl-shadow--2dp" align="center">
							<h1>Voluntariado</h1>
							<p class="text-center">
								Buscamos personas que puedan ayudar encontrando hogares amables y amorosos para los que no cuentan con uno, también buscamos personas que puedan brindar refugio a los animalitos que acaban de tener su esterilización y que no cuentan con alguien que los cuide mientras se recuperan. 
							</p>															
						</div>					
					</div>								
				</section>
			</div>
			<div class="row">
				<section id="formulario">
					<div class="col-xs-12">
						<div class="demo-card-wide mdl-card mdl-shadow--2dp" align="center">
							<div class="row">							
								
								<form class="form-horizontal" method="post" action="../php/enviar.php">
									<div class="col-md-6">
										<div class="form_1">										
											<div class="form-group">
												<label for="email" class="col-sm-2 control-label">Email</label>
												<div class="col-sm-10">
													<input type="email" class="form-control" id="email" name="email" placeholder="Escriba su correo electronico">
												</div>
											</div>
											<div class="form-group">
												<label for="name" class="col-sm-2 control-label">Nombre</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="name" name="name" placeholder="Escriba su nombre">
												</div>
											</div>
											<div class="form-group">
												<label for="affair" class="col-sm-2 control-label">Asunto</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="affair" name="affair">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form_2">
											<div class="form-group">						
												<textarea class="form-control" id="question" name="question" placeholder="Escribe tu pregunta"></textarea>								
											</div>
											<div class="form-group">						
												<button type="summit" class="btn btn-default">Enviar</button>						
											</div>											
										</div>
									</div>							
								</form>	
							</div>	
						</div>					
					</div>					
				</section>
			</div>			
		</main>
	</div>
	<!-- ----------------------------------------------------------------------------------------------------- -->
	
	<div class="container-fluid">
		<footer>
			<div class="row">
				<div class="bar_footer">
					<div class="container">
						<ul class="col-xs-12 col-sm-4 menu_footer" align="center">
							<li><a href="home.html">Inicio</a></li>
							<li><a href="quienes_somos.html">¿Quíenes somos?</a></li>
							<li><a href="como_lo_hacemos.html">¿Comó lo hacemos?</a></li>
							<li><a href="como_ayudar.html">¿Comó ayudar?</a></li>
						</ul>
						
						<div class="col-xs-12 col-sm-4 datos" align="center">
							<address>
								<i class="material-icons md-18">place</i> Calle 86 # 95F - 44<br>
								<i class="material-icons md-18">local_phone</i> 311-6351390<br>
								<i class="material-icons md-18">local_phone</i> 320-413145<br>
								<i class="material-icons md-18">local_phone</i> 310-2260407<br>
								<i class="material-icons md-18">local_post_office</i> <a href="mailto:pardalispublicidad@gmail.com">fundacióncontrolanimal@gmail.com</a><br>
								<i class="material-icons md-18">map</i> Bogotá D.C, Colombia
							</address>														
						</div>
						
						<div class=" col -xs-12 col-sm-4 redes">
							<p>Síguenos en nuestras redes sociales</p>
							<div class="social" align="center">
								<div class="youtube"><object><embed src="../img/youtube.svg" width="20%"/></object></div>
								<div class="facebook"><object><embed src="../img/facebook.svg" width="20%"/></object></div>
							</div>																					
						</div>			
					</div>
				</div>				
			</div>			
		</footer>
	</div>
	
	<!-- ----------------------------------------------------------------------------------------------------- -->
	<!--seccion de scripts-->
	<script type="text/javascript" src="../js/material.min.js"></script>	
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>

</body>
</html>

