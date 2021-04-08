<?php
/**
 * Template part for l'affichage des blocs de cours dans font-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 4w4-theme-dmp
 */
global $tPropriete;
?>

<article>
	<!--<?php the_post_thumbnail('thumbnail'); ?>-->
	<p><?php echo $tPropriete['sigle'] . " - " . $tPropriete['typeCours'] . " - " . $tPropriete['nbHeure'] ; ?></p>
	<a href="<?php echo get_permalink() ?>"><?php echo $tPropriete['titrePartiel']; ?></a>
	<p>Session : <?php echo $tPropriete['session']; ?></p>
</article>

