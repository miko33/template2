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
    <title>KD Bola</title>
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
                                    <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="#">KDBola.com</a></li>
                                      <li class="breadcrumb-item active" aria-current="page">Liga Jerman</li>
                                    </ol>
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
                                            <!-- <img src="./assets/img/content/img-content6.png" alt=""> -->
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
                                    <!-- <div class="article-body-paging">
                                        <div class="break__cont">
                                            <small>1 dari 3 halaman</small>
                                        </div>
                                        <div class="image-headline-page">
                                            <img src="./assets/img/content/img-content6.png" alt="">
                                        </div>
                                        <h2>Plea x Thuram</h2>
                                        <p>Duo Alassane Plea - Marcus Thuram selalu menjadi berita baik bagi fans Burossia
                                            Monchengladbach, dan yang terbaru adalah saat mereka berhasil mengantarkan kemenangan
                                            3-1 atas 1. FC Union Berlin akhir minggu lalu - kembali memperkuat posisi Die Fohlen dalam
                                            perburuan tempat untuk kualifikasi Liga Champions musim berikutnya.</p>
                                        <p>Di lapangan, Marcus Thuram adalah salah satu dari dua arsitek kemenangan tim yang bermarkas
                                            di Borussia-Park tersebut, dengan rekan satu timnya Alassane PIUa, yang memberikan dua assist 
                                            sebelum menutup skor pertandingan. Musim ini, pasangan asal Prancis itu adalah kunci
                                            keberhasilan Monchengladbach: Plea telah mencetak 10 gol dan menyediakan 10 assist,
                                            sedangkan Thuram 10 gol dan 8 assist.</p>
                                    </div> -->
                                    <!-- <div class="article-body-paging">
                                        <div class="break__cont">
                                            <small>2 dari 3 halaman</small>
                                        </div>
                                        <div class="image-headline-page">
                                            <img src="./assets/img/content/img-content6.png" alt="">
                                        </div>
                                        <h2>Hakimi x Guerreiro</h2>
                                        <p>Keputusan Lucien Favre untuk menggunakan back-five telah berubah manis bagi Borussia
                                            Dortmund, menempatkan mereka di posisi yang kuat dalam perburuan gelar Bundesliga.
                                            Sebagian besar dari kesuksesan itu ialah berkat dari terlepasnya segel cakra Achraf Hakimi dan 
                                            Raphael Guerreiro.</p>
                                        <p>Hakimi dengan 30 dan Guerreiro dengan 23; masing-masing menduduki peringkat keempat dan
                                            kelima di Dortmund untuk banyaknya peluang yang diciptakan di Bundesliga musim ini. Yang libih
                                            mengesankan lagi, bila digabungkan pasangan ini telah mencetak 14 gol di Bundesliga dan Liga
                                            Champions sepanjang musim 2019/2020.</p>
                                        <p>Dengan status pinjaman Hakimi dari Real Madrid yang segera berakhir, hari-hari indah bersama
                                            keduanga mungkin akan pula kandas. Jadi, nikmatilah selagi bisa.</p>
                                    </div> -->
                                    <!-- <div class="article-body-paging">
                                        <div class="break__cont">
                                            <small>3 dari 3 halaman</small>
                                        </div>
                                        <div class="image-headline-page">
                                            <img src="./assets/img/content/img-content6.png" alt="">
                                        </div>
                                        <h2>Kimmich x Alcantara</h2>
                                        <p>Kimmich, yang sering dikerahkan sebagai bek sayap di beberapa musim lalu, kini menyaksikan
                                            dirinya beranjak naik dalam nilai jual di bursa transfer dengan berhasil menjarungkan gol penting
                                            dalam kemenangan 1-0 Die Bayern atas rival Borussia Dortmund di Der Klasiker akhir Mei lalu.</p>
                                        <p>dan bersama Thiago Alcantara, saat ini keduanya adalah duo gelandang terbaik di dunia dan
                                            bermain di level yang sangat tinggi. Secara teknis, mereka bersimbiosis secara sempurna dan
                                            dalam mental bawah sadarnya mereka salalu ingin menguasai bola. Hal tersebut sangat penting
                                            dimiliki bagi tim yang ingin memenangkan pertandingan dan menjadi juara di akhir musim.</p>
                                        <p>Mereka tahu bagaimana memberi tim keseimbangan yang tepat, baik dalam bertahan maupun
                                            menyerang. Khusus untuk Kimmich, ia bergabung dengan Bayern dari RB Leipzig di bursa
                                            transfer musim dingin tahun 2015 dan telah tampil sebanyak 210 kali untuk klub - memenangkan
                                            empat gelar Bundesliga dan dua Piala Jerman di sepanjang jalan.</p>
                                    </div> -->
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
                                    <h3 class="related-content-hd">
                                        BACA JUGA :
                                    </h3>
                                    <div class="related-content-box">
                                        <div class="related-content-item">
                                            <a href="">Tidak Punya Pemain Kelas Dunia, MU Didesak Beli Jadon Sancho</a>
                                        </div>
                                        <div class="related-content-item">
                                            <a href="">Timo Werner Sudah, Chelsea Kini Fokus Kejar Kai Havertz</a>
                                        </div>
                                        <div class="related-content-item">
                                            <a href="">Chelsea Bisa Bernuansa Bundesliga dengan Trio Pulisic, Timo Werner, dan
                                                Kai Havertz</a>
                                        </div>
                                        <div class="related-content-item">
                                            <a href="">Chef Thomas Muller, Raja Assist Bundesliga</a>
                                        </div>
                                    </div>
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
                                <label class="title-head-bp"> <a href="">Berita Populer <img src="./assets/img/misc/arrow-elipse.png" alt=""></a></label>
                            </div>
                                <div class="row content-bp">
                                    <div class="col-sm-12 col-5 thumbnail-bp">
                                        <a href="" class="link-thumbs-bp">
                                            <img src="./assets/img/content/img-content3.png" alt="" class="thumbs-bp">
                                        </a>
                                    </div>
                                    <div class="col-sm-12 col-7 header-content-bp">
                                        <label class="time-content">1 Jam 32 Menit Lalu</label>
                                        <h4 class="head-title-content-bp"><a href="" class="head-title-content-link-bp">Akankah Cristiano Ronaldo Tinggalkan Juventus di Akhir Musim?</a></h4>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-12 bv-header-border">
                                    <label class="title-head-bp"> <a href="">Berita Video <img src="./assets/img/misc/arrow-elipse.png" alt=""></a></label>
                                </div>
                                <div class="row content-bv">
                                    <div class="col-sm-12 col-5 thumbnail-bv">
                                        <a href="https://www.youtube.com/embed/TB9XzvB_SWs" target="_blank">
                                            <img src="./assets/img/content/img-content3.png" class="thumb-vid" alt="">
                                            <div>
                                                <img src="./assets/img/misc/play-video.png" class="play-vid" alt="">
                                            </div>
                                        </a>
                                    </div>
                                
                                <div class="col-sm-12 col-7 title-vid-bv">
                                    <h4 class="title-vid">
                                        <a href="">VIDEO: 5 Pemain Hebat yang
                                        Gagal Bermain di Premiere
                                        League Termasuk Andriy Shev...
                                        </a>
                                    </h4>
                                </div>
                                <div class="col-sm-12 title-vid-bv">
                                    <h4 class="title-vid">
                                        <a href="">VIDEO: Danny Welbeck dan 4
                                        Pemain Debutan Termuda 
                                        Mancherster United di Premie...
                                        </a>
                                    </h4>
                                </div>

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