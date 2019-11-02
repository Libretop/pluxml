<?php include(dirname(__FILE__).'/header.php'); ?>
<div class="container maincontent dom2">	
	<section class="section content" id="content">
		<h1 class="title is-1"><?php $plxShow->catName(); ?></h1>
		<ul class="no-list">
<?php while($plxShow->plxMotor->plxRecord_arts->loop()):?>		
		<li class="is-size-5 has-border-bottom" id="<?php echo $plxShow->artId(); ?>"><i class="fa fa-check-square has-text-success is-size-4 has-margin-right" aria-hidden="true"></i><a href="<?php $plxShow->articleUrl(TRUE); ?>"><?php $plxShow->artTitle(); ?></a></li>														
<?php endwhile; ?>									
		</ul>
	</section>
</div>
<?php $plxShow->pagination(); ?>
<?php include(dirname(__FILE__).'/footer.php'); ?>
