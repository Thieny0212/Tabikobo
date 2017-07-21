<?php get_header(); ?>
<div id="sitemap">
	<div class="bg_sitemap">
	    <div class="rowwidth">
	      	<div class="breadcrumb">
	        	<ul>
			        <li><a href="<?php echo home_url(); ?>">トップ</a></li>
			        <li><span><?php the_title(); ?></span></li>
		        </ul>
		    </div>
		    <div class="title">
		    	<img src="<?php echo get_template_directory_uri(); ?>/images/sitemap.png">
		        <h5>サイトマップ</h5>
		    </div>
	    </div>
	</div>
	<div class="content">
		<?php if ( have_posts() ): while (have_posts()) : the_post(); ?>
			<article id="content-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
	    <?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>