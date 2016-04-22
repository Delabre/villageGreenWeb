<section class="row">
	<!-- <h4><?=$liste2->Nom_Sous_categories?></h4> -->
	<?php foreach ($liste as $row): ?>
		<div class="row">
		<article class="col-sm-4 sectionProduit">
			<img src="<?=base_url("assets/img/$row->Photo_Produit")?>">
			<div class="divContenu"></div>
			<h5><?=$row->Libelle_Produit?></h5>
			<p><?=$row->Description_Produit?></p>
			<p><?=$row->Prix_HT_Produit?> €</p>
			<button>Ajouter au panier</button>		
		</article>
		</div>
	<?php endforeach ?>
</section>