<!-- Fabulous Code Media Theme -->
<?php
    get_header();
?>

    <?php
        if (have_posts()) :
            while(have_posts()) : the_post();
                get_template_part( 'template-parts/content', 'archive' );
        endwhile;
    else:
        get_404_template();
    endif;
    ?>
<div class="fcm-pagination">
<?php
    the_posts_pagination();
?>
</div>
 <?php
    get_footer();
 ?>