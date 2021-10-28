<?php
/*
Template Name: Home Page
*/

get_header();
?>
<div class="container-allwidth">
    <div class="slider-zone">
        <div class="container">
            <div class="slider-zone__flower animate__animated animate__fadeIn"></div>   
                <?php while ( have_posts() ) : the_post(); ?>     
                    <div class="slider-zone__copy animate__animated animate__fadeInDown">
                        <?= get_field( "field_617849c0bd5a1" ); ?>
                    </div>

                <?php  endwhile; ?>  
        </div>
    </div> <!-- slider zone -->
    <div class="container">
            <div class="video-zone animate__animated animate__fadeIn"><img class="video-zone__img" src="<?php
                $imgLarge = get_field( "field_61792ae140531" );
                echo $imgLarge['url'];
                ?>" alt="Video Image">
            </div>  
    </div>
    <div class="container">
        <div class="white-zone">
            <div class="white-zone__left">
                <?= get_field( "field_617935cf4030d" ); ?>
            </div>
            <div class="white-zone__right">
                <?= get_field( "field_617935f94030e" ); ?>
            </div>
        </div>
    </div>
    <div class="gray-zone-wrapper">
        <div class="container">
            <div class="gray-zone">
                <div class="gray-zone__left">
                    <img class="img__vaina" src="<?= bloginfo('template_url') ?>/img/gzone-img1.png" alt="tesdt">
                    <img class="img__bamboo" src="<?= bloginfo('template_url') ?>/img/gzone-bamboo.png" alt="tesdt">
                    <img class="img_berry" src="<?= bloginfo('template_url') ?>/img/gzone-berry.png" alt="tesdt">
                    <img class="img__leafes" src="<?= bloginfo('template_url') ?>/img/gzone-leafes.png" alt="tesdt">
                    <img class="img__flower" src="<?= bloginfo('template_url') ?>/img/gzone-flower.png" alt="tesdt">
                    <img class="img__circle" src="<?= bloginfo('template_url') ?>/img/gzone-circle.png" alt="tesdt">
                </div>
                <div class="gray-zone__right">
                    <?= get_field( "field_617972fccb01b" ); ?>
                    <button class="gray-zone__btn">
                        Netus ullamc
                    </button>
                </div>
            </div>
        </div>   
    </div> 
</div> <!-- container all width -->
<?php
get_footer();


