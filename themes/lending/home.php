<?php include(dirname(__FILE__).'/header.php'); ?>
	<div class="container maincontent">
		<section class="section" id="block1">
			<div class="columns">
				<div class="column is-half-fullhd is-two-thirds-desktop is-full-tablet content is-vcentered" >	
					<h1 class="title is-1"><?php $plxShow->staticTitle('001'); ?></h1>
					<p class="is-size-5"><?php $plxShow->staticContent('001'); ?></p>
					<p><a href="<?php $plxShow->mainlink();?>#form" class="button is-danger is-medium">Кнопка действия</a></p>
				</div>
				<div class="column">
				</div>
			</div>
		</section>
		<section class="section" id="block2">
			<div class="columns is-multiline">
				<div class="column is-12 content">
					<h2 class="title is-1"><?php $plxShow->staticTitle('002'); ?></h2>
					<p class="is-size-5"><?php $plxShow->staticContent('002'); ?></p>
				</div>
				<div class="column is-half content">
					<i class="fa fa-list has-text-danger is-size-1" aria-hidden="true"></i>
					<h3><?php $plxShow->staticTitle('002'); ?></h3>
					<?php $plxShow->staticContent('002'); ?>
				</div>
				<div class="column is-half content">
					<i class="fa fa-file-text-o has-text-danger is-size-1" aria-hidden="true"></i>
					<h3><?php $plxShow->staticTitle('002'); ?></h3>
					<?php $plxShow->staticContent('002'); ?>
				</div>
			</div>
		</section>
	</div>


	<section class="hero is-light" id="block3">
		<div class="hero-body">
			<div class="container">
				<div class="columns">
					<div class="column is-one-third">
					
					</div>
					<div class="column is-two-thirds content">
						<h4 class="subtitle is-uppercase has-text-danger"><?php $plxShow->staticTitle('003'); ?></h4>
						<p>
							<?php $plxShow->staticContent('003'); ?>						
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
<?php include(dirname(__FILE__).'/footer.php'); ?>
