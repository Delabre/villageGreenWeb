<h1>Confirmer la suppression du produit :</h1>
<div class=" block-center thumbnail">
<h4><?=$liste->Libelle_Produit?></h4>
<img class="thumbnail" src="<?=base_url("assets/img/$liste->Photo_Produit")?>">
<p><?=$liste->Description_Produit?></p>
<a href="<?=site_url("green/script_supprimer/$liste->Id_Produit")?>"><button class="btn btn-danger">Confirmer</button></a>
<a href="<?=site_url('green/catalogue')?>"><button class="btn btn-info">Annuler</button></a>
</div>