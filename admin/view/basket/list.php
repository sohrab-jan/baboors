
<table class=" table table-striped border-top" id="sample_1">
    <thead>
    <tr>
        <th width="90">ردیف</th>
        <th width="800">محصول</th>
        <th width="800">نام کاربر</th>
        <th width="800">قیمت</th>
        <th width="800">تصویر</th>
        <th width="200">ویرایش</th>
        <th width="200">حذف</th>
    </tr>
    </thead>
    <tbody>
    <?php
    include_once '../admin/model/Mpro.php';
    include_once '../admin/model/Muser.php';
    foreach ($resuult as $key=> $value){
    $pro=new pro();
    $user=new user();
    $product=$pro->pro_detail($value['pro_id']);
    $user_name=$user->user_name($value['user_id']);
    ?>
        <tr class="odd gradeX">
            <td><?php echo $key+1?></td>
            <td><?php echo $product['title']?> </td>
            <td><?php echo $user_name['name']?> </td>
            <td><?php echo $product['count']?> </td>
            <td><?php echo $product['price']?> </td>
            <td><img src="../<?php echo $value['img']?>" width="50" src="" alt=""></td>
            <td class="hidden-phone"><a class="btn btn-warning" type="btn" href="index.php?c=pro&a=edit&id=<?php echo $value['id']?>">ویرایش</a></td>
            <td class="hidden-phone"><a class="btn btn-danger" type="btn" href="index.php?c=pro&a=delete&id=<?php echo $value['id']?>">حذف</a></td>
        </tr>
    <?php  }?>
    </tbody>
</table>
