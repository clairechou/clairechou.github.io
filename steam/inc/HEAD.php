<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>NewOil3.0 - 首頁</title>
    <!-- 頁簽顯示LOGO -->
    <link rel="shortcut icon" href="images/ico_logo.ico">
    <!-- (Bootstrap) Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Bootstrap Material Design -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <!-- Animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
    <!-- Aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- jQuery Core 3.1.0 -->
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <!-- material-icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <!-- 自定義Css_start-->
    <!-- 定義全站html標籤、網站字體或是取消套件預設 -->
    <link rel="stylesheet" href="css/global.css">
    <!-- 定義全站中常駐項目 -->
    <link rel="stylesheet" href="css/layout.css">
    <!-- 預留可自定義Css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- 內頁專用Css -->
    <link rel="stylesheet" href="css/page.css">
    <!-- 自定義Css_end-->
</head>

<body>
    <div class="container-fluid bmd-layout-container bmd-drawer-f-l bmd-drawer-overlay pageContainer">
        <!-- logo/登入/註冊/詢價車/語系/搜尋_start-->
        <div class="topInfoContainer" style="border: 1px solid #000;">
            <div class="container nopadding">
                <div class="topInfoContainerInner">
                    <!-- logo -->
                    <div class="logo pcLogo">
                        <a href="index.php"><img src="images/iSB_Logo.png" alt=""></a>
                    </div>
                    <!-- 登入/註冊/詢價車/語系/搜尋 -->
                    <div class="topInfo">
                        <ul>
                            <!-- <li><a href="javascript:;" class="loginBtn">登入</a></li>
                            <li><a href="javascript:;" class="registerBtn">註冊</a></li>
                            <li><a href="javascript:;" class="inquiryBtn">詢價車</a></li> -->
                            <li><a href="search.php" class="searchBtn" style="color:#FF0000;">搜尋</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- logo/登入/註冊/詢價車/語系/搜尋_end-->

        <!-- 手機選單_start -->
        <header class="bmd-layout-header mbHeadContainer animate" style="border: 1px solid #000;">
            <div class="bg-faded">
                <div class="mbHeadContainerInner">
                    <div class="logo mbLogo">
                        <a href="#"><img src="images/iSB_Logo.png" alt=""></a>
                    </div>
                    <div class="mbMenuBtn">
                        <button class="navbar-toggler" type="button" data-toggle="drawer" data-target="#dw-s2">
                            <span class="mbMenuBar"></span>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <div id="dw-s2" class="bmd-layout-drawer bg-faded mbMenu" style="border: 1px solid #000;">
            <div id="leftMenu">
                <div class="mbClose">
                    <button type="button" class="mbCloseBtn"><span class="material-icons">close</span></button>
                </div>
                <ul class="nav sb-menu nav-list"></ul>
            </div>
        </div>
        <!-- 手機選單_end -->
        <main class="bmd-layout-content mainContainer" style="border: 1px solid #000;">
            <!-- 主選單_start -->
            <header class="container nopadding" style="border: 1px solid #FF0000;">
                <div class="menuContainer">
                    <div class="menuContainerInner">
                        <nav class="menuBlock">
                            <ul id="mainMenu" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
                                <li itemprop="name">
                                    <a itemprop="url" href="aboutUs.php" style="color:#FF0000;">公司簡介</a>
                                </li>
                                <li itemprop="name">
                                    <a itemprop="url" href="newsList.php" style="color:#FF0000;">最新消息</a>
                                    <!--這邊暫時為客製功能 
                                        <ul class="dropdownMenu">
                                        <li><a href="pageList.php" style="color: #FF0000;">最新消息</a></li>
                                        <li><a href="pageDt.php">最新消息詳細頁</a></li>
                                        <li><a href="pageDt.php">最新消息詳細頁</a></li>
                                        <li><a href="pageDt.php">最新消息詳細頁</a></li>
                                        <li><a href="pageDt.php">最新消息詳細頁</a></li>
                                    </ul> -->
                                </li>
                                <li itemprop="name">
                                    <a itemprop="url" href="pageList.php" style="color:#FF0000;">分類文章列表</a>
                                    <!--這邊暫時為客製功能 
                                        <ul class="dropdownMenu">
                                        <li><a href="pageList.php">分類文章</a></li>
                                        <li><a href="pageDt.php">分類文章詳細頁</a></li>
                                        <li><a href="pageDt.php">分類文章詳細頁</a></li>
                                        <li><a href="pageDt.php">分類文章詳細頁</a></li>
                                        <li><a href="pageDt.php">分類文章詳細頁</a></li>
                                    </ul> -->
                                </li>
                                <li itemprop="name">
                                    <a itemprop="url" href="product.php" style="color:#FF0000;">產品分類列表</a>
                                    <!--這邊暫時為客製功能 
                                        <ul class="dropdownMenu">
                                        <li><a href="productCate.php">產品分類</a></li>
                                        <li>
                                            <a href="productList.php">產品列表</a>
                                        </li>
                                        <li><a href="productList.php">產品列表</a></li>
                                        <li><a href="productList.php">產品列表</a></li>
                                        <li><a href="productList.php">產品列表</a></li>
                                    </ul> -->
                                </li>
                                <li itemprop="name">
                                    <a itemprop="url" href="productList.php" style="color:#FF0000;">產品列表</a>
                                    <!--這邊暫時為客製功能 
                                        <ul class="dropdownMenu">
                                        <li><a href="productList.php">產品列表</a></li>
                                        <li>
                                            <a href="productDt.php">產品詳細頁</a>
                                        </li>
                                        <li><a href="productDt.php">產品詳細頁</a></li>
                                        <li><a href="productDt.php">產品詳細頁</a></li>
                                        <li><a href="productDt.php">產品詳細頁</a></li>
                                    </ul> -->
                                </li>
                                <!-- <li itemprop="name">
                                    <a itemprop="url" href="download.php">下載列表</a>
                                </li> -->
                                <li itemprop="name">
                                    <a itemprop="url" href="faq.php" style="color:#FF0000;">ＦＡＱ</a>
                                </li>
                                <li itemprop="name">
                                    <a itemprop="url" href="contact.php" style="color:#FF0000;">聯絡我們</a>
                                </li>
                                <li itemprop="name">
                                    <a itemprop="url" href="javascript:void(0);" class="arrowDown" style="color:#FF0000;">語系</a>
                                    <ul class="dropdownMenu">
                                        <li><a href="javascript:void(0);" style="color:#FF0000;">英文版</a></li>
                                        <li><a href="javascript:void(0);" style="color:#FF0000;">中文版</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
            <!-- 主選單_end -->