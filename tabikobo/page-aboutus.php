<?php /* template name: Aboutus */ ?>
<?php get_header(); ?>
	<div class="container">
		<div class="page_aboutus">
			<div class="map_vietnam">
				<div class="rowwidth">
					<div class="breadcrumb">
						<ul>
							<li><a href="<?php echo home_url(); ?>">トップ</a></li>
							<li><span><?php the_title(); ?></span></li>
						</ul>
					</div>
					<div class="title_vietnam">
						<h1><img src="<?php echo get_template_directory_uri(); ?>/images/title_map.png"></h1>
						<h5 class="title_about_travel">旅工房ベトナムについて</h5>
					</div>
				</div>
			</div>
			<?php 
				the_post();
				the_content();
			?>
		</div>
	</div>

<?php get_footer(); ?>