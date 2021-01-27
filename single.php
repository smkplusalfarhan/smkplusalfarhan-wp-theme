<?php get_header() ?>

<div class="flex flex-col">
	<?php while (have_posts()) : the_post(); ?>

		<div class="relative mx-auto md:order-2 md:mt-4 xl:container xl:px-5">
			<div class="absolute w-full h-full opacity-50 md:hidden bg-gradient-to-r from-black via-transparent to-transparent">.</div>
			<div class="absolute top-0 left-0 flex items-center pt-6 pl-5 text-white md:hidden">
				<svg viewBox="0 0 492 492" class="w-4 mr-4 fill-current">
					<path d="M464.344 207.418l.768.168H135.888l103.496-103.724c5.068-5.064 7.848-11.924 7.848-19.124 0-7.2-2.78-14.012-7.848-19.088L223.28 49.538c-5.064-5.064-11.812-7.864-19.008-7.864-7.2 0-13.952 2.78-19.016 7.844L7.844 226.914C2.76 231.998-.02 238.77 0 245.974c-.02 7.244 2.76 14.02 7.844 19.096l177.412 177.412c5.064 5.06 11.812 7.844 19.016 7.844 7.196 0 13.944-2.788 19.008-7.844l16.104-16.112c5.068-5.056 7.848-11.808 7.848-19.008 0-7.196-2.78-13.592-7.848-18.652L134.72 284.406h329.992c14.828 0 27.288-12.78 27.288-27.6v-22.788c0-14.82-12.828-26.6-27.656-26.6z" />
				</svg> Kembali
			</div>

			<?php the_post_thumbnail('large', array('class' => 'object-cover w-full max-w-5xl shadow-lg')); ?>

		</div>
		<div class="px-5 mx-auto md:max-w-3xl md:order-1">
			<h1 class="mt-4 text-xl font-bold leading-tight text-gray-700 sm:text-3xl md:text-5xl md:mt-12"><?php the_title() ?></h1>
			<div class="block mt-3 text-gray-700"><?php the_date() ?> in <span class="inline-block font-bold"><?php the_category() ?></span></div>
		</div>
		<div class="max-w-3xl px-5 mx-auto mt-4 text-lg text-gray-700 md:order-3 md:text-xl content">
			<?php the_content() ?>
		</div>

	<?php endwhile; ?>

</div>
<div class="mt-12 bg-white md:mt-32">
	<div class="max-w-6xl px-5 py-12 mx-auto lg:container md:py-32">
		<h2 class="mb-4 text-4xl font-semibold md:mb-12">Berita Lainnya</h2>
		<div class="py-8 overflow-x-auto" style="scrollbar-width: none;">

			<?php
			$the_query = new WP_Query(array(
				'category_name' => '',
				'posts_per_page' => 5,
			));
			?>

			<ul class="inline-flex space-x-4 ">

				<?php if ($the_query->have_posts()) : ?>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

						<li class="flex-shrink-0 w-64">
							<?php the_post_thumbnail('medium', array('class' => 'h-56 object-cover w-full shadow-lg')); ?>
							<div class="mt-4 text-gray-700"><?php the_date() ?></div>
							<h3 class="mt-2 text-xl font-semibold leading-tight"><?php the_title(); ?></h3>
						</li>

					<?php endwhile; ?>

					<?php wp_reset_postdata(); ?>

				<?php else : ?>
					<p><?php __('No News'); ?></p>
				<?php endif; ?>

			</ul>
		</div>
	</div>
</div>

<?php get_footer() ?>