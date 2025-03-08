<?php get_header();?>

<main class="pt-10">

    <center>

        <div class="aktiviti-cards">
            <?php

                // Query to get all posts
                $args = array(
                    'post_type' => 'post', // Get only posts
                    'posts_per_page' => -1, // Get all posts
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) {
                    
                    while ($query->have_posts()) {
                        echo '<article class="card rounded-md">'; // Start an unordered list
                        $query->the_post(); // Set up post data

                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); // Get the thumbnail URL
                        // echo '<a href="' . get_permalink() . '">';
                        // echo '<img src="' . get_permalink() . '' . esc_url($thumbnail_url) . '" alt="' . esc_attr(get_the_title()) . '" />'; // Set the thumbnail as the src of an img tag
                        // echo '</a>'; // Link to the post
                        if (has_post_thumbnail()) {
                        }
                        echo '
                            <a href="' . get_permalink() . '">
                                <div class="card-content">
                                    <img src="'. esc_url($thumbnail_url) .'" alt="tumbnail-'.esc_attr(get_the_title()).'">
                                    <div class="text">
                                        <h3 class="text-black px-5 py-2 text-xl">'.esc_attr(get_the_title()).'</h3>
                                    </div>
                                </div>
                            </a>
                        ';
                        // echo '<li>';
                        // echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>'; // Link to the post
                        // echo '</li>';
                        echo '</article>'; // End the unordered list
                    }
                } else {
                    echo 'No posts found.';
                }

                // Reset post data
                wp_reset_postdata();
            ?>
        </div>
    </center>
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
        <div class="pt-20" style="max-width: 72rem;">
            <!-- <div class="mb-6 text-2xl md:text-4xl italic font-semibold text-gray-900 dark:text-white">
                <p>"Bersama Membina Masa Depan."</p>
            </div> -->

            <video class="rounded-md w-full" class="px-10" loop autoplay muted>
                <source src="<?php echo get_template_directory_uri()?>/src/video/promo.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <br>
    </center>

    <?php get_template_part('includes/section', 'content');?>

</main>

<?php get_footer();?>