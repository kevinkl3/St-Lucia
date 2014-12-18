<?php /* @var $this Controller */
$bu = Yii::app()->baseUrl;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="es"/>

    <script src="<?php echo Yii::app()->baseUrl; ?>/js/skrollr.min.js"></script>
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
                    array('label' => 'Historia', 'url' => '#historia'),
                    array('label' => 'Cómo llegar', 'url' => '#como-llegar'),
                    array('label' => 'Contáctanos', 'url' => '#contactanos'),
                    array('label' => 'ADMIN', 'url' => array('/admin/index'), 'visible' => !Yii::app()->user->isGuest),
                    array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/admin/logout'), 'visible' => !Yii::app()->user->isGuest)
                ),
                'htmlOptions' => array('class' => 'nav navbar-nav navbar-right')
            )); ?>
        </div>
    </div>
</div>
<!-- mainmenu -->

<div class="st-container">
    <?php if (!isset($this->HOME) || !$this->HOME): ?>
        <div class="st-page-header"></div>
    <?php endif; ?>
    <div <?php echo !isset($this->HOME) ? 'class="container' : ''; ?> >
        <?php echo $content; ?>
    </div>

    <div class="clear"></div>
    <div class="st-footer">
        Copyright &copy; <?php echo date('Y'); ?> by A Team<br/>
    </div>
    <!-- footer -->

</div>
<!-- page -->

<script src="<?php echo Yii::app()->baseUrl; ?>/js/home.js"></script>
<script>
    skrollr.init();
</script>

</body>
</html>
