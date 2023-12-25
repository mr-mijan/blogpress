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
                        <li><?php the_title();?></li>
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
            <div class="col-md-12">
            <?php the_content(); ?>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end wpo-blog-pg-section -->

<?php get_footer(); ?>