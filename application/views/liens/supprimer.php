<h1>Confirmer la suppression du produit :</h1>
<div class=" block-center thumbnail alert-danger" id="supprimer">
	<div class="row">
		<div class="col-sm-5">
			<img src="<?=base_url("assets/img/$liste->Photo_Produit")?>">
		</div>
		<div class="col-sm-5">
			<h4><b><?=$liste->Libelle_Produit?></b></h4>
			<br />			
			<div><?=$liste->Description_Produit?></div>
			<br />
			<div><b><?=$liste->Prix_HT_Produit?> €</b></div>
		</div>
		<div class="col-sm-2">
			<a href="<?=site_url("green/script_supprimer/$liste->Id_Produit")?>"><button class="btn btn-danger btn-block">Confirmer</button></a>
			<br />
			<a href="<?=site_url('green/catalogue')?>"><button class="btn btn-info btn-block">Annuler</button></a>
		</div>
	</div>
</div>