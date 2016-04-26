	<div class="row" id="rowCatalogue">
		<h4>Catalogue</h4>
		<p class="bg-info center-block">Vous trouverez dans notre catalogue en ligne tous les produits que nous proposons actuellement, triés par catégorie. Nous Village Green avons actuellement <span id="totalProduit"><?=$liste3->nb ?> produits</span> au catalogue.</p>

		<?php foreach ($liste as $row):?>
			<ul>				
				<li><h5><?=$row->Nom_Categories?></h5></li>					
					<ul>
						<div id="sousCategorie">							
							<?php foreach ($liste2 as $row2):?>
								<?php if ($row->Id_Categories == $row2->Ref_categories): ?>							
									<li><a href="<?=site_url("green/produit/$row2->Id_sous_categories")?>"><?=$row2->Nom_Sous_Categories?></a></li>
								<?php endif ?>
							<?php endforeach;?>
						</div>
					</ul>	
			</ul>					
		<?php endforeach;?>
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