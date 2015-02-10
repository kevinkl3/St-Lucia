<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
$bu = Yii::app()->baseUrl;
$GENERAL_INFORMATION = GeneralInformation::model()->findByPk(1);
?>

<!-- Header Image -->
<header id="top" class="header">
  <div class="st-landing">
    <div class="text-vertical-center st-welcome-message">
      <?php echo $GENERAL_INFORMATION->WELCOME_MESSAGE ?>
    </div>
  </div>
</header>

<!-- About -->
<section id="historia" class="about st-history">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center font-bold">
        <h1 class="font-white" >HISTORIA</h1>
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>

<!-- Callout -->
<aside class="callout st-history-main" >
  <div style="text-align:justify; font-size:17px" class="text-vertical-center">
    <?php echo $GENERAL_INFORMATION->HISTORY ?>
  </div>
</aside>

<section id="como-llegar" class="st-map">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="font-bold font-white">CÓMO LLEGAR</h1>
        <p class="lead font-white"><?php echo $GENERAL_INFORMATION->LOCATION ?></p>
      </div>
    </div>
  </div>
</section>

<section id="map">
    <div id="map-canvas"></div>
</section>

<section id="mision-vision" class="services bg-primary">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-10 col-lg-offset-1">
        <h1 class="font-bold">MISIÓN Y VISIÓN</h1>
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="service-item">
              <span class="fa-stack fa-4x">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-eye fa-stack-1x text-primary"></i>
              </span>
              <h4>
                <strong>MISIÓN</strong>
              </h4>
              <p ><?php echo $GENERAL_INFORMATION->MISSION ?></p>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="service-item">
              <span class="fa-stack fa-4x">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-shield fa-stack-1x text-primary"></i>
              </span>
              <h4>
                <strong>VISIÓN</strong>
              </h4>
              <p><?php echo $GENERAL_INFORMATION->VISION ?></p>
            </div>
          </div>
        </div>
        <!-- /.row (nested) -->
      </div>
      <!-- /.col-lg-10 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
