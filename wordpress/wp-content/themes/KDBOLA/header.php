<div class="header-container">
        <section id="header">
            <button onclick="topFunction()" id="backTotop" title="Back To Top"><i class="fas fa-chevron-up"></i></button>
            <section class="nav-menu sticky-nav" id="sticky-navbar nav-menu">
                <div class="container nav-container-sticky">
                    <div class="row sticky-header">
                        <div class="col-sm-2 logo-sticky">
                            <a href="<?php bloginfo('template_url'); ?>" class="link-logo-stiky">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/kdbolalogo.png" alt="">
                            </a>
                        </div>
                        <div class="col-sm-10 sticky-navbar">
                            <ul class="nav full-expand-nav-sticky">
                                <li class="menu sticky-menu active">
                                     <a href="">home</a> 
                                </li>
                                <li class="menu sticky-menu">
                                     <a href="">headlines</a> 
                                </li>
                                <li class="dropdown menu sticky-menu">
                                    <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span>BOLA</span>
                                    </a>
                                    <div class="dropdown-menu sub-bola" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">LIGA Indonesia</a>
                                        <a class="dropdown-item" href="#">LIGA inggris</a>
                                        <a class="dropdown-item" href="#">LIGA Spanyol</a>
                                        <a class="dropdown-item" href="#">LIGA Jerman</a>
                                        <a class="dropdown-item" href="#">LIGA Italia</a>
                                    </div>
                                </li>
                                <li class="menu sticky-menu">
                                     <a href="">dunia</a> 
                                </li>
                                <li class="menu sticky-menu">
                                     <a href="">indonesia</a> 
                                </li>
                                <li class="menu sticky-menu">
                                     <a href="">liga inggris</a> 
                                </li>
                                <li class="dropdown menu sticky-menu">
                                    <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span>SPORT</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Moto GP</a>
                                        <a class="dropdown-item" href="#">NBA</a>
                                        <a class="dropdown-item" href="#">E-Sport</a>
                                        <a class="dropdown-item" href="#">Ragam</a>
                                      </div>
                                </li>
                                <li class="menu sticky-menu">
                                     <a href="">livescore</a> 
                                </li>
                                <li class="menu sticky-menu">
                                     <a href="">video</a> 
                                </li>
                                <div class="search-wrapper dropdown">
                                    <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span><i class="fas fa-search fa-xs" style="padding-right: 3px;"></i>Cari</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <form action="" id="search">
                                            <input type="input" class="search-input" value="" placeholder="Cari di kdbola.com">
                                        </form>
                                    </div>
                                </div>
                            </ul>
                            <?php get_header('menus') ?>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container head-container">
                <div class="row header">
                    <div class="col-md-6 logo">
                        <a href="<?php echo home_url(); ?>" class="logo-icon">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/kdbolalogo.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-6 search-bar">
                        <form class="search-form" id="search">
                            <input type="input" class="search-input" value="" placeholder="Topik Berita apa yang ingin Anda cari?">
                            <i class="fas fa-search"></i>
                            
                            <button type="submit" class="btn-search">CARI</button>
                        </form>
                    </div>
                    <section id="nav-menu fixed-navbar" class="navbar fixed-navbar">
                                <?php get_header('navs') ?>
                    </section>
                </div>
                <div class="header-mobile">
                    <div class="row nav-bar-mobile">
                        <div class="col-3 " style="width: 100%;">
                            <a href="" class="top-bar-menu bar-trigger">
                                <img src="./assets/img/misc/top-menu-bar.png" alt="">
                            </a>
                        </div>
                        <div class="col-6 logo-mobile">
                            <a href="" class="link-logo-mobile">
                            <img src="./assets/img/misc/kdbolalogo.png" alt="">
                            </a>
                        </div>
                        <div class="col-3">
                            <a id="search-more-mobile" class="i-nav-cari"><i class="fas fa-search fa-2x"></i></a>
                        </div>
                        <div class="col-12 overlay-side-bar">
                            <div class="overlay-container">
                                <div class="sidebar">
                                    <ul class="main-sidebar">
                                        <li class="main-sidebar-item">
                                            <a href="">
                                                <img src="./assets/img/ic-nav/headline.png" alt="headline">
                                                <span>Headlines</span>
                                            </a>
                                        </li>
                                        <li class="main-sidebar-item">
                                            <a href="">
                                                <img src="./assets/img/ic-nav/berita-terkini.png" alt="berita-terkini">
                                                <span>Berita Terkini</span>
                                            </a>
                                        </li>
                                        <li class="main-sidebar-item">
                                            <a href="">
                                                <img src="./assets/img/ic-nav/berita-populer.png" alt="berita-populer">
                                                <span>Berita Populer</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="sub-sidebar">
                                        <li class="sub-sidebar-item">
                                            <a href="">
                                                <img src="./assets/img/ic-nav/liga-indo.png" alt="">
                                                <span>Lliga Indonesia</span>
                                            </a>
                                        </li>
                                        <li class="sub-sidebar-item">
                                            <a href="">
                                                <img src="./assets/img/ic-nav/liga-eng.png" alt="">
                                                <span>Liga Inggris</span>
                                            </a>
                                        </li>
                                        <li class="sub-sidebar-item">
                                            <a href="">
                                                <img src="./assets/img/ic-nav/liga-spain.png" alt="">
                                                <span>Liga Spanyol</span>
                                            </a>
                                        </li>
                                        <li class="sub-sidebar-item">
                                            <a href="">
                                                <img src="./assets/img/ic-nav/liga-jerman.png" alt="">
                                                <span>LIga Jerman</span>
                                            </a>
                                        </li>
                                        <li class="sub-sidebar-item">
                                            <a href="">
                                                <img src="./assets/img/ic-nav/liga-itali.png" alt="">
                                                <span>Liga Italia</span>
                                            </a>
                                        </li>
                                        <li class="sub-sidebar-item">
                                            <a href="">
                                                <img src="./assets/img/ic-nav/dunia.png" alt="">
                                                <span> Dunia</span>
                                            </a>
                                        </li>
                                        <li class="sub-sidebar-item">
                                            <a href="">
                                                <img src="./assets/img/ic-nav/motogp.png" alt="">
                                                <span>Moto GP</span>
                                            </a>
                                        </li>
                                        <li class="sub-sidebar-item">
                                            <a href="">
                                                <img src="./assets/img/ic-nav/nba.png" alt="">
                                                <span>NBA</span>
                                            </a>
                                        </li>
                                        <li class="sub-sidebar-item">
                                            <a href="">
                                                <img src="./assets/img/ic-nav/e-sport.png" alt="">
                                                <span>E-Sport</span>
                                            </a>
                                        </li>
                                        <li class="sub-sidebar-item">
                                            <a href="">
                                                <img src="./assets/img/ic-nav/ragam.png" alt="">
                                                <span>Ragam</span>
                                            </a>
                                        </li>
                                        <li class="sub-sidebar-item">
                                            <a href="">
                                                <img src="./assets/img/ic-nav/live-score.png" alt="">
                                                <span>Livescore</span>
                                            </a>
                                        </li>
                                        <li class="sub-sidebar-item">
                                            <a href="">
                                                <img src="./assets/img/ic-nav/video.png" alt="">
                                                <span>Video</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row sub-nav-mobile">
                        <div class="search-mobile">
                            <form action="" class="search-form-mobile">
                                <input type="text" class="search-input-mobile" placeholder="Berita apa yang Anda cari hari ini?">
                            </form>
                        </div>
                        <div class="top-nav col-12">
                            <ul class="top-nav-list">
                                <li class="top-nav-item"> 
                                    <a href="" class="top-nav-item__link">
                                        <span> Headlines</span>
                                    </a>
                                    </li>
                                <li class="top-nav-item"> 
                                    <a href="" class="top-nav-item__link">
                                        <span> Terkini</span>
                                    </a>
                                    </li>
                                <li class="top-nav-item"> 
                                    <a href="" class="top-nav-item__link">
                                        <span> Populer</span>
                                    </a>
                                    </li>
                                <li class="top-nav-item"> 
                                    <a href="" class="top-nav-item__link">
                                        <span> livescore</span>
                                    </a>
                                    </li>
                                <li class="top-nav-item"> 
                                    <a href="" class="top-nav-item__link">
                                        <span> Indonesia</span>
                                    </a>
                                    </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>