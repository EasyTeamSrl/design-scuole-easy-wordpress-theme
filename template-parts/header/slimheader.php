<!-- ### INIZIO MODIFICA EASYTEAM.ORG ### -->
<!--<div id="pre-header" class="bg-bluelectric">-->
<div id="pre-header" class="bg-petrol">
<!-- ### FINE MODIFICA EASYTEAM.ORG ### -->
    <div class="container">
        <div class="row variable-gutters">
            <div class="col-6">
                <a href="https://www.miur.gov.it/" target="_blank" aria-label="Ministero dell?istruzione e del Merito">
                    <strong>Ministero dell'Istruzione e del Merito</strong>
                </a>
            </div><!-- /col-6 -->
   
            <div class="col-6 header-utils-wrapper">
                <div class="header-utils">
            <!-- ### INIZIO MODIFICA EASYTEAM.ORG ### -->
            <span class="mr-2 d-none d-lg-block"><?php echo '<a href="' . get_site_url() . '/notizie-da-miur-usr-at/">' ?><?php _e("Notizie da MIM-USR-AT", "design_scuole_italia"); ?></a></span>
            <div class="icon-wrapper">
            <svg class="svg-tag"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-tag"></use></svg>
            </div><!-- /icon-wrapper -->
            <!--<span class="mr-2 d-none d-lg-block"><?php echo '<a href="' . get_site_url() . '/pubblicita-legale/">' ?><?php _e("Pubblicità legale", "design_scuole_italia"); ?></a></span>
            <div class="icon-wrapper">
            <svg class="svg-product"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-product"></use></svg>
            </div><!-- /icon-wrapper -->                   
            <!-- ### FINE MODIFICA EASYTEAM.ORG ### -->
                    <?php
                    if(!is_user_logged_in()) {
                        get_template_part("template-parts/header/header-anon");
                    }else{
                        get_template_part("template-parts/header/header-logged");
                    }
                    ?>
                </div><!-- /header-utils -->
            </div><!-- /col-6 -->
        </div><!-- /row -->
    </div><!-- /container -->
</div>
<?php
