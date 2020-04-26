<?php

/* 
* Template Name: Full Width Page   
*/

get_header(); 


?>

    <!-- Page Title
    ============================================= -->
    <section id="page-title">
        <div class="container clearfix">
            <h1><?php the_title() ?></h1>
            <span><?php 
                	do_action( 'plugins/wp_subtitle/the_subtitle', array(
                        'before' => '',
                        'after'  => ''
                    ) );
            ?></span>
        </div>
    </section><!-- #page-title end -->


<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        
                <?php 

while(have_posts()){
    the_post();

    global $post;
    $author_ID   = $post->post_author;
    $author_URL  = get_author_posts_url($author_ID);

?>
        <div class="single-post nobottommargin">

         <!-- Single Post  ============================================= -->
                                           
            <div class="entry clearfix">

                        <!-- Entry Image ============================================= -->              
                        <div class="entry-image">
                                <?php

                            if(has_post_thumbnail( )){

                                    
                                ?>
                                    <div class="entry-image">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail( 'full'); 
                                            ?>
                                        </a>
                                    </div>

                                    <?php
                                        } // end of if
                                    ?>
                        </div><!-- .entry-image end -->

                                <!-- Entry Content
                                                ============================================= -->
                        <div class="entry-content notopmargin">

                                        <?php 
                                            the_content();

                                            $defaults = array(
                                                'before'           => '<p class="text-center">' . __( 'Pages:' ),
                                                'after'            => '</p>',
                                            );

                                            wp_link_pages($defaults);
                                        ?>
                                    <!-- Post Single - Content End -->


                            <div class="clear"></div>

                        </div>
                    </div><!-- .entry end -->



                        <div class="line"></div>


                        <?php 
                        if( comments_open() || get_comments_number()){
                            comments_template();             
                        }
                        ?>



                    </div> <!-- end of class="single-post" -->

        </div><!-- .postcontent end -->

<?php
}
                
                ?>

        </div>

    </div>

</section><!-- #content end -->


<?php get_footer(); ?>

