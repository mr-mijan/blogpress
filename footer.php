
        <!-- start of wpo-site-footer-section -->
        <footer class="wpo-site-footer">
            <div class="wpo-upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="widget about-widget">
                                <?php dynamic_sidebar( 'footer_1' ); ?>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="widget link-widget">
                                <?php dynamic_sidebar( 'footer_2' ); ?>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="widget tag-widget">
                                <?php dynamic_sidebar( 'footer_3' ); ?>
                            </div>
                        </div>

                        <div class="col col-lg-2 col-md-6 col-sm-12 col-12">
                            <div class="widget social-widget">
                                <?php dynamic_sidebar( 'footer_4' ); ?>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div>
            <div class="wpo-lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <p class="copyright"><?php echo esc_html(get_theme_mod('footer_copyright')); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of wpo-site-footer-section -->
    </div>
    <!-- end of page-wrapper -->

<?php wp_footer(); ?>
</body>
</html>