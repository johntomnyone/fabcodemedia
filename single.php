<?php
    get_header();
?>

    <?php
        if (have_posts()) :
            while(have_posts()) : the_post();
                get_template_part( 'template-parts/content', 'product' );
        endwhile;
    else:
        get_404_template();
    endif;
    ?>

 <?php
    get_footer();
 ?>