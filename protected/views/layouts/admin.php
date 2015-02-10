<?php /* @var $this Controller */
$bu = Yii::app()->baseUrl;
$GENERAL_INFORMATION = GeneralInformation::model()->findByPk(1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="language" content="es"/>

  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css"/>

  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

  <div class="navbar navbar-default navbar-fixed-top st-nav">
    <div class="container">
      <div class="navbar-header">
        <a href="<?php echo $this->createUrl('site/index'); ?>" class="navbar-brand">
          <img data-0="width:170px; margin-top:-7px" data-200="width:117px" class="st-logo" src="<?php echo $bu; ?>/images/st-logo.png"/>
        </a>
      </div>
      <div class="navbar-collapse collapse">
        <?php $this->widget('zii.widgets.CMenu', array(
          'items' => array(
            array('label' => 'ADMIN', 'url' => array('/admin/index')),
            array('label' => 'USUARIOS', 'url' => array('/user/index')),
            array('label' => 'PUBLICACIONES', 'url' => array('/post/index')),
            array('label' => 'SECCIONES', 'url' => array('/section/index')),
            array('label' => 'INFORMACIÓN GENERAL', 'url' => Yii::app()->createUrl('generalinformation/update', array('id' => 1)) ),
            array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/admin/logout'), 'visible' => !Yii::app()->user->isGuest)
            ),
          'htmlOptions' => array('class' => 'nav navbar-nav navbar-right')
          )); ?>
        </div>
      </div>
    </div>
    <!-- mainmenu -->

    <div class="st-admin-container">

      <div class="container" >
        <?php echo $content; ?>
      </div>
      <hr class="small">
      <footer id="contactanos">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
              <h4><strong>Municipalidad de Santa Lucía</strong>
              </h4>
              <ul class="list-unstyled">
                <li><i class="fa fa-phone fa-fw"></i> &nbsp;<?php echo $GENERAL_INFORMATION->PHONES ?></li>
                <li><i class="fa fa-envelope-o fa-fw"></i><a href="mailto:&nbsp;<?php echo $GENERAL_INFORMATION->EMAIL ?>">&nbsp;<?php echo $GENERAL_INFORMATION->EMAIL ?></a></li>
                <li><i class="fa fa-fax" style="font-size:15px"></i> &nbsp;<?php echo $GENERAL_INFORMATION->FAX; ?></i></li>
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
              <p class="text-muted">Copyright &copy 2015 - Municipalidad Santa Lucia</p>
            </div>
          </div>
        </div>
      </footer>


    </body>
    </html>
