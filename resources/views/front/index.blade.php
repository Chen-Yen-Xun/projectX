<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>長平 粉體塗裝</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/myall.css">
    <style>
        .font_Audiowide {
            font-family: "Audiowide", sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 24px;
        }

        .font_color01 {
            color: #003366;
        }

        .navbar_link_hover:hover {
            color: #99ccff;
        }

        .navbar_shop_hover:hover {
            color: #ffcc00;
        }
        .member_button{ 
            text-decoration: none;
            color: #003366;
        }
        .member_button:hover {
            color: #ff6600;
        }
        .slider_photo01{
            background-image: url(images/front/slider01.png);
            height: 94vh;
        }
        .slider_photo02{
            background-image: url(images/front/slider02.png);
            height: 94vh;
        }
        .slider_photo03{
            background-image: url(images/front/slider03.png);
            height: 94vh;
        }
        .slider_photo04{
            background-image: url(images/front/slider04.png);
            height: 94vh;
        }
        .slider_photo05{
            background-image: url(images/front/slider05.png);
            height: 94vh;
        }

        .goTop{
            position: fixed;
            right: 10px;
            bottom: 10px;
            transform: translateX(0);
            transition: transform 0.2s;
        }
        .goTop.hide {
            transform: translateX(120%);
        }

        .product_images_ring01{
            position: absolute;
            bottom: 10%;
            right: 10%;
            z-index: 300;
        }
        .product_images_ring02{
            position: absolute;
            top: 15%;
            right: 0%;
            width: 400px;
            z-index: 200;
        }
        .product_images_ring03{
            position: absolute;
            top: 20%;
            right: 40%;
            width: 300px;
            z-index: 100;
        }
        .product_title_ring01{
            position: absolute;
            top: 40%;
            z-index: 500;
        }
        .product_text_ring01{
            position: absolute;
            bottom: 15%;
            z-index: 400;
        }
        .product_images_ring04{
            position: absolute;
            bottom: 10%;
            left: 10%;
            z-index: 300;
        }
        .product_images_ring05{
            position: absolute;
            top: 15%;
            left: 0%;
            width: 400px;
            z-index: 200;
        }
        .product_images_ring06{
            position: absolute;
            top: 20%;
            left: 40%;
            width: 300px;
            z-index: 100;
        }
        .product_title_ring02{
            position: absolute;
            top: 40%;
            right: 0%;
            z-index: 500;
        }
        .product_text_ring02{
            position: absolute;
            bottom: 15%;
            right: 0%;
            z-index: 400;
        }
        .product_r_card_img01{
            background-image: url('images/front/product_recommend/recommend01.png');
            height: 50vh;
        }
        .product_r_card_img02{
            background-image: url('images/front/product_recommend/recommend02.png');
            height: 50vh;
        }
        .product_r_card_img03{
            background-image: url('images/front/product_recommend/recommend03.png');
            height: 50vh;
        }
        .product_r_card_img04{
            background-image: url('images/front/product_recommend/recommend04.png');
            height: 50vh;
        }
    </style>
</head>

<body>
    <!-- *******************************section01******************************* -->
    <!-- Nav Bar -->
    <section id="section01" style="background-color: #FFFFFF;">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <nav class="navbar navbar-expand-lg" style="background-color: #FFFFFF;">
                        <div class="container-fluid">
                            <a class="navbar-brand font_Audiowide" href="#"><img src="images\front\CP.svg" alt=""><span class="ms-3 h3 fw-900 font_color01">長平塗裝</span></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link font_Audiowide font_color01 navbar_link_hover" aria-current="page" href="#" title="首頁">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle font_Audiowide font_color01 navbar_link_hover" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="產品">
                                            Product
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item font_Audiowide font_color01" href="#section03" title="類型">Type</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item font_Audiowide font_color01" href="#product_recommend" title="推薦">recommend</a></li>
                                            <li><a class="dropdown-item font_Audiowide font_color01" href="#product_pre" title="前處理">pre</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font_Audiowide font_color01 navbar_link_hover" href="#section04" title="關於我們">About us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font_Audiowide font_color01 navbar_link_hover" href="#section05" title="聯絡我們">Contact us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font_Audiowide font_color01 navbar_shop_hover" href="/shop" title="線上商店">Shop</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-md-2 pt-3">
                    <div>
                        <a href="" class="member_button" title="會員專區">
                            <i class="fa-solid fa-user fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- *******************************section02******************************* -->
    <!-- 幻燈片 -->
    <section id="section02">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item bg-cover active slider_photo01">
                    <div class="carousel-caption p-3 rounded-2 d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.3);">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item bg-cover slider_photo02">
                    <div class="carousel-caption p-3 rounded-2 d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.3);">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item bg-cover slider_photo03">
                    <div class="carousel-caption p-3 rounded-2 d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.3);">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
                <div class="carousel-item bg-cover slider_photo04">
                    <div class="carousel-caption p-3 rounded-2 d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.3);">
                        <h5>fourth slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
                <div class="carousel-item bg-cover slider_photo05">
                    <div class="carousel-caption p-3 rounded-2 d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.3);">
                        <h5>fifth slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    
    <div class="goTop hide">
        <a href="#" class="text-end sticky-top position-sticky goTopBtn jq-goTop"><img src="images/front/top.png" alt=""></a>
    </div>
    <!-- *******************************section03******************************* -->
    <!-- 產品 -->
    <section id="section03" class="pc-color-main01">
        <div class="container">
            @include("front.product.type")
            @include("front.product.recommend")
            @include("front.product.pre")
        </div>
    </section>
    <!-- *******************************section04******************************* -->
     <!-- 關於我們 -->
    <section id="section04">
        <div class="container">
            @include("front.about.timeline")
            @include("front.about.summary")
        </div>
    </section>
    <!-- *******************************section05******************************* -->
    <!-- 聯絡我們 -->
    <section id="section05">
        <div class="container">
        @include("front.contact.form")
        @include("front.contact.faq")
        </div>
    </section>
    <!-- *******************************section0******************************* -->
    <!-- footer -->
    <section id="section06" style="background-color: var(--pccolormain01);">
        <div class="container">
            @include("front.footer.footer")
        </div>
    </section>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        $(".jq-goTop").click(function (e) {
            e.preventDefault();
            $("html,body").animate(
                {
                scrollTop: 0,
                },
                1000
            );
        });
        $(window).scroll(function () {
            if ($(window).scrollTop() > 1100) {
                if ($(".goTop").hasClass("hide")) {
                $(".goTop").toggleClass("hide");
                }
            } else {
                $(".goTop").addClass("hide");
            }
        });
    </script>
</body>

</html>