<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">افزودن محصولات</h2>
        </div>
        <div class="col-md-12">
            <form action="index.php?c=pro&a=add" method="post" enctype="multipart/form-data">
                <div class="p-3 p-lg-5 border">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="c_fname" class="text-black">نام محصول : </label>
                            <input type="text" class="form-control" id="c_fname" name="frm[title]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="c_lname" class="text-black">توضیحات : </label>
                            <textarea type="text" class="form-control col-md-6" id="c_lname" name="frm[text]"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="c_email" class="text-black">تعداد : </label>
                            <input type="text" class="form-control" id="c_email" name="frm[count]" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="c_price" class="text-black">قیمت: </label>
                            <input type="text" class="form-control" id="c_price" name="frm[price]" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="c_cat_id" class="text-black">دسته بندی: </label>
                            <select name="frm[cat_id]" id="c_cat_id" class="text-black form-control">
                                    <option value="0">سرگروه</option>
                                <?php foreach ($procat_main as $val): ?>
                                    <option value="<?php echo $val['id']?>"><?php echo $val['title']?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="c_img" class="text-black">تصویر: </label>
                            <input type="file" class="form-control " id="c_img" name="img" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" name="btn" value="ارسال پیام">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>