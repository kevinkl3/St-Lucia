<?php /* @var $this Controller */
$bu = Yii::app()->baseUrl;
$GENERAL_INFORMATION = GeneralInformation::model()->findByPk(1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<style>
#map-canvas {
  width: 100%;
  height: 600px;
  margin-left: auto;
  margin-right: auto;

}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="language" content="es"/>

<script src="<?php echo Yii::app()->baseUrl; ?>/js/skrollr.min.js"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css"/>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<script src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css"/>

<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

  <div class="navbar navbar-default navbar-fixed-top st-nav"
  data-0="background-color:rgba(0,0,0,0); padding-top:20px; padding-bottom:20px; font-size:20px"
  data-200="background-color:rgba(0,0,0,1); padding-top:0px; padding-bottom:0px; font-size:15px">
  <div class="container">
    <div class="navbar-header">
      <a href="<?php echo $this->createUrl('index'); ?>" class="navbar-brand">
        <img data-0="width:170px; margin-top:-7px" data-200="width:117px" class="st-logo"
        src="<?php echo $bu; ?>/images/st-logo.png"/>
      </a>
    </div>
    <div class="navbar-collapse collapse">
      <?php $this->widget('zii.widgets.CMenu', array(
        'items' => array(
          array('label' => 'Historia', 'url' => '#historia', 'visible' => $this->HOME),
          array('label' => 'Cómo llegar', 'url' => '#como-llegar','visible' => $this->HOME),
          array('label' => 'Contáctanos', 'url' => '#contactanos'),
          array('label' => 'ADMIN', 'url' => array('/admin/index'), 'visible' => !Yii::app()->user->isGuest),
          array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/admin/logout'), 'visible' => !Yii::app()->user->isGuest)
        ),
        'htmlOptions' => array('class' => 'nav navbar-nav navbar-right')
      )); ?>

      <?php if(isset($this->sections) && count($this->sections)>0): ?>

        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">SECCIONES <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <?php foreach($this->sections as $s): ?>
                <li><a href="<?php echo $this->createUrl('site/posts',array('seccion'=>$s->getUrlName()));?>"><?php echo $s->NAME;?></a></li>
              <?php endforeach; ?>
            </ul>
          </li>
        </ul>

      <?php endif;?>
    </div>
  </div>
</div>
</div>
<!-- mainmenu -->

<div class="st-container">
  <?php if (!isset($this->HOME) || !$this->HOME): ?>
    <div class="st-page-header"></div>
  <?php endif; ?>
  <div <?php echo !isset($this->HOME) ? 'class="container"' : ''; ?> >
    <?php echo $content; ?>
  </div>
  <div class="clear"></div>
  <footer id="contactanos">
    <div class="copyright">
      &copy 2015 - Municipalidad Santa Lucia
    </div>
    <div class="social">
      <a class="support">
        <i class="fa fa-phone" style="font-size:15px"></i> &nbsp;<?php echo $GENERAL_INFORMATION->PHONES ?><br>
        <i class="fa fa-envelope-o" style="font-size:15px"></i> &nbsp;<?php echo $GENERAL_INFORMATION->EMAIL ?><br>
        <i class="fa fa-fax" style="font-size:15px"></i> &nbsp;<?php echo $GENERAL_INFORMATION->FAX; ?>
      </a>
      <a href="#" class="face">f</a>
      <a href="#" class="tweet">t</a>
      <a href="#" class="insta">inst</a>
    </div>
  </footer>
</div>

<!-- page -->

<script src="<?php echo Yii::app()->baseUrl; ?>/js/home.js"></script>
<script>
skrollr.init();
</script>
<?php if ($this->HOME): ?>
  <script>
  function initialize() {
    var mapCanvas = document.getElementById('map-canvas');
    var mapOptions = {
      scrollwheel: false,
      navigationControl: false,
      mapTypeControl: false,
      scaleControl: false,
      center: new google.maps.LatLng(14.118155, -87.106977),
      zoom: 15,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas, mapOptions)
  }
  google.maps.event.addDomListener(window, 'load', initialize);
  </script>
<?php endif; ?>

<script src="<?php echo Yii::app()->baseUrl; ?>/js/bootstrap.min.js"></script>
</body>
</html>
