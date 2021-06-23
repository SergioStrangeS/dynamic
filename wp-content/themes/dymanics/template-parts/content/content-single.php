<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

<div id="page_header" class="page-subheader site-subheader-cst">
	<div class="bgback"></div>

	<div class="th-sparkles"></div>

	<div class="kl-bg-source__bgimage" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/header.jpg); 
		            background-repeat:no-repeat; 
		            background-attachment:scroll; 
		            background-position-x:center; 
		            background-position-y:center; 
		            background-size:cover">
	</div>

	<div class="kl-bg-source__overlay"></div>

	<div class="ph-content-wrap">
		<div class="ph-content-v-center">
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="subheader-titles">

							<h1 class="subheader-maintitle"><?= the_title(); ?></h1>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>






</div>
<div class="post_details itemCategory">


	<span class="catItemDateCreated kl-blog-item-date updated"></span>

<section class="hg_section pbottom-50 blockArticle">
	<div class="container">
		<div class="row">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
				<header class="entry-header">
					<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
				</header>
				<?php endif; ?>

				<?= get_the_post_thumbnail(); ?>

				<div class="entry-content">
					<?php
					the_content(
						sprintf(
							wp_kses(
								/* translators: %s: Post title. Only visible to screen readers. */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						)
					);

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
							'after'  => '</div>',
						)
					);
					?>
				</div><!-- .entry-content -->

			</article><!-- #post-<?php the_ID(); ?> -->
		</div>
	</div>
</section>
