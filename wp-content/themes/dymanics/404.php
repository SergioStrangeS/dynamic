<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
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

							<h1 class="subheader-maintitle">Ошибка 404 =(</h1>

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
				<div id="primary" class="content-area">
					<main id="main" class="site-main">

						<div class="error-404 not-found">
							<header class="page-header">
								<h1 class="page-title">
									<?php _e( 'Oops! That page can&rsquo;t be found.', 'twentynineteen' ); ?></h1>
							</header><!-- .page-header -->

							<div class="page-content">
								<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentynineteen' ); ?>
								</p>
								<?php get_search_form(); ?>
							</div><!-- .page-content -->
						</div><!-- .error-404 -->

					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
		</div>
	</section>

	<?php
get_footer();