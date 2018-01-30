<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\themes\NineStars\NineStars;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

NineStars::register($this);

/** @var \yii\base\Theme $theme */
$theme = $this->theme;
$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@app/themes/NineStars/assets');

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= Html::encode(Yii::$app->name . '-' . $this->title) ?></title>
    <?= Html::csrfMetaTags() ?>

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="container">
    <ul id="gn-menu" class="gn-menu-main">
        <li class="gn-trigger">
            <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
            <nav class="gn-menu-wrapper">
                <div class="gn-scroller">
                    <ul class="gn-menu">
                        <li class="gn-search-item">
                            <input placeholder="Search" type="search" class="gn-search">
                            <a class="gn-icon gn-icon-search"><span>Search</span></a>
                        </li>
                        <li>
                            <a href="#about" class="gn-icon gn-icon-download">About</a>
                        </li>
                        <li><a href="#service" class="gn-icon gn-icon-cog">Service</a></li>
                        <li><a href="#works" class="gn-icon gn-icon-help">Works</a></li>
                        <li>
                            <a href="#contact" class="gn-icon gn-icon-archive">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /gn-scroller -->
            </nav>
        </li>
        <li><a href="index.html">NINESTARS</a></li>
        <li>
            <ul class="company-social">
                <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </li>
    </ul>
</div>

<!-- Section: intro -->
<section id="intro" class="intro" style="background:url('<?= $directoryAsset ?>/images/img-bg.jpg') no-repeat center center; background-size: cover;">
    <div class="slogan">
        <h1>This is Ninestars</h1>
        <p>make awesome stuff with Bootstrap framework</p>
        <a href="#about" class="btn btn-skin scroll">Learn more</a>
    </div>
</section>
<!-- /Section: intro -->

<!-- Section: about -->
<section id="about" class="home-section text-center bg-gray">
    <div class="heading-about marginbot-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">

                    <div class="section-heading">
                        <h2>About us</h2>
                        <p>Lorem ipsum dolor sit amet, no nisl mentitum recusabo per, vim at blandit qualisque dissentiunt. Diam efficiantur conclusionemque ut has</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-xs-6 col-sm-3 col-md-3">

                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Anna Hanaceck</h5>
                        <p class="subtitle">Pixel Crafter</p>
                        <div class="avatar">
                            <img src="<?= $directoryAsset ?>/images/team/1.jpg" alt="" class="img-responsive" /></div>
                    </div>
                </div>

            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">

                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Maura Daniels</h5>
                        <p class="subtitle">Ruby on Rails</p>
                        <div class="avatar">
                            <img src="<?= $directoryAsset ?>/images/team/2.jpg" alt="" class="img-responsive" /></div>
                    </div>

                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">

                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Jack Briane</h5>
                        <p class="subtitle">jQuery Ninja</p>
                        <div class="avatar">
                            <img src="<?= $directoryAsset ?>/images/team/3.jpg" alt="" class="img-responsive" /></div>
                    </div>
                </div>

            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">

                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Tom Petterson</h5>
                        <p class="subtitle">Typographer</p>
                        <div class="avatar">
                            <img src="<?= $directoryAsset ?>/images/team/4.jpg" alt="" class="img-responsive" /></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- /Section: about -->


<!-- Section: services -->
<section id="service" class="home-section text-center">

    <div class="heading-about marginbot-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">

                    <div class="section-heading">
                        <h2>Our Services</h2>
                        <p>Lorem ipsum dolor sit amet, no nisl mentitum recusabo per, vim at blandit qualisque dissentiunt. Diam efficiantur conclusionemque ut has</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3">

                <div class="service-box">
                    <div class="service-icon">
                        <i class="fa fa-code fa-3x"></i>
                    </div>
                    <div class="service-desc">
                        <h5>Print</h5>
                        <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                    </div>
                </div>

            </div>
            <div class="col-sm-3 col-md-3">

                <div class="service-box">
                    <div class="service-icon">
                        <i class="fa fa-suitcase fa-3x"></i>
                    </div>
                    <div class="service-desc">
                        <h5>Web Design</h5>
                        <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                    </div>
                </div>

            </div>
            <div class="col-sm-3 col-md-3">

                <div class="service-box">
                    <div class="service-icon">
                        <i class="fa fa-cog fa-3x"></i>
                    </div>
                    <div class="service-desc">
                        <h5>Photography</h5>
                        <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                    </div>
                </div>

            </div>
            <div class="col-sm-3 col-md-3">

                <div class="service-box">
                    <div class="service-icon">
                        <i class="fa fa-rocket fa-3x"></i>
                    </div>
                    <div class="service-desc">
                        <h5>Cloud System</h5>
                        <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- /Section: services -->


