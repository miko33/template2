<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximun-scale=1.0, user-scalable=0" />
    <?php wp_head(); ?>
    <?php wp_footer();?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <title><?php the_title() ?></title>
</head>
<body class="main">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v8.0&appId=607341153242438&autoLogAppEvents=1" nonce="6WchhMxi"></script>
    <div class="overlay-sidebar">
        <a href="javascript:void(0);" class="bar-trigger">
            <i class="fas fa-times fa-2x"></i>
        </a>
    </div>
    <!-- Section Header -->
    <?php get_header() ?>
    <!-- end secttion header -->
        <div class="body-container">
            
            <div class="container news-container">
                <div class="col-md-12" id="news">
                    <div class="running-text-wrapper">
                        <div class="running-text-header">BERITA :</div>
                        <div class="marquee-wrapper">
                            <div class="marquee">
                                <marquee behavior="" direction="">Liverpool Berhasil Mengunci Gelar Sebagai Juara Premiere League Musim 20/21 dengan Total Perolehan Poin 93.</marquee> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section id="content">
                <div class="container main-content">
                    <div class="row content">
                    <div class="col-sm-9 berita-terkini">
                            <div class="row bt-content-wraper">
                                <div class="col-sm-12 content-page">
                                <?php
                                    if( have_posts() ):
                                        while( have_posts() ): the_post();
                                ?>
                                <nav aria-label="breadcrumb">
                                    <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
                                    
                                </nav>
                                
                                <h2><?php the_title() ?></h2>
                                <span><?php the_author() ?></span>
                                <span>| <?php the_time() ?></span>
                                <div class="bar-social-share social-desktop">
                                    <div class="social-share">
                                        <?php dynamic_sidebar('sidebar1') ?>
                                    </div>
                                </div>

                                <div class="content-pages-headline">
                                    <div class="image-headline-page">
                                            <?php the_post_thumbnail() ?>
                                    </div>
                                    <div class="bar-social-share social-mobile">
                                        <div class="social-share">
                                        <?php dynamic_sidebar('sidebar1') ?>
                                        </div>
                                    </div>
                                    <div class="article-body-first">
                                    <?php the_content() ?>
                                    </div>
                                </div>
                                <div class="tag-box">
                                    <h3 class="related-content-hd">
                                        TAG TERKAIT:
                                    </h3>
                                    <div>
                                        <ul class="list-tag">
                                            <li> <a href=""> Tags </a></li>
                                            <?php the_tags( '<li>', '</li><li>', '</li>' ); ?>
                                        </ul>
                                        
                                    </div>

                                </div>

                                <?php
                                endwhile;
                                else:
                                echo 'tidak ada post';
                                endif;
                                ?>
                                <div class="related-content">
                                    <?php dynamic_sidebar('sidebar2') ?>
                                </div>
                                <div class="content-comment">
                                    <h3 class="comment-header">
                                        KOMENTAR
                                    </h3>
                                    <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5" data-width=""></div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-4  berita-populer" >
                            <div class="row">
                            <div class="col-sm-12 bp-header-border">
                                <label class="title-head-bp"> <a href="">Berita Populer <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/arrow-elipse.png" alt=""></a></label>
                            </div>
                            <?php
                                    global $post;
                                    $args = array( 'numberposts' => 10, 'offset'=> 1, 'category' => 0 );
                                    $myposts = get_posts( $args );
                                    foreach( $myposts as $post ) :  setup_postdata($post); ?>
                                <div class="row content-bp">
                                     <div class="col-sm-12 col-5 thumbnail-bp">
                                        <a href="<?php the_permalink(); ?>" class="link-thumbs-bp">
                                            <?php the_post_thumbnail('thumb-bp'); ?>
                                        </a>
                                    </div>
                                    <div class="col-sm-12 col-7 header-content-bp">
                                        <label class="time-content"><?php the_time()  ?></label>
                                        <h4 class="head-title-content-bp"><a href="<?php the_permalink(); ?>" class="head-title-content-link-bp"><?php the_title(); ?></a></h4>
                                    </div> 
                                    </div>
                                    <?php endforeach; ?>
                                <div class="col-sm-12 col-12 bv-header-border">
                                    <label class="title-head-bp"> <a href="">Berita Video <img src="./assets/img/misc/arrow-elipse.png" alt=""></a></label>
                                </div>


                                <?php
                                $args = array(
                                    'post_type' => 'post',
                                     'posts_per_page' => 5,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'post_tag',
                                            'field'    => 'name',
                                            'terms'    => 'video',
                                        ),
                                    ),
                                );
                                $query = new WP_Query( $args );  
                                
                                ?>

                               

                                <?php if ( $query->have_posts() ) :  ?>
                                  
                                <?php $header = true; while ( $query->have_posts() ) : $query->the_post(); ?>

                                <?php if($header) {
                                        $header = false; ?>
                                
                                <div class="row content-bv">
                                    <div class="col-sm-12 col-5 thumbnail-bv">
                                        <a href="https://www.youtube.com/embed/TB9XzvB_SWs" target="_blank">
                                            <?php the_post_thumbnail('thumb-vid')?>
                                            <img src="/assets/img/content/img-content3.png" class="thumb-vid" alt="">
                                            <div>
                                                <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/play-video.png" class="play-vid" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-12 title-vid-bv">
                                    <h4 class="title-vid">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
                                        </a>
                                    </h4>
                                </div>

                                <?php } else { ?>
                                
                                <div class="col-sm-12 title-vid-bv">
                                    <h4 class="title-vid">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
                                        </a>
                                    </h4>
                                </div>
                                

                               


                                <?php } endwhile; ?>
                                <?php else : ?>
                                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                <?php endif; ?>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>               
            </section>

            <section class="footer" style="background-color: black;">
                <div class="footer-container container" style="padding: 10px 10px;">
                    <div class="row" style="margin: 0;">
                        <div class="col-sm-2">
                            <a href="" class="footer-logo-link">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/kdbolalogofoot.png" alt="">
                            </a>
                        </div>
                        <div class="col-sm-10">
                            <p style="margin: 0; padding: 0; text-align: center; font-size: 14px; color: #c7c7c7;">2020 ©KDbola.com All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
</body>
</html>