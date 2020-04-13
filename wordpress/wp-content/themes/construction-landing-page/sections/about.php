<?php
/**
 * About Section
 *
 * @package Construction_Landing_Page
 */ 
$section_title = get_theme_mod( 'construction_landing_page_about_section_page' );
$post_one      = get_theme_mod( 'construction_landing_page_about_post_one' );
$post_two      = get_theme_mod( 'construction_landing_page_about_post_two' );
$post_three    = get_theme_mod( 'construction_landing_page_about_post_three' );
$about_posts   = array( $post_one, $post_two, $post_three );
$about_posts   = array_diff( array_unique( $about_posts ), array('') );
       
if( $section_title || $about_posts ){
?>
<section class="about" id="about_section">
    <div class="container">
      <?php 
        construction_landing_page_get_section_header( $section_title );
            $qry = new WP_Query( array( 
                'post_type'           => array( 'post', 'page' ),
                'posts_per_page'      => -1,
                'post__in'            => $about_posts,
                'orderby'             => 'post__in',
                'ignore_sticky_posts' => true
            ) );

			if( $about_posts && $qry->have_posts() ){ ?>
                <div class="row">
                <?php 
                    while( $qry->have_posts() ){ 
                         $qry->the_post(); ?> 
				        <div class="col">
    				        <?php if( has_post_thumbnail()){ ?>
                                <div class="img-holder">
    					           <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'construction-landing-page-about-portfolio', array( 'itemprop' => 'image' ) ); ?></a>
    	                       </div>
                            <?php } ?>
                            <div class="text-holder">
                                <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <?php the_excerpt(); ?>
                            </div>
				        </div>
			         <?php 
                     }
                     wp_reset_postdata(); 
                ?>
                </div>
            <?php 
            } 
        ?>
    </div>
</section>
<?php
}