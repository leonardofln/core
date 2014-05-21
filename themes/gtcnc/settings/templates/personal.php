<?php /**
 * Copyright (c) 2011, Robin Appelman <icewind1991@gmail.com>
 * This file is licensed under the Affero General Public License version 3 or later.
 * See the COPYING-README file.
 */?>

<?php
if($_['displayNameChangeSupported']) {
?>
<form id="displaynameform">
	<fieldset class="personalblock">
		<h2><?php echo $l->t('Full Name');?></h2>
		<em><?php p($_['displayName'])?></em>
	</fieldset>
</form>
<?php
}
?>

<?php
if($_['passwordChangeSupported']) {
?>
<form id="lostpassword">
	<fieldset class="personalblock">
		<h2><?php p($l->t('Email'));?></h2>
		<em><?php p($_['email']); ?></em>
	</fieldset>
</form>
<?php
}
?>

<form>
	<fieldset class="personalblock">
		<h2><?php p($l->t('Language'));?></h2>
		<select id="languageinput" name="lang" data-placeholder="<?php p($l->t('Language'));?>">
			<option value="<?php p($_['activelanguage']['code']);?>">
				<?php p($_['activelanguage']['name']);?>
			</option>
			<?php foreach($_['commonlanguages'] as $language):?>
				<option value="<?php p($language['code']);?>">
					<?php p($language['name']);?>
				</option>
			<?php endforeach;?>
			<optgroup label="––––––––––"></optgroup>
			<?php foreach($_['languages'] as $language):?>
				<option value="<?php p($language['code']);?>">
					<?php p($language['name']);?>
				</option>
			<?php endforeach;?>
		</select>
	</fieldset>
</form>