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

       // ### INIZIO MODIFICA EASYTEAM.ORG
                get_template_part("template-parts/home/ultimenotizie");
                get_template_part("template-parts/home/includecustom2");
                get_template_part("template-parts/home/includecustom1");
                get_template_part("template-parts/home/includecustom3");
         // ### FINE MODIFICA EASYTEAM.ORG 

            $home_is_selezione_automatica = dsi_get_option("home_is_selezione_automatica", "homepage");
        
                get_template_part("template-parts/hero/informazioniutili");
                get_template_part("template-parts/home/notizie", "circolari");
                get_template_part("template-parts/home/contenuti-in-evidenza");
        
            if($home_is_selezione_automatica == "true_horizontal") {
                get_template_part("template-parts/home/novita", "orizzontale");
 
            }else if($home_is_selezione_automatica != "false") {
                get_template_part("template-parts/home/novita", "verticale");
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
        
        $home_show_argomenti = dsi_get_option("home_show_argomenti", "homepage");
        if(!$home_show_argomenti) $home_show_argomenti = "true_manual";
        
        $argomenti = dsi_get_option("home_argomenti", "homepage");
        if($home_show_argomenti == "true_evidenza") $argomenti = dsi_get_option("argomenti_evidenza", "argomenti");
        
        if (is_array($argomenti) && count($argomenti)) {
        ?>
        <section class="section bg-white">
            <?php get_template_part("template-parts/hero/argomenti"); ?>
            <?php get_template_part("template-parts/home/list", "argomenti"); ?>
        </section>
			<?php
		}
                
        ?>
    </main>
<?php
get_footer();
