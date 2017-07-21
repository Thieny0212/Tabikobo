<?php /* Template Name: Privacy */ ?>
<?php get_header(); ?>
	<div class="container">
		<div class="bg_privacy">
			<div class="rowwidth">
				<div class="breadcrumb">
					<ul>
						<li><a href="<?php echo home_url(); ?>">トップ</a></li>
						<li><span><?php the_title(); ?></span></li>
					</ul>
				</div>
				<div class="title_news_list">
					<h1><img src="<?php echo get_template_directory_uri(); ?>/images/title_privacy.png"></h1>
					<h5>プライバシーポリシー</h5>
				</div>
			</div>
		</div>
		<div class="rowwidth">
			<div class="content_privacy">
				<?php the_post();
					the_content();
				?>
			</div>
		</div>

	</div>
<?php get_footer(); ?>