<?php

/**
 * Edition des paramètres de base
 *
 * @package PLX
 * @author	Florent MONTHEL, Stephane F
 **/

include(dirname(__FILE__).'/prepend.php');
include(PLX_CORE.'lib/class.plx.timezones.php');

# Control du token du formulaire
plxToken::validateFormToken($_POST);

# Control de l'accès à la page en fonction du profil de l'utilisateur connecté
$plxAdmin->checkProfil(PROFIL_ADMIN);

# On édite la configuration
if(!empty($_POST)) {
	$plxAdmin->editConfiguration($plxAdmin->aConf,$_POST);
	header('Location: parametres_base.php');
	exit;
}

# On inclut le header
include(dirname(__FILE__).'/top.php');
?>

<form action="parametres_base.php" method="post" id="form_settings">

	<div class="inline-form action-bar">
		<h2><?php echo L_CONFIG_BASE_CONFIG_TITLE ?></h2>
		<p>&nbsp;</p>
		<input type="submit" value="<?php echo L_CONFIG_BASE_UPDATE ?>" />
	</div>

	<?php eval($plxAdmin->plxPlugins->callHook('AdminSettingsBaseTop')) # Hook Plugins ?>

	<fieldset class="config">
		<div class="grid">
			<div class="col sml-12 med-5 label-centered">
				<label for="id_title"><?php echo L_CONFIG_BASE_SITE_TITLE ?>&nbsp;:</label>
			</div>
			<div class="col sml-12 med-7">
				<?php plxUtils::printInput('title', plxUtils::strCheck($plxAdmin->aConf['title'])); ?>
			</div>
		</div>
		<div class="grid">
			<div class="col sml-12 med-5 label-centered">
				<label for="id_description"><?php echo L_CONFIG_BASE_SITE_SLOGAN ?>&nbsp;:</label>
			</div>
			<div class="col sml-12 med-7">
				<?php plxUtils::printInput('description', plxUtils::strCheck($plxAdmin->aConf['description'])); ?>
			</div>
		</div>
		<div class="grid">
			<div class="col sml-12 med-5 label-centered">
				<label for="id_meta_description"><?php echo L_CONFIG_META_DESCRIPTION ?>&nbsp;:</label>
			</div>
			<div class="col sml-12 med-7">
				<?php plxUtils::printInput('meta_description', plxUtils::strCheck($plxAdmin->aConf['meta_description'])); ?>
			</div>
		</div>
		<div class="grid">
			<div class="col sml-12 med-5 label-centered">
				<label for="id_meta_keywords"><?php echo L_CONFIG_META_KEYWORDS ?>&nbsp;:</label>
			</div>
			<div class="col sml-12 med-7">
				<?php plxUtils::printInput('meta_keywords', plxUtils::strCheck($plxAdmin->aConf['meta_keywords'])); ?>
			</div>
		</div>	
		<div class="grid">
			<div class="col sml-12 med-5 label-centered">
				<label for="id_default_lang"><?php echo L_CONFIG_BASE_DEFAULT_LANG ?>&nbsp;:</label>
			</div>
			<div class="col sml-12 med-7">
				<?php plxUtils::printSelect('default_lang', plxUtils::getLangs(), $plxAdmin->aConf['default_lang']) ?>
			</div>
		</div>
		<div class="grid">
			<div class="col sml-12 med-5 label-centered">
				<label for="id_timezone"><?php echo L_CONFIG_BASE_TIMEZONE ?>&nbsp;:</label>
			</div>
			<div class="col sml-12 med-7">
				<?php plxUtils::printSelect('timezone', plxTimezones::timezones(), $plxAdmin->aConf['timezone']); ?>
			</div>
		</div>
		
		<div class="grid">
			<div class="col sml-12 med-5 label-centered">
				<label for="id_map">Адрес офиса&nbsp;:</label>
			</div>
			<div class="col sml-12 med-7">
				<?php plxUtils::printArea('adress', $plxAdmin->aConf['adress'],30,5); ?>
			</div>
		</div>	
		
		<div class="grid">
			<div class="col sml-12 med-5 label-centered">
				<label for="id_meta_phone">Контактный телефон сайта&nbsp;:</label>
			</div>
			<div class="col sml-12 med-7">
				<?php plxUtils::printInput('phone', plxUtils::strCheck($plxAdmin->aConf['phone'])); ?>
			</div>
		</div>
		
		<div class="grid">
			<div class="col sml-12 med-5 label-centered">
				<label for="id_map">Страница в facebook&nbsp;:</label>
			</div>
			<div class="col sml-12 med-7">
				<?php plxUtils::printInput('facebook', plxUtils::strCheck($plxAdmin->aConf['facebook'])); ?>
			</div>
		</div>	
		
		<div class="grid">
			<div class="col sml-12 med-5 label-centered">
				<label for="id_map">Страница в vk&nbsp;:</label>
			</div>
			<div class="col sml-12 med-7">
				<?php plxUtils::printInput('vk', plxUtils::strCheck($plxAdmin->aConf['vk'])); ?>
			</div>
		</div>	
		
		<div class="grid">
			<div class="col sml-12 med-5 label-centered">
				<label for="id_map">Аккаунт в youtube&nbsp;:</label>
			</div>
			<div class="col sml-12 med-7">
				<?php plxUtils::printInput('youtube', plxUtils::strCheck($plxAdmin->aConf['youtube'])); ?>
			</div>
		</div>	
		
		
		<div class="grid">
			<div class="col sml-12 med-5 label-centered">
				<label for="id_map">Код баннера справа внизу: &nbsp;:</label>
			</div>
			<div class="col sml-12 med-7">
				<?php plxUtils::printArea('banner2', $plxAdmin->aConf['banner2'], 30,5); ?>
			</div>
		</div>	
		
		<div class="grid">
			<div class="col sml-12 med-5 label-centered">
				<label for="id_map">Код счетчика сайта: &nbsp;:</label>
			</div>
			<div class="col sml-12 med-7">
				<?php plxUtils::printArea('counter', $plxAdmin->aConf['counter'], 30,5); ?>
			</div>
		</div>	
				
		<div class="grid">
			<div class="col sml-12 med-5 label-centered">
				<label for="id_allow_com"><?php echo L_CONFIG_BASE_ALLOW_COMMENTS ?>&nbsp;:</label>
			</div>
			<div class="col sml-12 med-7">
				<?php plxUtils::printSelect('allow_com',array('1'=>L_YES,'0'=>L_NO), $plxAdmin->aConf['allow_com']); ?>
			</div>
		</div>
		<div class="grid">
			<div class="col sml-12 med-5 label-centered">
				<label for="id_mod_com"><?php echo L_CONFIG_BASE_MODERATE_COMMENTS ?>&nbsp;:</label>
			</div>
			<div class="col sml-12 med-7">
				<?php plxUtils::printSelect('mod_com',array('1'=>L_YES,'0'=>L_NO), $plxAdmin->aConf['mod_com']); ?>
			</div>
		</div>
		<div class="grid">
			<div class="col sml-12 med-5 label-centered">
				<label for="id_mod_art"><?php echo L_CONFIG_BASE_MODERATE_ARTICLES ?>&nbsp;:</label>
			</div>
			<div class="col sml-12 med-7">
				<?php plxUtils::printSelect('mod_art',array('1'=>L_YES,'0'=>L_NO), $plxAdmin->aConf['mod_art']); ?>
			</div>
		</div>
	</fieldset>
	<?php eval($plxAdmin->plxPlugins->callHook('AdminSettingsBase')) # Hook Plugins ?>
	<?php echo plxToken::getTokenPostMethod() ?>

</form>

<?php
# Hook Plugins
eval($plxAdmin->plxPlugins->callHook('AdminSettingsBaseFoot'));
# On inclut le footer
include(dirname(__FILE__).'/foot.php');
?>
