<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		::-webkit-scrollbar {
			width: 0px;
			background: transparent;
		}
	</style>
	<?php wp_head() ?>
</head>

<body class="bg-gray-100">
	<header class="hidden bg-white shadow-md md:block">
		<div class="container flex items-center justify-between px-5 py-8 mx-auto">
			<h1 class="text-xl font-bold text-green-600-smkplusa"><a href="<?php echo get_home_url(); ?>">SMK Plus Al-Farhan</a></h1>
			<ul class="flex space-x-16 text-gray-600">
				<li>Berita</li>
				<li>Profil</li>
				<li>Al-Farhan Tv</li>
				<li>
					<a href="/contact">Kontak</a>
				</li>
			</ul>
		</div>
	</header>