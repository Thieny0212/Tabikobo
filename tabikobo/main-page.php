<div class="container">
	<div class="map_vietnam">
		<div class="title_vietnam">
			<h3><img src="<?php echo get_template_directory_uri(); ?>/images/title_map.png"></h3>
			<h5 class="title_about_travel">旅工房ベトナムについて</h5>
			<p>Tabikobo Vietnamは、アジアにおける旅工房の海外事業戦略拠点として2016年12月に設立いたしました。</p>
			<a href="/aboutus/">もっと読む</a>
		</div>
	</div>
	<div class="content_services">
		<h3><img src="<?php echo get_template_directory_uri() ?>/images/title_services.png"></h3>
		<h5 class="title_services">サービス</h5>
		<p>Tabikobo Vietnamは、ベトナムにお住まいの日本のお客様のご旅行や出張をサポート。</p>
		<p>お客様一人ひとりのご希望にそったご旅行をご提案します。</p>
		<a href="/service/">もっと読む</a>		
	</div>
	<div class="content_news">
		<div class="rowwidth">
			<h3 class="title_news"><img src="<?php echo get_template_directory_uri(); ?>/images/title_news.png"></h3>
			<h5 class="title_jp">ニュース</h5>
			<div class="list_post">
				<?php
					$args = array(
						'post_status' 		=> 'publish',
						'post_type'			=>'post',
						'posts_per_page' 	=> 3,
						'orderby'			=>'date',
						'order'				=>'DESC'
					);
					$new_post =  new WP_query($args);
				?>

				<?php if($new_post -> have_posts()) :
						while ($new_post -> have_posts()) : $new_post -> the_post();?>
							<?php if(empty_content($post->post_content)): ?>
								<div class="post_items not_content">
									<span><?php echo get_the_date('Y/m/d'); ?></span>
									<h3><?php echo mb_substr(get_the_title(), 0, 68); ?><i class="fa fa-chevron-right" aria-hidden="true"></i></h3>
								</div>
							<?php else: ?>
								<div class="post_items">
									<span><?php echo get_the_date('Y/m/d'); ?></span>
									<h3><a href="<?php the_permalink(); ?>"><?php echo mb_substr(get_the_title(), 0, 68); ?><i class="fa fa-chevron-right" aria-hidden="true"></i></a></h3>
								</div>
							<?php endif; ?>
						<?php endwhile; 
					endif;?>
			</div>
			<div class="link_news_list"><a href="/news/">一覧はこちら</a></div>
		</div>
	</div>
	<div class="content_contact">
		<h3><img src="<?php echo get_template_directory_uri() ?>/images/title_contact.png"></h3>
		<h5 class="title_contact">お問い合わせ</h5>
		<a href="/contact/">お問い合わせはこちら</a>	
	</div>
</div>