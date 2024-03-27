<?php
/**
 * The template part for displaying post
 *
 * @package VW Hotel
 * @subpackage vw-hotel
 * @since VW Hotel 1.0
 */
?>
<?php 
  $vw_hotel_archive_year  = get_the_time('Y'); 
  $vw_hotel_archive_month = get_the_time('m'); 
  $vw_hotel_archive_day   = get_the_time('d'); 
?>
<div class="col-lg-4 col-md-6">
	<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
	    <div class="grid-post-main-box wow slideInLeft delay-1000" data-wow-duration="2s">
	      	<div class="box-image">
	          	<?php 
		            if(has_post_thumbnail() && get_theme_mod( 'vw_hotel_featured_image_hide_show',true) == 1) { 
		              the_post_thumbnail(); 
		            }
	          	?>  
	        </div>
	        <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
	        <?php if(get_theme_mod('vw_hotel_grid_postdate',true)==1 || get_theme_mod('vw_hotel_grid_author',true)==1 || get_theme_mod('vw_hotel_grid_comments',true)==1){ ?>
	            <div class="post-info">
	                <?php if(get_theme_mod('vw_hotel_grid_postdate',true)==1){ ?>
	                	<i class="<?php echo esc_attr(get_theme_mod('vw_hotel_grid_postdate_icon','fas fa-calendar-alt')); ?>"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $vw_hotel_archive_year, $vw_hotel_archive_month, $vw_hotel_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><span><?php echo esc_html(get_theme_mod('vw_hotel_grid_post_meta_field_separator','|'));?></span> 
	                <?php } ?>

	                <?php if(get_theme_mod('vw_hotel_grid_author',true)==1){ ?>
	                  <i class="<?php echo esc_attr(get_theme_mod('vw_hotel_grid_author_icon','far fa-user')); ?>"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><span><?php echo esc_html(get_theme_mod('vw_hotel_grid_post_meta_field_separator','|'));?></span> 
	                <?php } ?>

	                <?php if(get_theme_mod('vw_hotel_grid_comments',true)==1){ ?>
	                  <i class="<?php echo esc_attr(get_theme_mod('vw_hotel_grid_comments_icon','fa fa-comments')); ?>" aria-hidden="true"></i><span class="entry-comments"><?php comments_number( __('0 Comment','vw-hotel'), __('0 Comments','vw-hotel'), __('% Comments','vw-hotel') ); ?> </span>
	                <?php } ?>
	                <?php echo esc_html (vw_hotel_edit_link()); ?>
	            </div>
	        <?php }?>
	        <div class="new-text">
	          	<div class="entry-content">
	          		<p>
	          			<?php $vw_hotel_theme_lay = get_theme_mod( 'vw_hotel_grid_excerpt_settings','Excerpt');
                  			if($vw_hotel_theme_lay == 'Content'){ ?>
                    		<?php the_content(); ?>
                 		<?php }
                  		if($vw_hotel_theme_lay == 'Excerpt'){ ?>
                    		<?php if(get_the_excerpt()) { ?>
			         						<?php $vw_hotel_excerpt = get_the_excerpt(); echo esc_html( vw_hotel_string_limit_words( $vw_hotel_excerpt, esc_attr(get_theme_mod('vw_hotel_related_posts_excerpt_number','30')))); ?> <?php echo esc_html( get_theme_mod('vw_hotel_grid_excerpt_suffix','') ); ?>
			         			<?php }?>
              		<?php }?> 			
			        </p>
	          	</div>
	        </div>
	        <?php if( get_theme_mod('vw_hotel_grid_button_text','Read More') != ''){ ?>
		        <div class="content-bttn">
			        <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right"><?php echo esc_html(get_theme_mod('vw_hotel_grid_button_text',__('Read More','vw-hotel')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_hotel_grid_button_text',__('Read More','vw-hotel')));?></span></a>
			   	 	</div>
		    	<?php } ?>
	    </div>
	    <div class="clearfix"></div>
  	</article>
</div>