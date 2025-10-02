<?php if( have_posts() ): while( have_posts() ): the_post();?>

<div class="container mx-auto w-full">
    <div class="flex flex-col lg:flex-row gap-6 relative">
        <!-- Main Content -->
        <div class="w-full lg:w-3/4">
            <!-- Breadcrumb -->
            <nav class="flex mb-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="text-gray-600 hover:text-primary">
                            <?php _e('Utama', 'textdomain'); ?>
                        </a>
                    </li>
                    
                    <?php
                    $blog_page = get_option('page_for_posts');
                    
                    if (is_single() && $blog_page) {
                        echo '<li>';
                        echo '<div class="flex items-center">';
                        echo '<svg class="w-3 h-3 mx-1 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
                        echo '<a href="' . esc_url(get_permalink($blog_page)) . '" class="text-gray-600 hover:text-primary">' . get_the_title($blog_page) . '</a>';
                        echo '</div>';
                        echo '</li>';
                    } elseif (is_category()) {
                        echo '<li>';
                        echo '<div class="flex items-center">';
                        echo '<svg class="w-3 h-3 mx-1 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
                        echo '<a href="' . esc_url(get_permalink($blog_page)) . '" class="text-gray-600 hover:text-primary">' . get_the_title($blog_page) . '</a>';
                        echo '</div>';
                        echo '</li>';
                    } elseif (is_page() && !is_front_page()) {
                        $ancestors = get_post_ancestors(get_the_ID());
                        if ($ancestors) {
                            $ancestors = array_reverse($ancestors);
                            foreach ($ancestors as $ancestor) {
                                echo '<li>';
                                echo '<div class="flex items-center">';
                                echo '<svg class="w-3 h-3 mx-1 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
                                echo '<a href="' . esc_url(get_permalink($ancestor)) . '" class="text-gray-600 hover:text-primary">' . get_the_title($ancestor) . '</a>';
                                echo '</div>';
                                echo '</li>';
                            }
                        }
                    }
                    ?>

                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mx-1 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <span class="text-primary">
                                <?php
                                if (is_single()) {
                                    the_title();
                                } elseif (is_category()) {
                                    single_cat_title();
                                } elseif (is_page()) {
                                    the_title();
                                } elseif (is_archive()) {
                                    post_type_archive_title();
                                } elseif (is_search()) {
                                    printf(__('Search Results for: %s', 'textdomain'), get_search_query());
                                } elseif (is_404()) {
                                    _e('404 - Page Not Found', 'textdomain');
                                }
                                ?>
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Article Header -->
            <header class="mb-8">
                <h1 class="text-4xl font-bold text-gray-900 mt-2 mb-4"><?php the_title(); ?></h1>
                <div class="flex items-center text-gray-600 pb-5">
                    <div>
                        <p class="text-sm">Ditulis pada <?php echo get_the_date('F j, Y'); ?></p>
                    </div>
                </div>
            </header>

            <!-- Article Content -->
            <article class="prose max-w-none mb-12 w-full">
                <?php the_content(); ?>
            </article>
        </div>

        <!-- Sticky Sidebar -->
        <div class="lg:w-1/4">
            <div id="sticky-sidebar" class="space-y-6">
                <!-- Newsletter Card
                <div class="bg-white p-4 rounded-xl shadow-md">
                    <h3 class="text-lg font-bold text-gray-900 mb-3">FLOWBITE NEWS MORNING HEADLINES</h3>
                    <p class="text-sm text-gray-600 mb-3">Get all the stories you need-to-know from the most powerful name in news delivered first thing every morning to your inbox</p>
                    <form class="space-y-3">
                        <div>
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary focus:border-primary block w-full p-2 text-sm" placeholder="name@company.com" required>
                        </div>
                        <button type="submit" class="w-full text-white bg-primary hover:bg-primary/90 focus:ring-4 focus:outline-none focus:ring-primary/50 font-medium rounded-lg text-sm px-4 py-2 text-center">Subscribe</button>
                    </form>
                </div> -->

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
                    </div>
                </div>

                <!-- Latest News Section -->
                <div class="bg-white p-4 rounded-xl shadow-md">
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Aktiviti Terkini</h3>
                    <div class="space-y-4">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'post_status' => 'publish'
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                
                                $read_time = ceil(str_word_count(get_the_content()) / 20);
                                
                                echo '<div class="border-b border-gray-200 pb-4 last:border-0 last:pb-0">';
                                echo '<h4 class="font-bold text-base text-gray-900 mb-1 pt-2">';
                                echo '<a href="' . get_permalink() . '" class="hover:text-primary">' . get_the_title() . '</a>';
                                echo '</h4>';
                                echo '<p class="text-sm text-gray-600 mb-2">' . get_the_excerpt() . '</p>';
                                echo '<a href="' . get_permalink() . '" class="text-primary text-sm font-medium flex items-center">';
                                echo 'Baca dalam ' . $read_time . ' minit';
                                echo '</a>';
                                echo '</div>';
                            }
                            wp_reset_postdata();
                        } else {
                            echo '<p class="text-gray-600">Tiada post ditemui.</p>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endwhile; else: ?>
    <div class="container mx-auto w-full">
        <p class="text-center text-gray-600">Tiada kandungan ditemui.</p>
    </div>
<?php endif; ?>

<style>
/* Force sticky sidebar to work */
#sticky-sidebar {
    position: -webkit-sticky;
    position: sticky;
    top: 100px;
    align-self: flex-start;
}

