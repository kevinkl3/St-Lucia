<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$bu = Yii::app()->baseUrl;
?>

<!-- Header Image -->
<div class="st-landing">
    <div class="st-welcome-message">
       <?php echo $this->GENERAL_INFORMATION->WELCOME_MESSAGE ?>
    </div>
</div>

<div class="st-section" id="historia">
    <div class="col-lg-12">
        <div class="col-lg-4">
            <img src="<?php echo $bu;?>/images/santa-lucia.png">
        </div>

        <div class="col-lg-8">
            <h2>HISTORIA</h2>
            <p align="justify">
                 <?php echo $this->GENERAL_INFORMATION->HISTORY ?>
            </p>
        </div>
    </div>
</div>

<div class="st-section" id="como-llegar">
    <h1>CÓMO LLEGAR</h1>
    <p> <?php echo $this->GENERAL_INFORMATION->LOCATION ?></p>
    <div id="map-canvas"></div>
</div>
