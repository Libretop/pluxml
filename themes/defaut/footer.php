<?php if (!defined('PLX_ROOT')) exit; ?>

	<footer class="footer">
		<div class="container">
			
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
			
			<p>
				<?php $plxShow->mainTitle('link'); ?> - <?php $plxShow->subTitle(); ?> &copy; 2018
			</p>
			<p>
				<?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
				<?php $plxShow->lang('IN') ?>&nbsp;<?php $plxShow->chrono(); ?>&nbsp;
				<?php $plxShow->httpEncoding() ?>&nbsp;- 
				<a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a>
			</p>
			<ul class="menu">
				<li><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>"><?php $plxShow->lang('ARTICLES'); ?></a></li>
				<li><a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><?php $plxShow->lang('COMMENTS'); ?></a></li>
				<li><a href="<?php $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a></li>
			</ul>
		</div>
	</footer>

</body>

</html>
