
<table class=" table table-striped border-top" id="sample_1">
    <thead>
    <tr>
        <th width="90">ردیف</th>
        <th width="800">نام کاربر</th>
        <th width="800">موضوع</th>
        <th width="800">متن </th>
        <th width="800">ایمیل</th>
<!--        <th width="800">تصویر</th>-->
<!--        <th width="200">ویرایش</th>-->
<!--        <th width="200">حذف</th>-->
    </tr>
    </thead>
    <tbody>
    <?php

//    include_once '../admin/model/Mcontact.php';
    foreach ($ress as $key=>$value) {
//        var_dump($ress);die();
        ?>

        <tr class="odd gradeX">
            <td><?php echo $key+1;?></td>
            <td><?php echo $value['username'];?> </td>
            <td><?php echo $value['subject']?> </td>
            <td><?php echo $value['text']?> </td>
            <td><?php echo $value['email']?> </td>
<!--            <td>--><?php //echo $value['price']?><!-- </td>-->
<!--            <td><img src="../--><?php //echo $value['img']?><!--" width="50" src="" alt=""></td>-->
<!--            <td class="hidden-phone"><a class="btn btn-warning" type="btn" href="index.php?c=pro&a=edit&id=--><?php //echo $value['id']?><!--">ویرایش</a></td>-->
<!--            <td class="hidden-phone"><a class="btn btn-danger" type="btn" href="index.php?c=pro&a=delete&id=--><?php //echo $value['id']?><!--">حذف</a></td>-->
        </tr>
    <?php  }?>
    </tbody>
</table>
