<?php
/**
 * The template part for displaying post
 *
 * @package VW Hotel 
 * @subpackage vw_hotel
 * @since VW Hotel 1.0
 */
?>
<?php 
  $vw_hotel_archive_year  = get_the_time('Y'); 
  $vw_hotel_archive_month = get_the_time('m'); 
  $vw_hotel_archive_day   = get_the_time('d'); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="post-main-box wow slideInLeft delay-1000" data-wow-duration="2s">
    <?php $vw_hotel_theme_lay = get_theme_mod( 'vw_hotel_blog_layout_option','Default');
    if($vw_hotel_theme_lay == 'Default'){ ?>
      <div class="row">
        <?php if(has_post_thumbnail() && get_theme_mod( 'vw_hotel_featured_image_hide_show',true) == 1) {?>
          <div class="service-image col-lg-6 col-md-6">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php } ?>
        <div class="service-text <?php if(has_post_thumbnail() && get_theme_mod( 'vw_hotel_featured_image_hide_show',true) == 1) { ?>col-lg-6 col-md-6"<?php } else { ?>col-lg-12 col-md-12" <?php } ?>>
          <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
          <?php if(get_theme_mod('vw_hotel_toggle_postdate',true)==1 || get_theme_mod('vw_hotel_toggle_author',true)==1 || get_theme_mod('vw_hotel_toggle_comments',true)==1 || get_theme_mod('vw_hotel_toggle_time',true)==1){ ?>
            <div class="post-info">
              <?php if(get_theme_mod('vw_hotel_toggle_postdate',true)==1){ ?>
                <i class="fas fa-calendar-alt"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $vw_hotel_archive_year, $vw_hotel_archive_month, $vw_hotel_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><span><?php echo esc_html(get_theme_mod('vw_hotel_meta_field_separator','|'));?></span> 
              <?php } ?>

              <?php if(get_theme_mod('vw_hotel_toggle_author',true)==1){ ?>
                <i class="far fa-user"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><span><?php echo esc_html(get_theme_mod('vw_hotel_meta_field_separator','|'));?></span> 
              <?php } ?>

              <?php if(get_theme_mod('vw_hotel_toggle_comments',true)==1){ ?>
                <i class="fa fa-comments" aria-hidden="true"></i><span class="entry-comments"><?php comments_number( __('0 Comment','vw-hotel'), __('0 Comments','vw-hotel'), __('% Comments','vw-hotel') ); ?> </span><span><?php echo esc_html(get_theme_mod('vw_hotel_meta_field_separator','|'));?></span> 
              <?php } ?>

              <?php if(get_theme_mod('vw_hotel_toggle_time',true)==1){ ?>
                <i class="fas fa-clock"></i><span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
              <?php } ?>
            </div>
          <?php }?>
          <div class="new-text">
            <div class="entry-content">
              <p>
                <?php $vw_hotel_theme_lay = get_theme_mod( 'vw_hotel_excerpt_settings','Excerpt');
                if($vw_hotel_theme_lay == 'Content'){ ?>
                  <?php the_content(); ?>
                <?php }
                if($vw_hotel_theme_lay == 'Excerpt'){ ?>
                  <?php if(get_the_excerpt()) { ?>
                    <?php $vw_hotel_excerpt = get_the_excerpt(); echo esc_html( vw_hotel_string_limit_words( $vw_hotel_excerpt, esc_attr(get_theme_mod('vw_hotel_excerpt_number','30')))); ?> <?php echo esc_html(get_theme_mod('vw_hotel_excerpt_suffix',''));?>
                  <?php }?>
                <?php }?>
              </p>
            </div>
          </div>
          <?php if( get_theme_mod('vw_hotel_button_text','Read More') != ''){ ?>
            <div class="content-bttn">
              <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right"><?php echo esc_html(get_theme_mod('vw_hotel_button_text',__('Read More','vw-hotel')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_hotel_button_text',__('Read More','vw-hotel')));?></span></a>
            </div>
          <?php } ?>
        </div>
      </div>
    <?php }else if($vw_hotel_theme_lay == 'Center'){ ?>
      <div class="service-text">
        <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
        <?php if( get_theme_mod( 'vw_hotel_featured_image_hide_show',true) == 1) { ?>
          <div class="box-image">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php } ?>
        <?php if(get_theme_mod('vw_hotel_toggle_postdate',true)==1 || get_theme_mod('vw_hotel_toggle_author',true)==1 || get_theme_mod('vw_hotel_toggle_comments',true)==1 || get_theme_mod('vw_hotel_toggle_time',true)==1){ ?>
            <div class="post-info">
              <?php if(get_theme_mod('vw_hotel_toggle_postdate',true)==1){ ?>
                <i class="fas fa-calendar-alt"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $vw_hotel_archive_year, $vw_hotel_archive_month, $vw_hotel_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><span><?php echo esc_html(get_theme_mod('vw_hotel_meta_field_separator','|'));?></span> 
              <?php } ?>

              <?php if(get_theme_mod('vw_hotel_toggle_author',true)==1){ ?>
                <i class="far fa-user"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><span><?php echo esc_html(get_theme_mod('vw_hotel_meta_field_separator','|'));?></span> 
              <?php } ?>

              <?php if(get_theme_mod('vw_hotel_toggle_comments',true)==1){ ?>
                <i class="fa fa-comments" aria-hidden="true"></i><span class="entry-comments"><?php comments_number( __('0 Comment','vw-hotel'), __('0 Comments','vw-hotel'), __('% Comments','vw-hotel') ); ?> </span><span><?php echo esc_html(get_theme_mod('vw_hotel_meta_field_separator','|'));?></span> 
              <?php } ?>

              <?php if(get_theme_mod('vw_hotel_toggle_time',true)==1){ ?>
                <i class="fas fa-clock"></i><span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
              <?php } ?>
            </div>
          <?php }?>
          <div class="new-text">
            <div class="entry-content">
              <p>
                <?php $vw_hotel_theme_lay = get_theme_mod( 'vw_hotel_excerpt_settings','Excerpt');
                if($vw_hotel_theme_lay == 'Content'){ ?>
                  <?php the_content(); ?>
                <?php }
                if($vw_hotel_theme_lay == 'Excerpt'){ ?>
                  <?php if(get_the_excerpt()) { ?>
                    <?php $vw_hotel_excerpt = get_the_excerpt(); echo esc_html( vw_hotel_string_limit_words( $vw_hotel_excerpt, esc_attr(get_theme_mod('vw_hotel_excerpt_number','30')))); ?> <?php echo esc_html(get_theme_mod('vw_hotel_excerpt_suffix',''));?>
                  <?php }?>
                <?php }?>
              </p>
            </div>
          </div>
          <?php if( get_theme_mod('vw_hotel_button_text','Read More') != ''){ ?>
            <div class="content-bttn">
              <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right"><?php echo esc_html(get_theme_mod('vw_hotel_button_text',__('Read More','vw-hotel')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_hotel_button_text',__('Read More','vw-hotel')));?></span></a>
            </div>
          <?php } ?>
      </div>
    <?php }else if($vw_hotel_theme_lay == 'Left'){ ?>
      <div class="service-text">
        <?php if( get_theme_mod( 'vw_hotel_featured_image_hide_show',true) == 1) { ?>
          <div class="box-image">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php } ?>
        <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
        <?php if(get_theme_mod('vw_hotel_toggle_postdate',true)==1 || get_theme_mod('vw_hotel_toggle_author',true)==1 || get_theme_mod('vw_hotel_toggle_comments',true)==1){ ?>
            <div class="post-info">
              <?php if(get_theme_mod('vw_hotel_toggle_postdate',true)==1){ ?>
                <i class="fas fa-calendar-alt"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $vw_hotel_archive_year, $vw_hotel_archive_month, $vw_hotel_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><span><?php echo esc_html(get_theme_mod('vw_hotel_meta_field_separator','|'));?></span> 
              <?php } ?>

              <?php if(get_theme_mod('vw_hotel_toggle_author',true)==1){ ?>
                <i class="far fa-user"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><span><?php echo esc_html(get_theme_mod('vw_hotel_meta_field_separator','|'));?></span> 
              <?php } ?>

              <?php if(get_theme_mod('vw_hotel_toggle_comments',true)==1){ ?>
                <i class="fa fa-comments" aria-hidden="true"></i><span class="entry-comments"><?php comments_number( __('0 Comment','vw-hotel'), __('0 Comments','vw-hotel'), __('% Comments','vw-hotel') ); ?> </span><span><?php echo esc_html(get_theme_mod('vw_hotel_meta_field_separator','|'));?></span> 
              <?php } ?>

              <?php if(get_theme_mod('vw_hotel_toggle_time',true)==1){ ?>
                <i class="fas fa-clock"></i><span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
              <?php } ?>
            </div>
          <?php }?>
          <div class="new-text">
            <div class="entry-content">
              <p>
                <?php $vw_hotel_theme_lay = get_theme_mod( 'vw_hotel_excerpt_settings','Excerpt');
                if($vw_hotel_theme_lay == 'Content'){ ?>
                  <?php the_content(); ?>
                <?php }
                if($vw_hotel_theme_lay == 'Excerpt'){ ?>
                  <?php if(get_the_excerpt()) { ?>
                    <?php $vw_hotel_excerpt = get_the_excerpt(); echo esc_html( vw_hotel_string_limit_words( $vw_hotel_excerpt, esc_attr(get_theme_mod('vw_hotel_excerpt_number','30')))); ?> <?php echo esc_html(get_theme_mod('vw_hotel_excerpt_suffix',''));?>
                  <?php }?>
                <?php }?>
              </p>
            </div>
          </div>
          <?php if( get_theme_mod('vw_hotel_button_text','Read More') != ''){ ?>
            <div class="content-bttn">
              <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right"><?php echo esc_html(get_theme_mod('vw_hotel_button_text',__('Read More','vw-hotel')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_hotel_button_text',__('Read More','vw-hotel')));?></span></a>
            </div>
          <?php } ?>
      </div>
    <?php } ?>
  </div>
</article>