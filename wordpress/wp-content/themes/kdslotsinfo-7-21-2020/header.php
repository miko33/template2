<section id="header">
    <div class="container pad-container">
        <div class="row no-gutter text-glow">
            <!-- Social Container -->
            <div class="col-md-6 header-social-container">
                <ul class="header-social social-nav model-1">
                    <li>
                        <a href="https://www.facebook.com/kdslots/">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/social-nav/fb.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/kdslots777">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/social-nav/twit.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://id.pinterest.com/kdslots/">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/social-nav/pint.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/kdslots777/">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/social-nav/ig.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCekp49eKiMV13CR_NebgDYg?view_as=subscriber">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/social-nav/yt.png">
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url( 'panduan-download-aplikasi-android/' ); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/icon-panduan.png">
                        </a>
                    </li>
                    <li class="unblocker-hide">
                        <a href="https://unblockernawala.xyz/">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/icon-unblocker.png">
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Social Container -->
            <div class="col-md-6 search-hide">
                <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">       
                    <ul class="unblocker-search">
                        <li>
                            <input class="input-search hide-this" type="search" placeholder="Pencarian" value="" name="s">
                            <a href="https://unblockernawala.xyz/">
                            </a>
                        </li>
                    </ul>
                </form>
            </div>
            <div class="col-md-12 icon-hd">
                <a href="https://kdslots.com" class="logo-icon-hd">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/logo_kdslots.png">
                </a>
            </div>
            <div class="col-md-12 turn-to-sidebar">
                <!-- NAVS -->
                <?php get_header('navs') ?>
                <!-- END NAVS -->

                <div class="sidebar-guide-android">
                    <a href="<?php echo home_url( 'panduan-download-aplikasi-android/' ); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/icon-panduan.png">
                    </a>
                </div>
                <div class="sidebar-guide-social">
                    <ul class="social-nav model-1">
                        <li>
                            <a href="https://www.facebook.com/kdslots/">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/social-nav/fb.png">
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/kdslots777">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/social-nav/twit.png">
                            </a>
                        </li>
                        <li>
                            <a href="https://id.pinterest.com/kdslots/">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/social-nav/pint.png">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/kdslots777/">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/social-nav/ig.png">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCekp49eKiMV13CR_NebgDYg?view_as=subscriber">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/social-nav/yt.png">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-guide-footer">
                    <p>© KDSLOTS.COM | SLOTS ONLINE | CASINO ONLINE <br>
                        POKER ONLINE | BOLA ONLINE | HAK CIPTA DILINDUNGI</p>
                </div>
            </div>
            <div class="col-md-12" id="sidebar-toggle">
                <ul>
                    <li>
                        <a href="javascript:void(0);" class="sidebar-trigger">
                            <i class="fas fa-bars"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url( '/' ); ?>">
                            <i class="fas fa-home"></i>
                        </a>
                    </li>
                    <li>
                        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                            <input class="input-search hide-this" type="search" placeholder="Pencarian" value="" name="s">
                            <button type="submit" >
                                 <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="col-md-12" id="news">
                <div class="running-text-wrapper">
                    <div class="running-text-header">Info Terbaru</div>
                    <div class="marquee-wrapper">
                        <div class="marquee">
                            <span class="marquee-text"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>