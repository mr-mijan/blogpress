<div class="wpo-blog-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php 
        if ( have_posts() ) :
        while ( have_posts() ) : the_post();
        ?>
            <div class="post">
                <div class="entry-media">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                </div>
                <div class="entry-meta">
                    <ul>
                        <li><i class="fi flaticon-user"></i> By <?php the_author();?> </li>
                        <li><i class="fi flaticon-comment-white-oval-bubble"></i> <?php comments_number(); ?></li>
                        <li><i class="fi flaticon-calendar"></i> <?php the_date(); ?></li>
                    </ul>
                </div>
                <div class="entry-details">
                    <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink();?>" class="read-more">READ MORE...</a>
                </div>
            </div>
        <?php
            endwhile; else: _e('No post found' ,'blogpress');
            endif;
            ?>
        <div class="pagination-wrapper pagination-wrapper-left">
            <ul class="pg-pagination">
                <?php the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => __( '<i class="fi ti-angle-left"></i>', 'blogpress' ),
                    'next_text' => __( '<i class="fi ti-angle-right"></i>', 'blogpress' ),
                ) ); ?>
            </ul>
        </div>
    </div>