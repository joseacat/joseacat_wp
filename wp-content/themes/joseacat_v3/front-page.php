<?php
/**
 * Plantilla para mostrar el contenido de la página.
 */

// Cabecera
get_header();
?>

<div class="contenido-page">
	<?php
	the_content();
	?>
</div>

<?php
// Footer
get_footer();
