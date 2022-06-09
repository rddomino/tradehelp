<?php
use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this)
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
  <head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
  </head>
  <body>
  <?php $this->beginBody() ?>
    <div class="container">
        <div class="global-layout-content">

          <header class="header">
            <div class="header__container">
                <div class="header__brand-wrapper">
                  <a class="header__brand" href="#">
                      <img class="header__brand-img" src="img/TH-Icon-transparent 1.png" alt="tradehelp logo">
                  </a>
                </div>
                <div class="header__menu-wrapper" >
                  <nav class="header__menu">
                    <ul class="header__list">
                      <li class="active"><a href="#">Home</a></li>
                      <li><a href="#">About us</a></li>
                      <li><a href="#">User Categories</a></li>
                      <li><a href="#">How It Works</a></li>
                      <li><a href="#">Our Prices</a></li>
                      <li><a href="#">Our Partners</a></li>
                      <li><a href="#">Contact Us</a></li>
                    </ul>
                  </nav>
                </div>
                <div class="header__btn">
                  <a class="btn btn-menu">Register for free</a>
                  <a class="btn btn-menu-mini">Log in</a>
                </div>
            </div>
          </header>

          <?= $content ?>

          <footer class="footer">
                                  <div class="footer__wrapper">

                                    <div class="footer__top">
                                      <div class="footer__top__right">
                                        <a href="#" class="footer__logo"><img class="footer__img" src="img/TH-Icon-transparent 1.png" alt="logo"></a>
                                        <nav class="header__menu footer-nav">
                                          <ul class="footer__list">
                                            <li><a href="#">Terms of use</a></li>
                                            <li><a href="#">Privacy policy</a></li>
                                            <li><a href="#">FAQ</a></li>
                                            <li><a href="#">Resources</a></li>
                                            <li><a href="#">Jobs</a></li>
                                          </ul>
                                        </nav>
                                      </div>

                                      <div class="footer__top__left">
                                        <div class="footer__top__security"><img src="img/security.jpg" alt="security"></div>
                                        <div class="footer__top__trust"><img src="img/trusted-seal-blue-3 2.png" alt="trust"></div>
                                      </div>
                                    </div>

                                    <div class="footer__bottom">
                                      <div class="copyright">© 2020 TradeHelp Inc. All Rights Reserved.</div>
                                      <div class="offices">
                                        <span>Our offices:</span>
                                        <span class="office">USA</span>
                                        <span class="office">Malta</span>
                                        <span class="office">Brazil</span>
                                        <span class="office">Mexico</span>
                                        <span class="office">India</span>
                                      </div>
                                      <div class="null"></div>
                                      <div class="social">
                                        <span class="follow">FOLLOW US:</span>
                                        <a class="social__link" href="#"><img src="img/social/instagram.svg" alt="instagram"></a>
                                        <a class="social__link" href="#"><img src="img/social/facebook.svg" alt="facebook"></a>
                                        <a class="social__link" href="#"><img src="img/social/linkedin.svg" alt="linkedin"></a>
                                      </div>
                                    </div>
                                  </div>
          </footer>

        </div>
    </div>
    <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>