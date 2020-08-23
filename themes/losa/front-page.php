<?php 
get_header();
?>

<section class="banner-sec inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/bnr-bg-img.jpg');">
</section>

<!-- end of header -->
<?php 
$hslides = get_field('slider', HOMEID);
?>
<section class="main-slider-sec">
  <span class="main-slider-sec-rgt-bg"></span>

  <div class="container">
    <div class="main-slider-sec-inr">
      <span class="main-slider-sec-rgt-angle"></span>
      <span class="main-slider-sec-rgt-angle-xs-1"></span>
      <span class="main-slider-sec-rgt-angle-xs-2"></span>
      <div class="main-slider-sec-inr-cntlr" style="background: url('<?php echo THEME_URI; ?>/assets/images/bannner-slider-bg.jpg');">
        <div class="xs-top-phone hdr-rgt-top show-md">
          <a href="#">
            <span>
              <i><img src="<?php echo THEME_URI; ?>/assets/images/xs-hdr-tell-logo.png" alt=""></i>
              <em>(55) 5424-0205</em>
            </span>
          </a>
        </div>
    <?php if($hslides): ?>
        <div class="main-slider mainSlider">
    <?php 
    $slidesrc = '';
    foreach( $hslides as $hslide ):
    	$subtitle = $hslide['subtitle'];
    	$title = $hslide['title'];
    	$description = $hslide['description'];
    	$quote = $hslide['quote'];
    	$link_text = $hslide['link_text'];
    	$link_url = $hslide['link_url'];
    	$select_projects = $hslide['select_projects']; 
    ?>
          <div class="mainSlideItem">
            <div class="clearfix">
              <div class="mainSlideDesRgt">
                <div class="mainInnerSlider clearfix">
<?php 
if( is_array( $select_projects ) && count( $select_projects ) > 0 ):
    $args = array(
      'post_type' => 'projects',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'post__in' => $select_projects
    );
$query = new WP_Query($args);
if($query->have_posts()): while($query->have_posts()): $query->the_post();
	$prID = get_the_ID();
	$overview = get_field('overview', $prID);
	$after_image = cbv_get_image_tag($overview['after_image']);
	$before_image = cbv_get_image_tag($overview['before_image']);
?>
                  <div class="mainInnerSlideItem">
                    <div class="tab-grd-item">
                      <div class="tab-grd-item-img-bx afterBeforeEffect">
                        <?php echo $after_image; echo $before_image; ?>
                      </div>
                    </div>
                  </div>
<?php endwhile; endif; endif;?>

                </div>
                <div class="mainSliderRgtDes">
					<?php if( !empty( $quote ) ){ ?>
                  <p><em><?php echo $quote; ?></em></p>
					<?php } ?>
                </div>
              </div>
              <div class="mainSlideDes">
<?php 
if( !empty($hslide['subtitle']) ) printf('<h5 class="msd-sub-title">%s</h5>', $hslide['subtitle']);
if( !empty($hslide['title']) ) printf('<strong class="msd-title">%s</strong>', $hslide['title']);
if( !empty($hslide['description']) ) echo wpautop($hslide['description']);
?>
                <div class="mainSliderRgtDes mainSlideDes-btm-mdshow">
					<?php if( !empty( $quote ) ){ ?>
                  <p><em><?php echo $quote; ?></em></p>
					<?php } ?>
                </div>
<?php 
if( !empty( $link_url ) ){
?>
                <div class="msd-btn">
                  <a href="<?php echo $link_url; ?>">
                  <em><i><img src="<?php echo THEME_URI; ?>/assets/images/btn-plush-icon.png"></i><?php echo $link_text; ?></em></a>
                </div>
<?php } ?>
              </div>
            </div>
          </div>
    <?php endforeach; ?>

        </div>
   	<?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php 
$services = get_field('services', HOMEID);
$logo = cbv_get_image_tag($services['logo']);
?>
<section class="ls-slider-sec">
  <div class="container-md">
    <div class="row">
      <div class="col-md-12">
        <div class="slider-sec-entry-hdr-cntlr">
          <div class="slider-sec-entry-hbd-logo">
            <?php echo $logo; ?>
          </div>
          <div class="entry-hdr-cntlr entry-hdr-no-icon">
          <div class="entry-hdr-wrap">
            <div class="entry-hdr-title-logo"><i></i></div>
<?php 
if( !empty($services['title']) ) printf('<h3 class="entry-hdr-title"><em>%s</em></h3>', $services['title']);
if( !empty($services['subtitle']) ) printf('<h5 class="entry-hdr-sub-title">%s</h5>', $services['subtitle']);
?>
          </div>
          <div class="entry-hdr-desc">
<?php 
if( !empty($services['description']) ) echo wpautop($services['description']);
?>
          </div>
        </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="ls-slider-sec-inr">
<?php 
    $args = array(
      'post_type' => 'services',
      'post_status' => 'publish',
      'posts_per_page' => -1
    );
$query = new WP_Query($args);
if($query->have_posts()):
?>
          <div class="ls-slider hmSlider clearfix">
<?php  
while($query->have_posts()): $query->the_post();
	$prID = get_the_ID();
	$tId = get_post_thumbnail_id($prID);
	$tURL = cbv_get_image_src($tId);
