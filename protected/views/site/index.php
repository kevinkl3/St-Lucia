<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
$bu = Yii::app()->baseUrl;
$GENERAL_INFORMATION = GeneralInformation::model()->findByPk(1);
?>

<!-- Header Image -->
<div class="st-landing">
  <div class="st-welcome-message">
    <?php echo $GENERAL_INFORMATION->WELCOME_MESSAGE ?>
  </div>
</div>
<div class="st-section" id="historia">
  <div class="col-lg-12" style="background-image:url('<?php echo $bu;?>/images/img2.jpg'); height:80px; background-size:100%;">
    <h1 style="float:right">HISTORIA</h1>
  </div>
  <div class="col-lg-12">
    <div class="col-lg-4">
      <img src="<?php echo $bu;?>/images/santa-lucia.png">
    </div>
    <div class="col-lg-8 st-history">
      <p align="justify">
        <?php echo $GENERAL_INFORMATION->HISTORY ?>
      </p>
    </div>
  </div>
</div>

<div class="st-section" id="como-llegar">
  <h1>CÓMO LLEGAR</h1>
  <p> <?php echo $GENERAL_INFORMATION->LOCATION ?></p>
  <div id="map-canvas"></div>
</div>
<?php if ($GENERAL_INFORMATION->MISSION):?>
    <div id ="mision-vision" class="row st-section" style="text-align: center; align-content: center;">
        <div id="mision" class="col-lg-6">
            <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
            <h2>MISIÓN</h2>
            <p ><?php echo $GENERAL_INFORMATION->MISSION ?></p>
        </div><!-- /.col-lg-6 -->
        <div id="vision" class="col-lg-6">
            <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
            <h2>VISIÓN</h2>
            <p ><?php echo $GENERAL_INFORMATION->VISION ?></p>
        </div><!-- /.col-lg-6 -->

    </div><!-- /.row -->
<?php endif; ?>
