<div class="nav-container">
    <ul class="nav equal-width-nav">
        <li id="home" class="active">
            <a href="#">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/blank-image-png-2.png">
                <span>Beranda</span>
            </a>
        </li>
        <li id="support">
            <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/blank-image-png-2.png">
                <span>Support</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li id="cara-daftar">
            <a href="#">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/blank-image-png-2.png">
                <span>Cara Daftar</span>
            </a>
        </li>
        <li id="cara-deposit-withdraw">
            <a href="#">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/blank-image-png-2.png">
                <span>Cara Deposit & Withdraw</span>
            </a>
        </li>
        <li id="cara-bermain">
            <a href="#">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/blank-image-png-2.png">
                <span>Panduan Dan Tips</span>
            </a>
        </li>
        <li id="promosi">
            <a href="#">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/blank-image-png-2.png">
                <span>Promosi</span>
            </a>
        </li>
        <li id="video-tutorial">
            <a href="#">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/misc/blank-image-png-2.png">
                <span>Video Tutorial</span>
            </a>
        </li>
    </ul>
</div>
<?php
	$args = array(
        'container_class' => 'nav-container',
		'menu_class' => 'nav equal-width-nav',
        'walker'         => new WPSE_78121_Sublevel_Walker,
		'link_before' => '<img src="https://kdslots.info/wp-content/themes/kdslotsinfo/assets/img/misc/blank-image-png-2.png"><span>' , 'link_after' => '</span>'
	);
	wp_nav_menu($args);
?>
