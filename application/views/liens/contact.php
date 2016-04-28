<div class="row" id="contact">
	<form action="<?=site_url("green/envoiFormContact")?>" method="post" class="form group-form">
		<h3>Contactez-nous :</h3>
		<label>Nom</label>
		<input class="form-control" name="Nom_Contact" type="text" placeholder="Entrez un nom" value="<?=set_value('Nom_Contact')?>"  />
		<?php echo form_error('Nom_Contact'); ?>

		<label>Prénom</label>
		<input class="form-control" name="Prenom_Contact" type="text" placeholder="Entrez votre prénom" value="<?=set_value('Prenom_Contact')?>" />
		<?php echo form_error('Prenom_Contact'); ?>

		<label>Mail</label>
		<input class="form-control" name="Mail_Contact" type="email" placeholder="Entrez votre mail" value="<?=set_value('Mail_Contact')?>" />
		<?php echo form_error('Mail_Contact'); ?>

		<label>Message</label>
		<textarea class="form-control" name="Message_Contact" placeholder="Entrez votre message" rows="10"><?=set_value('Message_Contact')?></textarea>
		<?php echo form_error('Message_Contact'); ?>

		<input type="submit" class="btn btn-sm btn-block" value="Envoyer" />
		<!-- <button type="button" class="btn">Annuler</button> -->		
	</form>
</div>


