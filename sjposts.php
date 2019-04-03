<?php
    //显示所有文章的数据

    require_once "./admin/tools/phpTools.php";
    //查询分页的文章（没被删除的）
    $sql="select p.id,p.title,u.nickname,c.name,p.views,p.feature from
    posts p inner join users u on p.user_id = u.id 
    inner join categories c on p.category_id = c.id  where 
    p.status = 'published' limit 0,5";

    $arr=mysqli_select($sql);

    echo json_encode($arr);
?>