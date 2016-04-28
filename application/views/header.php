<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Vilage Green</title>
	<link rel="stylesheet" href="<?=base_url("assets/css/bootstrap.min.css")?>">
	<link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
</head>
<body>
	<div class="container">
		<header id="headerGreen" class="row">
			<div class="col-md-offset-1 col-md-8">
			<img class="center-block" src="<?=base_url("assets/img/logo.png")?>" alt="Logo village green">
			</div>
			<aside id="asideHeader" class="col-md-2 hidden-sm hidden-xs">
				<a href="#" class="text-center"><div>Panier <span class="glyphicon glyphicon-shopping-cart"></span></div></a>
				<a href="#" class="text-center"><div id="mid">Contact  <span class="glyphicon glyphicon-envelope"></span></div></a>
				<a href="#"><div class="text-center"><input id="searchAside" type="search" class="input-sm form-control" placeholder="Recherche"><span class="glyphicon glyphicon-search"></span></div></a>   			
			</aside>
		</header>
		<div class="row">
			<div id="divNav" class="col-md-offset-1 col-md-10">
				<nav id="navGreen" class="navbar navbar-default">
					<div class="container-fluid">
				        <div class="navbar-header">
				            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				              <span class="sr-only">Toggle navigation</span>
				              <span class="icon-bar"></span>
				              <span class="icon-bar"></span>
				              <span class="icon-bar"></span>
				            </button>
				        </div>
				        <div id="navbar" class="navbar-collapse collapse">
				            <ul class="nav navbar-nav">
					            <li><a href="<?=site_url('green/accueil')?>">Accueil</a></li>
					            <li><a href="<?=site_url('green/catalogue')?>">Catalogue</a></li>
					            <li><a href="<?=site_url('green/contact')?>">Contact</a></li>
					            <li><a href="#">Suivez-nous</a></li>
				            </ul>
				            <ul id="btnEspaceClient" class="nav navbar-nav navbar-right">
				            	<div id="menuEspaceClient" class="hidden-xs">
									<form>
										<div class="form-group">
											<label>Etes-vous déjà client chez nous ?</label>
											<input class="form-control" type="email" name="user_email" placeholder="Adresse e-mail" />
											<input class="form-control" type="password" name="user_password" placeholder="Mot de passe" />
											<input class="btn btnform" type="button" name="btnConnexion" value="Se connecter" />
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" name="resterConnecter" /> Rester Connecté
											</label>
										</div>											
									</form>
									<a href="#">Vous avez oublié votre mot de passe ?</a>
									<hr />
									<a href="<?=site_url('green/inscription')?>"><button class="btn btnform">S'inscrire</button></a>
									<a href="#" class="text-center">Plus d'informations</a>
								</div> 
				              <li><a>Espace client</a></li>
				            </ul>     
				        </div>			    
				   </div>
				</nav>
			</div>
		</div>
	<div class="row">
		<section id="corpsSection" class="col-md-offset-1 col-md-10">