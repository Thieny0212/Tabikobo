<?php get_header();?>
<div class="container">
    <div class="rowwidth">
        <div id="page_search" class="the_search">
            <div class="search_info">
                <?php
                $search_query = new WP_Query( 's='.$s.'&showposts=-1' );
                $search_keyword = wp_specialchars( $s, 1);
                $search_count = $search_query->post_count;
                // var_dump( $search_query );
                printf( __('<div class="title_search"><h1>Search results for <strong>" %1$s "</strong>. We found <strong>%2$s</strong> articles for you.</h1></div>', 'tabikobo'), $search_keyword, $search_count );
                ?>
                <?php if(have_posts()): ?>
                <?php while(have_posts()) : the_post() ?>
                    
                    <div class="post_items">
                        <span><?php echo get_the_date('Y/m/d'); ?></span>
                        <h3><a href="<?php the_permalink(); ?>"><?php echo mb_substr(get_the_title(), 0, 68); ?><i class="fa fa-chevron-right" aria-hidden="true"></i></a></h3>
                    </div>
                    <?php endwhile; ?>
                    <?php
                        the_posts_pagination( 
                            array(
                                'prev_text' => __( '前へ', 'tabikobo' ),
                                'next_text' => __( '次へ', 'tabikobo' )
                                ));
                    ?>
                <?php else :
                   echo '
                        <div class="articles_found"><h3>申し訳ございません。</h3>
                        <p>該当する記事がございません。</p></div>';
                endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>