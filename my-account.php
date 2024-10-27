<?php include "header.php"; ?>

<main>
    <section id="account-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <nav class="b-crumb" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb p-2">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house"></i></a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">حسابي</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12 col-lg-11">
                    <h2 class="title text-center fw-bold mb-3">حسابي</h2>
                    <div class="hr mb-4"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <div class="row justify-content-center gx-0">
                        <div class="col-12">
                            <div class="myRow p-4 pb-5">
                                <div class="error p-3 mb-3 position-relative d-none">
                                    <p class="ms-4 mb-0"><strong>خطأ: </strong>اسم المستخدم <strong>mohammed alvaki </strong>غير مسجّل على هذا الموقع. إذا لم تكن متأكدًا من اسم المستخدم الخاص بك، فجرّب عنوان بريدك الإلكتروني بدلاً من ذلك</p>
                                </div>
                                <h2 class="mb-3">تسجيل الدخول</h2>
                                <form class="p-3" action="">
                                    <div class="mb-3 text-center">
                                        <label class="mb-2 fw-bold" for="">اسم المستخدم أو البريد الإلكتروني *</label><br>
                                        <input class="w-100 py-1" type="text">
                                    </div>
                                    <div class="mb-3 text-center"><label class="mb-2 fw-bold" for="">كلمة المرور *
                                        </label><br>
                                        <div class="password-container position-relative">
                                            <input class="password w-100 py-1" type="password">
                                            <span class="eye"><i class="fa-solid fa-eye"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <button class="btnSubmit fw-bold text-white text-start d-block p-1" type="submit">تسجيل الدخول</button>
                                        <div class="mx-auto"><input type="checkbox" id="remember"> <label class="fw-bold" for="remember">تذكرني</label></div>
                                    </div>
                                    <a href="forgot-password.php" class="text-decoration-none text-primary">نسيت كلمة مرورك؟</a>
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

<script>
    const eye = document.querySelector('.eye i');
    const passwordInput = document.querySelector(".password");

    eye.addEventListener('click', (event) => {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eye.classList.add('fa-eye-slash');
            eye.classList.remove('fa-eye');
        } else {
            passwordInput.type = 'password';
            eye.classList.remove('fa-eye-slash');
            eye.classList.add('fa-eye');
        }
    });
</script>

<?php include "footer.php"; ?>