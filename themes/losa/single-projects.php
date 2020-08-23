<?php
get_header();
?>

<section class="banner-sec page-bnr inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/page-bnr.jpg');">
</section>
<div class="xs-top-phone-cntlr show-md">
  <div class="xs-top-phone hdr-rgt-top">
    <a href="#">
      <span>
        <i><img src="<?php echo THEME_URI; ?>/assets/images/xs-hdr-tell-logo.png" alt=""></i>
        <em>(55) 5424-0205</em>
      </span>
    </a>
  </div>
</div>
<!-- end of header part -->
<?php 
$title = get_field('title');
$content = get_field('content');
?>
<section class="proyect-page-cntlr">
  <div class="proyect-page-entry-title">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="pt-pg-entry-title-inr">
            <span class="pt-pg-entry-title-icon">
              <i>
                <img src="<?php echo THEME_URI; ?>/assets/images/pt-pg-entry-title.png" alt="">
              </i>
            </span>
            <h1 class="pt-pg-entry-title"><?php echo $title; ?></h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pt-main-pg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12">
          <div class="pt-pg-left">
<?php 
$gallery = get_field('slider');
if( $gallery ):
?>
            <div class="pt-slider-wrap">
              <div class="pt-slider-skew-title clearfix">
                <div class="pt-sl-lft">
                  <span class="pt-sl-lft-icon">
                    <img src="<?php echo THEME_URI; ?>/assets/images/pt-sl-lft-icon.png" alt="">
                  </span>
                  <p><i>ver proyecto terminado</i></p>
                </div>
                <div class="pt-sl-rt">
                  <div class="pt-sl-rt-skew"></div>
                  <div class="pt-sl-rt-inr">
                    <span class="pt-sl-rt-icon">
                      <img src="<?php echo THEME_URI; ?>/assets/images/pt-sl-rt-icon.png" alt="">
                    </span>
                    <p><i>ver antes</i></p>
                  </div>
                </div>
              </div>
              <div class="pt-slider-cntlr">
                <div class="slick-arrows-wrap">
                  <div class="slick-arrows-cntlr">
                    <div class="slick-arrows-skew"></div>
                    <div class="slick-arrows clearfix">
                      <div class="pt-slick-prev slick-arrow"></div>
                      <div class="pt-slick-next slick-arrow"></div>
                    </div>
                  </div>
                </div>
                <div class="ptPgslider slider">
<?php foreach ($gallery as $image) {
$imgID = $image['ID'];
$imgSrc = cbv_get_image_src($imgID);
echo '<div class="ptPgslide__item">
<div class="ptPgslide__item_inr inline-bg" style="background: url('.$imgSrc.');"></div>
</div>';
} ?>
                </div>
              </div>
            </div>
<?php endif; ?>

            <div class="pt-pg-left-desc">
              <div class="pt-pg-entry-title-inr left-desc-entry-title">
                <span class="pt-pg-entry-title-icon">
                  <i>
                    <img src="<?php echo THEME_URI; ?>/assets/images/pt-pg-entry-title.png" alt="">
                  </i>
                </span>
                <h4 class="pt-pg-entry-title"><?php echo $title; ?></span></h4>
              </div>
