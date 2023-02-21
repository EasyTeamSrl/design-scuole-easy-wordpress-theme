<?php
/**
 * Template Name: Vuoto
 *
 * @package Easyteam.org SRL
 */
?>

    <main id="main-container" class="main-container">

         <?php
        while ( have_posts() ) :
            the_post();
            set_views($post->ID);
            ?>
            <section class="section bg-white">
                <div class="container">
                    <div class="row variable-gutters">
                        <div class="col-md-12 article-title-author-container">
                        </div><!-- /col-md-6 -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </section>

            <section class="section bg-white">
                <div class="container ">
                    <article class="article-wrapper">


                        <div class="row variable-gutters">
                            <div class="col-lg-12">
                                <?php
                                the_content();
                                ?>
                            </div>
                        </div>
                        <div class="row variable-gutters">
                            <div class="col-lg-12">
                                <?php
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;
                                ?>
                            </div>
                        </div>
                     </article>
                </div>
            </section>
        <?php
        endwhile; // End of the loop.
        ?>
    </main><!-- #main -->

<?php
