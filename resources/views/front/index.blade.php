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
    <script>
        function doCheck(Username)
        {
            if (Username != "")
            {
                $.ajax({
                    url: "/member/checkUser",
                    type: "post",
                    data:{
                        Username: Username,
                        _token: "{{ csrf_token() }}"
                        },
                        success: function(msg)
                        {
                            if (msg == "exist")
                            {
                                $("#Username").focus();
                                $("#msg").html("<font color='red'>此帳號已有人使用</font>")
                            }else{
                                $("#msg").html("");
                            }
                        }
                }); 
            }
        }
    </script>
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
                        <a href="" style="text-decoration: none; color:#003366" title="會員專區" data-bs-toggle="modal" data-bs-target="#userModal">
                            <i class="fa-solid fa-user fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- userModal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header pc-color-main01">
                <h1 class="modal-title fs-5 fw-900 text-color02" id="userModalLabel">會員專區</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body fw-900">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">登入</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">註冊</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="row mt-3" id="login_modal">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="label form-label">帳號</div>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="mb-5">
                                    <div class="label form-label">密碼</div>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="mb-3 text-center">
                                    <button class="btn bg-btn06">登入</button>
                                    <button class="btn bg-btn05">取消</button>
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                <i class="fa-solid fa-up-long fa-2x"></i>
                                <div class="h3 mt-3">還沒有帳號嗎？</div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                        <div class="row mt-3" id="regist_modal">
                            <div class="col-md-6">
                                <div class="h4 mt-3">
                                    <ul>
                                        <li class="my-3 fw-900">會員規章：</li>
                                        <li class="mt-1">1.會員帳戶僅限本人使用，不得共享或轉讓。</li>
                                        <li class="mt-1">2.會員需保證提供的個人資料真實、有效。</li>
                                        <li class="mt-1">3.未經許可，會員不得在平台上進行商業行為。</li>
                                        <li class="mt-1">4.會員須定期更新帳戶密碼，確保安全。</li>
                                        <li class="mt-1">5.公司保留隨時修改會員權益的權利，恕不另行通知。</li>
                                        <li class="mt-1">6.若會員違反規定，公司有權暫停或終止其帳戶。</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <form action="member/insert" method="post">
                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                        <div class="label form-label">帳號</div>
                                        <input type="text" class="form-control" class="form-control border border-dark" name="Username" id="Username" required autofocus onblur="doCheck(this.value)"><span id="msg"></span>
                                    </div>
                                    <div class="mb-3">
                                        <div class="label form-label">密碼</div>
                                        <input type="password" class="form-control" name="Password" required>
                                    </div>
                                    <div class="mb-3">
                                        <div class="label form-label">確認密碼</div>
                                        <input type="password" class="form-control">
                                    </div>
                                    <div class="mb-5">
                                        <div class="label form-label">E-mail</div>
                                        <input type="password" class="form-control" name="Email" required>
                                    </div>
                                    <div class="mb-3 text-center">
                                        <button class="btn bg-btn04">註冊</button>
                                        <button class="btn bg-btn05">取消</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</div>









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