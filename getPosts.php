<?php

    $id=$_GET['id'];
    require_once "./admin/tools/phpTools.php";

    $sql="select p.id,p.title,u.nickname,c.name,p.views,p.feature,p.likes,p.content,p.created from
    posts p inner join users u on p.user_id = u.id 
    inner join categories c on p.category_id = c.id  where 
    p.status = 'published' and p.category_id=$id limit 0,10";

    $arr=mysqli_select($sql);

    echo json_encode($arr);
?>