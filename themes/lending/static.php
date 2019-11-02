<?php include(dirname(__FILE__).'/header.php'); ?>
<div class="container maincontent">	
	<section class="section content" id="content">
		<article class="article" id="<?php echo $plxShow->staticCible(); ?>">		
		<div class="columns">
			<div class="column is-two-thirds">
				<h1 class="title is-1"><?php $plxShow->staticTitle($plxShow->staticCible()); ?></h1>
			</div>
			<div class="column is-one-third">
				<p><a href="<?php $plxShow->mainlink();?>#form" class="button is-danger is-large">Кнопка действий</a></p>
			</div>
		</div>
			<?php $plxShow->staticContent($plxShow->staticCible()); ?>
			<?php if ($plxShow->staticCible()=='003') include(dirname(__FILE__).'/form1.php'); ?>
			<?php if ($plxShow->staticCible()=='004') include(dirname(__FILE__).'/form2.php'); ?>
			<?php if ($plxShow->staticCible()=='023') include(dirname(__FILE__).'/form3.php'); ?>
		</article>
	</section>
</div>
<?php include(dirname(__FILE__).'/footer.php'); ?>
