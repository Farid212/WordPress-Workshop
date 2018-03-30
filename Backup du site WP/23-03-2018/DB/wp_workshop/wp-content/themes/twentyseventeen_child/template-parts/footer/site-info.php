<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<!-- Cette ligne ajoute dans votre footer un copyright qui va changer automatiquement chaque année grâce à la fonction PHP date-->
<p class="copyright" id="footer-info"> 2015-<?php echo date('Y'); ?> BECODE | Mention légales | Site Map</p>

<!-- On modifie égalemeent le "Proudly powered by WordPress" en le remplaçant par Becode
et on change le lien qui redirigeait vers le site de WordPress pour rediriger vers le site de Becode.org -->
<div class="site-info">
	<a href="<?php echo esc_url( __( 'https://www.becode.org/', 'twentyseventeen' ) ); ?>">

<?php printf( __( 'Proudly powered by %s', 'twentyseventeen' ), 'BeCode' );
?>

</a>
</div><!-- .site-info -->
