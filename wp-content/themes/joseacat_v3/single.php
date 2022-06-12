<?php
/**
 * Plantilla para mostrar el contenido de una entrada.
 */
 
// Cabecera
get_header();
?>

<main class="contenido-page">
	<header class="cabecera-single">
		<div class="imagen-single">
			<?php
			if(has_post_thumbnail()){
				the_post_thumbnail('full');
			}
			?>
		</div>
		<div class="titulo-single">
			<h1 class="titulo"><?php echo get_the_title(); ?></h1>
		</div>
		<div class="meta-single">
			<span class="fecha"><?php echo get_the_date('d/m/Y'); ?></span>
			<?php
			$categories = get_the_category();
			if(!empty($categories)){
				?>
				<span><a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>"><?php echo esc_html($categories[0]->name); ?></a></span>
				<?php
			}
			?>
		</div>
	</header>
	<section class="contenido-single">
		<?php the_content(); ?>
	</section>
</main>
<?php
// Footer
get_footer();
