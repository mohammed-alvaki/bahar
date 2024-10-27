<?php include "header.php"; ?>

<main>
    <section id="hero-section">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-wrap="true" data-bs-pause="false">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="4500">
                    <img src="./imgs/slide1.jpg" class="d-block w-100" alt="image">
                    <div class="carousel-caption">
                        <h2 class="fw-bold mb-md-3">منتجات طبيعية عالية الجودة</h2>
                        <p class="d-none d-md-block text-secondary">الجودة في الإنتاج والعمل المنظم والخدمة المرتفعة
                            القيمة
                            والتسليم في
                            الموعد مع الأسعار المناسبة
                        </p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4500">
                    <img src="./imgs/slide2.jpg" class="d-block w-100" alt="image">
                    <div class="carousel-caption">
                        <h1 class="fw-bold mb-md-3">مدونة اسطنبول باهار</h1>
                        <p class="d-none d-md-block text-secondary">الجودة في الإنتاج والعمل المنظم والخدمة المرتفعة
                            القيمة
                            والتسليم في
                            الموعد مع الأسعار المناسبة
                        </p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev ms-2 ms-lg-5 d-none d-md-block" type="button"
                data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span aria-hidden="true"><img src="./imgs/right-arrow.svg" alt="arrow" style="width: 50px; width:50px;"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next me-2 me-lg-5 d-none d-md-block" type="button"
                data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span aria-hidden="true"><img src="./imgs/left-arrow.svg" alt="arrow" style="width: 50px; width:50px;"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section id="services-section" class="px-2 px-lg-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="content d-flex justify-content-between position-relative mb-4">
                        <div class="text d-flex flex-column justify-content-between p-3">
                            <h3 class="text-white">
                                العناية بالوجه</h3>
                            <a class="det rounded-pill  text-center py-1 px-3 text-decoration-none text-dark"
                                href="">التفاصيل</a>
                        </div>
                        <div class="img-cont">
                            <img class="img-fluid" src="./imgs/s1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="content d-flex justify-content-between position-relative mb-4">
                        <div class="text d-flex flex-column justify-content-between p-3">
                            <h3 class="text-white"> العناية بالجسم</h3>
                            <a class="det rounded-pill  text-center py-1 px-3 text-decoration-none text-dark"
                                href="">التفاصيل</a>
                        </div>
                        <div class="img-cont">
                            <img class="img-fluid" src="./imgs/s2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="content d-flex justify-content-between position-relative">
                        <div class="text d-flex flex-column justify-content-between p-3">
                            <h3 class="text-white">
                                العناية بالشعر</h3>
                            <a class="det rounded-pill  text-center py-1 px-3 text-decoration-none text-dark"
                                href="">التفاصيل</a>
                        </div>
                        <div class="img-cont">
                            <img class="img-fluid" src="./imgs/s3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="products-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center fw-bold position-relative mb-5">منتجاتنا</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-11 col-sm-8 col-md-10">
                    <div class="swiper newSwiper pt-4">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="b-logo" src="./imgs/logo-icon.png" alt="logo">
                                <div class="pw-box">
                                    <img src="./imgs/hair-300x300.jpg" alt="image">
                                    <div class="service-info">
                                        <div class="title">
                                            <h4>كريم شد الشفاه ومحيط العين</h4>
                                        </div>

                                        <div class="service-price mx-auto">
                                            <a href="index.php" class="addBtn">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <img class="b-logo" src="./imgs/logo-icon.png" alt="logo">
                                <div class="pw-box">
                                    <img src="./imgs/tajaiid.jpg" alt="image">
                                    <div class="service-info">
                                        <div class="title">
                                            <h4>كريم محاربة التجاعيد</h4>
                                        </div>

                                        <div class="service-price mx-auto">
                                            <a href="index.php" class="addBtn">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <img class="b-logo" src="./imgs/logo-icon.png" alt="logo">
                                <div class="pw-box">
                                    <img src="./imgs/pousse-growing.jpg" alt="image">
                                    <div class="service-info">
                                        <div class="title">
                                            <h4>بوسي السيروم</h4>
                                        </div>

                                        <div class="service-price mx-auto">
                                            <a href="index.php" class="addBtn">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <img class="b-logo" src="./imgs/logo-icon.png" alt="logo">
                                <div class="pw-box">
                                    <img src="./imgs/black-castro-oil.jpg" alt="image">
                                    <div class="service-info">
                                        <div class="title">
                                            <h4>زيت تكثيف الرموش</h4>
                                        </div>

                                        <div class="service-price mx-auto">
                                            <a href="index.php" class="addBtn">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <img class="b-logo" src="./imgs/logo-icon.png" alt="logo">
                                <div class="pw-box">
                                    <img src="./imgs/kozmagil.jpg" alt="image">
                                    <div class="service-info">
                                        <div class="title">
                                            <h4>كوزماجيل</h4>
                                        </div>

                                        <div class="service-price mx-auto">
                                            <a href="index.php" class="addBtn">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <img class="b-logo" src="./imgs/logo-icon.png" alt="logo">
                                <div class="pw-box">
                                    <img src="./imgs/collagen.jpg" alt="image">
                                    <div class="service-info">
                                        <div class="title">
                                            <h4>الكولاجين الذهبي</h4>
                                        </div>

                                        <div class="service-price mx-auto">
                                            <a href="index.php" class="addBtn">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <img class="b-logo" src="./imgs/logo-icon.png" alt="logo">
                                <div class="pw-box">
                                    <img src="./imgs/hab-shabab.jpg" alt="image">
                                    <div class="service-info">
                                        <div class="title">
                                            <h4>كريم ازالة حب الشباب</h4>
                                        </div>

                                        <div class="service-price mx-auto">
                                            <a href="index.php" class="addBtn">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <img class="b-logo" src="./imgs/logo-icon.png" alt="logo">
                                <div class="pw-box">
                                    <img src="./imgs/clavora-white.jpg" alt="image">
                                    <div class="service-info">
                                        <div class="title">
                                            <h4>Clavora White</h4>
                                        </div>

                                        <div class="service-price mx-auto">
                                            <a href="index.php" class="addBtn">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-3 d-flex align-items-center justify-content-center gap-1">
                    <div class="pw-new-prev">
                        <i class="fa-regular fa-circle-right fa-2xl"></i>
                    </div>
                    <div class="pw-new-next"><i class="fa-regular fa-circle-left fa-2xl"></i></div>
                </div>
                <div class="mt-5 text-center">
                    <a href="product.php" class="btnMore text-white text-decoration-none py-2 px-4">المزيد</a>
                </div>
            </div>
        </div>
        </div>

    </section>

    <section id="video-section" class="mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div
                                class="ipad-frame mb-lg-0 d-flex justify-content-center align-items-center mb-4 mb-md-0" data-aos="fade-up" data-aos-duration="1500">
                                <a href="https://www.youtube.com/embed/lnADK3oG900?si=xE-I9KBjIer_N661"
                                    data-fancybox="gallery-video"><i class="fa-solid fa-circle-play"
                                        style="color: #e52710;"></i></a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="text-center">
                                <img class="mb-3" src="./imgs/logo.png" alt="image" style="width: 200px;">
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                                    النص
                                    العربى،
                                    حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف
                                    التى
                                    يولدها
                                    التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد
                                    الفقرات
                                    كما
                                    تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع
                                    على وجه
                                    الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                                </p>
                                <div class="hr mb-4"></div>
                                <a href="product.php" class="btnMore text-decoration-none text-white py-1 px-2">المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="plogs-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center fw-bold position-relative mb-5">المدونة</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-11 col-sm-8 col-md-10">
                    <div class="swiper newSwiper1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="pw-box">
                                    <img src="./imgs/plogs.jpg" alt="image">
                                    <div class="service-info">
                                        <div class="title">
                                            <h4>جونفيار فيدرو Jonviar Fedro</h4>
                                        </div>
                                        <hr>
                                        <p>جونفيار فيدرو Jonviar Fedro -معالج ومخفف الام المفاصل والعظام الم المفاصل
                                            والعظام قد يصعب شرحه خاصة اذا توزع بين الرقبه &#8230; </p>

                                        <div>
                                            <a href="product.php" class="btnMore rounded-pill">المزيد</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="pw-box">
                                    <img src="./imgs/plogs.jpg" alt="image">
                                    <div class="service-info">
                                        <div class="title">
                                            <h4>جونفيار فيدرو-Jonviar fedro</h4>
                                        </div>
                                        <hr>
                                        <p>جونفيار فيدرو-Jonviar fedro معالج ومخفف الام الخشونه والديسك والام الانزلاق
                                            الغضروفي الاول. هو تركيبة غنية بمادة (الجلوكزامين) التي تعمل على &#8230;
                                        </p>

                                        <div>
                                            <a href="product.php" class="btnMore rounded-pill">المزيد</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="pw-box">
                                    <img src="./imgs/plogs.jpg" alt="image">
                                    <div class="service-info">
                                        <div class="title">
                                            <h4>كريم كلافورا- Clavora white</h4>
                                        </div>
                                        <hr>
                                        <p>كريم كلافورا- Clavora white-كريم تفتيح وتبييض البشرة والمناطق الحساسة كريم
                                            التبييض والتفتيح الاول كريم كلافورا تفتيح البشره اليوم هو احد &#8230; </p>

                                        <div>
                                            <a href="product.php" class="btnMore rounded-pill">المزيد</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="pw-box">
                                    <img src="./imgs/plogs.jpg" alt="image">
                                    <div class="service-info">
                                        <div class="title">
                                            <h4>جونفيار فيدرو Jonviar Fedro</h4>
                                        </div>
                                        <hr>
                                        <p>جونفيار فيدرو Jonviar Fedro -معالج ومخفف الام المفاصل والعظام الم المفاصل
                                            والعظام قد يصعب شرحه خاصة اذا توزع بين الرقبه &#8230; </p>

                                        <div>
                                            <a href="product.php" class="btnMore rounded-pill">المزيد</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="pw-box">
                                    <img src="./imgs/plogs.jpg" alt="image">
                                    <div class="service-info">
                                        <div class="title">
                                            <h4>جونفيار فيدرو-Jonviar fedro</h4>
                                        </div>
                                        <hr>
                                        <p>جونفيار فيدرو-Jonviar fedro معالج ومخفف الام الخشونه والديسك والام الانزلاق
                                            الغضروفي الاول. هو تركيبة غنية بمادة (الجلوكزامين) التي تعمل على &#8230;
                                        </p>

                                        <div class="service-price">
                                            <a href="product.php" class="btnMore rounded-pill">المزيد</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-3 d-flex align-items-center justify-content-center gap-1">
                    <div class="pw-new-prev1">
                        <i class="fa-regular fa-circle-right fa-2xl"></i>
                    </div>
                    <div class="pw-new-next1"><i class="fa-regular fa-circle-left fa-2xl"></i></div>
                </div>
                <div class="mt-5 text-center">
                    <a href="plog.php" class="morePlugin text-white text-decoration-none py-2 px-4">المزيد من الاضافات</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- fancybox -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js?ver=5.0.0"></script>
<script>
    Fancybox.bind("[data-fancybox]", {});
</script>


<!-- swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".newSwiper", {
        loop: true,
        centeredSlides: false,
        slidesPerView: 1,
        spaceBetween: 5,

        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },

        navigation: {
            nextEl: ".pw-new-next",
            prevEl: ".pw-new-prev",
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 50,
                centeredSlides: false,
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 70,
                centeredSlides: false,
            },
        },
    });
</script>

<script>
    var swiper1 = new Swiper(".newSwiper1", {
        loop: true,
        centeredSlides: false,
        slidesPerView: 1,
        spaceBetween: 5,

        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },

        navigation: {
            nextEl: ".pw-new-next1",
            prevEl: ".pw-new-prev1",
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 50,
                centeredSlides: false,
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 70,
                centeredSlides: false,
            },
        },
    });
</script>
</main>

<?php include "footer.php"; ?>