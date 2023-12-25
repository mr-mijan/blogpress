<?php get_header(); ?>
        <!-- start error-404-section -->
        <section class="error-404-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="content clearfix">
                            <div class="error">
                                <img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/error-404.png')?>" alt="">
                            </div>
                            <div class="error-message">
                                <h3>Oops! Page Not Found!</h3>
                                <p>We’re sorry but we can’t seem to find the page you requested. This might be because
                                    you have typed the web address incorrectly.</p>
                                <a href="<?php echo get_home_url(); ?>" class="theme-btn">Back to home</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end error-404-section -->

<?php get_footer(); ?>