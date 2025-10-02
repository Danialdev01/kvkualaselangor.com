<?php
/**
 * The template for displaying blog posts page
 */
?>

<?php get_header(); ?>

<main style="min-height: 80dvh;" class="p-3 md:p-5 w-full">
    <div class="container mx-auto w-full">
        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Main Content -->
            <main class="w-full lg:w-3/4">
                <!-- Breadcrumb -->
                <nav class="flex mb-6" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="text-gray-600 hover:text-primary">
                                <?php _e('Utama', 'textdomain'); ?>
                            </a>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-primary">Aktiviti</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <!-- Page Header -->
                <header class="mb-8">
                    <h1 class="text-4xl font-bold text-gray-900 mb-4">Aktiviti Terkini</h1>
                    <p class="text-lg text-gray-600">Semua artikel dan berita terkini</p>
                </header>

                <!-- Posts Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 mb-12">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                            $read_time = ceil(str_word_count(strip_tags(get_the_content())) / 200);
                            $categories = get_the_category();
                            $category_name = !empty($categories) ? $categories[0]->name : '';
                            ?>
                            
                            <article class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-gray-100">
                                <!-- Featured Image -->
                                <?php if ($thumbnail_url) : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php echo esc_url($thumbnail_url); ?>" 
                                             alt="<?php the_title_attribute(); ?>" 
                                             class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                                    </a>
                                <?php else : ?>
                                    <div class="w-full h-48 bg-gray-100 flex items-center justify-center">
                                        <span class="text-gray-400 text-sm">Tiada Imej</span>
                                    </div>
                                <?php endif; ?>

                                <!-- Card Content -->
                                <div class="p-5">
                                    <!-- Category and Date -->
                                    <div class="flex items-center justify-between mb-3">
                                        <?php if ($category_name) : ?>
                                            <span class="inline-block bg-primary text-white text-xs px-3 py-1 rounded-full">
                                                <?php echo esc_html($category_name); ?>
                                            </span>
                                        <?php endif; ?>
                                        <span class="text-xs text-gray-500"><?php echo get_the_date('M j, Y'); ?></span>
                                    </div>

                                    <!-- Title -->
                                    <h2 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2">
                                        <a href="<?php the_permalink(); ?>" class="hover:text-primary transition-colors">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>

                                    <!-- Excerpt -->
                                    <p class="text-gray-600 mb-4 text-sm line-clamp-3">
                                        <?php
                                        $excerpt = get_the_excerpt();
                                        if (empty($excerpt)) {
                                            $excerpt = get_the_content();
                                        }
                                        echo wp_trim_words(strip_tags($excerpt), 20, '...');
                                        ?>
                                    </p>

                                    <!-- Read More and Read Time -->
                                    <div class="flex items-center justify-between">
                                        <a href="<?php the_permalink(); ?>" class="text-primary font-medium hover:underline text-sm flex items-center">
                                            Baca Selanjutnya
                                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                        <span class="text-xs text-gray-500 bg-gray-100 px-2 py-1 rounded"><?php echo $read_time; ?> min</span>
                                    </div>
                                </div>
                            </article>

                        <?php
                        endwhile;
                    else :
                        ?>
                        <div class="col-span-full text-center py-12">
                            <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-gray-600 text-lg">Tiada post ditemui.</p>
                            <p class="text-gray-500 text-sm mt-2">Post akan muncul di sini apabila diterbitkan.</p>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Pagination -->
                <div class="flex justify-center mb-12">
                    <?php
                    the_posts_pagination(array(
                        'mid_size' => 2,
                        'prev_text' => __('&laquo; Sebelumnya'),
                        'next_text' => __('Seterusnya &raquo;'),
                    ));
                    ?>
                </div>
            </main>

            <!-- Sidebar -->
            <aside class="lg:w-1/4">
                <div class="sticky top-24 space-y-6">
                    <!-- Quick Links Card -->
                    <div class="bg-white p-4 rounded-xl shadow-md">
                        <h3 class="text-lg font-bold text-gray-900 mb-3">IKUTI KAMI</h3>
                        <p class="text-sm text-gray-600 mb-3">Ikuti kami di platform media sosial untuk informasi terkini.</p>
                        
                        <div class="space-y-3">
                            <!-- Telegram -->
                            <a href="https://t.me/studentkvks" target="_blank" class="flex items-center gap-3 p-3 bg-blue-50 hover:bg-blue-100 rounded-lg transition-colors group">
                                <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white mt-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.562 8.197l-1.67 7.894c-.23 1.125-.96 1.406-1.945.875l-5.36-3.938-2.067-1.94c-.225-.225-.42-.42-.42-.803 0-.45.42-.675.75-1.125l7.444-6.89c.6-.45 1.125-.45 1.65.075l1.125 1.125c.375.375.6.6.6 1.125 0 .375-.225.75-.6 1.125z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900 group-hover:text-blue-600">Telegram</p>
                                    <p class="text-xs text-gray-500">Channel Rasmi</p>
                                </div>
                            </a>

                            <!-- Facebook -->
                            <a href="https://www.facebook.com/share/17BrBy8CF6/" target="_blank" class="flex items-center gap-3 p-3 bg-blue-50 hover:bg-blue-100 rounded-lg transition-colors group">
                                <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white mt-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900 group-hover:text-blue-600">Facebook</p>
                                    <p class="text-xs text-gray-500">Halaman Rasmi</p>
                                </div>
                            </a>

                            <!-- Instagram -->
                            <a href="https://www.instagram.com/kvkualaselangor_official?igsh=MTQ5dGdzcWt4NzNibA==" target="_blank" class="flex items-center gap-3 p-3 bg-pink-50 hover:bg-pink-100 rounded-lg transition-colors group">
                                <div class="w-8 h-8 bg-pink-500 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white mt-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm6.406-11.845c0 .795-.646 1.44-1.44 1.44s-1.44-.645-1.44-1.44.646-1.44 1.44-1.44 1.44.645 1.44 1.44z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900 group-hover:text-pink-600">Official KVKS</p>
                                    <p class="text-xs text-gray-500">Profil Rasmi</p>
                                </div>
                            </a>

                            <a href="https://www.instagram.com/mpp.kvkualaselangor?igsh=MWUxd3l6Z3B0dm80Mg==" target="_blank" class="flex items-center gap-3 p-3 bg-pink-50 hover:bg-pink-100 rounded-lg transition-colors group">
                                <div class="w-8 h-8 bg-pink-500 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white mt-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm6.406-11.845c0 .795-.646 1.44-1.44 1.44s-1.44-.645-1.44-1.44.646-1.44 1.44-1.44 1.44.645 1.44 1.44z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900 group-hover:text-pink-600">MPP KVKS</p>
                                    <p class="text-xs text-gray-500">Profil Rasmi</p>
                                </div>
                            </a>

                            <!-- YouTube -->
                            <a href="https://youtube.com/yourchannel" target="_blank" class="flex items-center gap-3 p-3 bg-red-50 hover:bg-red-100 rounded-lg transition-colors group">
                                <div class="w-8 h-8 bg-red-600 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white mt-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900 group-hover:text-red-600">YouTube</p>
                                    <p class="text-xs text-gray-500">Channel Rasmi</p>
                                </div>
                            </a>

                            <!-- Add other social links as needed -->
                        </div>
                    </div>

                    <!-- Latest News Section -->
                    <div class="bg-white p-4 rounded-xl shadow-md">
                        <h3 class="text-lg font-bold text-gray-900 mb-3">POST TERKINI</h3>
                        <div class="space-y-4">
                            <?php
                            $recent_posts = new WP_Query(array(
                                'post_type' => 'post',
                                'posts_per_page' => 3,
                                'post_status' => 'publish',
                                'orderby' => 'date',
                                'order' => 'DESC'
                            ));

                            if ($recent_posts->have_posts()) :
                                while ($recent_posts->have_posts()) : $recent_posts->the_post();
                                    $read_time = ceil(str_word_count(strip_tags(get_the_content())) / 200);
                                    ?>
                                    <div class="border-b border-gray-200 pb-4 last:border-0 last:pb-0">
                                        <h4 class="font-bold text-base text-gray-900 mb-1">
                                            <a href="<?php the_permalink(); ?>" class="hover:text-primary"><?php the_title(); ?></a>
                                        </h4>
                                        <p class="text-sm text-gray-600 mb-2">
                                            <?php echo wp_trim_words(get_the_excerpt(), 10, '...'); ?>
                                        </p>
                                        <a href="<?php the_permalink(); ?>" class="text-primary text-sm font-medium flex items-center">
                                            Baca dalam <?php echo $read_time; ?> minit
                                        </a>
                                    </div>
                                <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                                echo '<p class="text-gray-600 text-sm">Tiada post terkini.</p>';
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</main>

<?php get_footer(); ?>