?>
            <div class="ls-slide-item">
              <div class="ls-slide-item-ctlr">
                <div class="ls-slide-img">
                  <div class="ls-slide-sqr-img-ctlr">
                    <a href="#" class="overlay-link"></a>
                    <div class="ls-slide-sqr-img inline-bg" style="background: url('<?php echo $tURL; ?>');"></div>
                  </div>
                  <div class="ls-slide-angel-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/ls-slider-angel-img-red.png');">
                    <img src="<?php echo THEME_URI; ?>/assets/images/ls-slider-angel-img-red.png">
                  </div>
                </div>
                <div class="ls-slide-des mHc">
                  <h5 class="ls-slide-title mHc1"><em><?php the_title(); ?></em></h5>
                  <p class="mHc2"><?php the_excerpt(); ?></p>
                  <a href="<?php echo get_the_permalink(); ?>">conoce más</a>
                </div>
              </div>
            </div>
<?php endwhile; ?>
          </div>
<?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
$contact = get_field('contact', HOMEID);
$logo = cbv_get_image_tag($contact['logo']);
?>
<section class="ls-form-sec-wrap inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/ls-form-bg-img.jpg');">
  <div class="ls-form-sec-shadow">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="ls-form-sec-cntlr">
            <div class="entry-hdr-cntlr text-white">
              <div class="entry-hdr-wrap">
                <div class="entry-hdr-title-logo">
                  <i><?php echo $logo; ?></i>
                </div>
<?php 
if( !empty($contact['title']) ) printf('<h2 class="entry-hdr-title"><em>%s</em></h2>', $contact['title']);
if( !empty($contact['subtitle']) ) printf('<h5 class="entry-hdr-sub-title">%s</h5>', $contact['subtitle']);
?>
              </div>
              <div class="entry-hdr-desc">
<?php 
if( !empty($services['description']) ) echo wpautop($services['description']);
?>
              </div>
            </div>
            <div class="ls-form-cntlr">
              <div class="ls-form-input-field-row">
                <div class="ls-form-input-field">
                  <div class="ls-form-input-field-inr">
                    <i>
                    <img src="<?php echo THEME_URI; ?>/assets/images/ls-form-contact.png" alt="">
                  </i>
                  </div>
                  <input type="text" placeholder="Nombre Completo">
                </div>
                <div class="ls-form-input-field">
                  <div class="ls-form-input-field-inr">
                    <i>
                    <img src="<?php echo THEME_URI; ?>/assets/images/ls-form-email.png" alt="">
                  </i>
                  </div>
                  <input type="email" placeholder="Correo Electrónico">
                </div>
                <div class="ls-form-input-field">
                  <div class="ls-form-input-field-inr">
                    <i>
                    <img src="<?php echo THEME_URI; ?>/assets/images/ls-form-tell.png" alt="">
                  </i>
                  </div>
                  <input type="text" placeholder="Teléfono">
                </div>
              </div>
              <div class="ls-form-input-field-textarea-row">
                <div class="ls-form-input-field">
                  <div class="ls-form-input-field-inr">
                    <i>
                    <img src="<?php echo THEME_URI; ?>/assets/images/ls-form-text.png" alt="">
                  </i>
                  </div>
                  <textarea placeholder="Mensaje"></textarea>
                </div>
              </div>
              <div class="ls-form-btn">
                <input type="submit" value="enviar">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </div>  
</section>

<?php 
$photos = get_field('photos', HOMEID);
$logo = cbv_get_image_tag($photos['icon']);
?>
<section class="ls-layout-grid-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="ls-layout-grid-innr">
          <div class="entry-hdr-cntlr">
              <div class="entry-hdr-wrap">
                <div class="entry-hdr-title-logo">
                  <i><?php echo $logo; ?></i>
                </div>
<?php 
if( !empty($photos['title']) ) printf('<h2 class="entry-hdr-title"><em>%s</em></h2>', $photos['title']);
if( !empty($photos['subtitle']) ) printf('<h5 class="entry-hdr-sub-title">%s</h5>', $photos['subtitle']);
?>
              </div>
              <div class="entry-hdr-desc">
<?php 
if( !empty($photos['description']) ) echo wpautop($photos['description']);
?>
              </div>
          </div>
          <div class="ls-grid-items">
            <ul class="reset-list">
              <li>
                <div class="ls-grid-item">
                  <div class="ls-grid-item-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/ls-grid-sec-img-001.jpg');">
                    <a class="overlay-link" href="#"></a>
                  </div>
                </div>
              </li>
              <li>
                <div class="ls-grid-item">
                  <div class="ls-grid-item-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/ls-grid-sec-img-002.jpg');">
                    <a class="overlay-link" href="#"></a>
                  </div>
                </div>
              </li>
              <li>
                <div class="ls-grid-item">
                  <div class="ls-grid-item-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/ls-grid-sec-img-003.jpg');">
                    <a class="overlay-link" href="#"></a>
                  </div>
                </div>
              </li>
              <li>
                <div class="ls-grid-item">
                  <div class="ls-grid-item-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/ls-grid-sec-img-004.jpg');">
                    <a class="overlay-link" href="#"></a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
get_footer();
?>