<?php
/**
 * Listado de post de una categoría, etiqueta...
 */


// Cabecera
get_header(); ?>

<?php
if(have_posts()){
    ?>
    <main class="contenido-blog">
    	<header class="cabecera-portfolio">
    		<h1><?php echo __('Algunos de mis trabajos.'); ?></h1>
			<span><?php echo __('(Y otros que por confidencialidad no puedo decir.)', 'joseacat'); ?></span>
    	</header>
		<section class="listado-portfolio">
			<?php
			while(have_posts()){
				the_post();
			?>
				<article class="item-portfolio">
                	<a class="link" href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
                		<?php echo get_the_post_thumbnail(get_the_ID(), 'medium'); ?>
						<span class="titulo"><?php echo get_the_title(); ?></span>
					</a>
				</article>
		<?php
	}
		?>
		</section>
    </main>
    <?php
}else{
	?>
	<h1><?php echo __('No hay contenido', 'wordpycat'); ?></h1>
	<?php
}
?>
<div class="paginacion acotado">
	<?php
	echo paginate_links(array(
		'prev_text'    => '←',
		'next_text'    => '→',
	));
	?>
</div>
<?php
// Footer
get_footer();
