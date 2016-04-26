<h4><?=$liste2->Nom_Sous_categories?></h4>
	<div class="row">
		<?php foreach ($liste as $row): ?>		
			<article class="sectionProduit thumbnail">			
				<div class="divContenu caption">
					<h5><?=$row->Libelle_Produit?></h5>
					<p><?=$row->Description_Produit?></p>
					<p><?=$row->Prix_HT_Produit?> €</p>
				</div>
				<div class="text-right">
					<a href="<?=site_url("green/modifier/$row->Id_Produit")?>"><button class="btn btn-info">Modifier</button></a>
					<a href="<?=site_url("green/supprimer/$row->Id_Produit")?>"><button class="btn btn-danger">Supprimer</button></a>	
				</div>											
			</article>
		<?php endforeach ?>
		<article class="sectionProduit"  id="ajoutProduit">
			<a href="<?=site_url("green/ajouter/$liste2->Id_sous_categories")?>"><img src="<?=base_url("assets/img/imagePlus.png")?>"></a>
		</article>
	</div>
</section>