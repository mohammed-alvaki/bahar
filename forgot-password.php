<?php include "header.php"; ?>

<main>
    <section id="forgot-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <nav class="b-crumb" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb p-2">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house"></i></a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">حسابي </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12 col-lg-11">
                    <h2 class="title text-center fw-bold mb-3">نسيت كلمة المرور</h2>
                    <div class="hr mb-4"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <div class="row justify-content-center gx-0">
                        <div class="col-12">
                            <div class="p-4 myRow">
                                <div class="error p-3 position-relative mb-4 d-none">
                                    <p class="ms-4 mb-0">اسم مستخدم أو بريد إلكتروني غير صحيح</p>
                                </div>
                                <p>نسيت كلمة مرورك؟ فضلًا أدخل اسم المستخدم أو البريد الإلكتروني المسجل لدينا. سوف تستلم رابطاً لإنشاء كلمة مرور جديدة عبر بريدك الإلكتروني.

                                </p>
                                <form class="" action="">
                                    <div class="email text-center bg-white p-3 mb-3">
                                        <label class="mb-2" for="">اسم المستخدم أو البريد الإلكتروني *</label><br>
                                        <input class="w-100 py-1" type="text">
                                    </div>
                                    <button class="btnReset py-1 px-3 text-white fw-bold d-block mx-auto">إعادة تعيين كلمة المرور</button>
                                </form>
                            </div>
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