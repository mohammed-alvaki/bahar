<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اسطنبول باهار</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic&display=swap" rel="stylesheet">
    <!-- AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css?ver=5.0.0">

    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/complete-order.css" />
    <link rel="stylesheet" href="css/contact-us.css" />
    <link rel="stylesheet" href="css/forgot-password.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/my-account.css" />
    <link rel="stylesheet" href="css/not-found.css" />
    <link rel="stylesheet" href="css/plog.css" />
    <link rel="stylesheet" href="css/preview-product.css" />
    <link rel="stylesheet" href="css/privacy.css" />
    <link rel="stylesheet" href="css/product.css" />
    <link rel="stylesheet" href="css/results.css" />
    <link rel="stylesheet" href="css/store.css" />
    <link rel="stylesheet" href="css/track-order.css" />
    <link rel="stylesheet" href="css/about-us.css" />
    <link rel="stylesheet" href="css/footer.css" />

</head>

<body>

    <header>
        <div class="container-fluid top-bar px-5 py-1 fixed-top">
            <div class="row">
                <div class="col-6 col-lg-2">
                    <div class="d-flex align-items-center h-100">
                        <a href="index.php"><i class="fa-solid fa-house-chimney fa-xl me-3" style="color: white;"></i></a>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn"><i
                                class="fa-solid fa-magnifying-glass fa-xl" style="color: white;"></i></button>
                    </div>
                </div>
                <div class="col-7 d-none d-lg-block">
                    <div class="d-flex align-items-center h-100"><span dir="ltr" class="text-white"><i
                                class="fa-brands fa-whatsapp fa-2xl" style="color: white;"></i> <span
                                class="phone-num">+90552 358 74
                                36</span></span>
                    </div>
                </div>
                <div class="col-6 col-lg-3 text-end">
                    <div class="d-flex align-items-center justify-content-end h-100">
                        <a href="my-account.php" class="icon-container text-decoration-none d-flex justify-content-center align-items-center"><i
                                class="fa-solid fa-user fa-lg" style="color: black;"></i></a>
                        <a href="forgot-password.php"
                            class="icon-container text-decoration-none d-flex justify-content-center align-items-center ms-3 position-relative">
                            <i class="fa-solid fa-cart-shopping fa-lg me-2" style="color: black;"></i> <span
                                class="pro-numb text-dark">0</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <input class="search-inp p-1 border-0 text-center" type="search" placeholder="بحث">
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-2 mt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <div class="row">
                        <div class="col-2 col-lg-1">
                            <div class="h-100 d-flex align-items-center">
                                <button class="btnToggler border-0 me-lg-5" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                                    aria-label="Toggle navigation">
                                    <span><i class="fa-solid fa-bars-staggered fa-flip-both fa-2xl"
                                            style="color: var(--orange-color);"></i></span>
                                </button>
                            </div>
                        </div>

                        <div class="col-10 col-lg-2 text-center text-lg-start">
                            <a class="navbar-brand text-center mx-auto mx-lg-start" href="index.php"><img src="./imgs/logo.png"
                                    alt="logo"></a>
                        </div>
                        <div class="col-9 text-start d-none d-lg-block">
                            <nav class="navbar navbar-expand-lg d-none d-lg-block">
                                <ul class="navbar-nav  gap-1 gap-xl-3 flex-grow-1 ms-lg-3">
                                    <li class="nav-item px-xl-2">
                                        <a class="nav-link" aria-current="page" href="index.php">الرئيسية</a>
                                    </li>
                                    <li class="nav-item px-xl-2">
                                        <a class="nav-link" href="store.php">المتجر</a>
                                    </li>
                                    <li class="nav-item px-xl-2">
                                        <a class="nav-link" aria-current="page" href="complete-order.php">إتمام الطلب
                                        </a>
                                    </li>
                                    <li class="nav-item px-xl-2">
                                        <a class="nav-link" aria-current="page" href="track-order.php">تتبع الطلب

                                        </a>
                                    </li>
                                    <li class="nav-item px-xl-2">
                                        <a class="nav-link" href="plog.php">
                                            المدونة</a>
                                    </li>
                                    <li class="nav-item px-xl-2">
                                        <a class="nav-link" href="about-us.php">
                                            من نحن</a>
                                    </li>
                                    <li class="nav-item px-xl-2">
                                        <a class="nav-link" href="contact-us.php">
                                            اتصل بنا
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-md-none">
                    <div class="icons d-flex gap-2 mb-4 mt-3 d-md-none justify-content-center">
                        <a class="mobile" href="tel:+90552 358 74 36" target="_blank"><i
                                class="fa-solid fa-mobile-button fa-lg"></i></a>
                        <a class="mail" href="mailto:info@istbahar.com" target="_blank"><i
                                class="fa-solid fa-envelope fa-lg"></i></a>
                        <a class="messenger" href="https://m.me/" target="_blank"><i
                                class="fa-brands fa-facebook-messenger fa-lg"></i></a>
                        <a class="location" href="https://goo.gl/maps/xTvPydmes447dQ3e7" target="_blank"><i
                                class="fa-solid fa-location-dot fa-lg"></i></i></a>
                    </div>
                </div>
            </div>
        </div>
        
           <!-- offcanvas -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

        <div class="offcanvas-body">
            <div class="d-flex position-relative mb-3">
                <div class="img-cont mx-auto mt-2">
                    <img src="./imgs/logo.png" alt="logo" style="width: 180px;">
                </div>
                <button type="button" class="btnClose" data-bs-dismiss="offcanvas" aria-label="Close"><i
                        class="fa-regular fa-circle-xmark fa-xl"></i></button>
            </div>
            <div class="hr"></div>

            <ul class="navbar-nav justify-content-center flex-grow-1 d-lg-none my-3">
                <li class="nav-item ps-2">
                    <a class="nav-link " aria-current="page" href="index.php">الرئيسية</a>
                </li>
                <li class="nav-item ps-2">
                    <a class="nav-link" href="store.php">المتجر</a>
                </li>
                <li class="nav-item ps-2">
                    <a class="nav-link" aria-current="page" href="complete-order.php">إتمام الطلب
                    </a>
                </li>
                <li class="nav-item ps-2">
                    <a class="nav-link" href="plog.php">
                        المدونة</a>
                </li>
                <li class="nav-item ps-2">
                    <a class="nav-link" href="about-us.php">
                        من نحن</a>
                </li>
                <li class="nav-item ps-2">
                    <a class="nav-link" href="contact-us.php">
                        اتصل بنا
                    </a>
                </li>
            </ul>
            <h2 class="mb-4 mt-lg-4 ps-2">منتجاتنا</h2>
            <div dir="ltr" class="text-start mb-4 p-2 nav-item">
                <a class="nav-link text-decoration-none text-dark" href="store.php"><span>(11)</span> Uncategorized</a>
            </div>
            <div class="mb-4 p-2 nav-item"><a class="nav-link text-decoration-none text-dark"
                    href="plog.php">المدونة</a>
            </div>
            <h2 class="mb-4 ps-2">وسوم</h2>
            <div class="tags mb-5 ps-2">
                <a class="text-white text-decoration-none py-1 px-2" href="">الام المفاصل والعظام</a>
                <a class="text-white text-decoration-none py-1 px-2" href="">كريم فيدرو</a>
            </div>
        </div>
    </div>
    </header>

 