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
				<div class="card">
					<?= the_post_thumbnail('large ', array('class' => "rounded card-img-top")); ?>
					<div class="card-body">
						<p class="card-text"><?= the_content(); ?></p>
						<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
					</div>
				</div>
			</div>
		</div>
	</section>