<?php
// Aquí todas las funciones extras de la plantilla

/**
 * Pinta el logo o la cabecera si no está la imagen configurada
 */
function pintar_logo(){
    $texto = '';
    $logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($logo_id, 'full');
    if(has_custom_logo()){
        $texto = '<img src="' . esc_url($logo[0]) . '">';
	}else{
        $texto = get_bloginfo( 'name' );
	}
    return $texto;
}


/**
 * Añade migas de pan
 */
function custom_breadcrumbs() {
       
  echo '<a href="'.home_url().'" rel="nofollow">' . get_bloginfo('name') . '</a>';
  if(is_home()){
    echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
    echo "Blog";
  }elseif (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    }elseif(is_post_type_archive('portfolio')){
      echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
      echo "Portfolio";
    }elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}