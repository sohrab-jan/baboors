
<!-- Start Breadcrumb Section -->
<div class="bg-light py-3">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-0"><a href="index.html">صفحه نخست</a> <span class="mx-2 mb-0">/</span> <a href="shop.html">محصولات</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">داروی Ibuprofen Tablets, 200mg</strong></div>
		</div>
	</div>
</div>
<!-- End Breadcrumb Section -->

<!-- Start Product Content Section -->
<div class="site-section">
	<div class="container">
		<div class="row">
			<div class="col-md-5 mr-auto">
				<div class="border text-center">
					<img src="<?php echo $result['img'];?>" alt="Image" class="img-fluid p-5">
				</div>
			</div>
			<div class="col-md-6">
				<h2 class="text-black"><?php echo $result['title'];?></h2>
				<p><?php echo $result['text'];?></p>
				<p><del>95 هزار تومان</del>  <strong class="text-primary h4"><?php echo $result['price'];?> هزار تومان</strong></p>

				<div class="mb-5">
					<div class="input-group mb-3" style="max-width: 220px;">
						<div class="input-group-prepend">
							<button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
						</div>
						<input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
						<div class="input-group-append">
							<button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
						</div>
					</div>
				</div>
				<p><a href="index.php?c=basket&a=add&pro_id=<?php echo $result['id'];?>" class="buy-now btn btn-sm height-auto py-3 btn-primary">افزودن به سبد خرید</a></p>
				<div class="mt-5">
					<ul class="nav nav-pills mb-3 custom-pill" id="pills-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">جزئیات محصول</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">مشخصات ثبت</a>
						</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
							<table class="table custom-table">
								<thead>
								<th>ترکیب</th>
								<th>توضیحات</th>
								<th>بسته بندی</th>
								</thead>
								<tbody>
								<tr>
									<th scope="row">OTC022401</th>
									<td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</td>
									<td>1 BT</td>
								</tr>
								<tr>
									<th scope="row">OTC022401</th>
									<td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</td>
									<td>144/CS</td>
								</tr>
								<tr>
									<th scope="row">OTC022401</th>
									<td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</td>
									<td>1 EA</td>
								</tr>

								</tbody>
							</table>
						</div>
						<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
							<table class="table custom-table">
								<tbody>
								<tr>
									<td>شماره ثبت محصول</td>
									<td class="bg-light">999_200_40_0</td>
								</tr>
								<tr>
									<td>فروش تنها با نسخه</td>
									<td class="bg-light">خیر</td>
								</tr>
								<tr>
									<td>نگهدار یدر یخچال</td>
									<td class="bg-light">بله</td>
								</tr>
								<tr>
									<td>نوع ساخت</td>
									<td class="bg-light">تخصصی</td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Product Content Section -->

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