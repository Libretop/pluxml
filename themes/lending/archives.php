<?php include(dirname(__FILE__).'/header.php'); ?>
<?php include(dirname(__FILE__).'/present_page.php'); ?>
<div class="container has-border-bottom indicator">
		<div class="columns">
			<div class="column is-3">
				<?php include(dirname(__FILE__).'/menu.php'); ?>
			</div>
			<div class="column">	
				<p><?php $plxShow->catDescription('#cat_description'); ?></p>									
					<?php while($plxShow->plxMotor->plxRecord_arts->loop()):?>	
					
						<!-- START ARTICLE -->
                <div class="card article box" id="post-<?php echo $plxShow->artId(); ?>">
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content has-text-centered">
                                <a href="<?php $plxShow->artUrl(TRUE); ?>"><h2 class="title article-title has-border-bottom"><?php $plxShow->artTitle(); ?></h2></a>                               
                            </div>
                        </div>
                        <div class="content article-body">                          
                          	<?php if ($plxShow->artThumbnail('#img_thumb_url',FALSE)) {?><img class="image is-128x128 pic"  src="<?php echo $plxShow->artThumbnail('#img_thumb_url',FALSE); ?>"><?php }?>
							<?php $plxShow->artChapo(); ?>				
                                 <div class="tags has-addons level-item" datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>">
                                    <span class="tag is-rounded is-primary"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></span>
                                </div>
                        </div>
                    </div>
                </div>
				<!-- END ARTICLE -->																	
					<?php endwhile; ?>					
				<nav class="pagination text-center">
					<?php $plxShow->pagination(); ?>
				</nav>
		
				
				
			</div>
		</div>
	</div>
<?php include(dirname(__FILE__).'/footer.php'); ?>
