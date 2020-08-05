<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <!-- <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=0.3"> -->
        <meta  name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
        <?php wp_head(); ?>
        <?php wp_footer();?>

    </head>
    <body class="main">
        <div class="overlay-sidebar">
            <a href="javascript:void(0);" class="sidebar-trigger">
                <i class="fas fa-times"></i>
            </a>
        </div>

        <div class="splash-screen">
            <div class="splash-logo"></div>
            <div class="splash-progress">
              <div class="splash-bar" style="width: 0%;">  </div>
            </div>
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
                            $s=get_search_query();
                            $args = array(
                                            's' =>$s
                            );
                            // The Query
                            $the_query = new WP_Query( $args );
                            if ( $the_query->have_posts() ) {
                            _e("<h2 style='font-weight:bold;color:#fff'>Search Results for: ".get_query_var('s')."</h2>");
                            while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                        ?>
                            <li>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
                        <?php
                            }
                            }else{
                        ?>
                            <h2 style='font-weight:bold;color:#fff'>Nothing Found</h2>
                            <div class="alert alert-info">
                                <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
                            </div>
                        <?php } ?> 

                        </div>
                    </div>
                </div>
            </section>
            <!-- End Section Content -->
        </div>

    </body>
</html>