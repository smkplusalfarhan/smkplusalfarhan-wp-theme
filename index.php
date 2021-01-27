<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <?php wp_head(); ?>

</head>

<body class="text-gray-700 bg-gray-100">

    <nav class="absolute top-0 z-50 flex flex-wrap items-center justify-between w-full px-2 py-5 navbar-expand-lg">
        <div class="container flex flex-wrap items-center justify-between px-4 mx-auto">
            <div class="relative flex justify-between w-full lg:w-auto lg:static lg:block lg:justify-start">
                <a class="inline-block py-2 mr-4 text-xl font-bold leading-none text-white whitespace-no-wrap " href="#">SMK Plus
                    Al-Farhan</a><button class="block px-3 py-1 text-xl leading-none bg-transparent border border-transparent border-solid rounded outline-none cursor-pointer lg:hidden focus:outline-none" type="button" onclick="toggleNavbar('example-collapse-navbar')">
                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 text-white fill-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <div class="items-center flex-grow hidden mt-4 bg-white rounded-lg lg:flex lg:bg-transparent lg:shadow-none" id="example-collapse-navbar">

                <ul class="flex flex-col list-none lg:flex-row lg:ml-auto">
                    <li class="flex items-center">
                        <a class="flex items-center px-3 py-4 text-gray-800 lg:text-white lg:hover:text-gray-300 lg:py-2" href="#"><span class="inline-block ml-2">Berita</span></a>
                    </li>
                    <li class="flex items-center">
                        <a class="flex items-center px-3 py-4 text-gray-800 lg:text-white lg:hover:text-gray-300 lg:py-2" href="#"><span class="inline-block ml-2">Profil</span></a>
                    </li>
                    <li class="flex items-center">
                        <a class="flex items-center px-3 py-4 text-gray-800 lg:text-white lg:hover:text-gray-300 lg:py-2" href="#"><span class="inline-block ml-2">Al-Farhan TV</span></a>
                    </li>
                    <li class="flex items-center">
                        <a class="flex items-center px-3 py-4 text-gray-800 lg:text-white lg:hover:text-gray-300 lg:py-2" href="#"><span class="inline-block ml-2">Kontak</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <div class="relative flex items-center content-center justify-center pt-16 pb-32" style="min-height: 85vh;">
            <div class="absolute top-0 w-full h-full bg-center bg-cover" style='background-image: url("https://smkplusalfarhan.sch.id/wp-content/uploads/2021/01/hero-bg.jpg");'>
                <span id="blackOverlay" class="absolute w-full h-full bg-black opacity-50"></span>
            </div>
            <div class="container relative mx-auto">
                <div class="flex flex-wrap items-center">
                    <div class="w-full px-4 xl:w-6/12">
                        <div class="pr-12 text-white">
                            <p class="text-3xl">
                                Bersama kami
                            </p>
                            <h1 class="text-4xl font-semibold leading-tight lg:text-5xl">
                                Raih Masa Depan Anda
                            </h1>
                            <p class="mt-2 text-lg">
                                Mewujudkan SMK Plus Al-Farhan yang berakhlakul karimah, mandiri, profesional, berprestasi dan berbudaya lingkungan
                            </p>
                            <button class="flex items-center my-4 font-semibold focus:outline-none" type="button" onclick="toggleProfil('video-profil')">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55.467 39" class="w-8 mr-4">
                                    <path id="youtube-brands" d="M69.241,70.1a6.969,6.969,0,0,0-4.9-4.936C60.011,64,42.666,64,42.666,64S25.322,64,21,65.167a6.97,6.97,0,0,0-4.9,4.936c-1.159,4.354-1.159,13.437-1.159,13.437s0,9.084,1.159,13.437a6.866,6.866,0,0,0,4.9,4.857C25.322,103,42.666,103,42.666,103s17.345,0,21.67-1.167a6.866,6.866,0,0,0,4.9-4.857C70.4,92.623,70.4,83.539,70.4,83.539S70.4,74.456,69.241,70.1ZM36.994,91.787V75.292l14.5,8.247Z" transform="translate(-14.933 -64)" fill="#fff" />
                                </svg>

                                <span class="tracking-wider">LIHAT VIDEO PROFIL</span>


                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div style="background-color: rgba(0, 0, 0, .5);" class="fixed top-0 left-0 z-50 items-center hidden w-full h-full overflow-y-auto bg-black shadow-lg " id="video-profil">
        <div class="container mx-auto overflow-y-auto rounded-lg lg:px-32">
            <div class="bg-black rounded">
                <div class="flex justify-end pt-2 pr-4">
                    <button class="text-4xl leading-none text-white hover:text-gray-300 focus:outline-none" type="button" onclick="toggleProfil('video-profil')">&times;</button>
                </div>
                <div class="px-8 py-8 modal-body">
                    <div class="videowrapper">
                        <iframe width="854" height="480" src="https://www.youtube.com/embed/JqSyQTC1XWk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <section class="container relative px-5 mx-auto">
        <div class="flex flex-col items-center justify-between px-10 py-10 mb-8 -mt-20 space-y-5 bg-white xl:w-full md:space-y-0 md:flex-row">
            <div class="akreditasi lg:w-1/2">
                <div class="flex items-center">
                    <img src="https://raw.githubusercontent.com/smkplusalfarhan/cdn/main/web/svg/akreditasi.svg" alt="akreditasi">
                    <div class="ml-6">
                        <h2 class="font-bold">Terakreditasi "A" (UNGGUL)</h2>
                        SK : 245/12568/5688.2018
                    </div>
                </div>
            </div>
            <div class="akreditasi lg:w-1/2">
                <div class="flex items-center">
                    <img src="https://raw.githubusercontent.com/smkplusalfarhan/cdn/main/web/svg/adiwiyata.svg" alt="akreditasi">
                    <div class="ml-6">
                        <h2 class="font-bold">Adiwiyata Nasional</h2>
                        Sekolah Berbudaya Lingkungan
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-12 pb-24">
        <div class="container px-6 mx-auto text-center">
            <div class="font-semibold text-gray-700">Kurikulum 2013</div>
            <div class="mb-12 text-4xl font-bold">Kompetensi Keahlian</div>
            <div class="md:grid md:grid-cols-3 md:gap-5">
                <div class="">
                    <img src="https://raw.githubusercontent.com/smkplusalfarhan/cdn/main/web/svg/mm.svg" alt="" class="mx-auto">
                    <div class="my-4 text-lg font-semibold">Multimedia</div>
                    <p class="text-sm text-gray-600">Sistem Komputer, Komputer dan Jaringan Dasar, Pemrograman Dasar, Dasar Desain Grafis, Desain Grafis Percetakan, Desain Media Interkatif, Animasi 2D dan 3D, Teknik Pengolahan Audio dan Video, Produk Kreatif dan Kewirausahaan</p>
                </div>
                <div class="mt-12 md:mt-0">
                    <img src="https://raw.githubusercontent.com/smkplusalfarhan/cdn/main/web/svg/bdp.svg" alt="" class="mx-auto">
                    <div class="my-4 text-lg font-semibold">Bisnis Daring dan Pemasaran</div>
                    <p class="text-sm text-gray-600">Marketing, Perencanaan Bisnis, Komunikasi Bisnis, Penataan Produk, Bisnis Online, Pengelolaan Bisnis Ritel, Administrasi
                        Transaksi, Produk Kreatif dan Kewirausahaan</p>
                </div>
                <div class="mt-12 md:mt-0">
                    <img src="https://raw.githubusercontent.com/smkplusalfarhan/cdn/main/web/svg/aphp.svg" alt="" class="mx-auto">
                    <div class="my-4 text-lg font-semibold">Agribisnis Pengolahan Hasil Pertanian</div>
                    <p class="text-sm text-gray-600">Penanganan Bahan Hasil Pertanian, Proses Pengolahan Hasil Pertanian, Pengendalian Mutu Hasil Pertanian, Produksi Pengolahan Hasil Nabati, Produksi Pengolahan Hasil Hewani, Produksi Pengolahan Komiditas Perkebunan dan Herbal, Keamanan Pangan, Penyimpanan dan Penggudangan</p>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-24 pb-12 bg-white">
        <div class="container px-6 mx-auto ">
            <div class="flex flex-col md:flex-row">
                <div class="flex items-center flex-shrink-0 mb-12 ml-8 md:ml-0 w-72 md:mb-0">
                    <img src="https://raw.githubusercontent.com/smkplusalfarhan/cdn/main/web/svg/dapodik.svg" alt="" class="mr-4">
                    <div>
                        <div class="mb-1 text-xl font-semibold leading-none">Data Pokok<br> Sekolah</div>
                        Tahun Pelajaran 2020/2021
                    </div>
                </div>
                <div class="flex justify-around w-full md:flex-1">
                    <div class="text-center">
                        <div class="text-5xl font-semibold leading-tight">627</div>
                        Peserta Didik
                    </div>
                    <div class="text-center">
                        <div class="text-5xl font-semibold leading-tight">18</div>
                        Rombel
                    </div>
                    <div class="text-center">
                        <div class="text-5xl font-semibold leading-tight">24</div>
                        PTK
                    </div>
                </div>
            </div>

            <a href="https://dapo.dikdasmen.kemdikbud.go.id/sekolah/AF9586728BD8DA4DBCD8#rekapitulasi" target="_blank" class="block mt-12 ml-8 text-sm text-green-600-smkplusa md:ml-0">Lihat lebih lengkap</a>

        </div>
    </section>

    <section class="">
        <div class="py-12 md:py-20">
            <div class="mb-4 text-center md:mb-12">
                <h2 class="text-3xl font-bold text-gray-700">Team SMK Plus Al-Farhan</h2>
                <div class="font-semibold text-gray-500">Pendidik dan Tenaga Kependidikan</div>
            </div>
            <div class="py-8">
                <div class="carousel" data-flickity='{ "cellAlign": "left", "contain": true, "freeScroll": true, "prevNextButtons": false, "pageDots": false }'>
                    <div class="hidden mr-40 lg:inline-block xl:mr-64"></div>
                    <div class="w-64 text-center carousel-cell">
                        <img src="http://wordpress.test/wp-content/uploads/2020/10/33890828_1918733821492946_3779355750560694272_o.jpg" alt="" class="object-cover w-32 h-32 mx-auto rounded-full">
                        <h3 class="mt-6 text-xl font-bold leading-tight text-gray-800">Agus Syarif H., S.Sos</h3>
                        <div class="mt-2 text-sm text-gray-700">Kepala Sekolah</div>
                    </div>
                    <div class="w-64 text-center carousel-cell">
                        <img src="http://wordpress.test/wp-content/uploads/2020/10/WhatsApp-Image-2020-10-20-at-10.15.49.jpeg" alt="" class="object-cover w-32 h-32 mx-auto rounded-full">
                        <h3 class="mt-6 text-xl font-bold leading-tight text-gray-800">Siti Marisah, S.S</h3>
                        <div class="mt-2 text-sm text-gray-700">Bendahara Umum</div>
                    </div>
                    <div class="w-64 text-center carousel-cell">
                        <img src="http://wordpress.test/wp-content/uploads/2020/10/WhatsApp-Image-2020-10-20-at-09.22.44.jpeg" alt="" class="object-cover w-32 h-32 mx-auto rounded-full">
                        <h3 class="mt-6 text-xl font-bold leading-tight text-gray-800">Helmina, S.Pd</h3>
                        <div class="mt-2 text-sm text-gray-700">Wakasek Kurikulum</div>
                    </div>
                    <div class="w-64 text-center carousel-cell">
                        <img src="http://wordpress.test/wp-content/uploads/2020/10/WhatsApp-Image-2020-10-20-at-09.22.44-4.jpeg" alt="" class="object-cover w-32 h-32 mx-auto rounded-full">
                        <h3 class="mt-6 text-xl font-bold leading-tight text-gray-800">Ani Handayani</h3>
                        <div class="mt-2 text-sm text-gray-700">Wakasek Kesiswaan</div>
                    </div>
                    <div class="w-64 text-center carousel-cell">
                        <img src="http://wordpress.test/wp-content/uploads/2020/10/pp-1.jpg" alt="" class="object-cover w-32 h-32 mx-auto rounded-full">
                        <h3 class="mt-6 text-xl font-bold leading-tight text-gray-800">Samsul Rizal</h3>
                        <div class="mt-2 text-sm text-gray-700">Wakasek Humas</div>
                    </div>
                    <div class="w-64 text-center carousel-cell">
                        <img src="http://wordpress.test/wp-content/uploads/2020/10/pp.jpg" alt="" class="object-cover w-32 h-32 mx-auto rounded-full">
                        <h3 class="mt-6 text-xl font-bold leading-tight text-gray-800">Pepen Suhendri S</h3>
                        <div class="mt-2 text-sm text-gray-700">Wakasek Sarpras</div>
                    </div>
                    <div class="w-64 text-center carousel-cell">
                        <img src="http://wordpress.test/wp-content/uploads/2020/10/WhatsApp-Image-2020-10-20-at-09.22.44-3-e1603161085611.jpeg" alt="" class="object-cover w-32 h-32 mx-auto rounded-full">
                        <h3 class="mt-6 text-xl font-bold leading-tight text-gray-800">Irpan Syauri</h3>
                        <div class="mt-2 text-sm text-gray-700">Kaprog Multimedia</div>
                    </div>
                    <div class="w-64 text-center carousel-cell">
                        <img src="http://wordpress.test/wp-content/uploads/2020/10/WhatsApp-Image-2020-10-20-at-09.22.44-1.jpeg" alt="" class="object-cover w-32 h-32 mx-auto rounded-full">
                        <h3 class="mt-6 text-xl font-bold leading-tight text-gray-800">Neni Nuraeni</h3>
                        <div class="mt-2 text-sm text-gray-700">Kaprog BDP</div>
                    </div>
                    <div class="w-64 text-center carousel-cell">
                        <img src="http://wordpress.test/wp-content/uploads/2020/10/95933091_252347992633746_4397148746975019008_o.jpg" alt="" class="object-cover w-32 h-32 mx-auto rounded-full">
                        <h3 class="mt-6 text-xl font-bold leading-tight text-gray-800">Dadan Hamdani</h3>
                        <div class="mt-2 text-sm text-gray-700">Kaprog APHP</div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="py-12 mx-auto md:py-24">
            <div class="container flex items-center justify-between px-5 mx-auto mb-4">
                <div class="flex">
                    <img src="https://raw.githubusercontent.com/smkplusalfarhan/cdn/main/web/svg/berita.svg" alt="" class="mr-5">
                    <div>
                        <h2 class="text-3xl font-bold leading-tight">Berita Terbaru</h2>
                        <div class="text-sm text-gray-700">Nasional PSMK, Pendidikan, Kegiatan Sekolah</div>
                    </div>
                </div>
                <div class="hidden md:block text-green-600-smkplusa">Lihat Semua Berita</div>
            </div>
            <div class="py-8">
                <div class="carousel" data-flickity='{ "cellAlign": "left", "contain": true, "freeScroll": true, "prevNextButtons": false, "pageDots": false  }'>

                    <div class="hidden mr-40 lg:inline-block xl:mr-64"></div>

                    <?php
                    // the query
                    $the_query = new WP_Query(array(
                        'posts_per_page' => 6,
                    ));
                    ?>

                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <div class="px-5 w-84 carousel-cell">
                                <?php the_post_thumbnail('medium', array('class' => 'object-cover w-full h-56 rounded-lg shadow-lg')); ?>
                                <div class="mt-4 text-sm text-gray-700"><?php the_date() ?> - <span class="inline-block font-bold text-green-700"><?php the_category() ?></span></div>
                                <h3 class="mt-2 text-xl font-bold leading-tight text-gray-800"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <div class="text-sm content">
                                    <?php echo get_the_excerpt(); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php else :
                        echo 'tidak ada post';
                    endif; ?>



                    <div class="hidden ml-40 lg:inline-block xl:ml-64"></div>

                </div>
            </div>
        </div>
    </section>

    <section class="pt-12 md:pt-24">
        <div class="container flex items-center justify-between px-5 mx-auto mb-12">
            <div class="flex">
                <img src="https://raw.githubusercontent.com/smkplusalfarhan/cdn/main/web/svg/instagram.svg" alt="" class="mr-5">
                <div>
                    <h2 class="text-3xl font-bold leading-tight">Gallery Photo</h2>
                    <div class="text-sm text-gray-700">Infografis, Kegiatan, Sarana dan Prasarana</div>
                </div>
            </div>
            <div class="hidden md:block text-green-600-smkplusa">Follow Us on Instagram</div>
        </div>
        <div class="">
            <div class="carousel" data-flickity='{ "freeScroll": true, "wrapAround": true, "prevNextButtons": false, "pageDots": false  }'>
                <img src="https://raw.githubusercontent.com/smkplusalfarhan/cdn/main/web/images/posts/img7.jpg" alt="" class="object-cover h-64 w-96 carousel-cell">
                <img src="https://raw.githubusercontent.com/smkplusalfarhan/cdn/main/web/images/posts/img8.jpg" alt="" class="object-cover h-64 w-96 carousel-cell">
                <img src="https://raw.githubusercontent.com/smkplusalfarhan/cdn/main/web/images/posts/img9.jpg" alt="" class="object-cover h-64 w-96 carousel-cell">
                <img src="https://raw.githubusercontent.com/smkplusalfarhan/cdn/main/web/images/posts/img10.jpg" alt="" class="object-cover h-64 w-96 carousel-cell">
                <img src="https://raw.githubusercontent.com/smkplusalfarhan/cdn/main/web/images/posts/img11.jpg" alt="" class="object-cover h-64 w-96 carousel-cell">
                <img src="https://raw.githubusercontent.com/smkplusalfarhan/cdn/main/web/images/posts/img12.jpg" alt="" class="object-cover h-64 w-96 carousel-cell">
            </div>
        </div>
        <div class="carousel" data-flickity='{ "freeScroll": true, "wrapAround": true, "prevNextButtons": false, "pageDots": false  }'>
            <img src="https://raw.githubusercontent.com/smkplusalfarhan/cdn/main/web/images/posts/img1.jpg" alt="" class="object-cover h-64 w-96 carousel-cell">
            <img src="https://raw.githubusercontent.com/smkplusalfarhan/cdn/main/web/images/posts/img2.jpg" alt="" class="object-cover h-64 w-96 carousel-cell">
            <img src="https://raw.githubusercontent.com/smkplusalfarhan/cdn/main/web/images/posts/img3.jpg" alt="" class="object-cover h-64 w-96 carousel-cell">
            <img src="https://raw.githubusercontent.com/smkplusalfarhan/cdn/main/web/images/posts/img4.jpg" alt="" class="object-cover h-64 w-96 carousel-cell">
            <img src="https://raw.githubusercontent.com/smkplusalfarhan/cdn/main/web/images/posts/img5.jpg" alt="" class="object-cover h-64 w-96 carousel-cell">
            <img src="https://raw.githubusercontent.com/smkplusalfarhan/cdn/main/web/images/posts/img6.jpg" alt="" class="object-cover h-64 w-96 carousel-cell">
        </div>
        </div>
        </div>
    </section>

    <section class="py-12 bg-black md:py-24">
        <div class="container px-5 mx-auto">
            <div class="flex items-center justify-between mb-12">
                <div class="flex">
                    <img src="https://raw.githubusercontent.com/smkplusalfarhan/cdn/main/web/svg/tv.svg" alt="" class="mr-5">
                    <div>
                        <h2 class="text-3xl font-bold leading-tight text-white">Al-Farhan TV</h2>
                        <div class="text-sm text-gray-500">Channel Youtube Official</div>
                    </div>
                </div>
                <a href="https://www.youtube.com/channel/UCqejvL7CLchNRzUIrBhZCng?sub_confirmation=1" class="hidden px-5 py-2 font-semibold text-white bg-red-700 rounded-sm md:block" target="_blank">SUBSCRIBE
                </a>
            </div>
            <div class="videowrapper">
                <iframe width="854" height="480" src="https://www.youtube.com/embed/WJugia2yr0E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <?php get_footer() ?>