/* Ensure parent containers don't break sticky */
.container {
    overflow: visible !important;
}

.flex {
    overflow: visible !important;
    align-items: flex-start;
}

/* Make sure images don't overflow */
.prose img {
    max-width: 100% !important;
    height: auto !important;
}

.prose {
    max-width: 100% !important;
    overflow-wrap: break-word !important;
}
</style>

<script>
// Robust sticky sidebar implementation
function initStickySidebar() {
    const sidebar = document.getElementById('sticky-sidebar');
    if (!sidebar) return;
    
    const mainContent = document.querySelector('.w-full.lg\\:w-3\\/4');
    const container = sidebar.closest('.flex');
    
    // Remove any conflicting classes
    sidebar.classList.remove('sticky', 'relative', 'fixed');
    
    let isSticky = false;
    let sidebarTop = 0;
    
    function calculateSticky() {
        if (window.innerWidth < 1924) {
            // Disable sticky on mobile
            sidebar.style.position = 'relative';
            sidebar.style.top = 'auto';
            isSticky = false;
            return;
        }
        
        const containerRect = container.getBoundingClientRect();
        const sidebarRect = sidebar.getBoundingClientRect();
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        // Calculate when to make sticky
        const shouldBeSticky = scrollTop > containerRect.top - 100;
        
        if (shouldBeSticky && !isSticky) {
            sidebar.style.position = 'fixed';
            sidebar.style.top = '100px';
            sidebar.style.width = sidebarRect.width + 'px';
            sidebar.style.zIndex = '100';
            isSticky = true;
        } else if (!shouldBeSticky && isSticky) {
            sidebar.style.position = 'relative';
            sidebar.style.top = 'auto';
            sidebar.style.width = 'auto';
            isSticky = false;
        }
        
        // Handle bottom boundary
        if (isSticky) {
            const containerBottom = containerRect.bottom + scrollTop;
            const sidebarBottom = scrollTop + sidebarRect.height + 100;
            
            if (sidebarBottom > containerBottom) {
                sidebar.style.position = 'absolute';
                sidebar.style.top = 'auto';
                sidebar.style.bottom = '0';
            } else {
                sidebar.style.position = 'fixed';
                sidebar.style.top = '100px';
                sidebar.style.bottom = 'auto';
            }
        }
    }
    
    // Initialize
    calculateSticky();
    
    // Add event listeners
    window.addEventListener('scroll', calculateSticky);
    window.addEventListener('resize', calculateSticky);
    
    console.log('Custom sticky sidebar initialized');
}

// Initialize when DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initStickySidebar);
} else {
    initStickySidebar();
}
</script>