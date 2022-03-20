<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <?php wp_head(); ?>
    </head>
    <body>
        <?php
            if (is_front_page() || is_page() || is_404()){
                get_template_part('template-parts/home', 'header');
            }elseif(is_single()){
                get_template_part( 'template-parts/single', 'header' );
            }
            
        ?>
        <div class="body-container">
            <!-- Hamburger -->
            <div class="ham-ext-container">
                <div class="ham-container" onclick="menu(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </div>
            <!-- Side section -->
            <div class="aside-container">
                <div class="icon-bar">
                    <h4><?php echo get_bloginfo( 'name' ); ?></h4>
                    <?php
                        if (function_exists('the_custom_logo')) {
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src( $custom_logo_id );
                        }
                    ?>
                    <a href="<?php the_permalink(); ?>" class="logo-img" ><img src="<?php echo $logo[0]; ?>" /></a>
                <?php
                    wp_nav_menu( 
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="" class="">%3$s</ul>'
                        )
                     )
                ?>
                    <!-- <a class="active" href="#"><i class="fa fa-home"></i><span>Home</span></a>
                    <a href="#"><i class="fa fa-search"></i><span>Search</span></a>
                    <a href="#"><i class="fa-brands fa-product-hunt"></i><span>New Products</span></a>
                    <a href="#"><i class="fa-solid fa-toolbox"></i><span>Helpful Tools</span></a>
                    <a href="#"><i class="fa-solid fa-bullhorn"></i><span>Launches</span></a>
                    <a href="#"><i class="fa-solid fa-blog"></i><span>Blog</span></a>
                    <a href="#"><i class="fa fa-trash"></i><span>Old Products</span></a> -->
                    <?php
                        dynamic_sidebar( 'sidebar-1' );
                    ?>
                </div>
            </div>
            <!-- Main Body & Grid -->
            <div class="main-body">
                <div class="page-title">
                    <h2>
                    <?php
                        if (is_front_page()) {
                            echo 'New Products';
                        }elseif(is_home()) {
                            echo 'New Launches';
                        }else {
                           the_title();
                        }
                    ?>
                    </h2>
                    <?php
                        if (is_front_page() || is_home()){
                         echo "<p>Check out our latest added products</p>";
                        };
                    ?>
                </div>
                <div class="main-body-container">
                    <div class="grid-container">