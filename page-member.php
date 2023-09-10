
<?php get_header(); ?>

    <section class="section single-section">
        <div class="inner">
            <h1 class="section-title single-section-title"><?php the_title(); ?></h1>

            <div class="single-member-wrapper">
                
                <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $the_query = new WP_Query( array(
                        'post_status' => 'publish',
                        'post_type' => 'post',
                        'paged' => $paged,
                        'posts_per_page' => 6,
                        'category__in' => 4,
                        'order' => 'ASC',
                        'orderby' => 'modified',
                    ));
                ?>
                <?php if($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="single-member-item">
                    <div class="single-member-img">
                        <?php
                            if( has_post_thumbnail() ){
                                the_post_thumbnail( 'large' );
                            } else{
                                echo '<img src="' . esc_url( get_template_directory_uri() ) . '/img/noimg.png" alt="">';
                            }
                        ?>
                    </div>
                    <h2 class="single-member-name"><?php the_title(); ?></h2>
                    <div class="single-member-text"><?php the_content(); ?></div>
                </div>
                <?php endwhile; endif;?>

            </div>

            <div class="pagination">
            <?php //ページリスト表示処理
                global $wp_rewrite;
                $paginate_base = get_pagenum_link(1);
                if(strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()){
                    $paginate_format = '';
                    $paginate_base = add_query_arg('paged','%#%');
                }else{
                    $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
                    user_trailingslashit('page/%#%/','paged');
                    $paginate_base .= '%_%';
                }
                echo paginate_links(array(
                    'base' => $paginate_base,
                    'format' => $paginate_format,
                    'total' => $the_query->max_num_pages,
                    'mid_size' => 1,
                    'current' => ($paged ? $paged : 1),
                    'prev_text' => '',
                    'next_text' => '',
                ));
            ?>
            </div>

        </div>
    </section>

<?php get_footer(); ?>