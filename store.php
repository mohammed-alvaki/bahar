<?php include "header.php"; ?>

<main>
    <section id="store-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 d-none d-md-block">
                    <nav class="b-crumb mb-5" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb p-2">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house"></i></a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">المتجر</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12 col-lg-11">
                    <div class="row">
                        <div class="col-3 d-none d-lg-block">
                            <div class="form-part p-2 pt-4">
                                <form action="">
                                    <input class="w-75" type="text" placeholder="البحث عن منتجات...">
                                    <button class="btnSearch bg-secondary text-white">بحث</button>

                                    <h3 class="side-title mt-4">تصنيفات المنتج</h3><select name='product_cat'
                                        id='product_cat' class='w-100'>
                                        <option selected disabled hidden>حدد التصنيف</option>
                                        <option value="uncategorized">Uncategorized</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="title text-center fw-bold">المتجر</h2>
                                    <div class="hr mb-4"></div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex flex-column flex-sm-row justify-content-between mb-4">
                                        <p>عرض 1–6 من أصل 11 نتيجة</p>
                                        <form class="woocommerce-ordering" method="get">
                                            <select name="orderby" class="orderby" aria-label="نظام المتجر">
                                                <option value="menu_order" selected='selected'>الترتيب الافتراضي
                                                </option>
                                                <option value="popularity">ترتيب حسب الشهرة</option>
                                                <option value="rating">ترتيب حسب معدل التقييم</option>
                                                <option value="date">ترتيب حسب الأحدث</option>
                                                <option value="price">ترتيب حسب: الأدنى سعراً للأعلى</option>
                                                <option value="price-desc">ترتيب حسب: الأعلى سعراً للأدنى</option>
                                            </select>
                                            <input type="hidden" name="paged" value="1" />
                                        </form>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="product mb-4">
                                                <a class="w-100" href="product.php"><img class="w-100"
                                                        src="./imgs/calrybelle.jpeg" alt="image"></a>
                                                <div class="det p-3 text-center">
                                                    <h4>Calrybelle</h4>
                                                    <a class="btnMore rounded-pill px-3 fw-bold" href="product.php">اقرأ
                                                        المزيد</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product mb-4">
                                                <a class="w-100" href="product.php"><img class="w-100"
                                                        src="./imgs/clavora-white.jpg" alt="image"></a>
                                                <div class="det p-3 text-center">
                                                    <h4>Clavora White</h4>
                                                    <a class="btnMore rounded-pill px-3 fw-bold" href="product.php">اقرأ
                                                        المزيد</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product mb-4">
                                                <a class="w-100" href="product.php"><img class="w-100"
                                                        src="./imgs/collagen.jpg" alt="image"></a>
                                                <div class="det p-3 text-center">
                                                    <h4>الكولاجين الذهبي</h4>
                                                    <a class="btnMore rounded-pill px-3 fw-bold" href="product.php">اقرأ
                                                        المزيد</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product mb-4">
                                                <a class="w-100" href="product.php"><img class="w-100"
                                                        src="./imgs/pousse-growing.jpg" alt="image"></a>
                                                <div class="det p-3 text-center">
                                                    <h4>بوسي السيروم</h4>
                                                    <a class="btnMore rounded-pill px-3 fw-bold" href="product.php">اقرأ
                                                        المزيد</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product mb-4">
                                                <a class="w-100" href="product.php"><img class="w-100"
                                                        src="./imgs/black-castro-oil.jpg" alt="image"></a>
                                                <div class="det p-3 text-center">
                                                    <h4>زيت تكثيف الرموش</h4>
                                                    <a class="btnMore rounded-pill px-3 fw-bold" href="product.php">اقرأ
                                                        المزيد</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex justify-content-center mt-4">
                                                <nav aria-label="...">
                                                    <ul class="pagination pagination-sm">
                                                        <li class="page-item active"><a class="page-link" href="#"
                                                                aria-current="page">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#">&larr;</a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<?php include "footer.php"; ?>