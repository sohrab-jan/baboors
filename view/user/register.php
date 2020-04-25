<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">ثبت نام</h2>
        </div>
        <div class="col-md-12">
            <form action="index.php?c=user&a=register" method="post">
                <div class="p-3 p-lg-5 border">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="c_fname" class="text-black">نام کاربری : <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_fname" name="frm[username]">
                        </div>
                        <div class="col-md-12">
                            <label for="c_lname" class="text-black">رمز عبور: <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" id="c_lname" name="frm[password]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="c_email" class="text-black">ایمیل : <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="c_email" name="frm[email]" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="c_email" class="text-black">نام: <span class="text-danger">*</span></label>
                            <input type="name" class="form-control" id="c_email" name="frm[name]" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" name="btn" value="ارسال پیام">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>