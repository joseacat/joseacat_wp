<?php
/**
 * Listado de post de una categoría, etiqueta...
 */


// Cabecera
get_header(); ?>

<?php
if(have_posts()){
	while(have_posts()){
	the_post(); 
	?>
		<a href="<?php the_permalink(); ?>">
			<?php the_title('<h1>','</h1>'); ?>
		</a>
		<?php the_excerpt(); ?>
		<?php
	}
}else{
	?>
	<h1><?php echo __('No hay contenido', 'wordpycat'); ?></h1>
	<?php
}
?>
<div class="paginacion">
	<?php
	$src_next = get_template_directory_uri() . '/recursos/img/icono_flecha_derecha.svg';
	$src_prev = get_template_directory_uri() . '/recursos/img/icono_flecha_derecha.svg';
	echo paginate_links(array(
		'prev_text'    => '<img src="' . $src_next . '" title="' . __('Siguiente', 'marketingparadise') . '">',
		'next_text'    => '<img src="' . $src_prev . '" title="' . __('Anterior', 'marketingparadise') . '">',
	));
	?>
</div>
<?php
// Footer
get_footer();