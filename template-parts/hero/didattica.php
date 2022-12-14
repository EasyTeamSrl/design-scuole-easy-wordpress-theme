<!-- ### MODIFICHE EASYTEAM.ORG: TITLE DA H1 => H2 E DA H2 => H3 ### -->
<?php
global $post;

$testo_didattica = dsi_get_option("testo_didattica", "didattica");
if($testo_didattica == "")
    $testo_didattica = dsi_get_option("tipologia_scuola")." ".dsi_get_option("nome_scuola");
?>
    <section class="section bg-bluelectric bg-bluelectricgradient py-5 position-relative d-flex align-items-center overflow-hidden">
        <div class="container">
            <div class="row variable-gutters">
                <div class="col-md-6">
                    <div class="hero-title text-left">
                        <h2 class="p-0 mb-2"><?php the_title(); ?></h2>
                        <h3 class="h4 font-weight-normal"><?php echo $testo_didattica; ?></h3>
                    </div><!-- /hero-title -->
                </div><!-- /col-md-6 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section><!-- /section -->
