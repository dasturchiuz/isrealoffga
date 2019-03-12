<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\PublicAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title>Kids Academy</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div id="preloader"></div>
<?php if(!Yii::$app->user->isGuest) { ?>
<header class="navbar navbar-inverse navbar-fixed-top " role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/"><h1 style="font-size: 20px;"><span class="pe-7s-gleam bounce-in"></span> Kids Academy</h1></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <?php if(!Yii::$app->user->identity->isAdmin):?>
                        <a href="#" style="color: #4591D3; font-weight: bold;">Vebinarga o`tish</a>
                    <?php else: ?>
                        <a href="/admin" style="color: #00b29e; font-weight: bold;">Admin Panel</a>
                    <?php endif; ?>
                </li>
                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kurslar <i class="fa fa-chevron-down"></i></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="/site/chess">Shaxmat</a></li>
                        <li><a href="/site/mathematic">Matematika</a></li>
                        <li><a href="/site/mental-arithmetic">Mental Arifmetika</a></li>
                        <li><a href="/site/general-english">General English</a></li>
                        <li><a href="/site/ielts">IELTS</a></li>
                        <div class="hr_linya"></div>
                        <li><a href="/site/offline-videos">Offlayn videolar</a></li>
                        <li><a href="/site/free-materials">Bepul materiallar</a></li>
                    </ul>
                </li>
                <?php if(Yii::$app->user->isGuest):?>
                    <li><a href="<?= Url::toRoute(['/auth/login']) ?>">Kirish <i class="fa fa-sign-in-alt"></i></a></li>
                <?php else: ?>

                <li><a href="/site/contact">Kontakt</a></li>
                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kabinet <i class="fa fa-chevron-down"></i></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="/auth/cabinet">Kabinetim</a></li>
                        <div class="hr_linya"></div>
                        <li><a href="/auth/courses">Kurslar</a></li>
                        <div class="hr_linya"></div>
                        <li><a href="/auth/payments">To`lovlar</a></li>
                        <div class="hr_linya"></div>
                        <li><a href="/auth/info-user">Ma'lumotlar</a></li>
                        <li>
                            <?= Html::beginForm(['/auth/logout'], 'post')
                            . Html::submitButton(
                                'CHIQISH (' . Yii::$app->user->identity->name . ')',
                                ['class' => 'btn btn-danger', 'style' => 'width: 100%;']
                            )
                            . Html::endForm() ?>
                        </li>
                        <?php endif; ?>
                    </ul>
                </li>


                <li title="O'zbek"><a href="#"><img src="../public/images/uzb_flag.jpg" style="width: 25px;" alt=""></a></li>
                <li title="Русский"><a href="#"><img src="../public/images/rus_flag.png" style="width: 25px;" alt=""></a></li>
            </ul>
        </div>
    </div>
</header><!--/header-->
<?php } else {?>
<header class="navbar navbar-inverse navbar-fixed-top " role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/"><h1 style="font-size: 20px;"><span class="pe-7s-gleam bounce-in"></span> Kids Academy</h1></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/#about-us">Biz haqimizda</a></li>
                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kurslar <i class="fa fa-chevron-down"></i></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="/site/chess">Shaxmat</a></li>
                        <li><a href="/site/mathematic">Matematika</a></li>
                        <li><a href="/site/mental-arithmetic">Mental Arifmetika</a></li>
                        <li><a href="/site/general-english">General English</a></li>
                        <li><a href="/site/ielts">IELTS</a></li>
                        <div class="hr_linya"></div>
                        <li><a href="/site/offline-videos">Offlayn videolar</a></li>
                        <li><a href="/site/free-materials">Bepul materiallar</a></li>
                    </ul>
                </li>
                <?php if(Yii::$app->user->isGuest):?>
                    <li><a href="<?= Url::toRoute(['/auth/login']) ?>">Kirish <i class="fa fa-sign-in-alt"></i></a></li>
                <?php else: ?>

                    <li>
                        <?= Html::beginForm(['/auth/logout'], 'post')
                        . Html::submitButton(
                            'LogOut (' . Yii::$app->user->identity->name . ')',
                            ['class' => 'btn btn-link logout', 'style' => 'margin-top: 5px;']
                        )
                        . Html::endForm() ?>
                    </li>
                <?php endif; ?>
                <!--                <li><a href="/site/registration">Ro'yxatdan o'tish</a></li>-->
                <!--                <li title="Login"><a href="/site/login"><i class="fa fa-lock"></i></a></li>-->
                <li><a href="/site/contact">Kontakt</a></li>
                <li title="O'zbek"><a href="#"><img src="../public/images/uzb_flag.jpg" style="width: 25px;" alt=""></a></li>
                <li title="Русский"><a href="#"><img src="../public/images/rus_flag.png" style="width: 25px;" alt=""></a></li>
            </ul>
        </div>
    </div>
</header>
<?php }?>
<?= $content ?>

<!--start footer-->
    <div id="footer-wrapper">
        <section id="bottom" class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 about-us-widget">
                        <h4>Global Coverage</h4>
                        <p>Was drawing natural fat respect husband. An as noisy an offer drawn blush place. These tried for way joy wrote witty. In mr began music weeks after at begin.</p>
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <h4>Company</h4>
                        <div>
                            <ul class="arrow">
                                <li><a href="#">Company Overview</a></li>
                                <li><a href="#">Meet The Team</a></li>
                                <li><a href="#">Our Awesome Partners</a></li>
                                <li><a href="#">Our Services</a></li>
                            </ul>
                        </div>
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <h4>Latest Articles</h4>
                        <div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="../public/images/portfolio/folio01.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">Blog Post A</a></span>
                                    <small class="muted">Posted 14 April 2014</small>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="../public/images/portfolio/folio02.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">Blog Post B</a></span>
                                    <small class="muted">Posted 14 April 2014</small>
                                </div>
                            </div>
                        </div>
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <h4>Come See Us</h4>
                        <address>
                            <strong>Ace Towers</strong><br>
                            New York Ave,<br>
                            New York, 215648<br>
                            <a href="tel:+998998134077">+998998134077</a>
                        </address>
                    </div> <!--/.col-md-3-->
                </div>
            </div>
        </section><!--/#bottom-->

        <footer id="footer" class="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        &copy; 2019 <a href="/" title="Kids Academy">Kids Academy</a>.
                    </div>
                    <div class="col-sm-6">
                        <ul class="pull-right">
                            <li><a id="gototop" class="gototop" href="#"><i class="fa fa-chevron-up"></i></a></li><!--#gototop-->
                        </ul>
                    </div>
                </div>
            </div>
        </footer><!--/#footer-->
    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
