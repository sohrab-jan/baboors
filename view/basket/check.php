
<!-- Start Breadcrumb Section -->
<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0">
                <a href="index.html">صفحه نخست</a> <span class="mx-2 mb-0">/</span>
                <strong class="text-black">سبد خرید</strong>
            </div>
        </div>
    </div>
</div>
<!-- Start Breadcrumb Section -->

<!-- Start Cart Section -->
<div class="site-section">
    <div class="container">
        <div class="row mb-5">
            <form class="col-md-12" method="post">
                <div class="site-blocks-table">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="product-thumbnail">تصویر</th>
                            <th class="product-name">محصول</th>
                            <th class="product-price">قیمت</th>
                            <th class="product-quantity">تعداد</th>
                            <th class="product-total">مجموع</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        require_once "admin/model/Mpro.php";
                        require_once "admin/model/Mbasket.php";
                        $pro=new pro();
                        $basekt=new basket();
                        $count=count($basekt->basket_list_count($_SESSION['user_id']));
                        //                            echo $count;
                        if($count==0){echo 'سبد خرید شما خالی می باشد.' ;}else{

                            foreach ($result as $value):
                                $res=$pro->basket_list($value['pro_id']);
//                        var_dump($res);die('dd');
//                            var_dump($count);
                                ?>
                                <tr>
                                    <td class="product-thumbnail">
                                        <img src="<?php echo $res['img'];?>" alt="Image" class="img-fluid">
                                    </td>
                                    <td class="product-name">
                                        <h2 class="h5 text-black"><?php echo $res['title'];?></h2>
                                    </td>
                                    <td><?php echo $res['price'];?>
                                        <input class='price' type="text" value="<?php echo $res['price'] ?>"style="display: none;" />
                                    </td>
                                    <td>
                                        <div class="input-group mb-3 " style="max-width: 120px;">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                                            </div>
                                            <!--                                            <div class="quantity-inp">-->
                                            <input type="text"  class="form-control text-center " value="1" placeholder=""
                                                   aria-label="Example text with button addon" aria-describedby="button-addon1">
                                            <!--                                            </div>-->
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                                            </div>
                                        </div>
                                    </td>
                                    <div class="main-price">
                                        <td><?php echo( $res['price']*$value['tedad']);?> تومان</td>
                                    </div>

                                </tr>
                            <?php endforeach;
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>

        <div class="row">

            <div class="col-md-10 pl-5">
                <div class="row justify-content-end">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-12 text-right border-bottom mb-5 sum">
                                <span>تومان</span>
                                <h3 class="text-black h4 text-uppercase">جمع فاکتور</h3>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <span class="text-black">جمع مبلغ:</span>
                            </div>
                            <?php
                            //                            var_dump($_SESSION['user_id']);
                            $resss=$pro->basket_list_pro($_SESSION['user_id']);
                            foreach ($resss as $val){
//                            var_dump($resss);die();
                                @$total+=$val['price'];
                            }
                            echo number_format($total);
                            ?>
                            <div class="col-md-6 text-right">
                                <!--                                <strong class="text-black">--><?php //echo $total;?><!--</strong>-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="index.php?c=basket&a=pay" class="btn btn-primary btn-lg btn-block" onclick="window.location='checkout.html'">پرداخت و تکمیل خرید</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Cart Section-->
