<?php $type = "warga-top-menu"; get_header();?>

<main class="pt-10">

    <center>
        <h3 class="text-3xl font-bold text-black">Warga</h3>

        <?php get_template_part('components/aktiviti'); ?>
        <br><br><br>

    </center>

    <?php get_template_part('includes/section', 'content');?>

</main>

<?php get_footer();?>