<?php echo wpautop($content); ?>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="pt-pg-right">
            <div class="pt-xs-ls-form inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/ls-form-bg-img.jpg');">
              <span class="pt-xs-ls-form-bg"></span>
              <div class="ls-form-sec-cntlr pt-xs-form-cntlr">
                <div class="entry-hdr-cntlr text-white pt-pg-entry-hdr-cntlr">
                  <div class="entry-hdr-wrap pt-pg-entry-hdr-wrap">
                    <div class="entry-hdr-title-logo">
                      <i><img src="<?php echo THEME_URI; ?>/assets/images/ls-form-entry-hdr-img-002.png" alt=""></i>
                    </div>
                    <h2 class="entry-hdr-title"><em>preguntanos</em></h2>
                    <h5 class="entry-hdr-sub-title">Nosotros te asesoramos</h5>
                  </div>
                  <div class="entry-hdr-desc">
                    <p>Cada proyecto es único, por eso necesitas el apoyo de un experto que te pueda guiar<br>
                      durante todo el proceso, en <strong>Soluciones LOSA</strong> contamos con más de 20 años de experiencia.
                    </p>
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
                  <div class="ls-form-btn pt-xs-form">
                    <input type="submit" value="enviar">
                  </div>
                </div>
              </div>
            </div>
            <div class="pt-pg-right-mdl-entry-title">
              <div class="entry-hdr-wrap">
                <div class="entry-hdr-title-logo">
                  <i><img src="<?php echo THEME_URI; ?>/assets/images/ls-gried-entry-hdr-img-003.png" alt=""></i>
                </div>
                <h2 class="entry-hdr-title"><em>proyectos</em></h2>
                <h5 class="entry-hdr-sub-title">Casos de Éxito soluciones losa</h5>
              </div>
            </div>
            <div class="pt-accordion">
              <div class="hh-accordion-tab-row-wrap">
                <div class="hh-accordion-tab-row">
                  <div class="hh-accordion-hdr">
                    <span class="hh-accordion-hdr-img">
                      <img src="<?php echo THEME_URI; ?>/assets/images/accordion-hdr-img-001.png" alt="">
                    </span>
                    <h6 class="hh-accordion-title">Debt Financing</h6>
                  </div>
                  <div class="hh-accordion-des">
                    <div>
                      <ul class="reset-list">
                        <li class="active"><a href="#">Escolar Emprendedores</a></li>
                        <li><a href="#">Proyecto Título Dos</a></li>
                        <li><a href="#">Proyecto Título  Tres</a></li>
                        <li><a href="#">Proyecto Título Cuatro</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="hh-accordion-tab-row-wrap">
                <div class="hh-accordion-tab-row">
                  <div class="hh-accordion-hdr">
                    <span class="hh-accordion-hdr-img">
                      <img src="<?php echo THEME_URI; ?>/assets/images/accordion-hdr-img-002.png" alt="">
                    </span>
                    <h6 class="hh-accordion-title">Albañileria</h6>
                  </div>
                  <div class="hh-accordion-des">
                    <div>
                      <ul class="reset-list">
                        <li class="active"><a href="#">Escolar Emprendedores</a></li>
                        <li><a href="#">Proyecto Título Dos</a></li>
                        <li><a href="#">Proyecto Título  Tres</a></li>
                        <li><a href="#">Proyecto Título Cuatro</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="hh-accordion-tab-row-wrap">
                <div class="hh-accordion-tab-row">
                  <div class="hh-accordion-hdr">
                    <span class="hh-accordion-hdr-img">
                      <img src="<?php echo THEME_URI; ?>/assets/images/accordion-hdr-img-002.png" alt="">
                    </span>
                    <h6 class="hh-accordion-title">Eléctrico</h6>
                  </div>
                  <div class="hh-accordion-des">
                    <div>
                      <ul class="reset-list">
                        <li class="active"><a href="#">Escolar Emprendedores</a></li>
                        <li><a href="#">Proyecto Título Dos</a></li>
                        <li><a href="#">Proyecto Título  Tres</a></li>
                        <li><a href="#">Proyecto Título Cuatro</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="hh-accordion-tab-row-wrap">
                <div class="hh-accordion-tab-row">
                  <div class="hh-accordion-hdr">
                    <span class="hh-accordion-hdr-img">
                      <img src="<?php echo THEME_URI; ?>/assets/images/accordion-hdr-img-004.png" alt="">
                    </span>
                    <h6 class="hh-accordion-title">HerrerÍa</h6>
                  </div>
                  <div class="hh-accordion-des">
                    <div>
                      <ul class="reset-list">
                        <li class="active"><a href="#">Escolar Emprendedores</a></li>
                        <li><a href="#">Proyecto Título Dos</a></li>
                        <li><a href="#">Proyecto Título  Tres</a></li>
                        <li><a href="#">Proyecto Título Cuatro</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="hh-accordion-tab-row-wrap">
                <div class="hh-accordion-tab-row">
                  <div class="hh-accordion-hdr">
                    <span class="hh-accordion-hdr-img">
                      <img src="<?php echo THEME_URI; ?>/assets/images/accordion-hdr-img-005.png" alt="">
                    </span>
                    <h6 class="hh-accordion-title">Mobiliario</h6>
                  </div>
                  <div class="hh-accordion-des">
                    <div>
                      <ul class="reset-list">
                        <li class="active"><a href="#">Escolar Emprendedores</a></li>
                        <li><a href="#">Proyecto Título Dos</a></li>
                        <li><a href="#">Proyecto Título  Tres</a></li>
                        <li><a href="#">Proyecto Título Cuatro</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="hh-accordion-tab-row-wrap">
                <div class="hh-accordion-tab-row">
                  <div class="hh-accordion-hdr">
                    <span class="hh-accordion-hdr-img">
                      <img src="<?php echo THEME_URI; ?>/assets/images/accordion-hdr-img-006.png" alt="">
                    </span>
                    <h6 class="hh-accordion-title">Plomería</h6>
                  </div>
                  <div class="hh-accordion-des">
                    <div>
                      <ul class="reset-list">
                        <li class="active"><a href="#">Escolar Emprendedores</a></li>
                        <li><a href="#">Proyecto Título Dos</a></li>
                        <li><a href="#">Proyecto Título  Tres</a></li>
                        <li><a href="#">Proyecto Título Cuatro</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
get_footer();
?>