<br />
<h4>Ajout <b><?=$liste->Nom_Sous_categories?><b></h4>
<br />
<div class="row" id="ajouter">
	<form action="<?=site_url("green/script_ajouter")?>" method="POST" class="form-group">
		<input type="hidden" name="Ref_Id_Sous_Categories_Prod" value="<?=$liste->Id_sous_categories?>"></input>

		<label>Libellé</label>
		<input class="form-control" type="text" name="Libelle_Produit" />

		<label>description</label>
		<textarea class="form-control" name="Description_Produit"></textarea>

		<label>Prix HT</label>
		<input class="form-control" type="number" name="Prix_HT_Produit" />

		<label>Stock</label>
		<input class="form-control" type="number" name="Stock_Produit" />

		<label>Fournisseur</label>
		<select class="form-control" name="">
		<?php foreach ($liste2 as $key):?>
			<option value="<?=$key->Nom_Fournisseur?>"><?=$key->Nom_Fournisseur?></option>
		<?php endforeach; ?>
		</select>

		<label>Prix Fournisseur</label>
		<input class="form-control" type="number" name="Prix_Achat_Fournisseur" />

		<input class="btn btn-info" type="submit" value="Valider" />
		<a href="<?=site_url('green/catalogue')?>"><button type="button" class="btn btn-danger">Annuler</button></a>
	</form>
</div>