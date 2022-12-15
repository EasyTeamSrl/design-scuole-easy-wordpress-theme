<!-- ### MODIFICHE EASYTEAM.ORG: TITLE DA H1 => H2 E DA H2 => H3 ### -->
<section class="section bg-bluelectric bg-bluelectricgradient py-5 position-relative d-flex align-items-center overflow-hidden">
    <div class="container">
        <div class="row variable-gutters">
            <div class="col-md-6">
                <div class="hero-title text-left">
                    <?php the_archive_title( '<h2 class="p-0 mb-2">', '</h2>' ); ?>
                    <?php
                    remove_filter('get_the_post_type_description', 'wpautop');
                    the_archive_description("<h3 class=\"h4 font-weight-normal\">","</h3>");
                    add_filter( 'get_the_post_type_description', 'wpautop' );
                    ?>
                </div><!-- /hero-title -->
            </div><!-- /col-md-6 -->
        </div><!-- /row -->
    </div><!-- /container -->
</section><!-- /section -->
