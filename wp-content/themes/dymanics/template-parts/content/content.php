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

<div class="col-sm-6 col-lg-4 blog-isotope-item" style="position: absolute; left: 0px; top: 0px;">
	<div class="itemContainer zn_columns zn_columns3">
		<div class="itemThumbnail">
			<!-- Image -->
			<a href="<?php the_permalink(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/2093-photo-nh9cas_360x180_01d.jpg" class="wp-post-image"
					alt="Требования к процессу тестирования РЗА  для снижения влияния человеческого фактора">
			</a>
			<!--/ Image -->
		</div>

		<div class="post_details itemCategory">
			<span class="catItemDateCreated kl-blog-item-date updated">27 мая 2021</span>
			<span class="Author">Смирнов Ю.Л.</span>
		</div>

		<div class="itemHeader">
			<h3 class="itemTitle">
				<a href="<?php the_permalink(); ?>"><?php get_the_title() ?></a>
			</h3>
		</div>
		<div class="clear"></div>
	</div>
</div>