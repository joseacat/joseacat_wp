<?php
/**
 * Plantilla para mostrar el contenido de la página.
 */

// Cabecera
get_header();
?>

<main class="contenido-page">
	<?php
	the_title('<h1>','</h1>');
	the_content();
	?>
</main>

<?php
// Footer
get_footer();
