<?php
/**
 * Plantilla para mostrar el Error404.
 */

// Cabecera
get_header(); ?>

<main class="">
	<div class="contenido-404">
		<h1 class="titulo">
			<?php echo __('Error404', 'wordpyacat'); ?>
		</h1>
		<p>
			
		</p>
		<div>
			<img src="<?php echo get_template_directory_uri(); ?>/recursos/img/Moco_Idle.gif" alt="<?php _x('Moco', 'wordpyacat'); ?>">
		</div>
	</div>
</main>

<?php
// Footer
get_footer();
