<?php
global $post, $tipologia_notizia, $ct, $servizio;

$container_class = "bg-gray-light";

?>

<section class="section <?php echo $container_class; ?> py-5">
	<div class="container">
		<div class="title-section mb-5">
			<h2 class="h2"><?php _e("Ultime notizie", "design_scuole_italia"); ?></h2>
		</div><!-- /title-large -->
		<div class="it-carousel-wrapper carousel-notice it-carousel-landscape-abstract-three-cols splide" data-bs-carousel-splide>
			<div class="splide__track">
				<ul class="splide__list">
					<?php
					$args = array('order' => 'ASC',
   								'posts_per_page' => 12,
                                'tax_query' => array(
									array(
            							'taxonomy' => 'tipologia-articolo',
            							'field' => 'slug',
            							'terms' => 'notizie',
        								),
                                  ),
   							);
					$posts = get_posts($args);
					foreach ($posts as $post){ ?>				
					<li class="splide__slide">
						<div class="it-single-slide-wrapper h-100">
							<?php get_template_part("template-parts/single/card", "vertical-thumb"); ?>
						</div>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div><!-- /carousel-large -->
		<div class="pt-3 text-center">
			<a class="text-underline" href="<?php echo get_category_link(160); ?>"><strong>Vedi tutte le notizie</strong></a>
		</div>
	</div><!-- /container -->
</section><!-- /section -->