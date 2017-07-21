<?php get_header(); ?>
	<div class="container">
		<div class="bg_news_list">
			<div class="rowwidth">
				<div class="breadcrumb">
					<ul>
						<li><a href="<?php echo home_url(); ?>">トップ</a></li>
						<?php while ( have_posts() ) : the_post();
							$terms = wp_get_post_terms( $post->ID ,'category', array('orderby' => 'id', 'order' => 'ASC', 'fields' => 'all') );
							if( !empty($terms) ) {
								foreach($terms as $term) {
									echo '<li><a href="' . get_term_link($term->slug, 'category') . '">' . $term->name . '</a></li>';
								}
							}
						endwhile;
						?>
						<li><span>第<?php the_ID(); ?>号</span></li>
					</ul>
				</div>
				<div class="title_news_list">
					<h1><img src="<?php echo get_template_directory_uri(); ?>/images/title_news_list.png"></h1>
					<h5>ニュース一覧</h5>
				</div>
			</div>
		</div>
		<div class="rowwidth">
			<div id="single_post" class="the_post">
				<div class="date_id">
					<span><?php the_date('F j, Y'); ?></span> | <span>第<?php the_ID(); ?>号</span>
				</div>
				<div class="content_post">
					<div class="title_post">
						<h3><?php the_title(); ?></h3>
					</div>
					<div class="content_text">
						<?php the_content(); ?>
					</div>
				</div>
				<div class="single_share">
					<div class="title_share">
						<h3>SHARE</h3>
					</div>
					<div class="post-sharrre">
						<?php
							$post_url   = urlencode( get_permalink() );
							$post_title = str_replace( ' ', '%20', get_the_title() );
							$facebook   = 'https://facebook.com/sharer/sharer.php?u=' . $post_url;
							$twitter    = 'https://twitter.com/intent/tweet/?text=' . $post_title . '&amp;url=' . $post_url;
							$tumblr     = 'https://www.tumblr.com/widgets/share/tool?posttype=link&amp;title=' . $post_title . '&amp;caption=' . $post_title . '&amp;content=' . $post_url . '&amp;canonicalUrl=' . $post_url . '&amp;shareSource=tumblr_share_button';
							$pinterest  = 'https://pinterest.com/pin/create/button/?url=' . $post_url . '&amp;media=' . $post_url . '&amp;description=' . $post_title;
							$googleplus = 'https://plus.google.com/share?url=' . $post_url;
							$rss        = home_url() . '/feed/?post_type=feature';
						?>
						<a class="facebook" href="<?php echo $facebook; ?>"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</a>
						<a class="twitter" href="<?php echo $twitter; ?>"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</a>
						<a class="google" href="<?php echo $googleplus; ?>"><i class="fa fa-google-plus" aria-hidden="true"></i>Google+</a>
						<a class="tumblr" href="<?php echo $tumblr; ?>"><i class="fa fa-tumblr" aria-hidden="true"></i>Tumblr</a>
						<a class="pinterest" href="<?php echo $pinterest; ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i>Pinterest</a>
						<a class="rssfeed" href="<?php echo $rss; ?>"><i class="fa fa-rss" aria-hidden="true"></i>RSS feed</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>