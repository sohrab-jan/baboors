<!-- Start Heading Section -->
<div class="site-blocks-cover" style="background-image: url('public/default/images/hero_1.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
                <div class="site-block-cover-content text-center">
                    <h2 class="sub-title">دارو های جدیده همه روزه</h2>
                    <h1>به قالب حرفه ای پزشکی خوش آمدید</h1>
                    <p>
                        <a href="#products" class="btn btn-primary py-3">مشاهده محصولات</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Heading Section -->

<!-- Start Boxes Section -->
<div class="site-section">
    <div class="container">
        <div class="row align-items-stretch section-overlap">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="banner-wrap bg-primary h-100">
                    <a href="#" class="h-100">
                        <h5>ارسال رایگان</h5>
                        <p>
                            به تمامی نقاط کشور
                            <strong>شما برای ارسال محصولات هیچ هزینه ای نمی پردازید.</strong>
                        </p>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="banner-wrap h-100">
                    <a href="#" class="h-100">
                        <h5>تخفیف های فصلی</h5>
                        <p>
                            تا 50% تخفیف
                            <strong>از تخفیف های ویژه فصلی برخوردار شوید.</strong>
                        </p>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="banner-wrap bg-warning h-100">
                    <a href="#" class="h-100">
                        <h5>خرید به صورت آنلاین</h5>
                        <p>
                            بدون محدودیت زمانی
                            <strong>از طریق تمامی کارت های عضو شتاب خرید خود را انجام دهید.</strong>
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Boxes Section -->

<!-- Start Popular Products Section -->
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="title-section text-center col-12">
                <h2 id="products" class="text-uppercase">محصولات پرفروش</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($result as $val): ?>
                <div class="col-sm-6 col-lg-4 text-center item mb-4">
                    <img width="120" src="<?php echo $val['img']?>" alt="Image">
                    <h3 class="text-dark"><a href="index.php?c=pro&a=detail&id=<?php echo $val['id']?>"><?php echo $val['title']?></a></h3>
                    <p class="price"><?php echo $val['price']?></p>
                </div>
            <?php endforeach; ?>

        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="shop.html" class="btn btn-primary py-3">مشاهده همه محصولات</a>
            </div>
        </div>
    </div>
</div>
<!-- End Popular Products Section -->

<!-- Start New Products Section -->
<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="title-section text-center col-12">
                <h2 class="text-uppercase">جدیدترین محصولات</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 block-3 products-wrap">
                <div class="nonloop-block-3 owl-carousel">
                    <div class="text-center item mb-4">
                        <a href="shop-single.html"> <img src="public/default/images/product_03.png" alt="Image"></a>
                        <h3 class="text-dark"><a href="shop-single.html">داروی Umcka Care</a></h3>
                        <p class="price">110 هزار تومان</p>
                    </div>
                    <div class="text-center item mb-4">
                        <a href="shop-single.html"> <img src="public/default/images/product_01.png" alt="Image"></a>
                        <h3 class="text-dark"><a href="shop-single.html">داروی Umcka Cold</a></h3>
                        <p class="price">90 هزار تومان</p>
                    </div>
                    <div class="text-center item mb-4">
                        <a href="shop-single.html"> <img src="public/default/images/product_02.png" alt="Image"></a>
                        <h3 class="text-dark"><a href="shop-single.html">داروی Cold Care</a></h3>
                        <p class="price">190 هزار تومان</p>
                    </div>
                    <div class="text-center item mb-4">
                        <a href="shop-single.html"> <img src="public/default/images/product_04.png" alt="Image"></a>
                        <h3 class="text-dark"><a href="shop-single.html">داروی Umcka Cold Care</a></h3>
                        <p class="price">80 هزار تومان</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End New Products Section -->

<!-- Start Testimonials Section -->
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="title-section text-center col-12">
                <h2 class="text-uppercase">نظرات مشتریان</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 block-3 products-wrap">
                <div class="nonloop-block-3 no-direction owl-carousel">
                    <div class="testimony">
                        <blockquote>
                            <img src="public/default/images/person_1.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                        </blockquote>
                        <p>&mdash; سناء رکنی</p>
                    </div>
                    <div class="testimony">
                        <blockquote>
                            <img src="public/default/images/person_2.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                        </blockquote>
                        <p>&mdash; محمد امین نوبخت</p>
                    </div>
                    <div class="testimony">
                        <blockquote>
                            <img src="public/default/images/person_3.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                        </blockquote>
                        <p>&mdash; مجتبی کلانتری فرد</p>
                    </div>
                    <div class="testimony">
                        <blockquote>
                            <img src="public/default/images/person_4.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                        </blockquote>
                        <p>&mdash; علیرضا آهنگ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonials Section -->

<!-- Start Bottom Banner Section -->
<div class="site-section bg-secondary bg-image" style="background-image: url('public/default/images/bg_2.jpg');">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('public/default/images/bg_1.jpg');">
                    <div class="banner-1-inner align-self-center">
                        <h2>محصولات تخصصی</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0">
                <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('public/default/images/bg_2.jpg');">
                    <div class="banner-1-inner ml-auto  align-self-center">
                        <h2>مورد تایید متخصصان</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End Bottom Banner Section -->
