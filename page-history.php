<?php
/*
Template Name: History
*/
?>
<?php
    get_header();
?>

<div class="aboutus">
    <div class="container">
        <h1 class="title"><?php the_field('history_title') ?></h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history_block1_title') ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history_block1_text') ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('history_block1_img') ?>">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('history_block2_img') ?>">
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history_block2_title') ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history_block2_text') ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history_block3_title') ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history_block3_text') ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('history_block3_img') ?>">
            </div>
        </div>
    </div>
</div>


<?php
    get_footer();
?>