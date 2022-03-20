    <!-- <div>
        <h2 class="element">New Products</h2>
        <p>Check out our latest added products</p>
    </div> -->
    <!-- <div class="grid-container"> -->
        <div class="col-1">
            <div class="prod-img">
                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>"></a>
            </div>
            <div class="price">
                <?php
                    echo '<span>&dollar;</span>' . get_post_meta( $post->ID, "price", true );
                ?>
            </div>
            <div class="published-date">
                Published: <?php echo get_the_date(); ?>
            </div>
            <div class="prod-category"><?php the_category(); ?></div>
            <div class="prod-title">
                <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
            </div>
            <div class="buy-btn">
                <a href="<?php the_permalink(); ?>"><button>Details &plus; Bonus</button></a>
            </div>
            <div class="rating">
            &#9733; &#9733; &#9733; &#9734; &#9734; (0)
            </div>
        </div>
    <!-- </div> -->
    <!-- .Grid Container Class -->
    