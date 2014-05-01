<?php /**
 * Copyright (c) 2011, Robin Appelman <icewind1991@gmail.com>
 * This file is licensed under the Affero General Public License version 3 or later.
 * See the COPYING-README file.
 */?>

<div id="quota" class="personalblock">
	<div style="width:<?php p($_['usage_relative']);?>%;">
		<p id="quotatext">
			<?php print_unescaped($l->t('You have used <strong>%s</strong> of the available <strong>%s</strong>',
			array($_['usage'], $_['total_space'])));?>
		</p>
	</div>
</div>

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

<fieldset class="personalblock">
	<h2><?php p($l->t('Version'));?></h2>
	<strong><?php p($theme->getName()); ?></strong> <?php p(OC_Util::getHumanVersion()) ?><br />
<?php if (OC_Util::getEditionString() === ''): ?>
	<?php print_unescaped($l->t('Developed by the <a href="http://ownCloud.org/contact" target="_blank">ownCloud community</a>, the <a href="https://github.com/owncloud" target="_blank">source code</a> is licensed under the <a href="http://www.gnu.org/licenses/agpl-3.0.html" target="_blank"><abbr title="Affero General Public License">AGPL</abbr></a>.')); ?>
<?php endif; ?>
</fieldset>
<fieldset class="personalblock credits-footer">
<p>
	<?php print_unescaped($theme->getShortFooter()); ?>
</p>
</fieldset>
