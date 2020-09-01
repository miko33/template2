<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <!-- <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=0.3"> -->
        <meta  name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
        <?php wp_head(); ?>
        <?php wp_footer();?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144012206-1"></script>
	<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());

  		gtag('config', 'UA-144012206-1');
	</script>
	<!-- Start of LiveChat (www.livechatinc.com) code -->
    	<!-- Start of LiveChat (www.livechatinc.com) code -->
	<script type="text/javascript">
	window.__lc = window.__lc || {};
	window.__lc.license = 10885202;
	(function() {
  	var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
  	lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
  	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
	})();
	</script>
	<noscript>
	<a href="https://www.livechatinc.com/chat-with/10885202/" rel="nofollow">Chat with us</a>,
	powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
	</noscript>
	<!-- End of LiveChat code -->
  	<!-- End of LiveChat code -->



    </head>
    <body class="main">
        <div class="overlay-sidebar">
            <a href="javascript:void(0);" class="sidebar-trigger">
                <i class="fas fa-times"></i>
            </a>
        </div>



        <div class="body-container">
            <!-- Section Header -->
			    <?php get_header() ?>
            <!-- End Section Header -->
            <!-- Section Content -->
            <section id="content">
                <div class="container pad-container">
                    <div class="row no-gutter text-glow">
                        <?php global
                            $wp;
                            $link = add_query_arg( $wp->query_vars, home_url( $wp->request ) );
                            if($link == 'https://kdslots.info')
                                {
                                    get_header('slider');
                                }
                                else
                                {

                                }
                        ?>



                        <!-- Footer -->
			                <?php get_footer() ?>
                        <!-- End Footer -->

                        <!-- Element Content -->
                        <div class="col-md-12 order-content">

                            <?php
                                if( have_posts() ):
                                while( have_posts() ): the_post();
                            ?>
                                <?php the_content(); ?>

                            <?php
                                endwhile;
                                else:
                                echo 'tidak ada post';
                                endif;
                            ?>

                        </div>
                    </div>
                </div>
            </section>
            <!-- End Section Content -->
        </div>

    </body>
</html>
