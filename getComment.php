<?php
    //显示所有评论的数据

    require_once "./admin/tools/phpTools.php";

    $sql2="select c.id,c.author,c.content,p.title,c.created,c.status from 
    comments c inner join posts p on c.post_id = p.id  where 
    c.status != 'trashed' limit 0,10";

    $arr1=mysqli_select($sql2);

    echo json_encode($arr1);
?>