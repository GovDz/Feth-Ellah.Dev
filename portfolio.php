<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Explore the portfolio of Feth-Ellah BOUDELLAL, 
  a dedicated cybersecurity student with a passion for challenges.">
  <meta name="keywords" content="Feth-Ellah BOUDELLAL, Feth-Ellah, BOUDELLAL, Feth-Ellah Boudellal, Feth-Ellah boudellal,">
  <title>My Portfolio</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="./assets/imgs/logo/favicon.png">



  <!-- All CSS files -->
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/all.min.css">
  <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="./assets/css/progressbar.css">
  <link rel="stylesheet" href="./assets/css/meanmenu.min.css">
  <link rel="stylesheet" href="./assets/css/master.css">
  <link rel="stylesheet" href="./style.css">

</head>


<body class="font-heading-estedad">

  <!-- Preloader -->
  <div id="preloader">
    <div id="container" class="container-preloader">
      <div class="animation-preloader">
        <div class="spinner"></div>
        <div class="txt-loading">
          <span data-text="L" class="characters">L</span>
          <span data-text="O" class="characters">O</span>
          <span data-text="A" class="characters">A</span>
          <span data-text="D" class="characters">D</span>
          <span data-text="I" class="characters">I</span>
          <span data-text="N" class="characters">N</span>
          <span data-text="G" class="characters">G</span>
        </div>
      </div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
  </div>

  <!-- Cursor Animation -->
  <div class="cursor1"></div>

  <!-- Sroll to top -->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
  </div>

  <!-- Switcher Area Start -->
  <div class="switcher__area">
    <div class="switcher__icon">
      <button id="switcher_open"><i class="fa-solid fa-gear"></i></button>
      <button id="switcher_close"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="switcher__items">
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">mode</p>
        </div>
        <div class="switcher__btn mode-type wc-col-2">
          <button class="active" data-mode="dark">dark</button>
          <button data-mode="light">light</button>
        </div>
      </div>
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Language Support</p>
        </div>
        <div class="switcher__btn lang_dir wc-col-2">
          <button class="active" data-mode="ltr">LTR</button>
          <button data-mode="rtl">RTL</button>
        </div>
      </div>
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Layout</p>
        </div>
        <div class="switcher__btn layout-type wc-col-2">
          <button class="active" data-mode="full-width">Full Width</button>
          <button data-mode="box-layout">Box Layout</button>
        </div>
      </div>
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Cursor</p>
        </div>
        <div class="switcher__btn">
          <select name="cursor-style" id="cursor_style">
            <option value="1">default</option>
            <option selected value="2">animated</option>
          </select>
        </div>
      </div>
    </div>
  </div>
