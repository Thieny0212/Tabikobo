<?php /* Template Name: News list */ ?>

<?php get_header(); ?>
	<div class="container">
		<div class="bg_news_list">
			<div class="rowwidth">
				<div class="breadcrumb">
					<ul>
						<li><a href="<?php echo home_url(); ?>">トップ</a></li>
						<li><span>ニュース一覧</span></li>
					</ul>
				</div>
				<div class="title_news_list">
					<h1><img src="<?php echo get_template_directory_uri(); ?>/images/title_news_list.png"></h1>
					<h5>ニュース一覧</h5>
				</div>
			</div>
		</div>
		<div class="rowwidth">
			<div id="page_news">
			    <?php 
			    $args = array(
			    	'post_type'			=>'post',
			    	'posts_per_page' 	=> -1,
			    	'orderby'			=>'date',
					'order'				=>'DESC'
			    	);
			    $news_list = get_posts($args);
			    foreach ($news_list as $post) : 
			    	setup_postdata( $post ); ?>
			       	<div class="post_items">
						<span><?php echo get_the_date('Y/m/d'); ?></span>
						<h3><?php if(!empty_content($post->post_content)): ?><a href="<?php the_permalink(); ?>"><?php endif; ?><?php echo mb_substr(get_the_title(), 0, 68); ?><i class="fa fa-chevron-right" aria-hidden="true"></i><?php if(!empty_content($post->post_content)): ?></a><?php endif; ?></h3>
					</div>
			    <?php
			    endforeach;
			    wp_reset_postdata();
			    ?>


			</div>
		</div>
	</div>
<?php get_footer(); ?>
