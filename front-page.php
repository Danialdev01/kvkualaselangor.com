<?php $type = "top-menu"; get_header();?>

<main class="pt-10">

    <?php get_template_part('components/aktiviti'); ?>
    <br><br><br>

    <!-- <section class="bg-center bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-gray-700 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">We invest in the world’s potential</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Get started
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
                <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Learn more
                </a>  
            </div>
        </div>
    </section> -->


    <center>
        <div class="pt-20 px-5" style="max-width: 72rem;">
            <!-- <div class="mb-6 text-2xl md:text-4xl italic font-semibold text-gray-900 dark:text-white">
                <p>"Bersama Membina Masa Depan."</p>
            </div> -->

            <video class="rounded-md w-full" class="px-10" loop autoplay muted>
                <source src="<?php echo esc_url( get_template_directory_uri());?>/src/video/promo.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <br>
    </center>

    <?php get_template_part('includes/section', 'content');?>

</main>

<?php get_footer();?>