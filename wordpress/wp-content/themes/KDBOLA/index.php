<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximun-scale=1.0, user-scalable=0" />
    <?php wp_head(); ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <title><?php bloginfo('name') ?></title>
</head>
<body class="main">
    <div class="overlay-sidebar">
        <a href="javascript:void(0);" class="bar-trigger">
            <i class="fas fa-times fa-2x"></i>
        </a>
    </div>
    <!-- Section Header -->
    <?php get_header() ?>
    <!-- end secttion header -->
        <div class="body-container">
            
            <!-- <div class="container news-container">
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
            </div> -->
            <!-- <div class="carousel-container container">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                       <div class="item big-pic active" data-thumb="0">
                          <a href="">
                          <img src="./assets/img/content/img-content1.png" alt="Awesome Image"/>
                          </a>
                            <div class="category-carousel">
                                <a href="" class="category">Liga Indonesia</a>
                            </div>
                          <a href="" class="deskrip-large">
                            Duet Paling Mematikan di Bundesliga
                            Musim ini, Siapa yang Terbaik?
                          </a>
                       </div>
                       <div class="item big-pic" data-thumb="0">
                          <a href="">
                          <img src="./assets/img/content/img-content2.png" alt="Awesome Image"/>
                          </a>
                            <div class="category-carousel">
                                <a href="" class="category">Liga Indonesia</a>
                            </div>
                          <a href="" class="deskrip-large">
                          HEBOH DONG
                          </a>
                       </div>
                       <div class="item big-pic" data-thumb="0">
                          <a href="">
                          <img src="./assets/img/content/img-content3.png" alt="Awesome Image"/>
                          </a>
                            <div class="category-carousel">
                                <a href="" class="category">Liga Indonesia</a>
                            </div>
                          <a href="" class="deskrip-large">
                          COBA DONG
                          </a>
                       </div>
                       <div class="item big-pic" data-thumb="0">
                          <a href="">
                          <img src="./assets/img/content/img-content4.png" alt="Awesome Image"/>
                          </a>
                            <div class="category-carousel">
                                <a href="" class="category">Liga Indonesia</a>
                            </div>
                          <a href="" class="deskrip-large">
                          ENAK DONG
                          </a>
                       </div>
                    </div>
                 </div>
                 <div class="clearfix">
                    <div id="thumbcarousel" class="carousel slide" data-interval="false">
                       <div class="carousel-inner">
                          <div class="item active">
                             <div data-target="#carousel" data-slide-to="0" class="thumb">
                                <a href="" class="thumb-link">
                                   <img src="./assets/img/content/img-content1.png" alt="" class="thumb-img">
                                   <p>Bojan Krkic, ‘The Next 
                                      Lionel Messi’yang
                                      Menolak Disebut Gagal
                                   </p>
                                </a>
                             </div>
                             <div data-target="#carousel" data-slide-to="1" class="thumb">
                                <a href="" class="thumb-link">
                                   <img src="./assets/img/content/img-content2.png" alt="" class="thumb-img">
                                   <p>Update Terbaru
                                      Negosiasi Valentino Rossi
                                      Bersama Yamaha: Masih..
                                   </p>
                                </a>
                             </div>
                             <div data-target="#carousel" data-slide-to="2" class="thumb">
                                <a href="" class="thumb-link">
                                   <img src="./assets/img/content/img-content3.png" alt="" class="thumb-img">
                                   <p>3 Tanda Pernyataan
                                      Conor McGregor Pensiun
                                      Cuma Gimmick Belaka
                                   </p>
                                </a>
                             </div>
                             <div data-target="#carousel" data-slide-to="3" class="thumb">
                                <a href="" class="thumb-link">
                                   <img src="./assets/img/content/img-content4.png" alt="" class="thumb-img">
                                   <p>Duet Paling Mematikan 
                                      di Bunderliga Musim ini,
                                      Siapa yang Terbaik?
                                   </p>
                                </a>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
            </div> -->
            <!-- <div class="topnews-container container">
                <div class="full-topnews">
                    <div class="category-topnews">
                        <a href="" class="category">Ragam</a>
                    </div>
                    <a href="" class="title-topnews-full">
                        Tegas, Solskjaer Tidak Takut Jika Harus Mendepak De Gea dari Starting XI
                    </a>
                    <a href="" class="full-thumbs-topnews">
                        <img src="./assets/img/content/img-content6.png" alt="">
                    </a>
                </div>
                <div class="topnews-wraper">
                    <div class="topnews-content-slide">
                        <div class="topnews-thumb">
                            <div class="category-topnews">
                                <a href="" class="category">Ragam</a>
                            </div>
                            <a href="" class="topnews-thumb-link">
                                <img src="./assets/img/content/img-content6.png" alt="">
                            </a>
                        </div>
                        <div class="topnews-caption">
                            <a href="">
                                <p>Update Terbaru Negosiasi
                                    Valentino Rossi Bersama
                                    Yamaha: Masih Menunggu</p>
                            </a>
                        </div>
                    </div>
                    <div class="topnews-content-slide">
                        <div class="topnews-thumb">
                            <div class="category-topnews">
                                <a href="" class="category">Ragam</a>
                            </div>
                            <a href="" class="topnews-thumb-link">
                                <img src="./assets/img/content/img-content6.png" alt="">
                            </a>
                        </div>
                        <div class="topnews-caption">
                            <a href="">
                                <p>Update Terbaru Negosiasi
                                    Valentino Rossi Bersama
                                    Yamaha: Masih Menunggu</p>
                            </a>
                        </div>
                    </div>
                    <div class="topnews-content-slide">
                        <div class="topnews-thumb">
                            <div class="category-topnews">
                                <a href="" class="category">Ragam</a>
                            </div>
                            <a href="" class="topnews-thumb-link">
                                <img src="./assets/img/content/img-content6.png" alt="">
                            </a>
                        </div>
                        <div class="topnews-caption">
                            <a href="">
                                <p>Update Terbaru Negosiasi
                                    Valentino Rossi Bersama
                                    Yamaha: Masih Menunggu</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <script src="./assets/js/mini.js"></script> -->
            <div class="container ads-space-container">
                <div class="col-md-12 ads-banner">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/ads-banner.png" alt="" class="banner">
                </div>
                <div class="col-md-12 border-banner">

                </div>
            </div>
            <section id="content">
                <div class="container main-content">
                    <div class="row content">
                        <div class="col-lg-9 col-sm-8 berita-terkini">
                            <div class="row bt-content-wraper">
                            <?php
                                    if( have_posts() ):
                            ?>
                            <div class="col-sm-12 bt-header-border" >
                                <label class="title-head-bt"> <a href=""> Berita Terkini</a></label>
                                <label class="link-title-head-bt"> <a href="" class="">Lihat Indeks Berita Hari ini <i class="fas fa-chevron-right fa-sm"></i></a></label>
                            </div>
                            <?php
                                while( have_posts() ): the_post();
                            ?>

                                <div class="row content-bt">                
                                    <div class="col-sm-4  thumbnail-bt">
                                        <a href="<?php the_permalink(); ?>" class="link-thumbs-bt">
                                            <?php the_post_thumbnail('thumb-bt'); ?>
                                        </a>
                                    </div>
                                    <div class="col-sm-8 col-7 header-content-bt">
                                        <?php the_category(' '); ?>
                                        <label class="time-content"> <?php the_time()  ?></label>
                                        <h4 class="head-title-content-bt"> <a href="<?php the_permalink(); ?>" class="head-title-content-link-bt"><?php the_title(); ?></a></h4>
                                        
                                        <p class="summary-content-bt">
                                            <?php echo get_the_excerpt(); ?>
                                        </p>
                                    </div>
                                </div>
                            <?php
                                endwhile;
                                else:
                                echo 'tidak ada post';
                                endif;
                            ?>
                            </div>

                            <div class="index-button">
                                <a href="" class="index-button-link">INDEKS BERITA</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-4  berita-populer" >
                            <div class="row">
                            <div class="col-sm-12 bp-header-border">
                                <label class="title-head-bp"> <a href="">Berita Populer <img src="<?php bloginfo('template_url'); ?> /assets/img/misc/arrow-elipse.png" alt=""></a></label>
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
                                    <label class="title-head-bp"> <a href="">Berita Video <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/arrow-elipse.png" alt=""></a></label>
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
                                        <a href="<?php the_permalink(); ?>" target="_blank">
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
        <?php wp_footer();?>
</body>
</html>