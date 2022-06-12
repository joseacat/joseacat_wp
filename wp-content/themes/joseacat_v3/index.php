<?php
/**
 * Index principal
 */


// Cabecera
get_header(); ?>

<?php
if(have_posts()){
    ?>
    <main class="contenido-blog">
		<section class="listado-posts">
			<?php
			while(have_posts()){
				the_post();
			?>
				<article class="item-blog">
					<header>
						<a class="titulo" href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
						<span class="fecha">
							<?php echo get_the_date('d/m/Y'); ?>
						</span>
					</header>
					<div>
						<?php the_excerpt(); ?>
					</div>
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

// Footer
get_footer();
