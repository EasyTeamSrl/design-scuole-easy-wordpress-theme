<?php
/**
 * The template for displaying home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Design_Scuole_Italia
 */

get_header();
?>
    <main id="main-container" class="main-container redbrown">
        <?php
        if ( have_posts() ) :
            $messages = dsi_get_option( "messages", "home_messages" );
            if($messages && !empty($messages)) {
                get_template_part("template-parts/home/messages");
            }

            get_template_part("template-parts/hero/home");

 

            $home_is_selezione_automatica = dsi_get_option("home_is_selezione_automatica", "homepage");
            if($home_is_selezione_automatica == "false"){
//                get_template_part("template-parts/hero/informazioni");
                get_template_part("template-parts/home/articoli", "manuali");
                // ### INIZIO MODIFICA EASYTEAM.ORG
                get_template_part("template-parts/home/notizie", "circolari");
                // ### FINE MODIFICA EASYTEAM.ORG
                
            }else{
                get_template_part("template-parts/home/articoli", "eventi");
            }

            ?>
        <section class="section bg-white">
        <?php get_template_part("template-parts/hero/servizi"); ?>
        <?php get_template_part("template-parts/home/list", "servizi"); ?>
        </section>
            <?php
/*      ### INIZIO MODIFICA EASYTEAM.ORG ###
            $visualizzazione_didattica = dsi_get_option("visualizzazione_didattica", "didattica");
            if($visualizzazione_didattica == "scuole")
                get_template_part("template-parts/home/didattica", "cicli");
            else if($visualizzazione_didattica == "indirizzi")
                get_template_part("template-parts/home/didattica", "cicli-indirizzi");
        ### FINE MODIFICA EASYTEAM.ORG ###
*/
 
            // ### INIZIO MODIFICA EASYTEAM.ORG - SPOSTATA RIGA SUCCESSIVA, ORIGINARIAMENTE IN RIGA 22
            get_template_part("template-parts/home/banner");
//            get_template_part("template-parts/hero/risorsedidattiche");
            // ### FINE MODIFICA EASYTEAM.ORG
            get_template_part("template-parts/home/didattica", "risorse");

 //             get_template_part("template-parts/luogo/map");

        endif; // End of the loop.
        ?>
    </main>
<?php
get_footer();
