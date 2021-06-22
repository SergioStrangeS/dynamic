<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

							<h1 class="subheader-maintitle">Фотоконкурс</h1>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>






</div>
<div class="post_details itemCategory">


	<span class="catItemDateCreated kl-blog-item-date updated"> </span>



</div>
<section class="hg_section pbottom-50 blockArticle">
	<div class="container">
		<div class="row">

				<!-- если есть записи -->
				<?php if (have_posts()) : ?>
				<!-- пока есть записи, извлекать по одной записи -->
				<?php while (have_posts()) : the_post(); ?>
				<div class="card" style="width: 18rem;">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/2093-photo-nh9cas_360x180_01d.jpg"
						class="card-img-top">
					<div class="card-body">
						<h5 class="card-title"><?php get_the_title() ?></h5>
						<p class="card-text">Some quick example text to build on the card title and
							make up the bulk of the card's content.</p>
						<a href="<?php the_permalink(); ?>" class="btn btn-primary stretched-link">Перейти</a>
					</div>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>

				<div>
					<!-- <ul class="pagination">
								<li class="disabled"><span>Первая</span></li>
								<li class="disabled"><span>«</span></li>
								<li class="active"><a href="https://dynamics.com.ru/pages?page=1">1</a></li>
								<li><a href="https://dynamics.com.ru/pages?page=2">2</a></li>
								<li><a href="https://dynamics.com.ru/pages?page=3">3</a></li>
								<li><a href="https://dynamics.com.ru/pages?page=4">4</a></li>
								<li class="control"><a href="https://dynamics.com.ru/pages?page=2">»</a></li>
								<li class="control"><a href="https://dynamics.com.ru/pages?page=4">Последняя</a>
								</li>
							</ul> -->

					<?php the_posts_pagination(); ?>
				</div>

		</div>
	</div>
</section>

<?php
get_footer();