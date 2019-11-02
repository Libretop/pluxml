<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="<?php $plxShow->defaultLang() ?>" xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
<title><?php $plxShow->pageTitle(); ?></title>
<meta http-equiv="imagetoolbar" content="no">
<link rel="icon" href="<?php $plxShow->template(); ?>/favicon.ico" />
<link href="<?php $plxShow->template(); ?>/css/style.min.css" rel="stylesheet" type="text/css" media="all">
<?php $plxShow->templateCss() ?>
<?php //$plxShow->pluginsCss() ?>
<?php $plxShow->meta('description') ?>
<?php $plxShow->meta('keywords') ?>
<?php $plxShow->meta('author') ?>
<meta name="generator" content="PluXml">
</head>
<body>
<nav class="navbar is-fixed-top is-white" role="navigation" aria-label="main navigation">
	<div class="container">
		<div class="navbar-brand">
			<a class="navbar-item no-margin" href="<?php $plxShow->mainlink();?>">
				<img src="<?php $plxShow->template(); ?>/img/logo.png">
			</a>
			<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="mainnav">
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
			</a>
		</div>
		<div id="mainnav" class="navbar-menu">
			<div class="navbar-start">
				<a href="<?php $plxShow->mainlink();?>#main" class="navbar-item">
					Главная
				</a>
				<a href="<?php $plxShow->mainlink();?>#block1" class="navbar-item">
					Блок1
				</a>
				<a href="<?php $plxShow->mainlink();?>#block2" class="navbar-item">
					Блок2
				</a>							
			</div>
			<div class="navbar-end">
				<div class="navbar-item">
					<span class="is-size-5 has-text-weight-semibold"><i class="fa fa-phone has-text-danger is-size-3" aria-hidden="true"></i> <?php $plxShow->config('phone'); ?></span>
				</div>
			</div>
		</div>
	</div>
</nav>
