    <!-- <div class="single-container"> -->
        <div class="single-sec-1">
            <div class="single-sec-container">
                <div class="single-prod-img single-col-6">
                    <img src="<?php the_post_thumbnail_url(); ?>">
                </div>
                <div class="single-col-6">
                    <div class="single-prod-title">
                        <h3><?php the_title() ?></h3>
                    </div>
                    <div class="single-prod-text">
                        <p>
                            <?php the_excerpt(); ?>
                        </p>
                    </div>
                    <div class="single-cta-btn">
                    <?php 
                       $affiliate = get_post_meta( $post->ID, 'affiliate_link', true );
                    ?>
                        <a target="_blank" href="<?php echo $affiliate; ?>">Grab this Product + Bonus Here!</a>
                    </div>
                    <div class="single-rating">
                        &#9733; &#9733; &#9733; &#9734; &#9734; (0)
                    </div>
                    <div class="tags">
                        <?php the_tags('<ul><span>Tags: </span><li>','</li>,<li>','</li></ul>'); comments_number();?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section 2 -->
        <!-- <div class="single-sec-2">
            <div class="single-sec-container-2">
                <div class="single-sec-2-title">
                    <h2>Features and Benefits</h2>
                    <p>Plus you get Access to Our Exclusive Membership Area Packed with Training</p>
                </div>
                <div class="single-sec-2-demo">
                    <div class="col-6">
                        <h3>Product Features</h3>
                         <p>The right tool for all your business need. Get it at the best price before the price will increase</p>
                        <ul>
                            <li>Feature 1</li>
                            <li>Feature 2</li>
                            <li>Feature 3</li>
                            <li>Feature 4</li>
                            <li>Feature 5</li>
                            <li>Feature 6</li>
                            <li>Feature 7</li>
                            <li>Feature 8</li>
                            <li>Feature 9</li>
                            <li>Feature 10</li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <h3>Awesome Benefits</h3>
                        <ul>
                            <li>Benefit 1</li>
                            <li>Benefit 2</li>
                            <li>Benefit 3</li>
                            <li>Benefit 4</li>
                            <li>Benefit 5</li>
                            <li>Benefit 6</li>
                            <li>Benefit 7</li>
                            <li>Benefit 8</li>
                            <li>Benefit 9</li>
                            <li>Benefit 10</li>
                        </ul>
                    </div>
                </div>
                <div class="single-sec-2-cta">
                    <a>Grab this plus bonus here!</a>
                </div>
            </div>
        </div> -->
        <!-- Section 3 -->
        <!-- <div class="single-sec-3">
            <div class="single-sec-container-3">
                <div class="single-sec-3-title">
                    <h2>Watch the Demo Video</h2>
                    <p>Plus you get Access to Our Exclusive Membership Area Packed with Training</p>
                </div>
                <div class="single-sec-3-demo">
                    <div class="col-4">
                        <h3>See How it works</h3>
                        <p>The right tool for all your business need. Get it at the best price before the price will increase</p>
                        <div>
                            <a>Grab it now</a>
                        </div>
                    </div>
                    <div class="col-8">
                        <video width="900" controls>
                            <source src="images/cat.mp4" type="video/mp4">
                            <source src="images/cat.mp4" type="video/ogg">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                </div>
                <div class="single-sec-3-cta">
                    <a>Grab this + bonus here!</a>
                </div>
            </div>
        </div> -->
        <!-- /Section 3 -->
        <!-- Section 4 -->
        <!-- <div class="single-sec-4">
            <div class="single-sec-container-4">
                <div class="single-sec-4-header">
                    <h2>10 Done For You Bonuses Already Included</h2>
                    <p>Get Started Today With 10 Done For You Bonuses Ready To Use On Any Promotion!</p>
                </div>
                <div class="single-page-bonus">
                    <div><img src="images/bonus.jpg"></div>
                    <div><img src="images/bonus.jpg"></div>
                    <div><img src="images/bonus.jpg"></div>
                    <div><img src="images/bonus.jpg"></div>
                    <div><img src="images/bonus.jpg"></div>
                </div>
                <div class="single-sec-3-cta">
                    <a>Grab this + bonuses here!</a>
                </div>
            </div>
        </div> -->
    <!-- </div> -->

                    <?php
                        wp_list_comments(
                            array(
                                'avatar_size' => 120,
                                'style' => '<div>',
                            )
                            );
                    ?>
                    </div>
                </div>
<?php
    the_content();
?>

<?php
    if( comments_open() ){
        comment_form(
            array(
                'class_form' => '',
                'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title"',
                'title_reply_after' => '</h2>'
            )
            );
    }
?>