<?php
/*
Template Name: Toys
*/
?>
<?php
    get_header();
?>
<div class="toys" id="toys">
    <div class="container">
        <h2 class="subtitle">Soft toys</h2>
        <div class="toys__wrapper">
            <?php 
                $my_posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'soft_toys',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
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
                        <div class="minibutton toys__trigger">Read more</div>
                    </div>
                </div>
            <?php
                    
                }

                wp_reset_postdata();
            ?>
        </div>


        <h2 class="subtitle">Educational toys</h2>
        <div class="toys__wrapper">
            <?php 
                $my_posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'edu_toys',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
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
                        <div class="minibutton toys__trigger">Read more</div>
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
                    <span><?php the_field('toys_alert_bold') ?></span><?php the_field('toys_alert_normal') ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    get_footer();
?>