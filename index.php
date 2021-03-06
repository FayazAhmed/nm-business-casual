<?php get_header(); ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active " >
                                <img class="img-responsive img-full" id="slider_1" src=<?php echo get_theme_mod('fuzzy_slider_img_1'); ?> alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" id="slider_2" src=<?php echo get_theme_mod('fuzzy_slider_img_2'); ?> alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" id="slider_3" src=<?php echo get_theme_mod('fuzzy_slider_img_3'); ?> alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name" id="brand-name"><?php echo get_theme_mod('fuzzy_welcom_to'); ?></h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>N-Media</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

     
        <?php
        if( have_posts() ){
          
          while( have_posts() ){

            
            the_post();
            ?>

            <div class="row">
                <div class="box">
                    <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                        <hr>
                        <?php

                            if( has_post_thumbnail() ){
                            the_post_thumbnail('medium',array('class'=>'img-thumbnail post-img img-responsive pull-left'));
                            }
                            else {
                                echo '<img  class="img-thumbnail post-img img-responsive pull-left" id="custome_image"  src="'.get_stylesheet_directory_uri(). '/img/slide-3.jpg" />';
                            }

                        ?>
                        <h2 class="intro-text">
                            <a href="<?php the_permalink(); ?>" ><strong><?php the_title();?></strong></a>
                        </h2>
                        <hr>
                        <p>
                            <?php the_excerpt(); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-default btn-sm post-button pull-right">READ MORE</a>
                    </div>
                </div>
            </div>
          <?php
          }
          
        }
        ?>
    </div>
    <!-- /.container -->
<?php get_footer(); ?>