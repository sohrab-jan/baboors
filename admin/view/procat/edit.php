<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">افزودن محصولات</h2>
        </div>
        <div class="col-md-12">
            <form action="index.php?c=procat&a=edit&id=<?php echo $res['id']; ?>" method="post" enctype="multipart/form-data">
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
                            <label for="c_cat_id" class="text-black">دسته بندی: </label>
                            <select name="frm[chid]" id="c_cat_id" class="text-black form-control">
<!--                                <option value="--><?php //echo $res['id']?><!--">--><?php //echo $res['title']?><!--</option>-->
                                <?php foreach ($list_procat as $val): ?>
                                    <option value="<?php echo $val['id']; ?>"><?php echo $val['title']; ?></option>
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