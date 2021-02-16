<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package smkplusalfarhan
 */

?>

	<article id=" post-<?php the_ID(); ?>" <?php post_class("space-y-2 xl:grid xl:grid-cols-4 xl:space-y-0 xl:items-baseline"); ?>>
		<div class="text-base font-medium leading-6 text-gray-500 entry-meta">
			<?php the_date() ?>
		</div><!-- .entry-meta -->
		<div class="space-y-5 xl:col-span-3">
			<header class="entry-header">
				<?php
				if (is_singular()) :
					the_title('<h1 class="mb-4 text-2xl font-bold leading-8 tracking-tight entry-title">', '</h1>');
				else :
					the_title('<h2 class="mb-4 text-2xl font-bold leading-8 tracking-tight entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
				endif;

				?>
			</header><!-- .entry-header -->

			<?php smkplusalfarhan_post_thumbnail(); ?>

			<div class="prose entry-content">
				<?php
				the_excerpt()
				?>
			</div><!-- .entry-content -->
		</div>


	</article>