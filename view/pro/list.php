<!-- Start Breadcrumb Section -->
<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0"><a href="index.html">صفحه نخست</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">محصولات</strong></div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Section -->
<!-- Start Filters Section -->
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">فیلتر بر اساس قیمت</h3>
                <div id="slider-range" class="border-primary"></div>
                <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
            </div>
            <div class="col-lg-3">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">فیلتر بر اساس شرکت سازنده</h3>
                <button type="button" class="btn btn-secondary btn-md dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">شرکت سازنده</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                    <a class="dropdown-item" href="#">شرکت اول</a>
                    <a class="dropdown-item" href="#">شرکت دوم</a>
                    <a class="dropdown-item" href="#">شرکت سوم</a>
                </div>
            </div>
        </div>
        <?php foreach ($result as $value): ?>
        <div class="row">
            <div class="col-sm-6 col-lg-4 text-center item mb-4">
                <a href="shop-single.html"> <img width="180" src="<?php echo $value['img'];?>" alt="Image"></a>
                <h3 class="text-dark"><a href="index.php?c=pro&a=detail&id=<?php echo $value['id'];?>"><?php echo $value['title'];?></a></h3>
                <p class="price"><del>95 هزار تومان</del><?php echo $value['price'];?></p>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <div class="site-block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Filters Section -->


<div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
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
