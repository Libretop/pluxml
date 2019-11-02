<?php include(dirname(__FILE__).'/header.php'); ?>
<div class="container maincontent">	
	<section class="section content" id="content">
		<?php if (intval($plxShow->artCatIds())!==2) {?>
		<article class="article content" id="<?php echo $plxShow->artId(); ?>">
			<h1 class="title is-1"><?php $plxShow->artTitle(); ?></h1>
			<div class="pic"><?php $plxShow->artThumbnail(); ?></div>
			<?php $plxShow->artContent(); ?>
		</article>
		<?php } else { if ($plxShow->artThumbnail('#img_url',FALSE)) {?>
			<h1 class="title is-1">Картинка</h1>
			<a href="<?php $plxShow->artThumbnail('#img_url'); ?>" class="button is-success is-large">Посмотреть и скачать картинку</a>						
			<p><?php $plxShow->artChapo(); ?></p>
						
		<?php } else {?>
			<h1 class="title is-1">Извините, картинки нет</h1>			
			<?php $plxShow->artChapo(); ?>				
		<?php } 
		}?>
	</section>
</div>
<?php include(dirname(__FILE__).'/footer.php'); ?>
