<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( !is_single() ) : ?>
<div class="entry-header site-width">
	<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
	<h4><?php the_date(); ?></h4>
</div><!-- .entry-header -->
<?php endif; ?>

<div class="entry-content site-width<?php if ( is_single() ) : echo " single"; endif; ?>">
	<?php
	  if ( is_single() ) :
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
				get_the_title()
			) );

			the_tags( '<span class="tags-links"><strong>Tags:</strong> ', ', ', '</span>' );
		else :
			the_excerpt();
		  echo "<a href=\"" . get_permalink() . "\" class=\"readmore\">READ FULL STORY</a>";
		endif;
	?>
</div><!-- .entry-content -->

<?php if ( is_single() ) : ?>
<div class="footer-nav">
  <div class="site-width">
  	<div class="nav-prev">
	    <?php previous_post_link('%link','PREVIOUS'); ?>
	  </div>
	  <div class="nav-home">
	    <a href="<?php echo home_url(); ?>">NEWS HOME</a>
	  </div>
	  <div class="nav-next">
	    <?php next_post_link('%link','NEXT'); ?>
	  </div>
	</div>
</div>
<?php endif; ?>