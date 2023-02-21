<?php
global $post, $tipologia_notizia, $ct, $servizio;

$container_class = "bg-white";

?>

<section class="section <?php echo $container_class; ?> py-5">
	<div class="container">

        <?php
        // Includo pagina customizzabile
        $page_id = 1157;  //Page ID
        $page_data = get_post( $page_id ); 
        $title = $page_data->post_title; 
        $content = apply_filters('the_content', $page_data->post_content);
        echo $content;
        ?>
        
	</div><!-- /container -->
</section><!-- /section -->