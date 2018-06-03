<?php
/*
* Template Name: Homepage
*/

get_header(); ?>
<div id="hpSliderContainer">
  <?php 
    if(have_rows('hp_featured_slider')):

      while(have_rows('hp_featured_slider')) : the_row();
        $hfs_img = get_sub_field('ftd_slider_image');
        $hfs_text = get_sub_field('ftd_slider_text');
        $hfs_txt_pos = get_sub_field('ftd_slider_text_position');
        $hfs_txt_align = get_sub_field('slider_text_align');
        ?>
        <div class="item1 <?=$hfs_txt_pos?>-slider-align">
          <img src="<?=$hfs_img?>" class="sliderReveal-left" alt="">
          <div class="slider-inner max-wrap <?=$hfs_txt_align?>-txt-align">
            <div class="slider-item-text">
              <?=$hfs_text?>
            </div>
          </div>    
        </div>
        <?php
      endwhile;

    endif; ?>
</div>
<?php get_footer(); ?>
  

  <script src="<?=get_template_directory_uri()?>/js/hp-script.js"></script>