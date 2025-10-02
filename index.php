<?php get_header(); ?>

<main style="min-height: 80dvh;" class="p-3 md:p-5 w-full">
    <div class="container mx-auto w-full">
        
        <?php if (is_home() && !is_front_page()) : ?>
            <!-- This is the blog posts page - show card layout -->
            <?php get_template_part('includes/section', 'blog-cards'); ?>
        <?php else : ?>
            <!-- This is a regular page - show normal content -->
            <?php get_template_part('includes/section', 'content'); ?>
        <?php endif; ?>
        
    </div>
</main>

<?php get_footer(); ?>