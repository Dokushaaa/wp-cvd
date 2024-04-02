<?php 
// template name: home
?>
<?php get_header() ?>

<section class="banner">
        <div class="container">
            <div class="banner__wrapper">
                <div class="banner__text">
                    <h1><?php echo get_field('bannertext') ?></h1>
                    <p><?php echo get_field('bannerlabel') ?></p>
                    <a href="" class="btn yellow"><?php echo get_field('bannerbutton') ?></a>
                </div>
                <img src="<?php echo get_field('bannerimage') ?>" alt="">
            </div>
        </div>
    </section>

    <section class="hm-services">
        <div class="container">
            <div class="hm-services__wrapper">

            <?php 
                    $args = array(
                    'post_type' => 'servicePost', 
                    'posts_per_page' => 3,
                    );
                    $newQuery = new WP_Query($args)
                ?>
                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

                <div class="hm-services__item">
                    <i class="<?php echo get_field('posticon')?>"></i>
                    <h4><?php the_title()?></h4>
                    <p><?php the_excerpt()?></p>
                    <a href="" class="btn yellow"><?php echo get_field('postbutton')?></a>
                </div>

                <?php
                    endwhile;
                    else :
                        echo "no available content yet";
                    endif;
                    wp_reset_postdata();
                ?>
                


            </div>
        </div>
    </section>

    <section class="abt">
        <div class="container">
            <div class="abt__wrapper">
                <img src="<?php echo get_field('aboutmeimg') ?>" alt="">
                <div class="abt__text">
                    <h3><?php echo get_field('aboutmeheading') ?></h3>
                    <p><?php echo get_field('aboutmeparagraph1') ?></p>
                    <p><?php echo get_field('aboutmeparagraph2') ?></p>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="ltrends">
        <div class="container">
            <div class="ltrends__title">
                <h2>Latest Trends</h2>
                <p>Latest happenings on virtual space</p>
            </div>
            <div class="ltrends__wrapper">

            
            <?php 
                    $args = array(
                    'post_type' => 'trendsPost', 
                    'posts_per_page' => 3,
                    );
                    $newQuery = new WP_Query($args)
                ?>
                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

                <div class="ltrends__card">
                    <img src="<?php echo get_field('trendingimg')?>" alt="">
                    <div class="ltrends__card__text">
                        <h4><?php the_title()?></h4>
                        <p><?php the_excerpt()?></p>
                        <a href=""><?php echo get_field('trendingreadmore')?></a>
                    </div>
                </div>

                <?php
                    endwhile;
                    else :
                        echo "no available content yet";
                    endif;
                    wp_reset_postdata();
                ?>
                

                <!-- <div class="ltrends__card">
                    <img src="./img/latest1.png" alt="">
                    <div class="ltrends__card__text">
                        <h4>Designing for a cause</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam eligendi reiciendis inventore.</p>
                        <a href="">Read more . . .</a>
                    </div>
                </div>
                <div class="ltrends__card">
                    <img src="./img/latest2.png" alt="">
                    <div class="ltrends__card__text">
                        <h4>Designing for a cause</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam eligendi reiciendis inventore.</p>
                        <a href="">Read more . . .</a>
                    </div>
                </div>
                <div class="ltrends__card">
                    <img src="./img/latest3.png" alt="">
                    <div class="ltrends__card__text">
                        <h4>Designing for a cause</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam eligendi reiciendis inventore.</p>
                        <a href="">Read more . . .</a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <section class="free">
        <div class="container">
            <div class="free__wrapper">
                <h2>Feel free to talk to us about your projects!</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, itaque.</p>
                <a href="" class="btn dark">CONTACT US</a>
            </div>
        </div>
    </section>
    <?php get_footer() ?>