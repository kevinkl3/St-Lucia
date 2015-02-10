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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
          rel="stylesheet" type="text/css">

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<!-- Navigation -->
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg"><i class="fa fa-bars" style="font-size:25px"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav accordion-menu" style="font-weight:bold;">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand">
            <a href="<?php echo $this->createUrl('/'); ?>">SANTA LUCÍA</a>
        </li>
        <?php if ($this->HOME): ?>
            <li>
                <a href="#historia">HISTORIA</a>
            </li>
            <li>
                <a href="#como-llegar">CÓMO LLEGAR</a>
            </li>
            <li>
                <a href="#mision-vision">MISIÓN Y VISIÓN</a>
            </li>
        <?php endif; ?>
        <li>
            <a href="#contactanos">CONTÁCTANOS</a>
        </li>
        <?php if (!Yii::app()->user->isGuest): ?>
            <li>
                <a href="<?php echo $this->createUrl('/admin/index'); ?>">Administrador</a>
            </li>
            <li>
                <a href="<?php echo $this->createUrl('/admin/logout'); ?>">Cerrar sesión</a>
            </li>

        <?php endif; ?>
        <?php if (isset($this->sections) && count($this->sections) > 0): ?>
            <li class="dropdown">
                <a href="#" class="" data-toggle="collapse">SECCIONES<b class="caret"></b></a>
                <ul class="collapsable-menu" role="menu">
                    <?php foreach ($this->sections as $s): ?>
                        <li>
                            <a href="<?php echo $this->createUrl('site/posts', array('seccion' => $s->getUrlName())); ?>"><?php echo $s->NAME; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
        <?php endif; ?>
        <li class="sidebar-brand">
            <a href="" class="navbar-brand">
                <img class="st-logo"
                     src="<?php echo Yii::app()->baseUrl; ?>/images/st-logo.png"/>
            </a>
        </li>
    </ul>
</nav>

<?php if (!$this->HOME): ?>
    <!-- Header -->
    <header id="top" class="st-header">
        <div class="text-vertical-center">
        </div>
    </header>
<?php endif ?>

<div <?php echo !isset($this->HOME) ? 'class="container"' : ''; ?> >
    <?php echo $content; ?>
</div>

<footer id="contactanos">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h4><strong>Municipalidad de Santa Lucía</strong>
                </h4>
                <ul class="list-unstyled">
                    <li><i class="fa fa-phone fa-fw"></i> &nbsp;<?php echo $GENERAL_INFORMATION->PHONES ?></li>
                    <li><i class="fa fa-envelope-o fa-fw"></i><a
                            href="mailto:&nbsp;<?php echo $GENERAL_INFORMATION->EMAIL ?>">
                            &nbsp;<?php echo $GENERAL_INFORMATION->EMAIL ?></a></li>
                    <li><i class="fa fa-fax" style="font-size:15px"></i>
                        &nbsp;<?php echo $GENERAL_INFORMATION->FAX; ?></i></li>
                </ul>
                <br>
                <ul class="list-inline">
                    <li>
                        <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram fa-fw fa-3x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                    </li>
                </ul>
                <hr class="small">
                <p class="text-muted">Copyright &copy 2015 - Municipalidad Santa Lucia</p>
            </div>
        </div>
    </div>
</footer>

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
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: '630471293745366',
            xfbml: true,
            version: 'v2.2'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
