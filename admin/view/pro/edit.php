<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">افزودن محصولات</h2>
        </div>
        <div class="col-md-12">
            <form action="index.php?c=pro&a=edit&id=<?php echo $res['id']; ?>" method="post" enctype="multipart/form-data">
                <?php
                //                foreach ($res as $value):
                ?>
                <div class="p-3 p-lg-5 border">

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="c_fname" class="text-black">نام محصول : </label>
                            <input type="text" class="form-control" id="c_fname" name="frm[title]" value="<?php echo $res['title']?>" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="c_lname" class="text-black">توضیحات : </label>
                            <textarea type="text" class="form-control col-md-6" id="c_lname" name="frm[text]" ><?php echo $res['text']?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="c_email" class="text-black">تعداد : </label>
                            <input type="text" class="form-control" id="c_email" name="frm[count]" value="<?php echo $res['count']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="c_price" class="text-black">قیمت: </label>
                            <input type="text" class="form-control" id="c_price" name="frm[price]" value="<?php echo $res['price']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="c_cat_id" class="text-black">دسته بندی: </label>
                            <select name="frm[cat_id]" id="c_cat_id" class="text-black form-control">
<!--                                <option value="0">سرگروه</option>-->
                                <?php foreach ( $procat_main as $value): ?>
                                    <option value="<?php echo $value['id']?>"><?php echo $value['title']?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="c_img" class="text-black">تصویر: </label>
                            <input type="file" class="form-control " id="c_img" name="img" >
                            <img src="../<?php echo $res['img'] ?>" width="50" alt="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" name="btn" value="ارسال پیام">
                        </div>
                    </div>
                </div>
                <!--                --><?php //endforeach; ?>
            </form>
        </div>
    </div>
</div>