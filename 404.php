<?php $type = "top-menu"; get_header();?>

<main class="pt-10">

    <center>
        <div style="color: #2b266d;" class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center">
                <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-primary-600 dark:text-primary-500">404</h1>
                <p class="mb-4 text-3xl tracking-tight font-bold md:text-4xl ">Halaman Tidak Ditemui</p>
                <!-- <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">Maaf, Halaman yang anda cari tidak dapat ditemui</p> -->
                <a href="#" class="inline-flex text-black bg-primary-600 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900 my-4">Kembali ke laman Utama</a>
            </div>   
        </div>
    </center>

    <?php get_template_part('includes/section', 'content');?>

</main>

<?php get_footer();?>