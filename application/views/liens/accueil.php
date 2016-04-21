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
			              <li><a href="#">Catalogue</a></li>
			              <li><a href="#">Contact</a></li>
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
								<button class="btn btnform">S'inscrire</button>
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
				<div class="row">
					<div id="divCar" class="hidden-xs">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
						    <ol class="carousel-indicators">
							    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							    <li data-target="#myCarousel" data-slide-to="1"></li>
							    <li data-target="#myCarousel" data-slide-to="2"></li>
						    </ol>
						    <div class="carousel-inner" role="listbox">
							    <div class="item active">
								    <img class="first-slide" src="<?=base_url("assets/img/visu-slider.png")?>" alt="First slide">	
								    <div class="carousel-caption">
								    <h1>Lorem Ipsum</h1>
								    <p>Lorem Ipsum</p>
								    </div>					        
							    </div>
							    <div class="item">
								    <img class="first-slide" src="<?=base_url("assets/img/visu-slider02.png")?>" alt="Second slide">
								    <div class="carousel-caption">
								    <h1>Lorem Ipsum</h1>
								    <p>Lorem Ipsum</p>
								    </div>						         
							    </div>
							    <div class="item">
								    <img class="first-slide" src="<?=base_url("assets/img/visu-slider03.png")?>" alt="Third slide">	
								    <div class="carousel-caption">
								    <h1>Lorem Ipsum</h1>
								    <p>Lorem Ipsum</p>
								    </div>					          
							    </div>						            
							    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							    </a>
							    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							    </a>
    						</div>
    						<hr />
						</div>					
					</div>
				</div>
				<div class="row">
					<div class="container"  id="row2">
						<div class="col-md-3 col-sm-6 col-xs-12 row2Div">
							<a href="#"><div id="nouveaute">
								<p class="captionImg text-center">Nouveautés</p>
							</div></a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 row2Div">
							<a href="#"><div id="promotions">
								<p class="captionImg text-center">Promotions</p>
							</div></a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 row2Div">
							<a href="#"><div id="meilleurVente">
								<p class="captionImg text-center">Meilleures ventes</p>
							</div></a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 row2Div">
							<a href="#"><div id="produitMoment">
								<p class="captionImg text-center">Produit du moment</p>
							</div></a>						
						</div>

						<div class="col-xs-12">
						<hr />
						</div>					
					</div>
				</div>
				<div id="row3" class="row">
					<h4>Nos catégories</h4>
						<div id="divLeft" class="col-xs-6">
							<ul id="categorie">
								<li><img src="<?=base_url("assets/img/icon_guitare.png")?>"><a href="#">Guitares & Basses</a></li>
								<li><img src="<?=base_url("assets/img/icon_baguettes.png")?>"><a href="#">Batteries & Percussions</a></li>
								<li><img src="<?=base_url("assets/img/icon_clavier.png")?>"><a href="#">Pianos & Claviers</a></li>
								<li><img src="<?=base_url("assets/img/icon_micro.png")?>"><a href="#">Studio & Enregistrement</a></li>
							</ul>
						</div>
						<div class="col-xs-6">
							<ul>
								<li><img src="<?=base_url("assets/img/icon_dj.png")?>"><a href="#">Matériel DJ</a></li>
								<li><img src="<?=base_url("assets/img/icon_vent.png")?>"><a href="#">Instruments à Vent</a></li>
								<li><img src="<?=base_url("assets/img/icon_instrutrad.png")?>"><a href="#">Instruments Traditionnels</a></li>
								<li><img src="<?=base_url("assets/img/icon_accessoires.png")?>"><a href="#">Accessoires</a></li>
							</ul>
						</div>																			
				</div>
				<div class="row">
					<div class col-xs-12>
						<hr id="hrRow3" />						
					</div>					
				</div>
				<div id="row4" class="row">
					<h4>Marques</h4>
					<div class="text-center" id="divMarques">
						<ul>
							<li><a href="#"><img src="<?=base_url('assets/img/fender.gif')?>"></a></li>
							<li><a href="#"><img src="<?=base_url('assets/img/ibanez.gif')?>"></a></li>
							<li><a href="#"><img src="<?=base_url('assets/img/roland.gif')?>"></a></li>
							<li><a href="#"><img src="<?=base_url('assets/img/akg_byharman.gif')?>"></a></li>
							<li><a href="#"><img src="<?=base_url('assets/img/shure.gif')?>"></a></li>
						</ul>
						<ul>
							<li><a href="#"><img src="<?=base_url('assets/img/yamaha.gif')?>"></a></li>
							<li><a href="#"><img src="<?=base_url('assets/img/sennheiser.gif')?>"></a></li>
							<li><a href="#"><img src="<?=base_url('assets/img/k_und_m.gif')?>"></a></li>
							<li><a href="#"><img src="<?=base_url('assets/img/cordial.gif')?>"></a></li>
							<li><a href="#"><img src="<?=base_url('assets/img/behringer.gif')?>"></a></li>
						</ul>
					</div>																					
				</div>
				<div class="row">
					<div class col-xs-12>
						<hr id="hrRow3" />						
					</div>					
				</div>
				<div id="row5" class="row text-center">
						<div class="col-sm-4">
							<img src="<?=base_url('assets/img/icon_livraison.png')?>">
							<p>Livraison grtuite à partir de 50€</p>
						</div>
						<div class="col-sm-4">
							<img src="<?=base_url('assets/img/icon_garantie3ans.png')?>">
							<p>Garantie 3 ans sur tout nos instruments</p>
						</div>
						<div class="col-sm-4">
							<img src="<?=base_url('assets/img/icon_garantie30jours.png')?>">
							<p>Garantie 30 jours satisfait ou remboursé</p>
						</div>																				
				</div>											
			</section>
		</div>
	