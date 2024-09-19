<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>長平塗裝</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/myall.css">
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/jquery-3.7.1.js"></script>
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

        .member_button:hover{
            color: #4169e1;
        }

        .edit_member_button{
            text-decoration: none;
            color: #003366;
        }

        .edit_member_button:hover{
            color: #ff6600;
        }

        .logout_button{
            text-decoration: none;
            color: #003366;
        }

        .logout_button:hover{
            color: #ff0000;
        }

        .slider_photo01{
            background-image: url(images/front/slider/slider01.png);
            height: 94vh;
        }
        .slider_photo02{
            background-image: url(images/front/slider/slider02.gif);
            height: 94vh;
        }
        .slider_photo03{
            background-image: url(images/front/slider/slider03.gif);
            height: 94vh;
        }
        .slider_photo04{
            background-image: url(images/front/slider/slider04.png);
            height: 94vh;
        }
        .slider_photo05{
            background-image: url(images/front/slider/slider05.gif);
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

        .box {
        position: relative;
        border: 1px solid #bbb;
        background: #eee;
        float: left;
        margin: 20px;
        }
        .ribbon {
        position: absolute;
        right: -5px;
        top: -5px;
        z-index: 1;
        overflow: hidden;
        width: 93px;
        height: 93px;
        text-align: right;
        }
        .ribbon span {
        font-size: 0.8rem;
        color: #fff;
        text-transform: uppercase;
        text-align: center;
        font-weight: bold;
        line-height: 32px;
        transform: rotate(45deg);
        width: 125px;
        display: block;
        background: #79a70a;
        background: linear-gradient(#9bc90d 0%, #79a70a 100%);
        box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
        position: absolute;
        top: 17px; 
        right: -29px; 
        }

        .ribbon span::before {
        content: '';
        position: absolute; 
        left: 0px; top: 100%;
        z-index: -1;
        border-left: 3px solid #79A70A;
        border-right: 3px solid transparent;
        border-bottom: 3px solid transparent;
        border-top: 3px solid #79A70A;
        }
        .ribbon span::after {
        content: '';
        position: absolute; 
        right: 0%; top: 100%;
        z-index: -1;
        border-right: 3px solid #79A70A;
        border-left: 3px solid transparent;
        border-bottom: 3px solid transparent;
        border-top: 3px solid #79A70A;
        }

        .red span {
        background: linear-gradient(#f70505 0%, #8f0808 100%);
        }
        .red span::before {
        border-left-color: #8f0808;
        border-top-color: #8f0808;
        }
        .red span::after {
        border-right-color: #8f0808;
        border-top-color: #8f0808;
        }

        .blue span {
        background: linear-gradient(#2989d8 0%, #1e5799 100%);
        }
        .blue span::before {
        border-left-color: #1e5799;
        border-top-color: #1e5799;
        }
        .blue span::after {
        border-right-color: #1e5799;
        border-top-color: #1e5799;
        }

        .foo {
        clear: both;
        }

        .bar {
        content: "";
        left: 0px;
        top: 100%;
        z-index: -1;
        border-left: 3px solid #79a70a;
        border-right: 3px solid transparent;
        border-bottom: 3px solid transparent;
        border-top: 3px solid #79a70a;
        }

        .baz {
        font-size: 1rem;
        color: #fff;
        text-transform: uppercase;
        text-align: center;
        font-weight: bold;
        line-height: 2em;
        transform: rotate(45deg);
        width: 100px;
        display: block;
        background: #79a70a;
        background: linear-gradient(#9bc90d 0%, #79a70a 100%);
        box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
        position: absolute;
        top: 100px;
        left: 1000px;
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
    @if (Session::has('message'))
        <script>
            Swal.fire({
                title: "{{ Session::get('message') }}",
                icon: "success"
            });
        </script>
    @endif

    @if (Session::has('member_Username'))
        <script>
            Swal.fire({
                title: "歡迎回來！{{ Session::get('member_Username') }}",
                icon: "success"
            });
        </script>
    @endif


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
                <div class="col-md-2 mt-3">
                    @if (session()->has('member_Username'))
                    <div>
                        <!-- <a href="" title="會員資料" class="member_button">
                            <i class="fa-solid fa-user-pen fa-2x"></i>
                        </a> -->
                        <button class="btn edit_member_button" title="
                        @if (Session::has('member_Username'))
                            {{ Session::get('member_Username') }}
                        @endif
                        "><i class="fa-solid fa-user-pen fa-2x"></i></button>   
                        
                        <form method="post" action="/member/doLogout" style="margin: 0px; display:inline">
                        {{ csrf_field() }}
                            <button type="submit" class="btn logout_button" title="會員登出"><i class="fa-solid fa-right-from-bracket fa-2x"></i></button>
                        </form>
                    </div>
                    @else
                    <div>
                        <button title="會員專區" data-bs-toggle="modal" data-bs-target="#userModal" class="btn member_button">
                            <i class="fa-solid fa-user fa-2x"></i>
                        </button>
                    </div>
                    @endif
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
                                <form action="member/doLogin" method="post">
                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                        <div class="label form-label">帳號</div>
                                        <input type="text" class="form-control" name="Username" required>
                                    </div>
                                    @if ($errors->has("msg"))
                                    <div class="row">
                                        <div class="col-8 text-danger text-center">{{ $errors->first("msg") }}</div>
                                    </div>
                                    @endif
                                    <div class="mb-3">
                                        <div class="label form-label">密碼</div>
                                        <input type="password" class="form-control" name="Password" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-3 text-center">認證碼</div>
                                        <div class="col-3">
                                            <input type="text" name="code" class="form-control" required>
                                        </div>
                                        <div class="col-4">
                                            <!-- <img src="/captcha/math?"> -->
                                            <img src="/captcha/flat?" onclick="this.src='/captcha/flat?' + Math.random()" style="cursor:pointer">
                                        </div>
                                    </div>
                                    @if ($errors->has("code"))
                                    <div class="row">
                                        <div class="col-8 text-danger text-center">{{ $errors->first("code") }}</div>
                                    </div>
                                    @endif
                                    <div class="my-5 text-center">
                                        <button class="btn bg-btn06" type="submit">登入</button>
                                        <button class="btn bg-btn05" type="button" data-bs-dismiss="modal">取消</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 text-center">
                                <i class="fa-solid fa-up-long fa-2x text-pc-color-main04"></i>
                                <div class="h3 mt-3 fw-700">還沒有帳號嗎？</div>
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
                                        <input type="text" class="form-control" class="form-control border border-dark" name="Username" id="Username" required autofocus onblur="doCheck(this.value)" minlength="3" maxlength="8" placeholder="請輸入3至8碼"><span id="msg"></span>
                                        <div class="valid-feedback">符合規定</div>
                                        <div class="invalid-feedback">不符規定</div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="label form-label">密碼</div>
                                        <input type="password" class="form-control" name="Password" required minlength="3" maxlength="8" placeholder="請輸入3至8碼">
                                        <div class="valid-feedback">符合規定</div>
                                        <div class="invalid-feedback">不符規定</div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="label form-label">確認密碼</div>
                                        <input type="password" class="form-control" required minlength="3" maxlength="8" placeholder="請再次輸入密碼">
                                        <div class="valid-feedback">密碼相同</div>
                                        <div class="invalid-feedback">密碼不同</div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="label form-label">E-mail</div>
                                        <input type="email" class="form-control" name="Email" required placeholder="請輸入正確電子信箱格式">
                                        <div class="valid-feedback">符合規定</div>
                                        <div class="invalid-feedback">不符規定</div>
                                    </div>
                                    <div class="mb-3 text-center">
                                        <button class="btn bg-btn04" type="submit">註冊</button>
                                        <button class="btn bg-btn05" type="button" data-bs-dismiss="modal">取消</button>
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
                    <div class="carousel-caption p-3 rounded-2 d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.7);">
                        <h4 class="fw-900">工件死角？</h4>
                        <p>「靜電噴槍，死角救星！無論多難噴，粉末均勻平坦，零死角，完美覆蓋！讓工件不再鬧脾氣，塗裝變得簡單又漂亮！」</p>
                    </div>
                </div>
                <div class="carousel-item bg-cover slider_photo02">
                    <div class="carousel-caption p-3 rounded-2 d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.7);">
                        <h4 class="fw-900">回收功率 <span class="counter01">99</span> %</h4>
                        <p>「粉體塗裝旋風回收設備，採用與知名吸塵器相同的氣流分離原理，確保高效回收與再利用，減少粉體浪費，提升生產效能與環保效益。」</p>
                    </div>
                </div>
                <div class="carousel-item bg-cover slider_photo03">
                    <div class="carousel-caption p-3 rounded-2 d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.7);">
                        <h4 class="fw-900">工業 + 藝術</h4>
                        <p>「粉體塗裝，從工業走入生活，將技術與藝術完美結合。無論家居還是日常物件，點滴細節中展現美感與實用，為生活增添一抹色彩。」</p>
                    </div>
                </div>
                <div class="carousel-item bg-cover slider_photo04">
                    <div class="carousel-caption p-3 rounded-2 d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.7);">
                        <h4 class="fw-900">粉 飾 太平</h4>
                        <p>「目的地：太平區粉體塗裝專業據點。工廠與展售中心已準備就緒，歡迎舊雨新知前來參觀，為您的塗裝需求找到最佳解決方案！」</p>
                    </div>
                </div>
                <div class="carousel-item bg-cover slider_photo05">
                    <div class="carousel-caption p-3 rounded-2 d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.7);">
                        <h4 class="fw-900">缺了一把槍</h4>
                        <p>全台剩你沒槍？長平有靜電槍、摩擦槍、手動槍、自動槍，代理、自研發各種品牌型號的塗裝噴槍，歡迎洽詢。</p>
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
    <!-- *******************************section_add01******************************* -->
    <!-- 會員分級 -->
    @if (Session::get('member_Level') > 99)
    <section id="add01" class="pc-color-main01">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-7 bg-cover img-thumbnail" style="background-image: url('images/front/member/tools.jpg'); height: 300px; background-attachment: fixed;"></div>
                <div class="col-md-5 p-5">
                    <div class="card p-5 m-5 shadow box">
                        <div class="ribbon wow animate__pulse" data-wow-duration="2s" data-wow-delay="1s" data-wow-iteration="10"><span>會員專屬</span></div>
                        <p class="h2 mb-1 fw-900">快速預約設備<br>維修、保養</p>
                        <div class="row my-2">
                            <div class="col-6">
                                <h4>預約時間</h4>
                                <input type="datetime-local">
                            </div>
                        </div>
                        <div class="row my2">
                            <div class="col-6 offset-6">
                                <button class="btn bg-btn02 mt-3">確定預約</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    @endif

    @if (Session::get('member_Level') > 199)
    <section id="add02" class="pc-color-main01">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-5 p-5">
                    <div class="card p-5 m-5 shadow box">
                        <div class="ribbon blue wow animate__pulse" data-wow-duration="2s" data-wow-delay="1s" data-wow-iteration="10"><span>高級會員</span></div>
                        <p class="h2 mb-1 fw-900">技術支持與<br>使用手冊下載</p>
                        <div class="row my-2">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button fw-900" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        噴槍快速維修指南
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <a class="h5 fw-900" href="#" style="text-decoration: none;">RX0857噴槍快速維修指南</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed fw-900" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            中控系統快速維修手冊
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div>
                                                <a class="h5 fw-900" href="#" style="text-decoration: none;">指針式中控系統</a>
                                            </div>
                                            <div>
                                                <a class="h5 fw-900" href="#" style="text-decoration: none;">數位式中控系統</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed fw-900" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            粉管、電路配線圖
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">                                            
                                            <a class="h5 fw-900" href="#" style="text-decoration: none;">常用配線圖</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 bg-cover img-thumbnail" style="background-image: url('images/front/member/document.jpg'); height: 300px; background-attachment: fixed;"></div>
            </div>
        </div>
    </section>
    @endif

    @if (Session::get('member_Level') > 299)
    <section id="add03" class="pc-color-main01">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-7 bg-cover img-thumbnail" style="background-image: url('images/front/member/save.jpg'); height: 300px; background-attachment: fixed;"></div>
                <div class="col-md-5 p-5">
                    <div class="card p-5 m-5 shadow box">
                        <div class="ribbon red wow animate__pulse" data-wow-duration="2s" data-wow-delay="1s" data-wow-iteration="10"><span>老主顧</span></div>
                        <p class="h2 mb-1 fw-900">線上商店優惠</p>
                        <div class="row my-2">
                            <div class="col-12">
                                <h4>套裝塗裝設備<span class="text-pc-color-warn03 fw-900">95</span>折</h4>
                                <h4>耗材<span class="text-pc-color-warn03 fw-900">免運費</span></h4>
                                <div class="mt-5"><a href="/shop" class="link-danger h3 fw-900" style="text-decoration: none;">詳情請見</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif


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
    <script src="js/wow.min.js"></script>
    <script src="https://unpkg.com/counterup2@2.0.2/dist/index.js"></script>
    <script src="js/aos.js"></script>
    <script>
        // WOW
        new WOW().init();

        // AOS
        AOS.init();
        let scrollRef = 0;
        $(window).on("resize scroll", function () {
            // increase value up to 10, then refresh AOS
            scrollRef <= 10 ? scrollRef++ : AOS.refresh();
        });

        // counter up 2
        const counterUp = window.counterUp.default

        const callback = entries => {
          entries.forEach( entry => {
            const el = entry.target
            if ( entry.isIntersecting && ! el.classList.contains( 'is-visible' ) ) {
              counterUp( el, {
                duration: 2000,
                delay: 16,
              } )
              el.classList.add( 'is-visible' )
            }
          } )
        }

        const IO = new IntersectionObserver( callback, { threshold: 1 } )

        const el01 = document.querySelector( '.counter01' )
        IO.observe( el01 )

        // 回頂部按鈕
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