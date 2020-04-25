<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">افزودن دسته بندی</h2>
        </div>
        <div class="col-md-12">
            <form action="index.php?c=procat&a=add" method="post" >
                <div class="p-3 p-lg-5 border">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="c_fname" class="text-black">نام دسته بندی : </label>
                            <input type="text" class="form-control" id="c_fname" name="frm[title]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="c_cat_id" class="text-black">دسته بندی: </label>
                            <select name="frm[chid]" id="c_cat_id" class="text-black form-control">
                                <option value="0">سرگروه</option>
                                <?php foreach ($cat_id as $value):?>
                                <option value="<?php echo $value['title'];?>"><?php echo $value['title'];?></option>
                                <?php endforeach; ?>
                            </select>
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