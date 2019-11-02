<?php if (!defined('PLX_ROOT')) exit; ?>
	<footer class="footer has-border-top">
		<div class="container">
			<div class="columns content">
				<div class="column is-one-third is-vcentered">
					<ul class="no-list">
						<li><i class="fa fa-check-square has-text-danger is-size-4 has-margin-right" aria-hidden="true"></i><a href="<?php $plxShow->staticLink('001'); ?>"><?php $plxShow->staticTitle('004'); ?></a></li>
						<li><i class="fa fa-check-square has-text-danger is-size-4 has-margin-right" aria-hidden="true"></i><a href="<?php $plxShow->staticLink('002'); ?>"><?php $plxShow->staticTitle('005'); ?></a></li>
						<li><i class="fa fa-check-square has-text-danger is-size-4 has-margin-right" aria-hidden="true"></i><a href="<?php $plxShow->staticLink('003'); ?>"><?php $plxShow->staticTitle('006'); ?></a></li>						
					</ul>
				</div>
				<div class="column is-one-third is-vcentered">
					<ul class="no-list">
						<li><i class="fa fa-check-square has-text-danger is-size-4 has-margin-right" aria-hidden="true"></i><a href="<?php $plxShow->staticLink('004'); ?>"><?php $plxShow->staticTitle('004'); ?></a></li>
						<li><i class="fa fa-check-square has-text-danger is-size-4 has-margin-right" aria-hidden="true"></i><a href="<?php $plxShow->staticLink('005'); ?>"><?php $plxShow->staticTitle('005'); ?></a></li>
						<li><i class="fa fa-check-square has-text-danger is-size-4 has-margin-right" aria-hidden="true"></i><a href="<?php $plxShow->staticLink('025'); ?>"><?php $plxShow->staticTitle('006'); ?></a></li>
					</ul>
				</div>
				<div class="column is-one-third is-vcentered">
					<address>
						<div class="columns">
							<div class="column is-7">
								<p>Телефон: <strong><?php $plxShow->config('phone'); ?></strong></p>
								<p>E-mail: <a href="mailto:<?php $plxShow->AdminEmail();?>"><strong><?php $plxShow->AdminEmail();?></strong></a></p>
							</div>
							<div class="column is-5">
								<p><a target="blank" href="<?php $plxShow->config('facebook'); ?>"><i class="fa fa-facebook-square has-text-facebook is-size-2 has-margin-right" aria-hidden="true"></i></a>
								<a target="blank" href="<?php $plxShow->config('vk'); ?>"><i class="fa fa-vk has-text-vk is-size-2 has-margin-right" aria-hidden="true"></i></a>
								<a target="blank" href="<?php $plxShow->config('youtube'); ?>"><i class="fa fa-youtube-square has-text-youtube is-size-2 has-margin-right" aria-hidden="true"></i></a>
								<a href="<?php $plxShow->staticLink('023'); ?>"><?php $plxShow->staticTitle('023'); ?></a>
							</div>
						</div>
						<p>Адрес: <strong><?php $plxShow->config('adress'); ?></strong></p>						
						</p>
					</address>
				</div>
			</div>
		</div>
		<?php $plxShow->config('counter'); ?>
	</footer>
	<script type="text/javascript" src="<?php $plxShow->template(); ?>/js/main.min.js"></script>
</body>
</html>
