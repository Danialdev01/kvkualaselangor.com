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

                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // Get the thumbnail URL
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