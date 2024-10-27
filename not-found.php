<?php include "header.php"; ?>

<main>
    <section id="bread-section" class="mt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 d-none d-md-block">
                    <nav class="b-crumb" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb p-2">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house"></i></a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">الصفحة غير موجودة
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section id="empty-section" class="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <div class="main text-center mb-5">
                        <p class="number fw-bold">404</p>
                        <p class="not-found text-center">عذرا!! الصفحة المطلوبة غير موجودة</p>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="d-flex flex-column align-items-center flex-md-row justify-content-md-between">
                        <a class="mb-3 text-decoration-none text-dark" href="">
                            <i class="fa-solid fa-house-chimney fa-lg"></i> العودة إلى الرئيسية
                        </a>
                        <form action="">
                            <input class="rounded-pill p-1 text-center border-0" type="search" placeholder="بحث">
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>

<?php include "footer.php"; ?>