<!-- Section: works -->
<section id="works" class="home-section text-center bg-gray">
    <div class="heading-works marginbot-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">

                    <div class="section-heading">
                        <h2>Recent Works</h2>
                        <p>Lorem ipsum dolor sit amet, no nisl mentitum recusabo per, vim at blandit qualisque dissentiunt. Diam efficiantur conclusionemque ut has</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">

                <div class="row gallery-item">
                    <div class="col-md-3">
                        <a href="<?= $directoryAsset ?>/images/works/1.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?= $directoryAsset ?>/images/works/1@2x.jpg">
                            <img src="<?= $directoryAsset ?>/images/works/1.jpg" class="img-responsive" alt="img">
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="<?= $directoryAsset ?>/images/works/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?= $directoryAsset ?>/images/works/1@2x.jpg">
                            <img src="<?= $directoryAsset ?>/images/works/2.jpg" class="img-responsive" alt="img">
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="<?= $directoryAsset ?>/images/works/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?= $directoryAsset ?>/images/works/1@2x.jpg">
                            <img src="<?= $directoryAsset ?>/images/works/3.jpg" class="img-responsive" alt="img">
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="<?= $directoryAsset ?>/images/works/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?= $directoryAsset ?>/images/works/1@2x.jpg">
                            <img src="<?= $directoryAsset ?>/images/works/4.jpg" class="img-responsive" alt="img">
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="<?= $directoryAsset ?>/images/works/5.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?= $directoryAsset ?>/images/works/1@2x.jpg">
                            <img src="<?= $directoryAsset ?>/images/works/5.jpg" class="img-responsive" alt="img">
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="<?= $directoryAsset ?>/images/works/6.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?= $directoryAsset ?>/images/works/1@2x.jpg">
                            <img src="<?= $directoryAsset ?>/images/works/6.jpg" class="img-responsive" alt="img">
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="<?= $directoryAsset ?>/images/works/7.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?= $directoryAsset ?>/images/works/1@2x.jpg">
                            <img src="<?= $directoryAsset ?>/images/works/7.jpg" class="img-responsive" alt="img">
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="<?= $directoryAsset ?>/images/works/8.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="<?= $directoryAsset ?>/images/works/1@2x.jpg">
                            <img src="<?= $directoryAsset ?>/images/works/8.jpg" class="img-responsive" alt="img">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- /Section: works -->

<!-- Section: contact -->
<section id="contact" class="home-section text-center">
    <div class="heading-contact marginbot-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">

                    <div class="section-heading">
                        <h2>Get in touch</h2>
                        <p>Lorem ipsum dolor sit amet, no nisl mentitum recusabo per, vim at blandit qualisque dissentiunt. Diam efficiantur conclusionemque ut has</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-offset-2">
                <div class="boxed-grey">
                    <form id="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                        Email Address</label>
                                    <div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                            </span>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        Subject</label>
                                    <select id="subject" name="subject" class="form-control" required="required">
                                        <option value="na" selected="">Choose One:</option>
                                        <option value="service">General Customer Service</option>
                                        <option value="suggestions">Suggestions</option>
                                        <option value="product">Product Support</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Message</label>
                                    <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                              placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                                    Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="widget-contact row">
                    <div class="col-lg-6">
                        <address>
                            <strong>Ninestars Ltd.</strong><br>
                            Big Villa 334 Awesome, Beautiful Suite 1200<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</abbr>
                            (123) 456-7890
                        </address>
                    </div>

                    <div class="col-lg-6">
                        <address>
                            <strong>Email</strong><br>
                            <a href="mailto:#">email.name@example.com</a><br />
                            <a href="mailto:#">name.name@example.com</a>
                        </address>

                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- /Section: contact -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>