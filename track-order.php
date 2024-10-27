<?php include "header.php"; ?>

<main>
    <section id="track-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <nav class="b-crumb" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb p-2">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house"></i></a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page"> تتبع الطلب</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12 col-lg-11">
                    <h2 class="title text-center fw-bold">تتبع الطلب</h2>
                    <div class="hr mb-4"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <div class="row gx-0">
                        <div class="col-12">
                            <form class="myRow p-4" action="" method="post">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="error mb-3  p-3 text-secondary bg-light d-none">
                                            <i class="fa-solid fa-circle-exclamation me-3" style="color: #E60023;"></i>
                                            رجاء
                                            أدخل
                                            رقم
                                            طلب صحيح
                                        </div>
                                        <p>فضلًا أدخل رقم طلبك في الصندوق أدناه وأضغط زر لتتبعه "تتبع الطلب" لعرض حالته.
                                            بإمكانك
                                            العثور
                                            على رقم الطلب في البريد المرسل إليك والذي يحتوي على فاتورة تأكيد الطلب.
                                        </p>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="entry bg-white p-3 mb-3 mb-md-0">
                                            <h4 class="text-center mb-2">رقم الطلب</h4>
                                            <input class="p-1  w-100" type="text"
                                                placeholder="ستجده في رسالة تأكيد طلبك">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="entry p-3 bg-white">
                                            <h4 class="text-center mb-2">البريد الإلكتروني للفاتورة</h4>
                                            <input class="mail p-1 w-100" type="email"
                                                placeholder="البريد الالكتروني الذي استخدمته أثناء اتمام الطلب"
                                                dir="rtl">
                                        </div>
                                    </div>

                                    <a class="btnTrack p-2 d-block mx-auto text-decoration-none text-white fw-bold mt-4"
                                        href="track-order.php">تتبع
                                        الطلب</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <div class="social-media d-flex justify-content-end align-items-center gap-1 mt-4">
                        <a class="share d-none d-md-flex me-2">
                            <i class="fa-solid fa-share-nodes"></i>
                        </a>
                        <a href="https://www.facebook.com" class="facebook">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="https://www.x.com" class="twitter">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com" class="linkedin">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a href="https://www.pinterest.com" class="pinterest">
                            <i class="fa-brands fa-pinterest"></i>
                        </a>
                        <a href="https://www.whatsapp.com" class="whatsapp">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include "footer.php"; ?>