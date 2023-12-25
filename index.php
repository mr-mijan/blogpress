<?php get_header(); ?>
    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-breadcumb-wrap">
                    <h2><?php echo esc_html( the_archive_title() ); ?></h2>
                    <ul>
                        <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
                        <li><span><?php the_archive_title(); ?></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of wpo-breadcumb-section-->


<!-- start wpo-blog-pg-section -->
<section class="wpo-blog-pg-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
            <?php get_template_part('template-part/blog-content'); ?>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="blog-sidebar">
                    <?php dynamic_sidebar( 'sidebar_1' ); ?>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end wpo-blog-pg-section -->

<?php get_footer(); ?>