<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package smkplusalfarhan
 */

get_header();
?>



<main id="primary" class="max-w-5xl px-4 mx-auto divide-y divide-gray-200 site-main">

	<?php if (have_posts()) : ?>

		<header class="py-10 page-header">
			<?php
			the_archive_title('<h1 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 sm:text-4xl sm:leading-10 md:text-6xl md:leading-14 page-title">', '</h1>');
			the_archive_description('<div class="text-lg leading-7 text-gray-500 archive-description">', '</div>');
			?>
		</header><!-- .page-header -->

		<ul class="divide-y divide-gray-200">
			<?php
			/* Start the Loop */
			while (have_posts()) :
			?>
				<li class="py-12">
					<?php
					the_post();

					/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
					get_template_part('template-parts/content-archive', get_post_type());
					?>
				</li>
			<?php
			endwhile;

			?>

		</ul>

	<?php

		the_posts_navigation();

	else :

		get_template_part('template-parts/content-archive', 'none');

	endif;
	?>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