<!-- Switcher Area End -->

  <!-- Offcanves start -->
  <div class="offcanvas__area">
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasOne">
      <button class="offcanvas__close" data-bs-dismiss="offcanvas"><i class="fa-solid fa-xmark"></i></button>
      <div class="offcanvas__body">
        <div class="offcanvas__logo">
          <a href="index.php">
            <img src="./assets/imgs/logo/site-logo-light.png" class="show-dark" alt="Offcanvas Logo">
            <img src="./assets/imgs/logo/site-logo-dark.png" class="show-light" alt="Offcanvas Logo">
          </a>
          <p>Create live segments and target the right people for messages based on their behaviors.</p>
        </div>
        <div class="offcanvas__menu-area">
          <div class="offcanvas__menu-wrapper"></div>
        </div>
        <div class="offcanvas__media">
          <p class="offcanvas__title">Follow</p>
          <ul>
            <li><a href="https://www.facebook.com/profile.php?id=100010038151549"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="https://linkedin.com/in/feth-ellah-boudellal-349685229"><i class="fa-brands fa-linkedin"></i></a></li>
            <li><a href="https://github.com/GovDz/"><i class="fa-brands fa-github"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Offcanves end -->

  <div class="has-smooth" id="has_smooth"></div>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <div class="body-wrapper">

                <!-- overlay switcher close  -->
        <div class="overlay-switcher-close"></div>

        <!-- Header area start -->
        <header class="header__area pos-abs plr-50">
          <div class="header__inner">
            <div class="header__logo-3">
              <a href="index.php">
                <img src="../assets/imgs/logo/site-logo-light.png" class="show-dark" alt="Site Logo">
                <img src="../assets/imgs/logo/site-logo-dark.png" class="show-light" alt="Site Logo">
              </a>
            </div>
            <div class="header__nav">
              <nav class="main-menu">
                <ul>
                  <li><a href="index.php">home</a></li>
                  <li><a href="#">Projects</a></li>
                  <li><a href="contact.php">Contact</a></li>
                </ul>
              </nav>
            </div>
            <div class="header__nav-icon-3">
              <button class="menu-icon" id="open_offcanvas" data-bs-toggle="offcanvas" data-bs-target="#offcanvasOne">
                <span></span> </button>
            </div>
          </div>
        </header>
        <!-- Header area end -->


        <main>

          <!-- Portfolio section end -->
          <section class="portfolio__area pt-130 pb-130">
            <div class="container line ptf-70">
              <div class="row">
                <div class="col-xxl-12">
                  <div class="sec-title-wrapper text-center pb-50">
                    <h1 class="sec-sub-title pb-20 has_char_anim">Portfolio</h1>
                    <h2 class="sec-title has_text_reveal_anim">My Projects</h2>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-xxl-12">
                  <div class="pdesigner-portfolio__btn-list has_pdlist_btn_animation">
                  <div class="mixitup-active">
                    <div class="pdesigner-portfolio__flex has_pdportfolio_animation">
                      <div class="pdesigner-portfolio__item mix creative" data-tilt data-tilt-max="50"
                        data-tilt-speed="700" data-tilt-perspective="1000">
                        <a href="https://secdz.my.id/">
                          <img src="./assets/imgs/portfolio/3.jpg" alt="SecDz">
                        </a>
                        <div class="pdesigner-portfolio__content">
                          <ul>
                            <li><a href="portfolio.php" class="pdesigner-portfolio__category">SecDz</a> </li>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="pdesigner-portfolio__item mix creative" data-tilt data-tilt-max="50"
                        data-tilt-speed="700" data-tilt-perspective="1000">
                        <a href="hhttps://dztools.tech/TihoDz/">
                          <img src="./assets/imgs/portfolio/2.jpg" alt="SecDz">
                        </a>
                        <div class="pdesigner-portfolio__content">
                          <ul>
                            <li><a href="https://dztools.tech/TihoDz/" class="pdesigner-portfolio__category">GovDz Contacts</a> </li>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="pdesigner-portfolio__item mix creative" data-tilt data-tilt-max="50"
                        data-tilt-speed="700" data-tilt-perspective="1000">
                        <a href="https://dztools.tech/">
                          <img src="./assets/imgs/portfolio/1.jpg" alt="SecDz">
                        </a>
                        <div class="pdesigner-portfolio__content">
                          <ul>
                            <li><a href="https://dztools.tech/" class="pdesigner-portfolio__category">DzTools Tech</a> </li>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Portfolio section start -->


        </main>


        <!-- Footer section start -->
        <footer class="footer__area pb-0">
          <div class="footer__top">
            <div class="container line g-0">
              <div class="line-col-3">
                <div></div>
                <div></div>
                <div></div>
              </div>
              <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-3">
                  <div class="footer__logo">
                    <a href="index.php"><img src="./assets/imgs/logo/site-logo-light.png" class="show-dark"
                        alt="Footer Logo"></a>
                    <a href="index.php"><img src="./assets/imgs/logo/site-logo-dark.png" class="show-light"
                        alt="Footer Logo"></a>
                  </div>
                </div>
                <div class="col-xxl-9 col-xl-9 col-lg-9">
                  <div class="footer__info">
                    <div class="footer__email">
                      <h3 class="footer__title">Email</h3>
                      <a href="mailto:feth-ellah@live.Fr" class="footer__link">feth-ellah@live.fr</a>
                    </div>
                    <div class="footer__social">
                      <h3 class="footer__title">Follow</h3>
                      <ul class="hover-zoom">
                      <ul class="hover-zoom">
                        <li><a href="https://www.facebook.com/profile.php?id=100010038151549"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="https://linkedin.com/in/feth-ellah-boudellal-349685229"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href="https://github.com/GovDz/"><i class="fa-brands fa-github"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer__btm">
            <div class="container">
              <div class="row">
                <div class="col-xxl-12">
                  <div class="copyright">
                    <p>© 2023 | Alrights reserved by <a href="./index.php">Feth-Ellah.Dev</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <!-- Footer section end -->

      </div>
    </div>
  </div>




  <!-- All JS files -->
  <script src="./assets/js/jquery-3.6.0.min.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/jquery.magnific-popup.min.js"></script>
  <script src="./assets/js/swiper-bundle.min.js"></script>
  <script src="./assets/js/counter.js"></script>
  <script src="./assets/js/typed.js"></script>
  <script src="./assets/js/mixitup.min.js"></script>
  <script src="./assets/js/progressbar.js"></script>
  <script src="./assets/js/gsap.min.js"></script>
  <script src="./assets/js/ScrollSmoother.min.js"></script>
  <script src="./assets/js/ScrollToPlugin.min.js"></script>
  <script src="./assets/js/ScrollTrigger.min.js"></script>
  <script src="./assets/js/SplitText.min.js"></script>
  <script src="./assets/js/TweenMax.min.js"></script>
  <script src="./assets/js/jquery.meanmenu.min.js"></script>
  <script src="./assets/js/tilt.jquery.min.js"></script>
  <script src="./assets/js/beforeafter.jquery-1.0.0.min.js"></script>
  <script src="./assets/js/basictable.min.js"></script>
  <script src="./assets/js/backToTop.js"></script>
  <script src="./assets/js/main.js"></script>
  <script src="./assets/js/error-handling.js"></script>
  <script src="./assets/js/offcanvas.js"></script>
  <script src="./assets/js/wc-cursor.js"></script>



</body>

</html>