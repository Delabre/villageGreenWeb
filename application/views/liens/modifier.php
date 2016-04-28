<br />
<h4>Modification de :  <b><?=$liste->Libelle_Produit?><b></h4>
<br />
<div id="formModifier">
	<form action="<?=site_url("green/script_modifier")?>" method="POST" class="form-group">
		<input name="Id_Produit" type="hidden" value="<?=$liste->Id_Produit?>" />			
		<label>Libellé : </label>
		<input required="true" name="Libelle_Produit" class="form-control" type="text" value="<?=$liste->Libelle_Produit?>" />

		<label>Description : </label>
		<textarea name="Description_Produit" class="form-control"><?=$liste->Description_Produit?></textarea>

		<label>Prix d'achat fournisseur : </label>
		<input required="true" name="Prix_Achat_Fournisseur" class="form-control" type="number" value="<?=$liste->Prix_Achat_Fournisseur?>" />

		<label>Prix vente HT : </label>
		<input required="true" name="Prix_HT_Produit" class="form-control" type="number" value="<?=$liste->Prix_HT_Produit?>" />

	    <label>Stock : </label>
		<input required="true" name="Stock_Produit" class="form-control" type="number" value="<?=$liste->Stock_Produit?>" />

		<input class="btn btn-info" type="submit" value="Valider" />
		<a href="<?=site_url('green/catalogue')?>"><button type="button" class="btn btn-danger">Annuler</button></a>														
	</form>
</div>