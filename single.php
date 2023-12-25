<?php get_header(); ?>
    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-breadcumb-wrap">
                    <h2><?php echo esc_html( the_title() ); ?></h2>
                    <ul>
                        <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of wpo-breadcumb-section-->


        <!-- start wpo-blog-single-section -->
        <section class="wpo-blog-single-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-12">
                        <div class="wpo-blog-content">
                            <div class="post format-standard-image">
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
                                <h2><?php the_title(); ?></h2>
                                    <?php the_content(); ?>
                            </div>

                            <div class="tag-share clearfix">
                                <div class="tag">
                                    <?php
                                        $before = '<span>Tags</span>';
										$seperator = ''; // blank instead of comma
										$after = '';
										the_tags( $before, $seperator, $after );
									?>
                                </div>
                            </div> <!-- end tag-share -->
                            <div class="tag-share-s2 clearfix">
                                <div class="tag">
                                    <span>Share: </span>
                                    <ul>
                                        <li><a href="#">facebook</a></li>
                                        <li><a href="#">twitter</a></li>
                                        <li><a href="#">linkedin</a></li>
                                        <li><a href="#">pinterest</a></li>
                                    </ul>
                                </div>
                            </div> <!-- end tag-share -->

                            <div class="author-box">
                                <div class="author-avatar">
                                    <?php
                                        global $post;
                                        $author_id = $post->post_author;
                                    ?>
                                    <img src="<?php echo get_avatar_url('ID'); ?>"alt="">
                                </div>
                                <div class="author-content">
                                    <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="author-name">Author: <?php echo get_the_author_meta( 'display_name', $author_id ); ?></a>
                                    <p><?php echo get_the_author_meta( 'description', $author_id ); ?></p>
                                    <div class="socials">
                                        <ul class="social-link">
                                             <?php
                                            $author_id = get_the_author_meta('ID');

                                            if ($author_id) {
                                                $twitter = get_the_author_meta('twitter', $author_id);
                                                $facebook = get_the_author_meta('facebook', $author_id);
                                                $instagram = get_the_author_meta('instagram', $author_id);

                                                echo '<div class="author-social-links">';
                                                
                                                if ($twitter) {
                                                    echo '<a href="' . esc_url($twitter) . '" target="_blank" rel="nofollow"><i class="ti-twitter-alt"></i></a>';
                                                }

                                                if ($facebook) {
                                                    echo '<a href="' . esc_url($facebook) . '" target="_blank" rel="nofollow"><i class="ti-facebook"></i></a>';
                                                }

                                                if ($instagram) {
                                                    echo '<a href="' . esc_url($instagram) . '" target="_blank" rel="nofollow"><i class="ti-instagram"></i></a>';
                                                }

                                                // Add more social links as needed

                                                echo '</div>';
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- end author-box -->

                            <div class="more-posts">
                                <div class="previous-post">
                                        <span class="post-control-link pb-1">Previous Post</span>
                                        <span class="post-name"><?php previous_post_link('%link', '&laquo; Previous Post: %title'); ?></span>
                                </div>
                                <div class="next-post">
                                        <span class="post-control-link pb-1">Next Post</span>
                                        <span class="post-name"><?php next_post_link('%link', 'Next Post: %title &raquo;'); ?></span>        
                                </div>
                            </div>

                            <div class="comments-area">
                                <div class="comments-section">
                                    <?php comments_template(); ?>                   
                                </div> <!-- end comments-section -->
                            </div> <!-- end comments-area -->
                        </div>
                    </div>
                    <div class="col col-lg-4 col-12">
                        <div class="blog-sidebar">
                            <?php dynamic_sidebar( 'sidebar_1' ); ?>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-blog-single-section -->

<?php get_footer(); ?>