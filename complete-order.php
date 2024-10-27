<?php include "header.php"; ?>

<main>
    <section id="complete-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <nav class="b-crumb" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb p-2">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house"></i></a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">سلة المشتريات</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12 col-lg-11">
                    <h2 class="title text-center fw-bold">سلة المشتريات</h2>
                    <div class="hr mb-4"></div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <div class="basket p-3 pb-5 myRow">
                        <div class="warning rounded-pill d-flex align-items-center p-3 mb-5 bg-light">
                            <div class="pref mx-2"></div>
                            <div>سلة مشترياتك فارغة حاليًا.</div>
                        </div>
                        <a class="back fw-bold py-1 px-2 text-decoration-none text-dark bg-ligh" href="store.php">العودة إلى
                            المتجر
                        </a>
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