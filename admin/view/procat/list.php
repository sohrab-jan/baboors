
<table class=" table table-striped border-top" id="sample_1">
    <thead>
    <tr>
        <th width="90">ردیف</th>
        <th width="800">عنوان دسته بندی</th>
        <th width="200">ویرایش</th>
        <th width="200">حذف</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($result as $key=>$value) {?>
        <tr class="odd gradeX">
            <td><?php echo $key+1?></td>
            <td><?php echo $value['title']?> </td>
            <td class="hidden-phone"><a class="btn btn-warning" type="btn" href="index.php?c=procat&a=edit&id=<?php echo $value['id']?>">ویرایش</a></td>
            <td class="hidden-phone"><a class="btn btn-danger" type="btn" href="index.php?c=procat&a=delete&id=<?php echo $value['id']?>">حذف</a></td>
        </tr>
    <?php  }?>
    </tbody>
</table>
