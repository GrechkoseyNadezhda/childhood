<?php
/*
Template Name: Educational toys template
Template Post Type: post, edu_toys
*/
?>

<?php
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; 
		?>

		</main><!-- #main -->
	</div><!-- #primary -->


	<div class="container toys">
        <h2 class="subtitle">New products:</h2>
        <div class="toys__wrapper">
            <?php 
                $my_posts = get_posts( array(
                    'numberposts' => 3,
                    'category_name'    => 'edu_toys',
                    'orderby'     => 'rand',
                    'post_type'   => 'post',
                    'suppress_filters' => true, 
                ) );

                global $post;

                foreach( $my_posts as $post ){
                    setup_postdata( $post );
            ?>
                <div class="toys__item" style="background-image: url(<?php the_field('toys_img'); ?>">
                    <div class="toys__item-info">
                        <div class="toys__item-title"><?php the_title() ?></div>
                        <div class="toys__item-descr">
                            <?php the_field('toys_descr') ?>                          
                        </div>
                        <a href="<?php echo get_permalink(); ?>" class="minibutton toys__trigger">Read more</a>
                    </div>
                </div>
            <?php
                    
                }

                wp_reset_postdata();
            ?>
        </div>



        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="toys__alert">
                    <span><?php the_field('toys_alert_bold', 210) ?></span><?php the_field('toys_alert_normal', 210) ?>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
?>